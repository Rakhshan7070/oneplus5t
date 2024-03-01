<?php

/**
 * Title: Default Header
 * Slug: worklancer/header-default
 * Categories: worklancer-patterns, header
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/bg_gradiant.png'
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[0]) ?>","id":2644,"dimRatio":50,"focalPoint":{"x":0.58,"y":0.04},"minHeight":100,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2644" alt="" src="<?php echo esc_url($worklancer_images[0]) ?>" style="object-position:58% 4%" data-object-fit="cover" data-object-position="58% 4%" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|50","bottom":"20px","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
        <div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:site-title {"level":3,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0px","fontSize":"24px","textTransform":"uppercase","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontFamily":"space-grotesk"} /-->

                <!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"background-alt","overlayTextColor":"sub-heading-color","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->