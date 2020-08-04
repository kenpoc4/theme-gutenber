<?php

function sito_setup() {
    // Gutenberg
        // Soporte a estilos por default de Gutenberg
        add_theme_support( 'wp-block-styles' );
        // Paleta de colores
        add_theme_support( 'editor-color-palette', array(
            array(
                'name'  =>  'Rojo',
                'slug'  =>  'rojo',
                'color' =>  '#A61206'
            ),
            array(
                'name'  =>  'Naranja',
                'slug'  =>  'naranja',
                'color' =>  '#F19F30'
            ),
            array(
                'name'  =>  'Verde',
                'slug'  =>  'verde',
                'color' =>  '#127427'
            ),
            array(
                'name'  =>  'Blanco',
                'slug'  =>  'blanco',
                'color' =>  '#FFFFFF'
            ),
            array(
                'name'  =>  'Negro',
                'slug'  =>  'negro',
                'color' =>  '#000000'
            )
        ) );
        // Deshabilita los colores personalizados
        add_theme_support( 'disable-custom-colors');


    // Imagen Destacada
    add_theme_support( 'post-thumbnails' );

    // Tamaño de imagenes
    add_image_size( 'nosotros', 437, 291, true );
    add_image_size( 'especialidades', 768, 515, true );
    add_image_size( 'especialidades_portrait', 435, 526, true );

}
add_action('after_setup_theme', 'sito_setup');

// Hojas CSS y JS
function sitio_estilos() {
    // Agregando hojas de estilos
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
    wp_enqueue_style( 'slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array('normalize'), '1.0.10');
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:ital,wght@0,300;0,700;0,900;1,400&display=swap', array(), '1.0.0');
    wp_enqueue_style( 'style', get_stylesheet_uri(  ), array('normalize'), '1.0.0');

    // Scripts
    wp_enqueue_script( 'silcknavjs', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sitio_estilos');

// Menus
function sitio_menus() {
    register_nav_menus(array(
        'header-menu'       =>  'Header Menú',
        'redes-sociales'    =>  'Redes Sociales'
    ));
}
add_action('init', 'sitio_menus');

// Zonas de Widgets
function sitio_witgets() {
    register_sidebar( array(
        'name'          =>  'Blog Sidebar',
        'id'            =>  'blog_sidebar',
        'before_widget' =>  '<div class="widget">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_widget'  =>  '</h3>'
    ) );
}
add_action('widgets_init', 'sitio_witgets');

// Agregar botones a paginador
function sitio_botones_paginador() {
    return 'class="boton boton-secundario"';
}
add_filter( 'next_posts_link_attributes', 'sitio_botones_paginador' );
add_filter( 'previous_posts_link_attributes', 'sitio_botones_paginador' );