<?php
/**
 * Title: Hero
 * Slug: ezelian-hero
 * Description: Display a hero section
 * Categories: ezelian/hero
 * Keywords: hero, main
 * Inserter: true
 */
?>
<!-- wp:group {"className":"top-gradient","layout":{"type":"constrained"}} -->
<div class="wp-block-group top-gradient">
        <!-- wp:template-part {"slug":"header","theme":"ezelian"} /-->
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"1240px"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"dimensions":{"minHeight":"59vh"},"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group" style="min-height:59vh">
                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"7rem"}},"className":"gradient-text"} -->
                <h2 class="wp-block-heading has-text-align-center gradient-text" style="font-size:7rem">Web design made simple, just for you.</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">The future of the web is here, are you going to be a part of it?</p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button">Explore</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
            <!-- wp:image {"align":"center","id":40,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|main-duotone"}}} -->
            <figure class="wp-block-image aligncenter size-large">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/patterns/images/computer.webp" alt="" class="wp-image-40"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->