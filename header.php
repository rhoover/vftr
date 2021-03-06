<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package vftr
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> data-ng-app="vftrApp" data-ng-controller="RootCtrl" data-background>
<head>
    <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php $styleURL = get_bloginfo('template_url'); ?>
    <!-- build:css style.css -->
    <link href="<?php echo $styleURL ?>/style.css" rel="stylesheet" />
    <!-- endbuild -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>

    <!-- generic -->
    <meta name="description" content="Valley Forge Trail Riders - Home of the Moonshine Enduro">
    <meta name="author" content="Robin Hoover - MooseDog Studios - Stowe, VT - robin.hoover@gmail.com">
    <meta name='robots' content='index,follow'>

    <!-- Mobile Stuff -->
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

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

    <!-- Facebook OpenGraph Meta Properties -->
    <meta property="og:title" content="The Valley Forge Trail Roders" />
    <meta property="og:type" content="organization"/>
    <meta property="og:url" content="http://www.vftr.org"/>
    <meta property="og:site_name" content="The Valley Forge Trail Riders - Home of the World Famous Moonshine Enduro"/>
    <meta property="og:description" content="Supporting Trail Riding"/>

    <!-- icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">

    <!-- icon actually for android -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- icons to do
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    // Apple Touch Icons
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-152x152.png" />
    // Windows 8 Tile Icons
    <meta name="msapplication-square70x70logo" content="smalltile.png" />
    <meta name="msapplication-square150x150logo" content="mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="widetile.png" />
    <meta name="msapplication-square310x310logo" content="largetile.png" />
-->

    <?php wp_head(); ?>
</head>

<body>

     <header  class="header">
        <span data-backbutton class="mobile-back-button"></span>
        <h1 class="title-small">VFTR</h1>
        <h1 class="title-large">Valley Forge Trail Riders</h1>
        <span class="mobile-menu-button" data-ng-click="RootCtrl.moveMenu()"></span>
    </header><!-- /.header -->

    <?php
        //courtesy of:  http://zoerooney.com/blog/tutorials/removing-list-items-wordpress-menus/
        //combine with addition to functions.php
        // first let's get our nav menu using the regular wp_nav_menu() function with special parameters
        $cleanermenu = wp_nav_menu( array(
            'theme_location' => 'primary', // we've registered a theme location in functions.php
            'container' => false, // this is usually a div outside the menu ul, we don't need it hence false
            'menu_id' => '', //added by me
            'menu_class' => 'nav', //added by me
            'items_wrap' => '<nav class="%2$s" data-nav="moveMenu">%3$s</nav>', // replacing the ul with nav, remove id too
            'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
        ) );
        // Find the closing bracket of each li and the opening of the link (><a), then all instances of "<li"
        $find = array('><a','<li');
        // Replace the ><a with nothing (a.k.a. delete) and the "<li" with "<a"
        $replace = array('','<a');
        echo str_replace( $find, $replace, $cleanermenu );
    ?><!-- /.nav -->

    <main class="main">
