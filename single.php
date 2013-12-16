<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vftr
 */

get_header(); ?>
<?php do_action( 'before' ); ?>

<?php get_template_part('content', 'aside'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?>>  <!-- id="post-<?php the_ID(); ?>" -->

        <?php get_template_part( 'content', 'single' ); ?>
        <?php  // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
                comments_template('', true); // ($file, $separate_comments (boolean))
        ?>

    </article>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>


