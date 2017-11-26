<div class="w3l-footer">
  <div class="container">
    <div class="w3agile_footer_copy">
      <p>© 2017 New Rizal Barbershop. </p>
    </div>
  </div>
</div>
  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
    <script>
      $(document).ready(function(){
        $(".dropdown").hover(
          function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
          },
          function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
          }
        );
      });
    </script>
  <!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.zoomslider.min.js"></script>
  <!-- search-jQuery -->
      <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <!-- pop-up-box -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->
<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
            <script>
              // You can also use "$(window).load(function() {"
              $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                auto: true,
                pager:false,
                nav:true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                  $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                  $('.events').append("<li>after event fired.</li>");
                }
                });

              });
             </script>

    <div id="small-dialog1" class="mfp-hide">
  <iframe src="https://player.vimeo.com/video/36382067"  frameborder="0" ></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
  <iframe src="https://player.vimeo.com/video/36382067"  frameborder="0" ></iframe>
</div>
<script>
  $(document).ready(function() {
  $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });

  });
</script>
<script src="<?php echo base_url(); ?>assets/js/mislider.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery(function ($) {
        var slider = $('.mis-stage').miSlider({
          //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
          stageHeight: 380,
          //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
          slidesOnStage: false,
          //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
          slidePosition: 'center',
          //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
          slideStart: 'mid',
          //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
          slideScaling: 150,
          //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
          offsetV: -5,
          //  Center slide contents vertically - Boolean. Default: false
          centerV: true,
          //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
          navButtonsOpacity: 1,
        });
      });
    </script>

<!--/script-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
      });
    });
</script>
<!-- flexSlider -->
      <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
      <script type="text/javascript">
      $(window).load(function(){
        $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
        });
      });
      </script>
    <!-- //flexSlider -->
<script type="text/javascript">
          $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
              containerHoverID: 'toTopHover', // fading element hover id
              scrollSpeed: 1200,
              easingType: 'linear'
            };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

          });
        </script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->




</body>
</html>
