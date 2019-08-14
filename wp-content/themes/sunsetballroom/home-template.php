    <?php
    /**

     * Template Name: Home template
    */

    get_header();
    while ( have_posts() ) :
                    the_post();

    ?>



    <!--Slider test-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 <!--Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleControls" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
  <div class="carousel-inner">
     <?php
	if( have_rows('slider') ):
   	 $i = 0; 
	  while ( have_rows('slider') ) : the_row();
	  
	  ?>
	 <div class="carousel-item <?php if($i === 0) { ?> active <?php } ?> ">
	<img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>
		<div class="main_slider"> 
     <a href="<?php get_permalink();?>"><img class="slider-logo" src="<?php echo the_sub_field('logo');?>"> </a>
		  <p><?php echo the_sub_field('sub_title');?> </p>
      <a href="#scrool_mouse" class="scrool_mouse"><img src="<?php echo the_sub_field('arrow');?>"></a>
      <h6 class="slide_caption">Sunset Time: <?php the_modified_time('g:i a'); ?></h6>
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
 
 <!-- 
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->

</div>
    <!--slider test-->

<!--End Join-us section-->
    <div id="scrool_mouse" class="content-join-us about_txt">
    <div class="container">
     <h1 class="col-md-10 offset-md-1"> <?php echo get_field('join_us');?> </h1>
    </div>
    </div>
	
<!--Start Main Service Section-->
<div  class="our service-sec-main">
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
 <!--Start Full Bg And Content Section-->
   <!--Start-Event Information-Sec-->		  
			  <div class="event-information-main">  
				 
 
    <?php if( have_rows('events') ): while ( have_rows('events') ) : the_row(); ?>
    
	<div class="Event-information-full-banner">
		<div class="event-full-banner"><img src="<?php echo the_sub_field('event-banner'); ?>"></div>

		<div class="event_pos">
    <h4 class="event-title"><?php echo the_sub_field('tittle'); ?></h4>
		<p class="event-inner"><?php echo the_sub_field('sub_tittle'); ?></p>
		<a href="<?php echo get_permalink();?>">Register Now</a></div>

	</div> 
		
    
    <?php endwhile; else : endif; ?>
   
 </div>
<!--End-Event-Information-Sec-->

   <div class="container">
		<div class="contact-title">
			<h2>
				<?php //echo get_field('contact_title');?>
			</h2>
			<h6>
				<?php //echo get_field('contect_content');?>
			</h6>
		</div>
        <?php //echo do_shortcode('[contact-form-7 id="300" title="Contact Us"]'); ?>
    </div>


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


    <?php
    endwhile; // End of the loop.
    get_footer();
    ?>

