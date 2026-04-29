<?php get_header(); ?>
<main class="site-main">
    <div class="container">
        <?php get_template_part('template-parts/hero', 'banner'); ?>
        <?php get_template_part('template-parts/featured', 'vehicles'); ?>
        <?php get_template_part('template-parts/all', 'vehicles'); ?>
        <?php get_template_part('template-parts/why', 'us'); ?>
        <?php get_template_part('template-parts/customer', 'say'); ?>
        <?php get_template_part('template-parts/faq'); ?>
        <?php get_template_part('template-parts/find', 'us'); ?>
    </div>
</main>
<?php get_footer(); ?>