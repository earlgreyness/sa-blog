<?php

function salesart_enqueue_scripts() {
    $dir = get_template_directory_uri();
    wp_enqueue_style( 'salesart-styles', $dir . '/css/styles.css', array(), null );
    wp_enqueue_script( 'salesart-scripts', $dir . '/js/custom.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'salesart_enqueue_scripts' );
