<?php

declare(strict_types=1);

namespace Jascha030\Hooks\WordPress;

use Closure;

interface HookInterface
{
    public static function add(
        string $tag,
        callable|Closure $callable,
        int $prio = 10,
        int $acceptedArgs = 1
    ): void;
}
