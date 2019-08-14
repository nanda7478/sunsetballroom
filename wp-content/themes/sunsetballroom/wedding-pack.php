  <?php
    /**

     * Template Name: Wedding-pack template
    */

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

<!--Start Join-us section-->
    <div class="content-join-us">
    <div class="container about_txt">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h1><?php echo get_field('join_us');?></h1>
        </div>
      </div>
    </div>
    </div>
<!--End-Join-us section-->
<?php endwhile;?>

<div class="wedding-pack-main">
  <div class="wedding_package_wrapper">
      <?php 
      $i = 2;
		$args = array('post_type' => 'wedding','posts_per_page'=>'-1', 'order'=>'ASC');

		$loop = new WP_Query( $args );
		 while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php if($i%2 == 0) { ?>
      <div class="row margin-bottom-sec">
      <div class="col-lg-4 col-md-12 d-flex align-items-center gray-bg">
      <div class="inner-development"> 
       <h2><?php the_title(); ?></h2>
          <a href="<?php the_permalink(); ?>">Package Details</a>
        </div>
      </div>
		     <div class="col-lg-8 col-md-12">
        <div class="wedding-full-image"> 
			<a href="<?php the_permalink(); ?>"><?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div class="deluxe_wedding-Banner_full"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="wedding">
        </div></a>
      </div>
  </div>
  </div>
  <?php } else { ?>
  <div class="row margin-bottom-sec flex-row-reverse">
     <div class="col-lg-4 col-md-12 d-flex align-items-center gray-bg">
      <div class="inner-development"> 
       <h2><?php the_title(); ?></h2>
         <a href="<?php the_permalink(); ?>">Package Details</a>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="wedding-full-image"> 
      <a href="<?php the_permalink(); ?>"><?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div class="deluxe_wedding-Banner_full"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="wedding">
        </div></a>
      </div>
  </div>
    </div>
  <?php } ?>

      <?php $i++; endwhile;?>
  
  
</div>
</div>


<!--Wedding-Pack Main-Section-End-->

 <!--Start Main Service Section-->
 <?php while(have_posts()): the_post();?>
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
<?php endwhile;?>

<?php while(have_posts()): the_post();?>
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
<?php endwhile;?>
 <!--End Main Service Section-->
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
     // End of the loop.
    get_footer();

