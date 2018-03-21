<?php

function load_scripts()
{
    /* Add JS files to footer */
   // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', false, false, true);

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', false, '3.2.1', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', false, true, true);
    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', false, '4.0.0', true);
    wp_enqueue_script('particle', get_template_directory_uri() . '/js/particle.js', false, true, true);
    wp_enqueue_script('scroll-entrance', get_template_directory_uri() . '/js/scroll-entrance.js', false, true, true);
    wp_enqueue_script('light-gallery', get_template_directory_uri() . '/js/light-gallery.min.js', false, '1.0.1', true);
    wp_enqueue_script('script-file', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}

add_action('wp_footer', 'load_scripts');

?>