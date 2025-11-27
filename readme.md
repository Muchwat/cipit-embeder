# Cipit Embeder

Cipit Embeder is a lightweight WordPress plugin that provides a simple shortcode wrapper for the powerful built-in **oEmbed** functionality.

This allows you to easily embed videos from popular services like **YouTube**, **Vimeo**, and many others supported by WordPress, using the explicit `[embed]URL[/embed]` shortcode format.

## Installation

### Manual Installation (via ZIP)

1. Download the latest release as a ZIP file from the [GitHub Repository](https://github.com/Muchwat/cipit-embeder).
2. In your WordPress Dashboard, navigate to **Plugins** > **Add New** > **Upload Plugin**.
3. Choose the downloaded ZIP file and click **Install Now**.
4. Click **Activate Plugin**.

### Direct Upload (via FTP/SFTP)

1. Upload the entire `cipit-embeder` folder to the `/wp-content/plugins/` directory on your server.
2. Navigate to **Plugins** in your WordPress Dashboard.
3. Find **Cipit Embeder** and click **Activate**.

## Usage

The plugin registers a single shortcode: `[embed]`.

Place the complete URL of the video or content you wish to embed between the shortcode tags in any post, page, or widget that supports shortcodes.

### Example 1: YouTube Video

[embed]https://youtu.be/MztJLF0VobE[/embed]


### Example 2: Vimeo Video

[embed]https://vimeo.com/49041262[/embed]


## Changelog

### 1.0 (Initial Release)

* Added the custom `[embed]` shortcode wrapper.
* Uses the secure and native WordPress function `wp_oembed_get()` for reliable embedding.