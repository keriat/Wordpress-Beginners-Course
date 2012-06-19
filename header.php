<!DOCTYPE html>
<html <?PHP language_attributes()?>>
<head>
	<meta charset="<?php bloginfo('charset')?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="author" content="Fruitware | Serge B."/>
	<title><?php bloginfo('name'); echo wp_title('|', true)?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url')?>"/>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/favicon.ico"/>
</head>
<body>
<header>
	<h1><a href="<?php echo site_url()?>"><?php bloginfo('name')?></a></h1>
	<nav>
		<ul>
			<li><a href="<?php wpc_the_permalink('about')?>">About me</a></li>
			<li><a href="<?php wpc_the_permalink('contact')?>">Contact page</a></li>
		</ul>
	</nav>
</header>
