<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vftr
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- generic -->
    <meta name="description" content="Valley Forge Trail Riders - Home of the Moonshine Enduro">
    <meta name="author" content="Robin Hoover - MooseDog Studios - Stowe, VT - robin.hoover@gmail.com">
    <meta name='robots' content='index,follow'>

    <!-- Mobile Stuff -->
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

    <!-- apple stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="VFTR">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- because microsoft exists -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="msapplication-TileImage" content="images/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#222222">
    <meta http-equiv="cleartype" content="on">

    <!-- Twitter Meta Properties -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="Valley Forge Trail Riders">

    <!-- Facebook OpenGraph Meta Properties
    <meta property="og:title" content="The Vermont Brewers Association" />
    <meta property="og:type" content="organization"/>
    <meta property="og:url" content="http://www.vermontbrewers.com"/>
    <meta property="og:site_name" content="The Vermont Brewers Association - Small State - Big Beer"/>
    <meta property="og:description" content="Proud To Support Vermont's Craft Brewers"/>
    <meta property="og:email" content="info@vermontbrewers.com"/>
    <meta property="og:phone_number" content="802-885-1262"/>
    -->
    <!-- icons
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    -->
    <!-- icon actually for android
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

    <?php wp_head(); ?>
</head>

<body ng-app="vftrApp" ng-controller="AppCtrl" background ng-cloak>

    <?php do_action( 'before' ); ?>

    <header class="header">
        <span backbutton class="mobile-back-button"></span>
        <h1 class="title-small">VFTR</h1>
        <h1 class="title-large">Valley Forge Trail Riders</h1>
        <span class="mobile-menu-button" ng-click="AppCtrl.moveMenu()"></span>
    </header><!-- .header -->

    <?php
        //http://zoerooney.com/blog/tutorials/removing-list-items-wordpress-menus/
        //combine with addition to functions.php
        // first let's get our nav menu using the regular wp_nav_menu() function with special parameters
        $cleanermenu = wp_nav_menu( array(
            'theme_location' => 'primary', // we've registered a theme location in functions.php
            'container' => false, // this is usually a div outside the menu ul, we don't need it
            'menu_id' => '', //added by me
            'menu_class' => 'nav', //added byt me
            'items_wrap' => '<nav class="%2$s" nav="moveMenu">%3$s</nav>', // replacing the ul with nav, remove id too
            'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
        ) );
        // Find the closing bracket of each li and the opening of the link, then all instances of "li"
        $find = array('><a','li');
        // Replace the former with nothing (a.k.a. delete) and the latter with "a"
        $replace = array('','a');
        echo str_replace( $find, $replace, $cleanermenu );
    ?>

    <main class="content">
