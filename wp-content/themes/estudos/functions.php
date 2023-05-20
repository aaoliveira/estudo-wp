<?php
function localRegisterMenu() {
    register_nav_menu('menu-navegacao', __( 'Menu Navegação' ));
}
add_action( 'init', 'localRegisterMenu' );

// Habilitando logos
function localRegisterLogoCustom() {
    add_theme_support('custom-logo', []);
}
add_action('after_setup_theme', 'localRegisterLogoCustom');