<?php
/**
 * Plugin Name: Directorist Settings Tools
 * Description: Removes the extra space above Directorist Settings caused by empty admin notice wrappers.
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 */

defined( 'ABSPATH' ) || exit;

add_action(
    'admin_head',
    static function () {
        $screen = get_current_screen();

        if ( ! $screen || 'at_biz_dir_page_atbdp-settings' !== $screen->id ) {
            return;
        }
        ?>
        <style id="directorist-settings-tools-css">
            body.directorist-settings-redesign-page #wpbody-content > .wrap:empty {
                display: none;
            }
        </style>
        <?php
    }
);
