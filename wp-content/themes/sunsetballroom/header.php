<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/tbl6dqh.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="top_bar">
	<div class="container-fluid">
		<?php //wp_nav_menu( array( 'theme_location' => 'primary' ,'menu' => 'header-menu') ); ?>



<nav class="navbar navbar-expand-lg justify-content-between navbar-light">
<a class="navbar-brand" href="<?php bloginfo('url') ?>"> 
		 	<?php
      $image_logo_sticky = get_field('header_sticky_logo', 'option');
      $image_logo = get_field('header_logo', 'option')

		 	//$custom_logo_id = get_theme_mod( 'custom_logo' );
//$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
        <img class="image-1"  src="<?php echo $image_logo['url'];?>">
        <img class="image-2" src="<?php echo $image_logo_sticky['url'];?>">
        
       </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navigation-div">
  	<?php echo do_shortcode('[widget id="text-3"]'); ?>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-times"></i>
  </button>
	  <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu' => 'header-menu','menu_class'=> 'navbar-nav mr-auto'        
	) ); ?>
	  </div>
  </div>
</nav>



	</div>
</header>
 
	