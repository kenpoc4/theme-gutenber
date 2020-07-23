<?php

// Hojas CSS y JS
function sitio_estilos() {
    // Agregando hojas de estilos
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:ital,wght@0,300;0,700;0,900;1,400&display=swap', array(), '1.0.0');
    wp_enqueue_style( 'style', get_stylesheet_uri(  ), array('normalize'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'sitio_estilos');