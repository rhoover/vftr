<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vftr
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php if(is_front_page()) { ?>
        <?php get_template_part('content', 'home'); ?>
        <?php } else { ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php } ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
