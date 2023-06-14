<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (!function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (!locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

class Barba_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Add the data attributes to the menu items' anchor tags
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<li';

        // Add the menu item classes and attributes
        $output .= ' class="' . esc_attr(implode(' ', $item->classes)) . '"';
        $output .= '>';

        // Generate the menu item anchor tag
        $attributes = $item->attr_title ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= $item->target ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= $item->xfn ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= $item->url ? ' href="' . esc_attr($item->url) . '"' : '';

        // Add the data-barba attribute to the anchor tag
        $attributes .= ' data-barba="link"';

        // Add any other data attributes you need
        // For example: $attributes .= ' data-foo="bar"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
