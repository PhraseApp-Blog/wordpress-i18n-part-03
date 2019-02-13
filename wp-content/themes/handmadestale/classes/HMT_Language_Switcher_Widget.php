<?php

class HMT_Language_Switcher_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'HMT_Language_Switcher_Widget',
            __("Handmade's Tale Language Switcher", 'handmadestale'),
            array(
                'description' => __(
                    "Custom language switcher for the Handmade's Tale website",
                    'handmadestale'
                ),
            )
        );
    }

    public function widget($args, $instance)
    {
        if (!function_exists('pll_the_languages')) {
            throw new Exception(__('The Polylang plugin is needed to show a ' .
                'language switcher.'));
        }

        $languages = pll_the_languages(array('raw' => 1));

        if (count($languages) == 0) {
            _e('No languages to display');
            return;
        }

        // make local variables available to the template
        include(locate_template('language-switcher.php'));
    }
}