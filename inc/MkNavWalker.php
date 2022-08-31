<?php
class mk_wp_nav_menu_walker extends Walker_Nav_menu {

    function start_lvl(&$output, $depth = 'no-depth', $args = null) {
        $output .= "<ul class='" . "submenu level-" . $depth . "'>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // echo '<pre>' . var_export($item, true) . '</pre>';
        if($item-> title == "Straipsniai") {
            $output .= "<li class='blog'> <a href=" . esc_url($item-> url) . ">" . $item-> title . "</a>";
            $output .= "<div class='dropdown blog-dropdown'>";
            $output .= "<div class='content'><div class='title'>Straipsnių kategorijos</div>";
        } else if($item-> title == "Parduotuvė") {
            $output .= "<li class='shop'> <a href=" . esc_url($item-> url) . ">" . $item-> title . "</a>";
            $output .= "<div class='dropdown shop-dropdown'>";
            $output .= "<div class='title'>Prekių kategorijos</div>";
        } else {
            $output .= "<li> <a href=" . esc_url($item-> url) . ">" . $item-> title . "</a>";
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        if($item-> title == "Straipsniai") {
            $output .= "</div>";
            $output .= "<img src=" . get_stylesheet_directory_uri() . "/assets/img/straipsniai-bg.jpeg" . ">";
            $output .= "</div></li>";
        } else if($item-> title == "Parduotuvė") {
            $output .= "</div></li>";
        } else {
            $output .= "</li>";
        }
    }
}
?>