<?php
/*
 Display Template Name: Terms & Conditions
*/
get_header();
?>
<?php while(have_posts()): the_post(); ?>
  <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div class="autor-img"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">
         <h1 class="text-center middle_txt"><?php echo the_title();?></h1>
          </div>

<section id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class="container">
        	<div class="entry-content">
        		<span>Last Updated :<?php echo date(get_option('date_format')); ?></span>
         <?php the_field('content');?>
         </div>
     </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php endwhile;?>
<?php
get_footer();
?>