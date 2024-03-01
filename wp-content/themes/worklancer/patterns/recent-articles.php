<?php

/**
 * Title: Recent Articles Block
 * Slug: worklancer/recent-articles
 * Categories: worklancer-patterns
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/bg_gradiant.png'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"100px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($worklancer_images[0]) ?>","id":2644,"source":"file","title":"gradiant-one-2"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"},"margin":{"bottom":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:60px"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"120px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading"} -->
            <h1 class="wp-block-heading is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading" style="font-size:120px;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php esc_html_e('Blogs', 'worklancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'worklancer') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"foregound-alt","style":{"border":{"radius":"50px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-text-color has-link-color wp-element-button" style="border-radius:50px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px"><?php esc_html_e('View All Articles', 'worklancer') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:query {"queryId":28,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
        <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"backgroundColor":"background"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center has-background-background-color has-background" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"height":"160px","style":{"border":{"radius":"10px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:post-terms {"term":"category","className":"is-style-default"} /-->

                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"10px"}}},"fontSize":"large"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-date {"fontSize":"x-small"} /--></div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->