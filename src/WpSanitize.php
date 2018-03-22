<?php

namespace WpSanitize;

use Stringy\Stringy;

/**
 * WordPress Glide wrapper
 *
 * @package WP_Webpack
 */
class WpSanitize
{
    /**
     * Sanitize slugs
     *
     * @return string
     */
    public static function title()
    {
        remove_filter('sanitize_title', 'sanitize_title_with_dashes', 11);

        add_filter('sanitize_title', function ($title, $rawTitle, $context) {
            if ($context == 'save') {
                return Stringy::create($rawTitle)->slugify()->__toString();
            } else {
                return $title;
            }
        }, 10, 3);
    }

    /**
     * Sanitize file names
     *
     * @return string
     */
    public static function filenames()
    {
        add_filter('sanitize_file_name', function ($filename) {
            $parts = explode('.', $filename);
            $extension = array_pop($parts);
            $name = implode('.', $parts);

            return Stringy::create($name)->slugify()->__toString() . '.' . $extension;
        }, 10, 1);
    }
}