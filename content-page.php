<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package vftr
 */
?>

<?php get_template_part('content', 'aside'); ?>

<article
    <?php
        $mycustom_value = get_post_custom_values('special');
        foreach ( $mycustom_value as $value ) {
          post_class($value);
        }
    ?>
    data-ng-cloak
>

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
</article><!-- .article -->
