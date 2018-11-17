<?php

/*
Plugin Name: Remove Profile Fields
Plugin URI: https://github.com/nwcybersolutions/Remove-Profile-Fields
Description: Removes Extra Fields to User Profile, Registration, and Backend Users Page
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove Profile Fields
Domain Path: /languages
*/
/*
 * Removes Redundant Profile Fields
 */
function remove_redundant_profile_fields()
{
    echo '<style>tr.user-url-wrap{ display: none; }</style>';
    echo '<style>tr.user-admin-color-wrap{ display: none; }</style>';
    echo '<style>tr.user-comment-shortcuts-wrap{ display: none; }</style>';
    echo '<style>tr.user-description-wrap{ display: none; }</style>';
    echo '<style>tr.user-aim-wrap{ display: none; }</style>';
    echo '<style>tr.user-yim-wrap{ display: none; }</style>';
    echo '<style>tr.user-jabber-wrap{ display: none; }</style>';
    echo '<style>tr.user-profile-picture{ display: none; }</style>';

}
add_action( 'admin_head-user-edit.php', 'remove_redundant_profile_fields' );
add_action( 'admin_head-profile.php',   'remove_redundant_profile_fields' );
