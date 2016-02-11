<?php
/*
Plugin Name: Slack User Password Reset Notification
Plugin URI: http://code.andrewrminion.com/slack-user-password-reset/
Description: Adds Slack notifications and disables admin email notifications when users lose and reset their passwords
Version: 1.0
Author: AndrewRMinion Design
Author URI: https://andrewrminion.com
*/

// add Epoch comment system to Slack notifications
function wp_slack_user_passwords( $events ) {
    $events['password_reset'] = array(
        'action' => 'password_reset',
        'description' => __( 'When a user loses and resets their password', 'slack' ),
        'message' => function( $user, $new_pass ) {
            return apply_filters( 'slack_user_password_reset_message',
                sprintf(
                    'Password lost and changed for user <%1$s|%2$s %3$s>',
                    admin_url( 'user-edit.php?user_id=' . $user->ID ),
                    $user->first_name,
                    $user->last_name
                )
            );
        }
    );

    return $events;
}
add_filter( 'slack_get_events', 'wp_slack_user_passwords' );

// disables admin email
if ( !function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification() {}
}
