<?php

declare(strict_types=1);

/**
 * Test Plugin
 *
 * @package SocialBrothers
 * @version 0.0.1
 *
 * @author  Social Brothers <backend@socialbrothers.nl>
 *
 * @wordpress-plugin
 * Plugin Name:       Test Plugin
 * Plugin URI:        https://wpbrothers.nl
 * Description:       Test
 * Version:           0.0.1
 * Requires PHP:      8.0.2
 * Author:            Social Brothers
 * Author URI:        https://socialbrothers.nl/
 * Update URI:        false
 */

use Jascha030\Hooks\Fixtures\HookableClass;

defined('ABSPATH') || exit('Forbidden.');

function plugins_loaded(): void
{
    $class = new HookableClass();
}

add_action('plugins_loaded', 'plugins_loaded');
