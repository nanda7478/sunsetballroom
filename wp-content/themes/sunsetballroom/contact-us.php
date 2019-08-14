
<?php 
/* Template Name: Contact template */

   get_header();
    while ( have_posts() ) :
                    the_post();

    ?>
<!--Start-header-Banner-Full-Sec-->
<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<div class="autor-img"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">
<h1 class="text-center middle_txt"><?php echo the_title();?></h1>
</div>
<!--End-header-Banner-Full-Sec-->
<!--Contact Form And Address Main-section-->
  <div id="contact_section" class="get-in-touch-main">
	  <div class="container">
		  <div class="row flex-row-reverse justify-content-between">
			  
			  <div class="col-sm-12 col-md-6 col-lg-5">
				  <div class="get-touch-right-inner">
            <?php if( have_rows('address_sec') ): while ( have_rows('address_sec') ) : the_row(); ?>
  <h4 class="section_title text-center"><?php the_sub_field('get_title');?></h4>
           <div class="section_address text-center">
            <?php the_sub_field('address');?>
          </div>
     <?php endwhile; endif; ?>
				  </div>
		  </div>
	<!--Contact Form-Section Start-->		  
			  <div class="col-sm-12 col-md-6 col-lg-5">
				  <div class="form-left-inner">
    <?php if( have_rows('contact_form') ): while ( have_rows('contact_form') ) : the_row(); ?>
       <h4 class="section_title text-center"><?php echo get_field('contact_tittle');?></h4>
       <div class="section_form">
      <?php echo do_shortcode('[contact-form-7 id="299" title="Contact form 1"]'); ?>
    </div>
    <?php endwhile; endif; ?>
				  </div>
		  </div>
<!--Contact Form-Section End--> 	
		  </div>
	  </div>
	  
</div>

<!--End-Contact Form And Address Main-section-->
<div class="map_section">
  <div class="row">
    <div class="col-lg-12">
        <div class="full-map-sec">
     <?php echo get_field('map');?>
</div>
    </div>
  </div>
</div>
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
  

</div></div>

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

 <?php
    endwhile; // End of the loop.
    get_footer();
