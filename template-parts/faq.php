<?php
$query = new WP_Query([
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
]);
?>

<!-- faq -->
<section class="option-card bg" id="faq">
    <div class="card-title-option">
        <h1>Frequently Asked Questions</h1>
        <p>Everything you need to know</p>
    </div>
    <div class="list-faq">
        <?php while ($query->have_posts()) : $query->the_post();

            $answer = get_field('answer');
        ?>

            <div class="card-faq">

                <button class="btn-faq">
                    <?php the_title(); ?>
                    <span class="icon-chevron">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 8.41693L10.5866 15.0037C10.9633 15.375 11.471 15.5831 12 15.5831C12.529 15.5831 13.0367 15.375 13.4134 15.0037L20 8.41693"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>

                <p class="content-faq">
                    <?php echo esc_html($answer); ?>
                </p>

            </div>

        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</section>