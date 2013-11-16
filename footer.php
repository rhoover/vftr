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

    <footer class="footer">
            <?php do_action( 'vftr_credits' ); ?>
            <a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'vftr' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( __( 'Theme: %1$s by %2$s.', 'vftr' ), 'vftr', '<a href="http://underscores.me/" rel="designer">Robin Hoover</a>' ); ?>
    </footer><!-- .footer -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/bower_components/angular/angular.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/angular-animate/angular-animate.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/angular-route/angular-route.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/angular-touch/angular-touch.min.js"></script>
<!--
<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular.js"></script>
-->
<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular/app.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular/controllers/root.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular/directives/responsive-bg.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular/directives/mobile-nav-move.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular/directives/mobile-backbutton.js"></script>

</body>
</html>