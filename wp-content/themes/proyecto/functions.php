<?php function book_setup_post_type() {


    $args = array(
        'public'    => true,
        'label'     => __( 'Recetas', 'textdomain' ),
        'menu_icon' => 'dashicons-book',
        'supports'  => ['title', 'editor', 'thumbnail']
    );
    register_post_type( 'receta', $args );
}
add_action( 'init', 'book_setup_post_type' );

function theme_setup(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','theme_setup');