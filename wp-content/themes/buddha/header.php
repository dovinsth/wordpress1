<!DOCTYPE html>
<html lang="en">
	<head>
	<title>WorldAmity</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="icon" href="<?php echo get_template_directory_uri().'/images/main-logo.png'; ?>">
	<!-- <link rel="shortcut icon" href="http://localhost/wordpress1/wp-content/themes/buddha/images/favicon.ico" /> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/form.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/style.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/thumbs.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/slider.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/touchTouch.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/ie.css'; ?>">
    

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

<style type="text/css">
header{

  background-color: #ECFFFF;
}
body{
/*background:
linear-gradient(27deg, #E3E4FA 5px, transparent 5px) 0 5px,
linear-gradient(207deg, #E3E4FA 5px, transparent 5px) 10px 0px,
linear-gradient(27deg, #E3E4FA 5px, transparent 5px) 0px 10px,
linear-gradient(207deg, #E3E4FA 5px, transparent 5px) 10px 5px,
linear-gradient(90deg, #E3E4FA 10px, transparent 10px),
linear-gradient(#E3E4FA 25%, #E3E4FA 25%, #E3E4FA 50%, transparent 50%, transparent 75%, #E3E4FA 75%, #E3E4FA);*/
background-color: #ECFFFF;
/*background-size: 20px 20px;*/

}

</style>

    <?php wp_head();?>
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->

			
			<div width=100% >
				<img src="<?php echo get_template_directory_uri().'/images/banner2.jpg'; ?>" alt="Worldamity Banner">
			</div>

		<header >
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="../home">
							<img src="<?php echo get_template_directory_uri().'/images/cutmypic.png'; ?>" alt="Main Logo">
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