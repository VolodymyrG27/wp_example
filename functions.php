<?php
//5 для зручності ставимо окремо css і js
add_action('wp_enqueue_scripts', 'childhood_scripts');
add_action('wp_enqueue_scripts', 'childhood_styles');

function childhood_scripts() {
      wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
};

function childhood_styles() {
     wp_enqueue_style( 'childhood-style', get_stylesheet_uri() ); //1.Підключка одного головного файлу стилів style.css
     wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
     wp_enqueue_style( 'header-style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );

};

//5555

/*
add_action('wp_enqueue_scripts', 'childhood_scripts');//1.Підключка одного головного файлу стилів style.css

function childhood_scripts() {
     wp_enqueue_style( 'childhood-style', get_stylesheet_uri() ); //1.Підключка одного головного файлу стилів style.css
     //2.Підключка більше стилів
     wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
     //3.Підключка стилів через cdn
     wp_enqueue_style( 'header-style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
      //4.Підключка скриптів
      wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
      //wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(jquery), null, true );
};
*/

?>