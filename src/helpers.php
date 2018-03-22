<?php

use WpSanitize\WpSanitize;

if (!function_exists('wp_sanitize_title')) {
    /**
     * Sanitize title
     */
    function wp_sanitize_title(): void
    {
        WpSanitize::title();
    }
}

if (!function_exists('wp_sanitize_filenames')) {
    /**
     * Sanitize file names
     */
    function wp_sanitize_filenames(): void
    {
        WpSanitize::filenames();
    }
}