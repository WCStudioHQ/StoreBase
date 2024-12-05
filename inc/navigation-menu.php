<?php
class Custom_Nav_Walker extends Walker_Nav_Menu {

    // Add classes to <li> elements
    function start_lvl(&$output, $depth = 0, $args = null) {
        $classes = array('dropdown-menu');
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= "\n<ul$class_names>\n";
    }

    // Add classes to <a> elements
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        // Check if the menu item has children (for dropdown)
        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'dropdown';
        }

        // Add the 'active' class to the current menu item
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= '<li' . $class_names . '>';

        // Add classes to <a> elements
        $atts = array();
        $atts['class'] = 'nav-link';
        if (in_array('menu-item-has-children', $classes)) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
        }
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        // Output the item
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before . '<a' . $attributes . '>' . $args->link_before . $title . $args->link_after . '</a>' . $args->after;
        $output .= $item_output;
    }
}
