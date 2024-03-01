<?php
/**
 * Title: Call To Action
 * Slug: ezelian-cta
 * Description: Display a full-width call to action.
 * Categories: ezelian/cta
 * Keywords: call to action, cta, contact
 * Inserter: true
 */
?>


<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/pyramid.webp","id":10,"dimRatio":50} -->
<div class="wp-block-cover">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
        <img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/patterns/images/pyramid.webp" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
            <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:column {"width":"33.33%"} -->
                <div class="wp-block-column" style="flex-basis:33.33%"></div>
                <!-- /wp:column -->
                <!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"right":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large","top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"className":"glass","layout":{"type":"default"}} -->
                <div class="wp-block-column glass" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large);flex-basis:66.66%">
                    <!-- wp:heading -->
                    <h2 class="wp-block-heading">Ready for Digital Brilliance? Release Your Website's Potential</h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Transform your online presence with our cutting-edge theme – where creativity meets functionality. Elevate your site's aesthetics, captivate your audience with vibrant designs, and dominate the competition effortlessly. Unleash the power of seamless customization, striking patterns, and user-friendly features. Your journey to a stunning website begins now. Embrace the extraordinary – get started today!</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button">Give me the Ezelian Theme!</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->