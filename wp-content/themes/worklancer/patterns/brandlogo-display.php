<?php

/**
 * Title: Logo branding showcase
 * Slug: worklancer/brandlogo-display
 * Categories: worklancer-patterns
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/brand_1.png',
    $worklancer_url . 'assets/images/brand_2.png',
    $worklancer_url . 'assets/images/brand_3.png',
    $worklancer_url . 'assets/images/brand_4.png',
    $worklancer_url . 'assets/images/brand_5.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70","right":"0"},"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"}}},"className":"fotawp-brands-logos is-style-enable-grayscale-mode-on-image"} -->
    <figure class="wp-block-gallery aligncenter has-nested-images columns-6 fotawp-brands-logos is-style-enable-grayscale-mode-on-image" style="margin-top:var(--wp--preset--spacing--70);margin-right:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:image {"id":2695,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($worklancer_images[0]) ?>" alt="" class="wp-image-2695" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2694,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($worklancer_images[1]) ?>" alt="" class="wp-image-2694" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2696,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($worklancer_images[2]) ?>" alt="" class="wp-image-2696" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2697,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($worklancer_images[3]) ?>" alt="" class="wp-image-2697" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":2693,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($worklancer_images[4]) ?>" alt="" class="wp-image-2693" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->