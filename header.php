<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php if (is_front_page()) : ?>
        <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <?php elseif (is_singular()) : ?>
        <meta name="description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt())); ?>">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="card-header">
            <div class="box-header box-head">

                <a href="/" class="logo-text">
                    Bali<span class="text-sunset-orange">Ride</span>
                </a>

                <div class="menu-mobile">
                    <button class="menu-icon">
                        <span id="icon-menu">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 12H19.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" />
                                <path d="M4.5 17.7692H19.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" />
                                <path d="M4.5 6.23077H19.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </span>

                        <span id="icon-close" class="hide">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 5L5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M19 19L5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                </div>

            </div>
        </nav>
        <div class="list-menu-mobile box-head" id="list-mobile-menu">
            <div class="menu-mobile-head">
                <a href="/" class="logo-text mobile">
                    Bali<span class="text-sunset-orange">Ride</span>
                </a>
                <span id="icon-close" class="hide icon-close-mobile">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 5L5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M19 19L5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
            <a href="/#home" class="ls-m first">Home</a>
            <a href="/#vehicles" class="ls-m">Vehicles</a>
            <a href="/#about" class="ls-m">About</a>
            <a href="/#faq" class="ls-m">FAQ</a>
            <a href="/#contact" class="ls-m">Contact</a>
        </div>
    </header>

    <?php wp_footer(); ?>
</body>

</html>