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
<script src="<?php bloginfo('template_url'); ?>/bower_components/angular-animate/angular-animate.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/angular-route/angular-route.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/angular-touch/angular-touch.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/vftr-angular.js"></script>

</body>
</html>