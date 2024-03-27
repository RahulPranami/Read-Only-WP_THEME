<?php

class Social_Media_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        $output .= "<li class='" .  implode(" ", $item->classes) . "'>";

        if ($permalink && $permalink != '#') {
            $output .= '<a href="' . $permalink . '" class="icon solid">';
        } else {
            $output .= '<span>';
        }

        $output .= $title;

        if ($description != '' && $depth == 0) {
            $output .= '<small class="description">' . $description . '</small>';
        }

        if ($permalink && $permalink != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
}
