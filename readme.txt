=== User Password Reset Notifications for Slack ===
Contributors:      macbookandrew
Donate link:       https://cash.me/$AndrewRMinionDesign
Tags:              slack, api, chat, notification, user, password, reset
Requires at least: 3.6
Tested up to:      4.4.2
Stable tag:        1.0
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Send notifications to Slack channels whenever a user loses and resets their password.

== Description ==

This plugin is an extension to the [Slack plugin](http://wordpress.org/plugins/slack); it allows you to send notifications to Slack channels whenever a user loses and resets their password.

The new event will be shown in the integration settings labeled **When a user loses and resets their password**. If checked, then a notification will be delivered whenever a user loses and resets their password.

When this plugin is active, the email notifications to the site administrator will be disabled.

You can alter the message with `slack_user_password_reset_message` filter. The filter receives the following parameters in this order:

* `$user`: the user object
* `$new_pass`: the new password string

**Development of this plugin is done on [GitHub](https://github.com/macbookandrew/wp-slack-user-password-reset/). Pull requests are always welcome**.

== Installation ==

1. You need to install and activate [Slack](http://wordpress.org/plugins/slack) plugins first.
1. Then upload **User Password Reset Notifications for Slack** plugin to your blog’s `wp-content/plugins/` directory and activate.
1. You will see the new event type labeled **When a user loses and resets their password** in integration setting. If checked, then a notification will be delivered when a user loses and resets their password.

== Screenshots ==

1. Event option in integration settings
1. Your channel being notified when a user’s password is reset

== Changelog ==

= 0.1.0 =
Initial release
