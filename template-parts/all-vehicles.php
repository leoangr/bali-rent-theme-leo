<?php
$query = new WP_Query([
    'post_type' => 'vehicle',
    'posts_per_page' => -1
]);
?>

<!-- All Vehicles -->
<section class="option-card bg">
    <div class="card-title-option">
        <h1>Vehicles</h1>
    </div>
    <div class="all-vehicles-tools-box">
        <div class="list-bar-btn">

            <!-- ALL -->
            <button data-id="all" class="active">All Vehicles</button>

            <?php
            $terms = get_terms([
                'taxonomy' => 'vehicle_category',
                'hide_empty' => false,
            ]);

            foreach ($terms as $term) :
            ?>
                <button data-id="<?php echo esc_attr($term->slug); ?>">
                    <?php echo esc_html($term->name); ?>
                </button>
            <?php endforeach; ?>

        </div>
        <div class="search-box">
            <span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.7828 18.8276C12.3741 18.8298 13.9302 18.3601 15.2544 17.4781C16.5785 16.596 17.6112 15.3413 18.2216 13.8726C18.832 12.4039 18.9929 10.7872 18.6837 9.2271C18.3746 7.66702 17.6093 6.23364 16.4849 5.10831C15.3604 3.98299 13.9272 3.2163 12.3666 2.90525C10.8061 2.5942 9.18823 2.75277 7.71786 3.3609C6.24748 3.96902 4.99062 4.99937 4.10632 6.32158C3.22202 7.64379 2.75 9.19844 2.75 10.7888C2.75 12.919 3.59596 14.9621 5.10209 16.4693C6.60821 17.9766 8.65135 18.8248 10.7828 18.8276Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M16.4883 16.491L21.25 21.25" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <input type="text" id="search-product" placeholder="Search vehicles...">
        </div>
    </div>
    <div class="responsive-list list-all-product">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <?php
            $harga = get_field('harga_per_hari');
            $transmisi = get_field('transmisi');
            $seats = get_field('seats');
            $cc = get_field('cc');

            // ambil kategori
            $terms = get_the_terms(get_the_ID(), 'vehicle_category');
            $category_slug = $terms ? $terms[0]->slug : 'uncategorized';
            ?>

            <div data-category="<?php echo esc_attr($category_slug); ?>" class="card-product">

                <div class="img-product">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                </div>

                <div class="card-info-product">

                    <div class="info-short-product">
                        <h2 class="title"><?php the_title(); ?></h2>

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

        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</section>