=== Cipit Embeder ===
Contributors: kevinmuchwat
Donate Link: 
Tags: embed, youtube, vimeo, shortcode, video, oembed
Requires at least: 5.0
Tested up to: 6.4
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Allows easy embedding of videos from services like YouTube and Vimeo using a simple shortcode wrapper.

== Description ==

Cipit Embeder is a lightweight plugin that provides a simple shortcode wrapper for WordPress's powerful built-in oEmbed functionality.

Instead of relying on the standard WordPress method (pasting a URL on its own line), this plugin lets you wrap the URL in a shortcode, giving you better control over where and how embeds are displayed in your content.

This plugin is designed to work seamlessly with YouTube, Vimeo, and any other service supported by WordPress's oEmbed system.

== Installation ==

1. **Upload** the entire `cipit-embeder` folder to the `/wp-content/plugins/` directory.
2. **Activate** the plugin through the 'Plugins' menu in WordPress.
3. You are ready to use the `[embed]` shortcode!

*Alternatively, if installing via GitHub:*

1. **Download** the latest release as a ZIP file.
2. Go to **Plugins > Add New > Upload Plugin**.
3. **Choose** the ZIP file and click **Install Now**.
4. **Activate** the plugin.

== Usage ==

The plugin registers a single shortcode: `[embed]`.

Simply place the complete URL of the video (YouTube, Vimeo, etc.) between the opening and closing shortcode tags in your post or page content.

**Example 1: YouTube**

`[embed]https://youtu.be/MztJLF0VobE[/embed]`

**Example 2: Vimeo**

`[embed]https://vimeo.com/49041262[/embed]`

== Changelog ==

= 1.0 =
* Initial release of the Cipit Embeder plugin.
* Added the custom [embed] shortcode using wp_oembed_get().

== Screenshots ==

(This section is optional, but if hosted on WordPress.org, you would list screenshot files here, e.g., `1.png`, `2.png`).