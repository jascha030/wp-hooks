<?php

declare(strict_types=1);

namespace Jascha030\Hooks;

/**
 * @internal
 */
trait CallablesTrait
{
    use AssertClosureTrait;

    /**
     * @noinspection PhpUnusedPrivateMethodInspection
     *
     * @return callable
     */
    abstract private function getMethod(): string;

    /**
     * Wraps implementation of this Trait in static method,.
     *
     * Basically denoting that the implementing class,
     * shouldn't be much more than just an implementation of this Trait.
     */
    public static function add(
        string $tag,
        callable|\Closure $callable,
        int $prio = 10,
        int $acceptedArgs = 1
    ): void {
        (new static())->callback($tag, $callable, $prio, $acceptedArgs);
    }

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
