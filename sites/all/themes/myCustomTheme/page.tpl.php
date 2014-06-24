<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site classentity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sclassebar_first']: Items for the first sclassebar.
 * - $page['sclassebar_second']: Items for the second sclassebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<html>

<!-- Mirrored from html.realocation.byaviators.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 15 Mar 2014 10:38:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="libraries/font-awesome/css/font-awesome.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="libraries/jquery-bxslider/jquery.bxslider.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="libraries/flexslider/flexslider.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="css/realocation.css" media="screen, projection" id="css-main">
<link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">

<title>
        Realocation | Modern Real Estate Template
</title>
</head>

<body>

<div id="wrapper">
		<div id="header-wrapper">
			<div id="header">
				<div id="header-inner">
					<div class="header-bar">
						<div class="container">
							<?php if($page['header-bar']){
							print render($page['header-bar']);}; ?>
						
						</div>
					</div>
					
					<div class="header-top">
						<div class="container">
							<?php if($page['header-top']){
							print render($page['header-top']);}; ?>
						
						</div>
					</div>
					
					<div class="header-navigation">
						<div class="container">
							<?php if($page['header-navigation']){
							print render($page['header-navigation']);}; ?>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="main-wrapper">
			<div class="left-sidebar"><?php if($page['left-sidebar']){
					print render($page['left-sidebar']);} ?></div>
			<div class="content">Main Content<?php if($page['content']){
					print render($page['content']);}; ?></div>
			<div class="right-sidebar"><?php if($page['right-sidebar']){
					print render($page['right-sidebar']); };?></div>
			<div class="slider-content"><?php if($page['slider-content']){
					print render($page['slider-content']);}; ?></div>
			<div class="static-content"><?php if($page['static-content']){
					print render($page['static-content']); };?></div>
		</div>
		
		<div id="footer-wrapper">
			<div id="footer">
				<div id="footer-inner">
					<div id="footer-top">
						<div class="container">
							<div class="row">
								<div class="widget col-sm-8">
								<?php if($page['footer-top']){
								print render($page['footer-top']);}; ?></div>
								<div class="widget col-sm-4"></div>
							</div>
							<div class="row">
								<?php if($page['footer-middle']){
								print render($page['footer-middle']);}; ?>
							</div>
						</div>
					</div>
					<div id="footer-bottom">
						<div id="container"><?php if($page['footer-bottom']){
				print render($page['footer-bottom']);}; ?></div>
					</div>
				</div>
			</div>
		</div>
		
</div><!-- end of page-wrapper -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="libraries/isotope/jquery.isotope.min.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script type="text/javascript" src="js/gmap3.infobox.js"></script>
<script type="text/javascript" src="js/gmap3.clusterer.js"></script>
<script type="text/javascript" src="js/map.js"></script>

<script type="text/javascript" src="libraries/bootstrap-sass/vendor/assets/javascripts/bootstrap/transition.js"></script>
<script type="text/javascript" src="libraries/bootstrap-sass/vendor/assets/javascripts/bootstrap/collapse.js"></script>
<script type="text/javascript" src="libraries/jquery-bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="libraries/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.chained.min.js"></script>
<script type="text/javascript" src="js/realocation.js"></script>
</body>

<!-- Mirrored from html.realocation.byaviators.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 15 Mar 2014 10:42:46 GMT -->
</html>