<?php
   /**
    * Display Template Name: Galleries
    */
   
   get_header();
   ?>
<?php while ( have_posts() ) : the_post();?>
<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<div class="autor-img">
   <img class="img-responsive" src="<?php echo $feat_image; ?>" alt="slider">
   <h1 class="text-center middle_txt"><?php echo the_title();?></h1>
</div>
<div class="post-content">
   <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
</div>
<!--.post-content-->  
<div class="main-gallery-div">
   <div class="container-fluid">
      <div class="panel panel-primary">
         <div class="panel-heading">
            <span class="pull-right">
               <!-- Tabs -->
               <ul class="nav panel-tabs">
                  <li><a class="<?php if($_GET['list'] == 'list'){echo ''; }else{ echo 'active'; } ?>" href="#tab1" data-toggle="tab">Photo</a></li>
                  <li><a class="<?php if($_GET['list'] == 'list'){echo 'active'; } ?>" href="#tab2"  data-toggle="tab">Video</a></li>
               </ul>
            </span>
         </div>
         <div class="panel-body">
            <div class="tab-content">
               <div class="tab-pane <?php if($_GET['list'] == 'list'){echo ''; }else{ echo 'active'; } ?>" id="tab1">
                  <ul>
                     <?php
                        if( get_query_var('page') ) {
                        $page = get_query_var( 'page' );
                        } else {
                        $page = 1;
                        }
                        // Variables
                        $row              = 0;
                        $images_per_page  = 12; // How many images to display on each page
                        $images           = get_field( 'gallery_image' );
                        $total            = count( $images );
                        $pages            = ceil( $total / $images_per_page );
                        $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
                        $max              = ( $min + $images_per_page ) - 1;
                        
                        // ACF Loop
                        if( have_rows( 'gallery_image' ) ) : ?>
                     <?php while( have_rows( 'gallery_image' ) ): the_row();
                        $row++;
                        
                        // Ignore this image if $row is lower than $min
                        if($row < $min) { continue; }
                        
                        // Stop loop completely if $row is higher than $max
                        if($row > $max) { break; } ?> 
                        <?php 
                        $thumb_image = get_sub_field('gallery_thumbnail_photo');
                        $image = get_sub_field('gallery_photo');
                        ?>                   
                     <li class="thumb photo_gallery_img">
                     <a href="<?php echo $image['sizes']['large'];?>" class="fancybox" rel="ligthbox" title="<?php the_sub_field('gallery_photo_user_name');?>">
                    <img src="<?php echo $thumb_image['sizes']['large'];?>" class="zoom img-fluid "  alt="">
                    <div class="author_name"><span><?php the_sub_field('gallery_photo_user_name');?></span></div>
                    </a>
                        <!-- <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                           data-image="<?php echo $image['url'];?>"
                           data-target="#image-gallery" data-content="<?php the_sub_field('image_description');?>">
                           <img class="img-thumbnail" src="<?php echo $thumb_image['url'];?>">
                          <div class="author_name"><span><?php the_sub_field('gallery_photo_user_name');?></span></div>
                        </a> -->
                     </li>
                     <?php endwhile; ?>
                     <?php endif; ?>
                     <div class="clearfix"></div>
                     <!-- <div class="row text-center pagenation-div">
                        <div class="col-md-12"> 
                           <?php 
                              
                              echo paginate_links( array(
                              'base' => get_permalink() . '%#%' . '/',
                              'format' => '?page=%#%',
                              'current' => $page,
                              'total' => $pages,
                              
                              ) );
                              ?>
                        </div>
                     </div> -->
                  </ul>
               </div>
               <div class="tab-pane <?php if($_GET['list'] == 'list'){echo 'active'; } ?>" id="tab2">
                  <ul class="video-list">
                     <?php
                        if( get_query_var('page') ) {
                        $page = get_query_var( 'page' );
                        } else {
                        $page = 1;
                        }
                        // Variables
                        $row              = 0;
                        $images_per_page  = 12; // How many images to display on each page
                        $images           = get_field( 'gallery_video' );
                        $total            = count( $images );
                        $pages            = ceil( $total / $images_per_page );
                        $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
                        $max              = ( $min + $images_per_page ) - 1;
                        
                        // ACF Loop
                        if( have_rows( 'gallery_video' ) ) : ?>
                     <?php $counter = 1 ?>   
                     <?php while( have_rows( 'gallery_video' ) ): the_row();
                        $row++;
                        
                        // Ignore this image if $row is lower than $min
                        if($row < $min) { continue; }
                        
                        // Stop loop completely if $row is higher than $max
                        if($row > $max) { break; } ?>                     
                     <li class="video-list">
                        <img class="img-thumbnail" src="<?php echo the_sub_field('add_video_image');?>">
                        <a href="#" data-toggle="modal" data-target="#video<?php echo $counter; ?>"> <span class="full-video"><i class="far fa-play-circle"></i></span></a>



                        <div class="modal fade" id="video<?php echo $counter; ?>">
                           <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <button type="button" class="close" data-dismiss="modal" >
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <iframe src="<?php echo the_sub_field('video');?>" width="500" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <?php $counter++;endwhile; ?>
                     <?php endif; ?>
                     <div class="clearfix"></div>
                     <!-- <div class="row text-center pagenation-div">
                        <div class="col-md-12"> 
                           <?php 
                              echo paginate_links( array(
                              'base' => get_permalink() . '%#%' . '/?list=list',
                              'format' => '?page=%#%',
                              'current' => $page,
                              'total' => $pages,
                              
                              ) );
                              ?>
                        </div>
                     </div> -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Special-Thanks-Person-Sec-Start-->
