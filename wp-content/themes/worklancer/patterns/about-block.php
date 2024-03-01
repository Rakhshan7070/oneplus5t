<?php

/**
 * Title: About Block
 * Slug: worklancer/about-block
 * Categories: worklancer-patterns
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/bg_gradiant_2.png',
    $worklancer_url . 'assets/images/about_img.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($worklancer_images[0]) ?>","id":2709,"source":"file","title":"gradiant-two-2"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2712,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($worklancer_images[1]) ?>" alt="" class="wp-image-2712" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
            <h4 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500;line-height:1.2;text-transform:none"><?php esc_html_e('8+ Years of Experience in Industry', 'worklancer') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"54px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}}} -->
            <h1 class="wp-block-heading" style="font-size:54px;font-style:normal;font-weight:700;line-height:1.2;text-transform:uppercase"><?php esc_html_e('I’m Creative UI/UX Designer', 'worklancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
            <p style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'worklancer') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","lineHeight":"1.2"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary","fontSize":"xxxx-large"} -->
                    <h1 class="wp-block-heading is-style-fotawp-heading-transparentfill-outline-stroke-tertiary has-xxxx-large-font-size" style="font-style:normal;font-weight:700;line-height:1.2;text-transform:uppercase"><?php esc_html_e('50+', 'worklancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading"><?php esc_html_e('Happy Customers', 'worklancer') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","lineHeight":"1.2"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary","fontSize":"xxxx-large"} -->
                    <h1 class="wp-block-heading is-style-fotawp-heading-transparentfill-outline-stroke-tertiary has-xxxx-large-font-size" style="font-style:normal;font-weight:700;line-height:1.2;text-transform:uppercase"><?php esc_html_e('250+', 'worklancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading"><?php esc_html_e('Projects Completed', 'worklancer') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"textColor":"foregound-alt","style":{"border":{"radius":"50px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-text-color has-link-color wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px"><?php esc_html_e('Explore More', 'worklancer') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->