<?php

/**
 * Title: Header with Banner
 * Slug: worklancer/header-with-banner
 * Categories: worklancer-patterns
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/bg_gradiant.png',
    $worklancer_url . 'assets/images/hero_img.png'
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[0]) ?>","id":2644,"dimRatio":0,"minHeight":760,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2644" alt="" src="<?php echo esc_url($worklancer_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"34px","right":"var:preset|spacing|50","bottom":"34px","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
        <div class="wp-block-group" style="padding-top:34px;padding-right:var(--wp--preset--spacing--50);padding-bottom:34px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:site-title {"level":3,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase","lineHeight":"1.1"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"large","fontFamily":"space-grotesk"} /-->

                <!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"background-alt","overlayTextColor":"sub-heading-color","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"10px"} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1","fontSize":"120px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading"} -->
                    <h2 class="wp-block-heading has-text-align-left is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading" style="font-size:120px;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php esc_html_e('Hello,', 'worklancer') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1","fontSize":"120px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading"} -->
                    <h1 class="wp-block-heading has-text-align-left is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading" style="font-size:120px;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php esc_html_e('I am Patrick', 'worklancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"20px","bottom":"0px"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:20px;margin-bottom:0px"><?php esc_html_e('Creative UI/UX Designer', 'worklancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} -->
                    <p class="has-text-align-left has-foreground-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'worklancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"52px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:52px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"17px","bottom":"17px"}},"typography":{"fontSize":"18px"},"border":{"radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:17px;padding-right:40px;padding-bottom:17px;padding-left:40px"><?php esc_html_e('Download CV', 'worklancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","id":2716,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url($worklancer_images[1]) ?>" alt="" class="wp-image-2716" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->