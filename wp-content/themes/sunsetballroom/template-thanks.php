    <?php
    /**

     * Template Name: Thanks template
    */

    get_header();
    while ( have_posts() ) :
                    the_post();

    ?>

       <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
          <section id="thanks_section" class="thanks-img" style="background: url(<?php echo $feat_image; ?>);">
            <div class="thanks-container">
              <h1><?php echo the_title();?></h1>
              <?php if( have_rows('reach') ): while ( have_rows('reach') ) : the_row(); ?>
        <h6><?php echo the_sub_field('sub_tittle');?></h6>
       <a class="button" href="<?php the_sub_field('button_url');?>"><?php the_sub_field('button_tittle');?></a>
    <?php endwhile; endif; ?>
  </div>
 </section>


 <?php
    endwhile; // End of the loop.
    get_footer();