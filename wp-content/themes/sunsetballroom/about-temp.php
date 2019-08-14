<?php
/**
 * The template name: About temp
  */

get_header();
?>

	<?php
while ( have_posts() ) :
				the_post();
?> 

          <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div class="autor-img"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">

<h1 class="text-center middle_txt"><?php echo the_title();?></h1>

          </div>
<!--Start-About-Us-Section-Head-Content-->
<div class="About-us-main-content-sec">
	
	<div class="container about_txt">
    <div class="row justify-content-center">
      <div class="col-lg-10">
		    <h1><?php echo get_field('event_content');?></h1>
      </div>
		</div>
	</div>
	
</div>
<!--End-About-Us-Section-Head-Content-->
<!--Start Content-Left-And-Image-Right-Sec-->
<div class="our-executive-chef-sec-main">
	<div class="container">
	<div class="wide_section">

<div class="container_max"> <div class="row"> 
		<div class="col-lg-4 col-md-12 bg_gray_left">
			<div class="Left-content-sec">
				<p><span class="left-content-inner"></span><?php echo get_field('executive-left');?></p>
			</div>
		</div>
		
		<div class="col-lg-8 col-md-12 full-pic-padd0">
			<div class="right-full-pic-sec">
				<div class="right-full-pic-inner">
				<img src="<?php echo get_field('executive-right');?>">
				
				</div>
			</div>
		</div>


</div> </div>
		
</div>
	</div>
</div>
<div class="our-executive-chef-sec-main">
  <div class="container">
  <div class="wide_section">

<div class="container_max"> <div class="row flex-row-reverse"> 
    <div class="col-lg-4 col-md-12 bg_gray_left">
      <div class="Left-content-sec">
        <p><span class="left-content-inner"></span><?php echo get_field('party-right');?></p>
      </div>
    </div>
    
    <div class="col-lg-8 col-md-12 full-pic-padd0">
      <div class="right-full-pic-sec">
        <div class="right-full-pic-inner">
        <img src="<?php echo get_field('party');?>">
        
        </div>
      </div>
    </div>


</div> </div>
    
</div>
  </div>
</div>
<!--End Content-Left-And-Image-Right-Sec-->

<!--Start Content-Left-And-Image-Right-Sec-->
<div class="attraction-sec-main">
	<div class="container">
	<div class="wide_section">

<div class="container_max"> <div class="row"> 
   <div class="col-lg-4 col-md-12 bg_gray_left">
			<div class="Left-content-sec">
				<p><span class="left-content-inner"></span><?php echo get_field('attraction-left');?></p>
			</div>
		</div>
		
		<div class="col-lg-8 col-md-12 full-pic-padd0">
			<div class="right-full-pic-sec">
				<div class="right-full-pic-inner">
				<img src="<?php echo get_field('attraction-right');?>">
				
				</div>
			</div>
		</div>

  </div></div>
		
</div>
	</div>
</div>
<!--End Content-Left-And-Image-Right-Sec-->
<!--Start-Testimonials-with-Carousel-->


 

<!-- Head tags to include FontAwesome -->
<div class="container testimonial-wrapper">
    <h2><?php the_field('testimonial_title');?></h2>
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
           $i = 0;
          while(have_rows('testimonials')): the_row();
            $image = get_sub_field('logo_image');
            ?>
      <div class="carousel-item <?php if($i == 0){ echo 'active'; } ?>">
         
               <!--  <div class="col-sm-3 text-center">
                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
                                  </div>-->
            
                  <?php the_sub_field('content');?>
                  <strong><?php the_sub_field('info');?> <a href="https://www.weddingwire.com/reviews/the-sunset-ballroom-point-pleasant-beach/e5c55f6d63342a4c.html"><img src="<?php echo $image['url'];?>" alt="" /></a></strong>
            
           </div>
     <?php 
           $i++;
        endwhile;
       
         ?> 
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 
                                
  

</div>
<!--End-Testimonials-with-Carousel-->
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
      <h2><?php the_field('get_social_title');?></h2>
    </div>
    <div class="row">
      <div class="col-md-12 touch_social">
     <ul>
    <?php if( have_rows('get_social') ): while ( have_rows('get_social') ) : the_row(); ?>
      <li> <a href="https://www.facebook.com/TheSunsetBallroom/"><img src="<?php echo the_sub_field('facebook'); ?>" alt="" /> </a> </li>
       <li> <a href="#"><img src="<?php echo the_sub_field('instagram'); ?>" alt="" /> </a> </li>
    <?php endwhile; endif; ?>
  </ul>

 </div>
    </div>
  </div>
</section>

 <!--End Main Service Section-->
 <!--End Full Bg And Content Section-->

<section class="about_contact">
    <!--Contact-Us-Panel-sec-->

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

<!--End-Contact-Us-Panel-sec-->
    </section>

<?php
endwhile;
?>



<?php
get_footer();
