<?php

/**
 * Title: Portfolio Block
 * Slug: worklancer/portfolio-showcase
 * Categories: worklancer-patterns
 */
$worklancer_url = trailingslashit(get_stylesheet_directory_uri());
$worklancer_images = array(
    $worklancer_url . 'assets/images/portfolio_1.jpg',
    $worklancer_url . 'assets/images/portfolio_2.jpg',
    $worklancer_url . 'assets/images/portfolio_3.jpg',
    $worklancer_url . 'assets/images/portfolio_4.jpg',
    $worklancer_url . 'assets/images/portfolio_5.jpg',
    $worklancer_url . 'assets/images/bg_gradiant.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($worklancer_images[5]) ?>","id":2644,"source":"file","title":"gradiant-one-2"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"120px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","lineHeight":"1.2"}},"className":"is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading"} -->
    <h1 class="wp-block-heading has-text-align-center is-style-fotawp-heading-transparentfill-outline-stroke-tertiary worklancer-big-heading" style="font-size:120px;font-style:normal;font-weight:700;line-height:1.2;text-transform:uppercase"><?php esc_html_e('Projects', 'worklancer') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","level":4} -->
    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('Explore some of my best portfolio', 'worklancer') ?></h4>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[0]) ?>","id":2754,"dimRatio":20,"minHeight":400,"contentPosition":"bottom center","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"0px","left":"30px","right":"30px"}}},"className":"fotawp-cover-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fotawp-cover-hover" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:0px;padding-left:30px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2754" alt="" src="<?php echo esc_url($worklancer_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"30px"}},"textColor":"foregound-alt"} -->
                    <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-link-color" style="font-size:30px"><?php esc_html_e('Portfolio One Title', 'worklancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:50px"><?php esc_html_e('Explore More', 'worklancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[1]) ?>","id":2767,"dimRatio":20,"minHeight":400,"contentPosition":"bottom center","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"0px","left":"30px","right":"30px"}}},"className":"fotawp-cover-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fotawp-cover-hover" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:0px;padding-left:30px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2767" alt="" src="<?php echo esc_url($worklancer_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"30px"}},"textColor":"foregound-alt"} -->
                    <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-link-color" style="font-size:30px"><?php esc_html_e('Portfolio Two Title', 'worklancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:50px"><?php esc_html_e('Explore More', 'worklancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[2]) ?>","id":2392,"dimRatio":20,"minHeight":280,"contentPosition":"bottom center","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"0px","left":"30px","right":"30px"}}},"className":"fotawp-cover-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fotawp-cover-hover" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:0px;padding-left:30px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2392" alt="" src="<?php echo esc_url($worklancer_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Portfolio Three Title', 'worklancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:50px"><?php esc_html_e('Explore More', 'worklancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[3]) ?>","id":2412,"dimRatio":20,"minHeight":280,"contentPosition":"bottom center","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"0px","left":"30px","right":"30px"}}},"className":"fotawp-cover-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fotawp-cover-hover" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:0px;padding-left:30px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2412" alt="" src="<?php echo esc_url($worklancer_images[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Portfolio Four Title', 'worklancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:50px"><?php esc_html_e('Explore More', 'worklancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($worklancer_images[4]) ?>","id":2411,"dimRatio":20,"minHeight":280,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"0px","left":"30px","right":"30px"}}},"className":"fotawp-cover-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center fotawp-cover-hover" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:0px;padding-left:30px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2411" alt="" src="<?php echo esc_url($worklancer_images[4]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-foregound-alt-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Portfolio Five Title', 'worklancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"primary","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-color has-foregound-alt-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:50px"><?php esc_html_e('Explore More', 'worklancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->