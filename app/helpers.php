<?php
    function get_age_by_date($date) {
        $from = new DateTime($date);
        $to   = new DateTime('today');
        return $from->diff($to)->y;
    }

    function image_placeholder($options) {
        return "https://via.placeholder.com/{$options}";
    }
