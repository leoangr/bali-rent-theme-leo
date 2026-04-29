<?php 

function bali_rent_taxonomy() {
    register_taxonomy('vehicle_category', 'vehicle', [
        'label' => 'Kategori Kendaraan',
        'hierarchical' => true,
        'rewrite' => ['slug' => 'kategori-kendaraan'],
        'show_admin_column' => true,
        'show_in_rest' => true
    ]);
}
add_action('init', 'bali_rent_taxonomy');

?>