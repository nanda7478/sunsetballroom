<?php
/**
 * The template for displaying all single posts
 * Template Name : Home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
 
	<div class="home slider-sec-main">
		<div class="container">

<?php

// check if the repeater field has rows of data 
if( have_rows('slider') ):

 	// loop through the rows of data
    while ( have_rows('slider') ) : the_row();

        // display a sub field value
        the_sub_field('image');
        the_sub_field('title');
        the_sub_field('sub_title');


    endwhile;

else :

    // no rows found

endif;

?>

		</div>

</div>


<div class="contact-sec-main">
	<div class="container">

<div class="row"> 
<?php echo do_shortcode('[contact-form-7 id="300" title="Contact Us"]'); ?> 
</div>

</div>
</div>
<?php
get_footer();
