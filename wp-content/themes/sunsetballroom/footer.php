<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

  

  <footer id="colophon" class="site-footer black_footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 text-left">
        <div class="footer-contact">
<?php echo do_shortcode('[widget id="text-2"]'); ?>
  </div>
      </div>
      <div class="col-lg-6 text-right">
        <?php echo do_shortcode('[widget id="text-3"]');?>
      </div>
    </div>
  </div>
<!--End-Sunset-Ballroom-Footer-section-->



    </footer><!-- #colophon -->

</div><!-- #page -->


<?php wp_footer(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.js" ></script>
  <script src="<?php bloginfo('template_url') ?>/js/slick.js" ></script>
<script>// When the DOM is ready, run this function
jQuery(document).ready(function() {
  //Set the carousel options
 jQuery('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});</script>

<script type="text/javascript">
var url = $(".modal iframe").attr('src');

jQuery('.modal').on('hidden.bs.modal', function (e) {
    $('.modal iframe').attr('src', '');
});

 $(".modal").on('show.bs.modal', function(){
        $(".modal iframe").attr('src', url);
    });
</script>
<script type="text/javascript">

/*jQuery(function(){
  jQuery('.modal').on('hidden.bs.modal', function (e) {
    $iframe = $(this).find("iframe");
    $iframe.attr("src", $iframe.attr("src"));
  });
});*/
</script>

<script type="text/javascript">
  jQuery(window).scroll(function(){
  var sticky = jQuery('.top_bar'),
      scroll = jQuery(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
</script>

<script type="text/javascript">
$(document).ready(function(){
     $(document).on('click','.sub-menu-toggle', function(e){
          $('.sub-menu-toggle').removeClass("show-menu");
          $('.sub-menu').removeClass("show-menu");  
          $(this).toggleClass("show-menu");
          $(this).parent().find('.sub-menu').toggleClass("show-menu");
     });
  });

$(document).ready(function(){
  $(".nav-item").hover(function(){
    $(this).toggleClass("active-sub-menu");
  });
});

</script>
<script type="text/javascript">
jQuery(document).ready(function(){
   $('.scrool_mouse').on('click', function(event) {

      var target = $(this.getAttribute('href'));

      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: target.offset().top-100
          }, 1100);
      }

  });
});

$(document).mouseup(function(e) 
{
    var container = $("#navbarSupportedContent");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
       $("#navbarSupportedContent").css( "display", "none");   
     
    }
});





</script>

<style type="text/css">
  .gj-datepicker [role="right-icon"] {
  display: none;
}
</style>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</body>
</html>
