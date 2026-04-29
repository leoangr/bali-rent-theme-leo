<?php
$query = new WP_Query([
    'post_type' => 'vehicle',
    'posts_per_page' => 6,
    'meta_query' => [
        [
            'key' => 'featured_vehicle',
            'value' => '1',
            'compare' => '='
        ]
    ]
]);
?>

<!-- Featured Vehicles -->
<section class="option-card" id="vehicles">
    <div class="card-title-option">
        <h1>Featured Vehicles</h1>
        <p>Our most popular rides loved by travelers</p>
    </div>
    <ul class="responsive-list">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <?php
            $harga = get_field('harga_per_hari');
            $transmisi = get_field('transmisi');
            $seats = get_field('seats');
            $cc = get_field('cc');
            ?>

            <li>
                <div class="card-product">

                    <div class="img-product">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                    </div>

                    <div class="card-info-product">
                        <div class="info-short-product">
                            <h2><?php the_title(); ?></h2>

                            <div class="info-detail-opt">
                                <?php if (!empty($transmisi)) { ?>
                                    <span><?php echo esc_html($transmisi); ?></span>
                                <?php } ?>
                                <?php if (!empty($seats)) { ?>
                                    <span><?php echo number_format($seats, 0, ',', '.'); ?> seats</span>
                                <?php } ?>
                                <?php if (!empty($cc)) { ?>
                                    <span><?php echo number_format($cc, 0, ',', '.'); ?> cc</span>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="info-more-product">
                            <div class="price-product">
                                IDR <?php echo number_format($harga, 0, ',', '.'); ?>/
                                <span>day</span>
                            </div>

                            <div class="btn-detail">
                                <a href="<?php the_permalink(); ?>">View Details</a>
                            </div>
                        </div>
                    </div>

                </div>
            </li>

        <?php endwhile;
        wp_reset_postdata(); ?>

    </ul>
</section>