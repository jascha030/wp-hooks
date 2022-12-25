<?php

declare(strict_types=1);

namespace Jascha030\Hooks\WordPress;

use Closure;

/**
 * @internal
 */
trait AssertClosureTrait
{
    private function assertClosure(callable|Closure $callable): Closure
    {
        return $callable instanceof Closure
            ? $callable
            : Closure::fromCallable($callable);
    }
}
