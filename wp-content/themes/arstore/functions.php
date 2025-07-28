<?php
// Registrar menú
function mi_tema_setup() {
    register_nav_menus( array(
        'menu-principal' => __( 'Menú Principal', 'mi-tema' ),
    ));
}
add_action( 'after_setup_theme', 'mi_tema_setup' );

// Agregar soporte para el título dinámico
add_theme_support( 'title-tag' );

// Soporte para WooCommerce
function mi_tema_woocommerce_setup() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mi_tema_woocommerce_setup');

// Declarar compatibilidad con Elementor
function mi_tema_elementor_setup() {
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'mi_tema_elementor_setup');

// Menu
function mi_menu_shortcode() {
    ob_start();
    wp_nav_menu(array(
        'theme_location' => 'menu-principal',
        'container'      => 'nav',
        'container_class'=> 'menu-principal',
        'menu_class'     => 'nav-list'
    ));
    return ob_get_clean();
}
add_shortcode('mi_menu', 'mi_menu_shortcode');
