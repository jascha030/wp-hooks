<?php

namespace Jascha030\Hooks\Tests;

use Jascha030\Hooks\Action;
use Jascha030\Hooks\Filter;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Jascha030\Hooks\Attributes\Action
 * @covers \Jascha030\Hooks\Attributes\Filter
 *
 * @internal
 */
final class HooksFallbackTest extends TestCase
{
    public function testAddFallback(): void
    {
        ob_start();
        Action::add('test', static fn (string $out) => $out, 10, 0);
        self::assertEquals('', ob_get_clean());

        ob_start();
        Filter::add('test', static fn (string $out) => $out, 10, 0);
        self::assertEquals('', ob_get_clean());
    }
}
