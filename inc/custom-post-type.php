<?php 

function bali_rent_cpt_vehicle() {
    register_post_type('vehicle', [
        'labels' => [
            'name' => 'Kendaraan',
            'singular_name' => 'Kendaraan',
            'add_new' => 'Tambah Kendaraan',
            'add_new_item' => 'Tambah Kendaraan Baru',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'kendaraan'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'bali_rent_cpt_vehicle');

function bali_testimonial_cpt() {
    register_post_type('testimonial', [
        'label' => 'Testimonials',
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => ['title'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'bali_testimonial_cpt');

function bali_whyus_cpt() {
    register_post_type('whyus', [
        'label' => 'Why Choose Us',
        'public' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => ['title'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'bali_whyus_cpt');

function bali_faq_cpt() {
    register_post_type('faq', [
        'label' => 'FAQ',
        'public' => true,
        'menu_icon' => 'dashicons-editor-help',
        'supports' => ['title'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'bali_faq_cpt');

?>