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
        add_filter('get_sample_permalink', function ($permalink, $post_id, $title, $name, $post) {
            $slug = $permalink[1] ?? '';

            if ($slug) {
                $permalink[1] = Stringy::create($permalink[1])->slugify()->__toString();
            }

            return $permalink;
        }, 10, 5);
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
