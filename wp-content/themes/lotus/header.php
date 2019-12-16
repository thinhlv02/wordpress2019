<!DOCTYPE html>
<html <?php echo language_attributes(); ?>/>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php echo bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>
<!--start container-->
<div id="container"

<div class="logo">
    <?php lotus_header(); ?>
    <?php lotus_menu('primary-menu'); ?>
</div>
