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

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<!--Start-header-Banner-Full-Sec-->
       <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <div class="autor-img"> <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">
<h1 class="text-center middle_txt"><?php echo the_title();?></h1>

<?php echo the_content();?>
</div>
         
<!--End-header-Banner-Full-Sec--> 

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
