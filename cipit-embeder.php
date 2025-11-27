<?php
/**
 * Plugin Name: Cipit Embeder
 * Plugin URI: https://github.com/Muchwat/cipit-embeder
 * Description: Allows embedding YouTube and Vimeo videos using the [embed]...[/embed] shortcode format.
 * Version: 1.0
 * Author: Kevin Muchwat
 */

/**
 * Shortcode handler function for [embed]URL[/embed]
 *
 * @param array $atts Shortcode attributes (not used here, but required).
 * @param string $content The content between the shortcode tags (the URL).
 * @return string The generated HTML embed code or an empty string.
 */
function custom_video_embed_shortcode($atts, $content = null)
{
    // 1. Check if a URL was provided within the shortcode
    if (empty($content)) {
        return '';
    }

    // 2. Sanitize and validate the URL using esc_url() for security
    $video_url = esc_url($content);

    // 3. Use the built-in WordPress oEmbed function
    // wp_oembed_get() handles all the logic for YouTube, Vimeo, Vimeo, etc., based on the URL.
    $embed_code = wp_oembed_get($video_url);

    // 4. Return the embed code wrapped in a simple container (optional but good practice)
    if ($embed_code) {
        return '<div class="custom-video-embed">' . $embed_code . '</div>';
    }

    // Fallback: If embedding fails (e.g., invalid URL or unsupported service), return nothing
    return '';
}

// 5. Register the shortcode 'embed'
add_shortcode('embed', 'custom_video_embed_shortcode');