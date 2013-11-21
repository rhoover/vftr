<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package vftr
 */
?>

<aside class="inner-sidebar">

<a href="#" class="inner-page-link news-icon">News</a>
<a href="#" class="inner-page-link results-icon">Results</a>
<a href="#" class="inner-page-link maps-icon">Locations/Maps</a>
<a href="#" class="inner-page-link about-icon">Club Calendar</a>
<a href="#" class="inner-page-link people-icon">About VFTR</a>
<a href="#" class="inner-page-link businesses-icon">Sponsors</a>
<a href="#" class="inner-page-link videos-icon">Videos</a>
<a href="#" class="inner-page-link form-icon">Entry Form</a>

</aside>

<article id="post-<?php the_ID(); ?>" class="article"> <!-- <?php post_class(); ?> -->

    <?php the_content(); ?>
<!--
    <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'vftr' ),
            'after'  => '</div>',
        ) );
    ?>
-->
<?php edit_post_link( __( 'Edit', 'vftr' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
