<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area page404">
		<main id="main" class="site-main">
                <div class="container-fluid">	
                	<div class="row ">
                		<div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center" >
				  <div class="page-content">
				<a href="<?php bloginfo('url');?>"><img src="http://demosrvr.com/wp/sunsetballroom/wp-content/uploads/2019/04/404_page.png"></a>
				</div>
				</div>
				<div class="col-lg-8 col-md-12 d-flex align-items-center justify-content-center ">
				  <div class="page-content">
				  	<img src="http://demosrvr.com/wp/sunsetballroom/wp-content/uploads/2019/04/404_page1.png">
					<a href="<?php bloginfo('url');?>" class="back-to-home">Go Back Home</a>
					<?php //get_search_form(); ?>
				</div>
				</div><!-- .page-content -->
				
			
			<!-- .error-404 -->
</div>
</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
