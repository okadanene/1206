<?php

function enqueue_scripts() {
    //bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

