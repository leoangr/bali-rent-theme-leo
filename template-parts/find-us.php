<?php 

$page_id = get_the_ID();
$location = get_field('location_text', $page_id);
$location_url = get_field('location_embed_url', $page_id);

?>

<!-- Find us -->
<section class="option-card">
    <div class="card-title-option">
        <h1>Find Us in Bali</h1>
        <p>Pick up your ride at our convenient location</p>
    </div>
    <div class="box-map">
        <iframe title="<?php echo $location; ?>"
            src="<?php echo $location_url; ?>"
            frameborder="0" width="100%" height="400" allowFullScreen loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="card-location">
        <span>
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 13.6324C15.0051 13.6324 17.4412 11.1963 17.4412 8.19118C17.4412 5.1861 15.0051 2.75 12 2.75C8.99492 2.75 6.55882 5.1861 6.55882 8.19118C6.55882 11.1963 8.99492 13.6324 12 13.6324Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 13.6324V21.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </span>
        <p><?php echo $location; ?></p>
    </div>
</section>