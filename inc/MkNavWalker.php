<?php
class mk_wp_nav_menu_walker extends Walker_Nav_menu {

    function start_lvl(&$output, $depth = 'no-depth', $args = null) {
        $output .= "<ul class='" . "submenu level-" . $depth . "'>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // echo '<pre>' . var_export($item, true) . '</pre>';
        if($item-> title == "Straipsniai") {
            $output .= "<li class='blog' class='" .  implode(" ", $item->classes) . "'> <a href=" . esc_url($item-> url) . ">" . $item-> title . "</a>";
            $output .= "<div class='dropdown blog-dropdown'>";
            $output .= "<div class='inner-wrapper'>";
            $output .= "<div class='content'><div class='title'>Straipsnių kategorijos</div>";
        } else if($item-> title == "Parduotuvė") {
            $output .= "<li class='store' class='" .  implode(" ", $item->classes) . "' > <a href=" . esc_url($item-> url) . ">" . $item-> title . "</a>";
            $output .= "<div class='dropdown store-dropdown'>";
            $output .= "<div class='inner-wrapper'>";
            $output .= "<div class='title'>Prekių kategorijos</div>";
        } else {
            $output .= "<li class='" .  implode(" ", $item->classes) . "'> <a href=" . esc_url($item-> url) . ">" . $item-> title . "</a>";
        }
    }

        // $starIcon = "<img loading='lazy' alt=star icon' width='24' height='24' src=" . get_stylesheet_directory_uri() . "/assets/img/icons/star.svg" . ">";

    function end_el(&$output, $item, $depth = 0, $args = null) {
        if($item-> title == "Straipsniai") {
            $output .= "</div>";
            $output .= "<img loading='lazy' alt=background' width='691' height='423'  src=" . get_stylesheet_directory_uri() . "/assets/img/straipsniai-bg.jpeg" . ">";
            $output .= "</div></div></li>";
        } else if($item-> title == "Parduotuvė") {
            $output .= "</div></div></li>";
        } else {
            $output .= "</li>";
        }
    }
}
?>