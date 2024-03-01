<?php

/**
 * Title: Testimonials Block
 * Slug: worklancer/testimonial-block
 * Categories: worklancer-patterns
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/fota_testimonial_1.png',
    $worklancer_url . 'assets/images/fota_testimonial_2.png',
    $worklancer_url . 'assets/images/fota_testimonial_3.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"120px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","lineHeight":"1.2"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading"} -->
    <h2 class="wp-block-heading has-text-align-center is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading" style="font-size:120px;font-style:normal;font-weight:700;line-height:1.2;text-transform:uppercase"><?php esc_html_e('Testimonials', 'worklancer') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
    <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php esc_html_e('Words from happy customers', 'worklancer') ?></h4>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"10px"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:10px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
                <p class="has-text-align-left has-small-font-size" style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'worklancer') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"76px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($worklancer_images[0]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;width:76px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Robert Galson', 'worklancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Author', 'worklancer') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"10px"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:10px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
                <p class="has-text-align-left has-small-font-size" style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'worklancer') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"76px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($worklancer_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;width:76px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Liyana Pott', 'worklancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Blogger', 'worklancer') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"10px"}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:10px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
                <p class="has-text-align-left has-small-font-size" style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'worklancer') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"76px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($worklancer_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;width:76px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Madisa Golsan', 'worklancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Sports Person', 'worklancer') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->