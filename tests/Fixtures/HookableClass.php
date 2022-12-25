<?php

declare(strict_types=1);

namespace Jascha030\Hooks\Fixtures;

use Jascha030\Hooks\Attributes\Action;
use Jascha030\Hooks\Attributes\Filter;
use Jascha030\Hooks\Attributes\HookableTrait;

final class HookableClass
{
    use HookableTrait;

    #[Action('init', 10)]
    public function testAction(): void
    {
        echo 'test';
    }

    #[Filter('the_content', 10)]
    public function testFilter(string $content): string
    {
        $content .= ' test.';

        return $content;
    }
}
