<?php
   /**
    * The template for displaying all single posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    *
    * @package WordPress
    * @subpackage Twenty_Nineteen
    * @since 1.0.0
    */
   
   get_header();
   ?>
<?php
   while ( have_posts() ) :
         the_post();
       ?>
<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<div class="autor-img">
   <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">
   <h1 class="text-center middle_txt"><?php the_title();?></h1>
</div>
<?php endwhile;?>
<section id="primary" class="content-area single_wedding_package">
   <main id="main" class="site-main">
      <?php
         /* Start the Loop */
         while ( have_posts() ) :
           the_post();
         ?>
      <!--Deluxe wedding-Price-sec-Start-->
      <div class="price_list-inner">
         <div class="container">
            <div class="wedding_sub_title_wraper text-center">
               <?php if( have_rows('price_list') ): while ( have_rows('price_list') ) : the_row(); ?>
               <h4 class="price-title"><?php echo the_sub_field('title'); ?></h4>
               <?php endwhile; else : endif; ?>
            </div>
            <div class="wedding-price-list-ul">
              <?php if( have_rows('price_list') ): while ( have_rows('price_list') ) : the_row(); ?>
              <?php echo the_sub_field('day'); ?>
              <?php endwhile; else : endif; ?>
            </div>
         </div>
      </div>
      <!--Deluxe wedding-Price-sec-End-->
      <!--Cocktail-Hour-sec-Start-->
      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('cocktail_hour') ): while ( have_rows('cocktail_hour') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span> </h4>
               <?php endwhile; else : endif; ?>
            </div>
            <?php if( have_rows('cocktail_hour') ): while ( have_rows('cocktail_hour') ) : the_row(); ?>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>

      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('horsd_oeuvers') ): while ( have_rows('horsd_oeuvers') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
          
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('sub_content'); ?></span>
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>

      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('chafing_dish_items') ): while ( have_rows('chafing_dish_items') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>


      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('gold_platters') ): while ( have_rows('gold_platters') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>

      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('first_course') ): while ( have_rows('first_course') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>


      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('salad') ): while ( have_rows('salad') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>

      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('entree_selections') ): while ( have_rows('entree_selections') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?> </span><span class="hour-inner"><?php echo the_sub_field('sub_tittle_bottom'); ?> </span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>

      <div class="cocktail-hour-main-sec">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('desserts') ): while ( have_rows('desserts') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>


      <div class="cocktail-hour-main-sec ">
         <div class="container">
            <div class="cocktail_title_wrapper text-center">
               <?php if( have_rows('prices_include') ): while ( have_rows('prices_include') ) : the_row(); ?>
               <h4 class="cocktail-hour-title"><?php echo the_sub_field('tittle'); ?><span class="hour-inner"><?php echo the_sub_field('sub_tittle'); ?></span></h4> 
            </div>
            <div class="hour-data-inner text-center">
               <span class="hour-content-inner price-in"><?php echo the_sub_field('content'); ?></span>
            </div>
            <?php endwhile; else : endif; ?>
         </div>
      </div>
      
      
      
      <!--Contact-Us-Panel-sec-->
      <div class="get-social-with-us-main price_list_social">
         <div class="container">
            <div class="row">
               <div class="col-md-12 about_contact-title">
                  <?php if( have_rows('contact_us') ): while ( have_rows('contact_us') ) : the_row(); ?>
                  <div class="page_section_head">
                     <h4 class="get-social-title"><?php echo the_sub_field('tittle'); ?></h4>
                     <p class="contact-sub-head"><?php echo the_sub_field('sub_tittle'); ?></p>
                  </div>
                  <div class="get-social-sec">
                     <?php echo do_shortcode('[contact-form-7 id="300" title="Contact Us"]'); ?>
                  </div>
                  <?php endwhile; else : endif; ?>
               </div>
            </div>
         </div>
      </div>
      <!--End-Contact-Us-Panel-sec-->
      <?php
         endwhile; // End of the loop.
               ?>
   </main>
   <!-- #main -->   
</section>
<!-- #primary -->
<?php
get_footer();