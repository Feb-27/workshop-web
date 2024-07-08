<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hairstylist Salon
 */
?>

<div class="sidebar-area">
  <?php if ( ! dynamic_sidebar( 'hairstylist-salon-sidebar' ) ) : ?>
    <div role="complementary" aria-label="sidebar1" id="Search" class="sidebar-widget">
      <h4 class="title" ><?php esc_html_e( 'Search', 'hairstylist-salon' ); ?></h4>
      <?php get_search_form(); ?>
    </div>
    <div role="complementary" aria-label="sidebar2" id="archives" class="sidebar-widget">
      <h4 class="title" ><?php esc_html_e( 'Archives', 'hairstylist-salon' ); ?></h4>
      <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </div>
    <div role="complementary" aria-label="sidebar3" id="tag-cloud" class="sidebar-widget">
      <h4 class="title" ><?php esc_html_e( 'Tag Cloud', 'hairstylist-salon' ); ?></h4>
      <?php wp_tag_cloud(); ?>
    </div>
    <div role="complementary" aria-label="sidebar4" id="meta" class="sidebar-widget">
      <h4 class="title"><?php esc_html_e( 'Meta', 'hairstylist-salon' ); ?></h4>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </div>
  <?php endif; // end sidebar widget area ?>
</div>