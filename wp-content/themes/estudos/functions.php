<?php
function localRegisterMenu() {
    register_nav_menu('menu-navegacao', __( 'Menu Navegação' ));
}
add_action( 'init', 'localRegisterMenu' );

// Habilitando recursos customizados
function localRegisterLogoCustom() {
    // Custom logo
    add_theme_support('custom-logo', []);
    // Habilitando imagens destacadas
    add_theme_support('post-thumbnails', []);
}
add_action('after_setup_theme', 'localRegisterLogoCustom');
function localRegisterCustomPost() {
    register_post_type('destiny_post_type', [
        'labels' => ['name' => 'Destinos'],
        'public' => true,
        'menu-position' => 0,
        'supports' => ['editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt','page-attributes', 'thumbnail', 'custom-fields', 'post-formats'],
        'menu_icon' => 'dashicons-admin-site',
    ]);
}
add_action('init', 'localRegisterCustomPost');
function localRegisterTaxonomy() {
    $options = [
        'labels' => ['name' => 'Paises'],
        'hierarchical' => true,
    ];
    register_taxonomy('country', 'destiny_post_type', $options);
}
add_action('init', 'localRegisterTaxonomy');

function localRegistrerPostCustomBanner() {
    register_post_type(
        'banners',
        [
            'labels' => ['name' => 'Banners'],
            'public' => true,
            'menu_position' => 1,
            'menu_icon' => 'dashicons-format-image',
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'revisions', 'trackbacks', 'author', 'comments'],
        ],
        
    );
}
add_action('init', 'localRegistrerPostCustomBanner');
function localRegisterMetaBox() {
    add_meta_box('local_register_meta_box', 'Dados do Destino', 'localFunctionCallbackMetaBox', 'banners');
}
add_action('add_meta_boxes', 'localRegisterMetaBox');
function localFunctionCallbackMetaBox($post) {
 // html com form
 // pegando no banco
    $x = get_post_meta($post->ID, '_texto_home_1', true);
 /**
  * input label;
  */
}
function localSaveDataMetaBox($post_id) {
    foreach ($_POST as $key => $value) {
        // diferente dos campos do formulario
        update_post_meta($post_id, '_'.$key, $value);
    }
}
add_action('save_post', 'localSaveDataMetaBox');   

function localGetTexToBanner() {
    $q = new WP_Query([
        'post_type' => 'banners',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'ID desc'
    ]);
    if ($q->have_posts()) {
        while($q->have_posts()) {
            $t1 = get_post_meta(get_the_ID(), '_texto_home_1', true);
            return ['t1' => $t1];
        }
    }
}
function localRegisterCustomScripts() {
    $texto = localGetTexToBanner();
    if (is_front_page()) {
        wp_enqueue_script('typed-js', get_template_directory_uri().'/assets/js/typed.js', array(), [], false, true);
        wp_enqueue_script('texto-banner-js', get_template_directory_uri() . '/assets/js/banner-js.js', ['typed-js'], false, true);
        wp_localize_script('texto-banner-js', 'texto', $texto); 
    }

}
add_action('wp_equeue_scripts', 'localRegisterCustomScripts'); 