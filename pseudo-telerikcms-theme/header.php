<!DOCTYPE html>
<html lang="en">
<head>
<title><?php wp_title(); ?></title>
<meta charset="utf-8">
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <h1><a href="index.html">Student's site</a></h1>
         <?php wp_nav_menu(array(
			'theme_location' => 'top-site-menu',
         	'container' => 'nav',
         	)) ?>
         <!-- <nav>
            <ul>
               <li class="current"><a href="index.html" class="m1">Home Page</a></li>
               <li><a href="about-us.html" class="m2">About Us</a></li>
               <li><a href="articles.html" class="m3">Our Articles</a></li>
               <li><a href="contact-us.html" class="m4">Contact Us</a></li>
               <li class="last"><a href="sitemap.html" class="m5">Site Map</a></li>
            </ul>
         </nav>  -->
         <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
               <input type="text">
               <a href="#" onClick="document.getElementById('search-form').submit()">Search</a></div>
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <?php get_sidebar('left-sidebar'); ?>
      <!-- content -->
      <section id="content">
         <div id="banner">
            <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
         </div>
         <div class="inside">