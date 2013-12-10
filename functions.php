<?php
/**
 * vftr functions and definitions
 *
 * @package vftr
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 640; /* pixels */

if ( ! function_exists( 'vftr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vftr_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on vftr, use a find and replace
     * to change 'vftr' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'vftr', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    //add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'vftr' ),
    ) );

    // Enable support for Post Formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

    // Setup the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'vftr_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif; // vftr_setup
add_action( 'after_setup_theme', 'vftr_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function vftr_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'vftr' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'vftr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vftr_scripts() {
    //Commenting out these three: no want your extra scripts

    //wp_enqueue_style( 'vftr-style', get_stylesheet_uri() );
    //wp_enqueue_script( 'vftr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    //wp_enqueue_script( 'vftr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'vftr_scripts' );

/**
* Remove Extraneous Crap
*/
remove_action('wp_head', 'wlwmanifest_link'); // Might be necessary if you or other people on this site use Windows Live Writer.
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_filter( 'the_content', 'capital_P_dangit' ); // Get outta my Wordpress codez dangit!
// remove_filter('the_content', 'wpautop');
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );

function rhwp_remove_version() {return '';}
add_filter('the_generator', 'rhwp_remove_version');

function rah_post_names($classes) {
    $classes = array_diff($classes, array("page", "type-page", "status-publish", "hentry"));
    return $classes;
}
add_filter('post_class', 'rah_post_names');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

/**
 * Remove Classes and IDs from wp_nav_menu() li items except current item and basic menu-item class
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('menu-item','current-menu-item', 'home-icon','sample-icon')) : '';
}
