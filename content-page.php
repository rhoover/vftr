<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package vftr
 */
?>

<article id="post-<?php the_ID(); ?>" class="article"> <!-- <?php post_class(); ?> -->
    <!-- <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header> .entry-header -->

<!--    <div class="entry-content"> -->
    <?php the_content(); ?>
    <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'vftr' ),
            'after'  => '</div>',
        ) );
    ?>
<!-- </div> .entry-content -->
<?php edit_post_link( __( 'Edit', 'vftr' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
