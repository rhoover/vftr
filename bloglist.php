<?php
/**
*
*Template Name: NewsEvents
*
* @package vftr
*/

get_header(); ?>

<?php get_template_part('content', 'aside'); ?>

<article
    <?php
        $mycustom_value = get_post_custom_values('special');
        foreach ( $mycustom_value as $value ) {
          post_class($value);
        }
    ?>
>

<?php
    global $post;
    $myposts = get_posts();
    foreach($myposts as $post) :
        setup_postdata($post);
?>

    <section class="post-item">
        <h2 class="post-title">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="post-meta">Posted on <?php the_time('l, F jS, Y') ?></p>
        <?php the_excerpt(); ?>
    </section>
<?php endforeach;
    wp_reset_postdata();
?>

</article>

<?php get_footer(); ?>