<?php

/**
 * Alter our menus' HTML.
 */
class HandmadesTale_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $ars = array(), $id = 0)
    {
        $output .= '<li class="pure-menu-item">';

        $output .= sprintf(
            '<a href="%1s" class="pure-menu-link">%2s</a>',
            $item->url,
            $item->title
        );
    }

    function end_el(&$output, $object, $depth = 0, $args = array())
    {
        $output .= '</a></li>';
    }
}