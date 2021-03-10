<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Juxprose Visual Verse
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- IE -->
<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/selectivizr-min.js"></script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Typekit -->
<script type="text/javascript" src="//use.typekit.net/pny8zkw.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- <link href="https://get.gridsetapp.com/22788/" rel="stylesheet"> -->
<!--[if (!IE) | (gt IE 9)]><!--><link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/gridset.css" /><!--<![endif]-->
<!--[if IE 9]><link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/gridset-ie-9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/gridset-ie-lte8.css" /><![endif]-->

<!-- GA -->
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXXXX-X', 'sitename.com');
  ga('send', 'pageview');

</script> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="hfeed site wrapper">
	<?php do_action( 'before' ); ?>
	<header class="site-header group" role="banner">

		<div class="site-branding l1-l4 m1-m4 s1">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/visual_verse_logo.png">
				</a>
			</h1>
		</div>
 
		<div class="site-info l9-l12 m8-m12 s2"> 

			<p>Visual Verse: An Anthology of Art and Words<br>
			One image, one hour, 50-500 words.<br>
			The picture is the starting point, the text is up to you.</p>

			<div class="l9 m8">
				<nav class="navigation-main menu-stacked" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
				</nav>
			</div>
			<div class="l10 m9-m10 s-hide">
				<nav class="navigation-social menu-stacked" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => '' ) ); ?>
				</nav> 						
			</div> 
		</div>		

	
		
	</header><!-- #masthead -->

	<div class="site-main">
