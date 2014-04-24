<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php wp_title(" - ", true, "right"); ?><?php bloginfo('name'); ?></title>
  <meta name="author" content="Jake Rocheleau">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quando">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>
	<?php wp_head(); ?>
</head>

<body>

<nav id="n">
<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => false, 'theme_location' => 'header-menu' ) ); ?> 
</nav>
	
	<div id="navbar"><a href="#">Nav Menu</a></div>
	
	<div id="mainbody">
		<header id="top">
			<div class="wrapper">
				
        <?php if(is_page(16)) { ?>

        <?php } else { ?>

          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

        <?php } ?>
        
			</div>		
		</header>
