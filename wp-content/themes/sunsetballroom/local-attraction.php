<?php 
   /* Template Name: Local-Attraction temp */
   
      get_header();
       while ( have_posts() ) :
                       the_post();
   
       ?>
<!--Start-header-Banner-Full-Sec-->
<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<div class="autor-img">
   <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">
   <h1 class="text-center middle_txt"><?php echo the_title();?></h1>
</div>
<!--End-header-Banner-Full-Sec-->
<!--Start-About-Us-Section-Head-Content-->
<div class="About-us-main-content-sec">
   <div class="container about_txt">
      <div class="row">
         <div class="col-lg-12">
            <h1><?php echo get_field('join_us');?></h1>
         </div>
      </div>
   </div>
</div>
<!--End-About-Us-Section-Head-Content-->


<div class="our-executive-chef-sec-main local-attract">
   <div class="container">
      <div class="wide_section">
         <div class="container_max">
            <div class="row">
               <?php $places_to_stay = get_field('places_to_stay');
                  ?>
               <div class="col-lg-6 col-md-12 bg_gray_left">
                  <div class="Left-content-sec">
                     <h2><?php echo $places_to_stay['tittle']; ?></h2>
                     <p><span class="left-content-inner"></span><?php echo $places_to_stay['content']; ?></p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 full-pic-padd0">
                  <div class="right-full-pic-sec">
                     <div class="right-full-pic-inner">
                        <img src="<?php echo $places_to_stay['right_sec']; ?>">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="our-executive-chef-sec-main local-attract">
   <div class="container">
      <div class="wide_section">
         <div class="container_max">
            <div class="row flex-row-reverse">
               <?php $entertainment = get_field('entertainment');
                  ?>
               <div class="col-lg-6 col-md-12 bg_gray_left">
                  <div class="Left-content-sec">
                     <h2><?php echo $entertainment['tittle']; ?></h2>
                     <p><span class="left-content-inner"></span><?php echo $entertainment['content']; ?></p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 full-pic-padd0">
                  <div class="right-full-pic-sec">
                     <div class="right-full-pic-inner">
                        <img src="<?php echo $entertainment['left-sec']; ?>">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="our-executive-chef-sec-main local-attract">
   <div class="container">
      <div class="wide_section">
         <div class="container_max">
            <div class="row">
               <?php $local_beaches = get_field('local_beaches');
                  ?>
               <div class="col-lg-6 col-md-12 bg_gray_left">
                  <div class="Left-content-sec br-none-md">
                     <h2><?php echo $local_beaches['tittle']; ?></h2>
                     <p><span class="left-content-inner"><?php echo $local_beaches['content']; ?></span></p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 full-pic-padd0">
                  <div class="right-full-pic-sec">
                     <div class="right-full-pic-inner">
                        <img src="<?php echo $local_beaches['right_sec']; ?>">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="our-executive-chef-sec-main local-attract">
   <div class="container">
      <div class="wide_section">
         <div class="container_max">
            <div class="row flex-row-reverse">
               <?php $shopping = get_field('shopping');
                  ?>
               <div class="col-lg-6 col-md-12 bg_gray_left">
                  <div class="Left-content-sec">
                     <h2><?php echo $shopping['tittle']; ?></h2>
                     <p><span class="left-content-inner"></span><?php echo $shopping['content']; ?></p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 full-pic-padd0">
                  <div class="right-full-pic-sec">
                     <div class="right-full-pic-inner">
                        <img src="<?php echo $shopping['left_sec']; ?>">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>





<!--End-Shopping-And-Sport-sec-->	
<!--Start Main Service Section-->
<!--Start Main Service Section-->
<div class="our service-sec-main">
   <div class="container">
      <div class="row justify-content-center">
         <?php
            if( have_rows('services') ):
               $i = 0; 
              while ( have_rows('services') ) : the_row();
              ?>
         <div class="col-lg-4 col-md-6">
            <div class="pos_title">
               <img class="img-fluid" src="<?php the_sub_field('bg_image'); ?>"/>
               <div class="overlay">
                  <div class="overlayin">
                     <div class="overly-contect">
                        <img src="<?php echo the_sub_field('icon_image');?>">
                        <h4><?php echo the_sub_field('title');?></h4>
                        <h2><?php echo the_sub_field('sub_tittle');?></h2>
                        <a class="button" href="<?php the_sub_field('service_button_url');?>"><?php the_sub_field('service_button_title');?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php
            $i++;
            endwhile; ?>
         <?php
            else :
                // no rows found
            endif;
            ?>
      </div>
   </div>
</div>
<section class="get_touch_social_section">
   <div class="container">
      <div class="page_head_section text-center">
      </div>
      <div class="row">
         <div class="col-md-12 touch_social">
            <ul>
               <?php if( have_rows('get_social') ): while ( have_rows('get_social') ) : the_row(); ?>
               <h2><?php echo the_sub_field('social_tittle');?></h2>
               <li> <a href="https://www.facebook.com/TheSunsetBallroom/"><img src="<?php echo the_sub_field('facebook'); ?>" alt="" /> </a> </li>
               <li> <a href="#"><img src="<?php echo the_sub_field('instagram'); ?>" alt="" /> </a> </li>
               <?php endwhile; endif; ?>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--End Main Service Section-->
<div class="get-social-with-us-main">
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
<!--End-Get-In_Touch-Section-->	
<?php
endwhile; // End of the loop.
get_footer();