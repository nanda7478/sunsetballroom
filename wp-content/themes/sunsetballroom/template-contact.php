<?php 
/* Template Name: Contact temp */

   get_header();
    while ( have_posts() ) :
                    the_post();

    ?>
<!--Start-header-Banner-Full-Sec-->
      <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div class="deluxe_wedding-Banner_full"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="wedding">
<!--End-header-Banner-Full-Sec-->
  <div class="get-in-touch-main">
	  <div class="container">
		  <div class="row">
			  
			  
			  <div class="col-sm-6">
				  <div class="form-left-inner">
					  <h4><?php echo get_field('contact_tittle');?></h4>
					   <?php echo do_shortcode('[contact-form-7 id="299" title="Contact form 1"]'); ?>
				  </div>
		  </div>
			  
			  
			  	  <div class="col-sm-6">
				  <div class="get-touch-right-inner">
					  <h4><?php echo get_field('get_tittle');?></h4>
					  <?php echo get_field('address');?>
				  </div>
		  </div>
		  </div>
	  </div>
	  
</div>
<div class="full-map-sec">
	<?php echo get_field('map');?>
	
</div>
  <!--Start Main Service Section-->
 <div class="our service-sec-main">
        <div class="container">
          <div class="row">
     <?php
  if( have_rows('services') ):
     $i = 0; 
    while ( have_rows('services') ) : the_row();
        
    
    ?>
   <div class="col-sm-4">
  <img class="img-fluid" src="<?php the_sub_field('bg_image'); ?>"/>
   <span><?php echo the_sub_field('icon');?></span> 
  
     <h2><?php echo the_sub_field('title');?></h2>  
     
      <p><?php echo the_sub_field('sub_tittle');?></p>
        
    <a href="<?php echo the_sub_field('button');?>"> Read More</a>
     
    </div><?php
      $i++;
    endwhile; ?>
     <?php
else :
    // no rows found
endif;

?>

    <?php  echo get_field('social_tittle'); ?>
      <?php  echo get_field('icon_face'); ?>
        <?php  echo get_field('icon_insta'); ?>
  </div>
  

</div></div>
    <!--End Main Service Section-->

<?php
    endwhile; // End of the loop.
    get_footer();
