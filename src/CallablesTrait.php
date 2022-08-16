<?php

declare(strict_types=1);

namespace Jascha030\Hooks;

trait CallablesTrait
{
    public static function add(
        string $tag,
        callable|\Closure $callable,
        int $prio = 10,
        int $acceptedArgs = 1
    ): void {
        (new static())->callback($tag, $callable, $prio, $acceptedArgs);
    }

    abstract private function getMethod(): string;

    private function callback(string $tag, callable|\Closure $callable, int $prio = 10, int $acceptedArgs = 1): void
    {
        $closure = $this->getCallable();

        $closure($tag, $callable, $prio, $acceptedArgs);
    }

    private function getCallable(): callable
    {
        if (! function_exists($this->getMethod())) {
            return $this->getProxyCallable();
        }

        return $this->assertClosure($this->getMethod());
    }

    private function assertClosure(callable|\Closure $callable): \Closure
    {
        return $callable instanceof \Closure
            ? $callable
            : \Closure::fromCallable($callable);
    }

    private function getProxyCallable(): \Closure
    {
        return static function (
            string $tag,
            callable|\Closure $callable,
            int $prio = 10,
            int $acceptedArgs = 1
        ): void {
        };
    }
}
