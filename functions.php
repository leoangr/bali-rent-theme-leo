<?php 

function bali_rent_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'bali_rent_setup');

function theme_enqueue_styles() {
    // Versi CSS tetap, ubah angka saat update
    $css_version = '1.2.2';

    wp_enqueue_style(
        'my-style',                     // Handle unik
        get_stylesheet_uri(),           // URL file style.css
        array(),                        // Dependencies
        $css_version                    // Versi CSS
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function bali_theme_enqueue_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(), // dependency (misalnya ['jquery'])
        '1.1.7',
        true // taruh di footer (recommended)
    );
}
add_action('wp_enqueue_scripts', 'bali_theme_enqueue_scripts');

require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/custom-taxonomy.php';

?>