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

    <section class="section-primary">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php if(is_front_page()) { ?>
                <?php get_template_part('content', 'home'); ?>
                <?php } else { ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php } ?>
<!--
            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
            ?>
-->
        <?php endwhile; // end of the loop. ?>

    </section><!-- .section-primary -->

<?php
/**
* get_sidebar();
*/
?>

<?php get_footer(); ?>
