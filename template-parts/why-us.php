<?php
$query = new WP_Query([
    'post_type' => 'whyus',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
]);
?>

<!-- why choose us -->
<section class="option-card bg" id="about">
    <div class="card-title-option">
        <h1>Why Choose Us</h1>
        <p>Everything you need for a perfect Bali trip</p>
    </div>
    <div class="responsive-list">

        <?php while ($query->have_posts()) : $query->the_post();

            $desc = get_field('desc');
            $icon = get_field('icon');
            $color = get_field('color');

        ?>

            <div class="card-shadow card-why-us">

                <span class="icon-cu <?php echo esc_attr($color); ?>">

                    <?php if ($icon == 'dollar'): ?>
                        <!-- SVG Dollar -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-dollar-sign w-7 h-7">
                            <line x1="12" x2="12" y1="2" y2="22"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>

                    <?php elseif ($icon == 'zap'): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-zap w-7 h-7">
                            <path
                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                            </path>
                        </svg>

                    <?php elseif ($icon == 'shield'): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-shield w-7 h-7">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                            </path>
                        </svg>

                    <?php elseif ($icon == 'message'): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-message-circle w-7 h-7">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                        </svg>
                    <?php endif; ?>

                </span>

                <h2 class="title-cu"><?php the_title(); ?></h2>
                <p class="desc-cu"><?php echo esc_html($desc); ?></p>

            </div>

        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</section>