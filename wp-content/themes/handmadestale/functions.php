<?php
require __DIR__ . '/classes/HMT_Walker_Nav_Menu.php';
require __DIR__ . '/classes/HMT_Language_Switcher_Widget.php';

// Load our text domain
load_theme_textdomain('handmadestale');

/**
 * Register our menus.
 */
function hmt_nav_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
        )
    );
}
add_action('init', 'hmt_nav_menus');

$hmt_published_post_count = null;

/**
 * Retrieve cached number of published posts
 *
 * @return int
 */
function hmt_published_post_count()
{
    global $hmt_published_post_count;

    if (is_null($hmt_published_post_count)) {
        $hmt_published_post_count = intval(wp_count_posts('post')->publish);
    }

    return $hmt_published_post_count;
}

/**
 * Register our sidebars and widgetized areas.
 */
function hmt_widgets_init()
{
    register_sidebar(array(
        'name' => __('Trailing Main Navigation'),
        'id' => 'trailing_main_nav',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'hmt_widgets_init');

/**
 * Register our widgets.
 */
function hmt_language_switcher_widget()
{
    register_widget('HMT_Language_Switcher_Widget');
}
add_action('widgets_init', 'hmt_language_switcher_widget');