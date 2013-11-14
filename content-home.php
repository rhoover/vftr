<?php
/**
 * The template used for displaying Home-Page content in page.php
 *
 * @package vftr
 */
?>

<article id="post-<?php the_ID(); ?>" class="article"> <!-- <?php post_class(); ?> -->

    <?php the_content(); ?>

    <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'vftr' ),
            'after'  => '</div>',
        ) );
    ?>

<?php edit_post_link( __( 'Edit', 'vftr' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
