<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="icon" href="http://localhost/wordpress1/wp-content/themes/buddha/images/favicon.ico">
	<link rel="shortcut icon" href="http://localhost/wordpress1/wp-content/themes/buddha/images/favicon.ico" />
	<link rel="stylesheet" href="http://localhost/wordpress1/wp-content/themes/buddha/css/form.css">
	<link rel="stylesheet" href="http://localhost/wordpress1/wp-content/themes/buddha/css/thumbs.css">
	<link rel="stylesheet" href="http://localhost/wordpress1/wp-content/themes/buddha/css/slider.css">
    <link rel="stylesheet" href="http://localhost/wordpress1/wp-content/themes/buddha/css/touchTouch.css">
    <link rel="stylesheet" href="http://localhost/wordpress1/wp-content/themes/buddha/css/ie.css">
    

	<!--<link rel="stylesheet" href="../css/style.css"> -->
	<script src="<?php echo get_template_directory_uri(); ?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/jquery-migrate-1.2.1.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/jquery.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/script.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/superfish.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/sForm.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/jquery.ui.totop.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/jquery.equalheights.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/jquery.easing.1.3.js';?>"></script>
	<script src="<?php echo get_template_directory_uri().'/js/jquery.iosslider.min.js';?>"></script>
  	
	<script>
	$(document).ready(function(){
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->
    <?php wp_head();?>
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="http://localhost/wordpress1/wp-content/themes/buddha/images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="menu_block ">
						<a href="<?php 
										// $page_id = get_permalink(5);
										echo get_page_link(104); 

										?>" class="donate">DONATE</a>
						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<?php wp_nav_menu( array( 'menu' => 'main' ,
												  'menu_class'=> 'sf-menu'
												  )
										  ); ?>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>