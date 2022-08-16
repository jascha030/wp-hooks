<?php

declare(strict_types=1);

namespace Jascha030\Hooks;

final class Action implements HookInterface
{
    use CallablesTrait;

    /**
     * @return callable
     */
    private function getMethod(): string
    {
        return 'add_action';
    }
}
