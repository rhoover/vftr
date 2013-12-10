<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package vftr
 */
?>

    </main><!-- .content -->
<!--
    <footer class="footer">
        <h3>Valley Forge Trail Riders - Your Path To Greatness</h3>
    </footer>.footer

<?php wp_footer(); ?>
-->

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<?php $templateURL = get_bloginfo('template_url'); ?>

<script src="<?php echo $templateURL ?>/libraries/angular/angular.js"></script>

<script src="<?php echo $templateURL ?>/libraries/angular-animate/angular-animate.min.js"></script>
<script src="<?php echo $templateURL ?>/libraries/angular-route/angular-route.min.js"></script>
<script src="<?php echo $templateURL ?>/libraries/angular-touch/angular-touch.min.js"></script>

<script src="<?php echo $templateURL ?>/js/vftr-angular/app.js"></script>

<script src="<?php echo $templateURL ?>/js/vftr-angular/services/moonshine-2013-results.js"></script>

<script src="<?php echo $templateURL ?>/js/vftr-angular/controllers/root.js"></script>
<!-- <script src="<?php echo $templateURL ?>/js/vftr-angular/controllers/moonshine-2013-results.js"></script> -->

<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/responsive-trigger.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/mobile-nav-move.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/mobile-backbutton.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/menu-item-fade.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/moonshine2013.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/meetingmap.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/directives/enduromap.js"></script>

<!-- Production Scripts, Don't Forget rev on vftr.js, grunt-usemin freaks out over php in paths
<script src="<?php echo $templateURL ?>/libraries/angular/angular.min.js"></script>
<script src="<?php echo $templateURL ?>/libraries/angular/angular-modules.min.js"></script>
<script src="<?php echo $templateURL ?>/js/vftr-angular/vftr.min.js"></script>
 -->

</body>
</html>