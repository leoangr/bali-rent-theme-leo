<?php get_header(); ?>

<?php
$harga = get_field('harga_per_hari');
$transmisi = get_field('transmisi');
$seats = get_field('seats');
$cc = get_field('cc');
$option_image1 = get_field('image_1');
$option_image2 = get_field('image_2');

$front_page_id = get_option('page_on_front');
$wa = get_field('whatsapp_number', $front_page_id);
$btn = get_field('button_text', $front_page_id);
$location = get_field('location_text', $front_page_id);


$images = [];

// featured image
$featured = get_the_post_thumbnail_url(get_the_ID(), 'large');
if ($featured) {
    $images[] = $featured;
}

// optional images
if (!empty($option_image1)) {
    $images[] = $option_image1;
}

if (!empty($option_image2)) {
    $images[] = $option_image2;
}

?>

<section class="option-card">
    <div class="box-detail">
        <div class="detail-left">
            <div class="gallery">
                <div class="main-image">
                    <?php the_post_thumbnail('large', ['id' => 'main-image-data']); ?>
                </div>
                <div class="list-option-gallery">
                    <?php foreach ($images as $index => $img): ?>
                        <img
                            src="<?php echo esc_url($img); ?>"
                            class="thumb <?php echo $index === 0 ? 'active' : ''; ?>"
                            data-id="<?php echo $index; ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="detail-right">
            <h1 class="title-detail"><?php the_title(); ?></h1>
            <h2 class="price-detail">IDR <?php echo number_format($harga, 0, ',', '.'); ?> <span>/ day</span></h2>
            <div class="card-specification">
                <h3>Specifications</h3>
                <div class="list-spec-card">
                    <div class="card-shadow spec-card">
                        <span class="icon-cu blue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-cog w-5 h-5 mx-auto text-primary mb-1">
                                <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path>
                                <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                                <path d="M12 2v2"></path>
                                <path d="M12 22v-2"></path>
                                <path d="m17 20.66-1-1.73"></path>
                                <path d="M11 10.27 7 3.34"></path>
                                <path d="m20.66 17-1.73-1"></path>
                                <path d="m3.34 7 1.73 1"></path>
                                <path d="M14 12h8"></path>
                                <path d="M2 12h2"></path>
                                <path d="m20.66 7-1.73 1"></path>
                                <path d="m3.34 17 1.73-1"></path>
                                <path d="m17 3.34-1 1.73"></path>
                                <path d="m11 13.73-4 6.93"></path>
                            </svg>
                        </span>
                        <p class="text-info-detail">Transmission</p>
                        <p class="text-info-detail second-info">
                            <?php
                            if (!empty($transmisi)) {
                                echo esc_html($transmisi);
                            } else {
                                echo "-";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="card-shadow spec-card">
                        <span class="icon-cu blue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-5 h-5 mx-auto text-primary mb-1">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </span>
                        <p class="text-info-detail">Seats</p>
                        <p class="text-info-detail second-info">
                            <?php
                            if (!empty($seats)) {
                                echo esc_html($seats);
                            } else {
                                echo "-";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="card-shadow spec-card">
                        <span class="icon-cu blue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-5 h-5 mx-auto text-primary mb-1">
                                <path d="m12 14 4-4"></path>
                                <path d="M3.34 19a10 10 0 1 1 17.32 0"></path>
                            </svg>
                        </span>
                        <p class="text-info-detail">Engine</p>
                        <p class="text-info-detail second-info">
                            <?php
                            if (!empty($cc)) {
                                echo esc_html($cc) . "cc";
                            } else {
                                echo "-";
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-more-detail first">
                <h4>Description</h4>
                <p><?php the_content(); ?></p>
            </div>
            <div class="card-more-detail">
                <h4>Pickup Location</h4>
                <p><?php echo $location; ?></p>
            </div>
            <a target="_blank" href="https://wa.me/<?php echo $wa; ?>?text=Hi%20BaliRide%2C%20I%20want%20to%20rent%20a%20<?php the_title(); ?>"
                class="btn-wa-detail">
                <span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.25 12C21.2516 13.2141 21.0135 14.4167 20.5493 15.5389C20.0852 16.6611 19.4041 17.6809 18.545 18.54C17.6859 19.3991 16.6656 20.0806 15.5426 20.5456C14.4196 21.0106 13.2158 21.25 12 21.25C10.6915 21.2531 9.39742 20.9767 8.20459 20.4394L4.33751 21.0116C4.14525 21.0433 3.94812 21.0275 3.76336 20.9656C3.57861 20.9037 3.41183 20.7976 3.27761 20.6565C3.14339 20.5154 3.04581 20.3436 2.99339 20.1562C2.94096 19.9687 2.93529 19.7713 2.97688 19.5812L3.51397 15.6595C3.00433 14.5069 2.74404 13.2599 2.7501 12C2.74854 10.7858 2.98663 9.58326 3.45079 8.46107C3.91494 7.33888 4.59603 6.31908 5.45513 5.45998C6.31422 4.60088 7.33446 3.91935 8.45749 3.45434C9.58052 2.98934 10.7843 2.75 12 2.75C13.2158 2.75 14.4196 2.98934 15.5426 3.45434C16.6656 3.91935 17.6859 4.60088 18.545 5.45998C19.4041 6.31908 20.0852 7.33888 20.5493 8.46107C21.0135 9.58326 21.2516 10.7858 21.25 12Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                <?php echo $btn; ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>