<?php
/**
 * @package vftr
 * @since vftr 1.0
 */
?>

<h1 class="post-title"><?php the_title(); ?></h1>

<p class="post-date">Posted <?php the_time('l, F jS, Y') ?> by <?php the_author(); ?></p>

<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'vftr' ), 'after' => '</div>' ) ); ?>