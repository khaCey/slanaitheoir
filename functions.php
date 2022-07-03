<?php

function load_stylesheets()
{
    wp_enqueue_style('bootstrap', get_theme_file_uri('bootstrap.css'));
    wp_enqueue_style('bootstrap_icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
    wp_enqueue_style('google_fonts_newsreader', '//fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap');
    wp_enqueue_style('google_fonts_mulit', '//fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap');
    wp_enqueue_style('google_fonts_kanit', '//fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap_script', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', false);
    wp_enqueue_script('script', get_theme_file_uri('js/scripts.js'));
}

add_action('wp_enqueue_scripts', 'load_stylesheets');