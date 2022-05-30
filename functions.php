<?php

function backoffice_files() {    
    wp_enqueue_script('main_script', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    // CASO O JAVASCRIPT NÃO TENHA DEPENDÊNCIAS: wp_enqueue_script('main_script', get_theme_file_uri('/build/index.js'), NULL);
    wp_enqueue_style('main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
}

add_action('wp_enqueue_scripts', 'backoffice_files'); 


