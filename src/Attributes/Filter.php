<?php

declare(strict_types=1);

namespace Jascha030\Hooks\Attributes;

use Attribute;
use Closure;
use Jascha030\Hooks\WordPress\AssertClosureTrait;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
final class Filter extends HookAttributeAbstract
{
    use AssertClosureTrait;

    public function add(callable|Closure $callable, int $acceptedArgs): void
    {
        \Jascha030\Hooks\WordPress\Filter::add(
            $this->getTag(),
            $this->assertClosure($callable),
            $this->getPrio(),
            $acceptedArgs
        );
    }
}
