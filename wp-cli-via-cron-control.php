<?php
/**
 * Plugin Name:     WP-CLI Via Cron Control
 * Plugin URI:      https://automattic.com/
 * Description:     Schedule WP-CLI tasks to run via Cron Control
 * Author:          Erick Hitter, Automattic
 * Author URI:      https://vip.wordpress.com/
 * Text Domain:     wp-cli-via-cron-control
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         WP_CLI_Cron_Control_Offload
 */

namespace Automattic\WP\WP_CLI_Cron_Control_Offload;

const ACTION = 'wp_cli_cron_control_offload';

require_once __DIR__ . '/includes/schedule.php';
require_once __DIR__ . '/includes/run.php';
