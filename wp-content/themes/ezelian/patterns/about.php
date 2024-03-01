<?php
/**
 * Title: About
 * Slug: ezelian-about
 * Description: Display an about section
 * Categories: ezelian/about
 * Keywords: about, us
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"id":32,"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|main-duotone"}}} -->
                <figure class="wp-block-image size-large">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/patterns/images/office.webp" alt="" class="wp-image-32" style="aspect-ratio:3/4;object-fit:cover"/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
            <div class="wp-block-column">
                <!-- wp:paragraph -->
                <p>A theme made just for you</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"className":"gradient-text"} -->
                <h2 class="wp-block-heading gradient-text">Creating Stunning Designs Is Now For Everyone.</h2>
                <!-- /wp:heading -->
                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center">
                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center">
                        <!-- wp:paragraph -->
                        <p>Craft stunning websites without touching a line of code. Our theme brings beautiful design within reach for everyone.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph -->
                        <p>Your site will look amazing on any device! Our theme ensures that your design remains flawless and user-friendly.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph -->
                        <p>Discover a theme that follows the principles of good design. We've made it simple for you to create an intuitive and visually appealing user interface</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center">
                        <!-- wp:image {"id":51,"aspectRatio":"9/16","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|main-duotone"}}} -->
                        <figure class="wp-block-image size-large">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/patterns/images/man-working.webp" alt="" class="wp-image-51" style="aspect-ratio:9/16;object-fit:cover"/>
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->