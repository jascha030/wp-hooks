<?php

declare(strict_types=1);

namespace Jascha030\Hooks\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
abstract class HookAttributeAbstract
{
    public function __construct(
        private string $tag,
        private int $prio = 10
    ) {
    }

    abstract public function add(callable|\Closure $callable, int $acceptedArgs): void;

    public function getTag(): string
    {
        return $this->tag;
    }

    public function getPrio(): int
    {
        return $this->prio;
    }

    protected function assertClosure(callable|\Closure $callable): \Closure
    {
        return $callable instanceof \Closure
            ? $callable
            : \Closure::fromCallable($callable);
    }
}
