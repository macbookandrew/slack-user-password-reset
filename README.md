# Slack User Password Reset #
**Contributors:**      macbookandrew  
**Donate link:**       https://cash.me/$AndrewRMinionDesign  
**Tags:**              slack, api, chat, notification, user, password, reset  
**Requires at least:** 3.6  
**Tested up to:**      4.4.2  
**Stable tag:**        1.0  
**License:**           GPLv2 or later  
**License URI:**       http://www.gnu.org/licenses/gpl-2.0.html  

Send notifications to Slack channels whenever a user loses and resets their password.

## Description ##

This plugin is an extension to [Slack plugin](http://wordpress.org/plugins/slack) that allows you to send notifications to Slack channels whenever a user loses and resets their password.

The new event will be shown on integration setting with text **When a user loses and resets their password**. If checked, then a notification will be delivered whenever a user loses and resets their password.

When this plugin is active, the email notifications to the site administrator will be disabled.

You can alter the message with `slack_user_password_reset_message` filter. The filter receives following parameters (ordered by position):

* `$user` &mdash; User object
* `$new_pass` &mdash; New password string

**Development of this plugin is done on [GitHub](https://github.com/macbookandrew/slack-user-password-reset/). Pull requests are always welcome**.

## Installation ##

1. You need to install and activate [Slack](http://wordpress.org/plugins/slack) plugins first.
1. Then upload **Slack User Password Reset** plugin to your blog's `wp-content/plugins/` directory and activate.
1. You will see new event type with text **When a user loses and resets their password** in integration setting. If checked, then a notification will be delivered when a user loses and resets their password.

## Screenshots ##

### 1. Event option in integration settings ###
![Event option in integration settings](http://s.wordpress.org/extend/plugins/slack-user-password-reset/screenshot-1.png)

### 2. Your channel being notified when a user’s password is reset ###
![Your channel being notified when a user’s password is reset](http://s.wordpress.org/extend/plugins/slack-user-password-reset/screenshot-2.png)


## Changelog ##

### 0.1.0 ###
Initial release
