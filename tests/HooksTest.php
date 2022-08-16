<?php

declare(strict_types=1);

namespace Jascha030\Hooks\Tests;

use Jascha030\Hooks\Action;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Jascha030\Hooks\Action
 * @covers \Jascha030\Hooks\Filter
 *
 * @internal
 */
final class HooksTest extends TestCase
{
    private static string $expected = 'test 10 0 test';

    public static function setUpBeforeClass(): void
    {
        include __DIR__ . '/proxy.php';
    }

    public function testAdd(): void
    {
        ob_start();
        Action::add('test', static fn (string $out) => $out, 10, 0);
        self::assertEquals(self::$expected, ob_get_clean());

        ob_start();
        Action::add('test', static fn (string $out) => $out, 10, 0);
        self::assertEquals(self::$expected, ob_get_clean());
    }
}
