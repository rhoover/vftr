<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package vftr
 */
?>

</main><!-- /.main a.k.a.: content -->

<!-- <h3>Valley Forge Trail Riders - Your Path To Greatness</h3>
    <?php wp_footer(); ?> -->
 <!-- Asynchronous Grab of Custom Modernizr Cuz IE Is Horrible -->
<script>
    (function(d,t) {
            var g = d.createElement(t),
            s = d.getElementsByTagName(t);
            s = s[s.length-1];
            g.src = '<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.60250.js';
            s.parentNode.insertBefore(g,s);
    }(document, 'script'));
</script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<?php $templateURL = get_bloginfo('template_url'); ?>

<script src="<?php echo $templateURL ?>/libraries/angular/angular.js"></script>

<script src="<?php echo $templateURL ?>/libraries/angular-animate/angular-animate.min.js"></script>
<script src="<?php echo $templateURL ?>/libraries/angular-route/angular-route.min.js"></script>
<script src="<?php echo $templateURL ?>/libraries/angular-touch/angular-touch.min.js"></script>

<script src="<?php echo $templateURL ?>/js/vftr-angular/app.js"></script>

<script src="<?php echo $templateURL ?>/js/vftr-angular/services/moonshine-2013-results.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/services/googlemap.js"></script>

<script src="<?php echo $templateURL ?>/js/vftr-angular/controllers/root.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/responsive-trigger.js"></script>
<!-- <script src="<?php echo $templateURL ?>/js/vftr-angular/directives/fixed-elements.js"></script> -->
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/mobile-nav-move.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/mobile-backbutton.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/menu-item-fade.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/moonshine2013.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/mobile-maps-move.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/meetingmap.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/enduromap.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/scramblesmap.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/moonshine-2014-entry.js"></script>

<!-- Production Scripts, Don't Forget rev on vftr.js, grunt-usemin freaks out over php in paths. Don't Forget async loading for production:
    http://www.html5rocks.com/en/tutorials/speed/script-loading/
<script src="<?php echo $templateURL ?>/libraries/angular/angular.min.js"></script>
<script src="<?php echo $templateURL ?>/libraries/angular/angular-modules.min.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/vftr.js"></script>
 -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47123804-1', 'vftr.org');
  ga('send', 'pageview');

</script>

</body>
</html>