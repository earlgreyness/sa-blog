<?php

function enqueue_custom_scripts() {
    wp_enqueue_style( 'salesartblog-style', get_template_directory_uri() . '/css/styles.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );
