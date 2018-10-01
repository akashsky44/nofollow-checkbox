<?php
/**
 * Plugin Name: Nofollow Checkbox
 * Plugin URI:  https://github.com/akashsky44/
 * Description: This plugin adds a simple checkbox in the insert/edit link popup for including nofollow attribute.
 * Version:     1.0
 * Author:      Akash Kumar
 * Author URI:  http://www.akashkumar.info
 */
function overwrite_wplink()
{
    // Disable wplink
    wp_deregister_script('wplink');

    // Register a new script file to be linked
    wp_register_script('wplink', plugins_url('wplink.js', __FILE__), array( 'jquery', 'wpdialogs' ), false, 1);

    wp_localize_script('wplink', 'wpLinkL10n', array('title' => __('Insert/edit link'), 'update' => __('Update'), 'save' => __('Add Link'), 'noTitle' => __('(no title)'), 'noMatchesFound' => __('No matches found.') ));
}
add_action('admin_enqueue_scripts', 'overwrite_wplink', 999);
