<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <?php if(get_theme_mod('restaurant_food_delivery_archive_sidebar_layout', 'Right Sidebar') == 'Right Sidebar'){ ?>
      <div class="col-lg-8 col-md-8 mt-5">
        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content', get_post_format() );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'restaurant-food-delivery' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <?php } elseif(get_theme_mod('restaurant_food_delivery_archive_sidebar_layout', 'Right Sidebar') == 'Left Sidebar'){ ?>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
       <div class="col-lg-8 col-md-8 mt-5">
        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content', get_post_format() );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'restaurant-food-delivery' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
 
<?php get_footer(); ?>