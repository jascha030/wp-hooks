<?php

/** @noinspection PhpOverridingMethodVisibilityInspection */

declare(strict_types=1);

namespace Jascha030\Hooks;

use Jascha030\Hooks\WordPress\Action;
use Jascha030\Hooks\WordPress\Filter;
use WP_Mock;
use WP_Mock\Tools\TestCase;
use function apply_filters;
use function do_action;
use function PHPUnit\Framework\assertEquals;

/**
 * @covers \Jascha030\Hooks\WordPress\Action
 * @covers \Jascha030\Hooks\WordPress\Filter
 *
 * @internal
 */
final class HooksTest extends TestCase
{
    private static string $expected = 'test input test reply';

    public function setUp(): void
    {
        WP_Mock::setUp();
    }

    public function tearDown(): void
    {
        WP_Mock::tearDown();
    }

    public function testAdd(): void
    {
        WP_Mock::onFilter('test')
               ->with('test input')
               ->reply(self::$expected);

        Filter::add(
            'test',
            static fn(string $input): string => $input . ' test reply',
            10,
            0
        );

        assertEquals(
            self::$expected,
            apply_filters('test', 'test input')
        );
    }
}
