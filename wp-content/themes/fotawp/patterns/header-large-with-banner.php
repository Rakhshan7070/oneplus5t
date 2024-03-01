<?php

/**
 * Title: Header large with banner
 * Slug: fotawp/header-large-with-banner
 * Categories: fotawp,header, fotawp-header
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/banner_featured_image.png',
);
?>
<!-- wp:cover {"minHeight":760,"minHeightUnit":"px","gradient":"first-primary-gradient","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-first-primary-gradient-gradient-background"></span>
  <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":50,"shouldSyncIcon":false} /-->

          <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"large"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
          <!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

          <!-- wp:navigation-link {"label":"Style Guide","url":"#","kind":"custom","isTopLevelLink":true} /-->

          <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

          <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
          <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"74px"} -->
    <div style="height:74px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
      <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"47%","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0"}}},"className":"is-style-default"} -->
        <div class="wp-block-column is-vertically-aligned-center is-style-default" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:0;flex-basis:47%"><!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.1,"fontSize":"55px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foregound-alt"} -->
          <h2 class="wp-block-heading alignwide has-text-align-left has-foregound-alt-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:55px;font-style:normal;font-weight:500;line-height:1.1"><?php echo esc_html__('Make a Wise Decision, Get Website Today for Better Business!', 'fotawp') ?></h2>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foregound-alt","fontSize":"medium"} -->
          <p class="has-foregound-alt-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--60);line-height:1.8"><?php echo esc_html__('The placeholder text, beginning with the line lorem ipsum looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
          <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"1.2rem","bottom":"1.2rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" style="border-radius:10px;padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html__('Request Demo', 'fotawp') ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"1.2rem","right":"var:preset|spacing|50","bottom":"1.2rem","left":"var:preset|spacing|50"}}},"fontSize":"small"} -->
            <div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" style="border-radius:10px;padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html__('Schedule Call', 'fotawp') ?></a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"align":"right","id":1828,"sizeSlug":"full","linkDestination":"none"} -->
          <figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1828" /></figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"76px"} -->
    <div style="height:76px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
  </div>
</div>
<!-- /wp:cover -->