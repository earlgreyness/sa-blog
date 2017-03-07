<?php

function salesart_enqueue_scripts() {
    $dir = get_template_directory_uri();
    wp_enqueue_style( 'salesart-styles', $dir . '/css/styles.css', array(), null );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, true );

    wp_enqueue_script(
        'jquery-magnific-popup',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        array('jquery'), null, true );

    wp_enqueue_script( 'salesart-scripts', $dir . '/js/custom.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'salesart_enqueue_scripts' );