<!-- <div class="our-person-special-thanks">
   <div class="container">
      <?php //if( have_rows('special_thanks') ): while ( have_rows('special_thanks') ) : the_row(); ?>
      <div class="prices-items-sec">
         <h4><?php //echo the_sub_field('title'); ?></h4>
         <p><?php //echo the_sub_field('sub_title'); ?></p>
         <span><?php //echo the_sub_field('person'); ?></span>
      </div>
      <?php //endwhile;  endif; ?>
   </div> -->
   <!--Special-Thanks-Person-Sec-Start-->
   <!--Contact-Us-Panel-sec-->
   <div class="get-social-with-us-main">
      <div class="container">
         <div class="row">
            <div class="col-md-12 about_contact-title">
               <?php if( have_rows('contact_us') ): while ( have_rows('contact_us') ) : the_row(); ?>
               <h4 class="get-social-title"><?php echo the_sub_field('tittle'); ?></h4>
               <p class="contact-sub-head"><?php echo the_sub_field('sub_tittle'); ?></p>
               <div class="get-social-sec">
                  <?php echo do_shortcode('[contact-form-7 id="300" title="Contact Us"]'); ?>
               </div>
               <?php endwhile; else : endif; ?>
            </div>
         </div>
      </div>
   </div>
   <?php endwhile;?>
   <?php
      get_footer();
      ?>
   <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
               </button>
               <img id="image-gallery-image" class="img-responsive" src="">
               <div class="button-div">
                 <button type="button" class="float-left previ" id="show-previous-image"><i class="fas fa-chevron-left"></i>
               </button>
               <button type="button" id="show-next-image" class="float-right next"><i class="fas fa-chevron-right"></i>
               </button>

               </div>

            </div>
            <div class="modal-footer">
               <div class="content_section"></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<style type="text/css">
   .btn:focus, .btn:active, button:focus, button:active {
   outline: none !important;
   box-shadow: none !important;
   }
   #image-gallery .modal-footer{
   display: block;
   }
   .thumb{
   margin-top: 15px;
   margin-bottom: 15px;
   }
</style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>
<script type="text/javascript">
   let modalId = $('#image-gallery');
   
   $(document)
   .ready(function () {
   
     loadGallery(true, 'a.thumbnail');
   
     //This function disables buttons when needed
     function disableButtons(counter_max, counter_current) {
       $('#show-previous-image, #show-next-image')
         .show();
       if (counter_max === counter_current) {
         $('#show-next-image')
           .hide();
       } else if (counter_current === 1) {
         $('#show-previous-image')
           .hide();
       }
     }
   
     /**
      *
      * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
      * @param setClickAttr  Sets the attribute for the click handler.
      */
   
     function loadGallery(setIDs, setClickAttr) {
       let current_image,
         selector,
         counter = 0;
   
       $('#show-next-image, #show-previous-image')
         .click(function () {
           if ($(this)
             .attr('id') === 'show-previous-image') {
             current_image--;
           } else {
             current_image++;
           }
   
           selector = $('[data-image-id="' + current_image + '"]');
           updateGallery(selector);
         });
   
       function updateGallery(selector) {
         let $sel = selector;
         current_image = $sel.data('image-id');
         $('#image-gallery-title')
           .text($sel.data('title'));
         $('#image-gallery-image')
           .attr('src', $sel.data('image'));
         disableButtons(counter, $sel.data('image-id'));
       }
   
       if (setIDs == true) {
         $('[data-image-id]')
           .each(function () {
             counter++;
             $(this)
               .attr('data-image-id', counter);
           });
       }
       $(setClickAttr)
         .on('click', function () {
           updateGallery($(this));
         });
     }
   });
   
   // build key actions
   $(document)
   .keydown(function (e) {
     switch (e.which) {
       case 37: // left
         if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
           $('#show-previous-image')
             .click();
         }
         break;
   
       case 39: // right
         if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
           $('#show-next-image')
             .click();
         }
         break;
   
       default:
         return; // exit this handler for other keys
     }
     e.preventDefault(); // prevent the default action (scroll / move caret)
   });
   
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.thumbnail').on('click', function(){
      var content = $(this).data('content');
      $(".modal-footer .content_section").html(content);
    })
  })
</script>
