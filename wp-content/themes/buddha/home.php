<?php 
/*
Template Name: Home page
*/
?>

<?php get_header(); //the_post();?>

<!-- Getting content for Latest News section  -->
<?php $args = array(
    'numberposts' => 5,
    'offset' => 0,
    'category' => get_cat_ID('news') ,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'include' => '',
    'exclude' => '',
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_news = wp_get_recent_posts( $args, ARRAY_A );
?>


<?php $page_id = get_ID_by_slug("home");
$post = get_post_field('post_content', $page_id);

?>

	<div style="margin-left:2%">
		 <?php echo do_shortcode("[$post .'width=1200 height=450']"); ?>
	</div>

	<!-- <div class="fluidHeight container_12">
			<div class="sliderContainer">
				<div class="iosSlider">
					<div class="slider">
						<div class="item item1">
							<div class="inner">
								<div class="text1"><span>Join our campaigns and give <br>hope to homeless people</span></div>
							</div>
						</div>
						<div class="item item2">
							<div class="inner">
								<div class="text1"><span>Make the right choice! <br>Help those who are in need.</span></div>
							</div>
						</div>
						<div class="item item3">
							<div class="inner">
								<div class="text1"><span>Our mission is to engage more people in the fight <br> for better life of needy people</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="slideSelectors">
					<div class="item selected"></div>
					<div class="item"></div>
					<div class="item"></div>
				</div>
			</div>
		</div>
		 -->
<!--==============================Content=================================-->






			<div class="container_12">
				<div class="grid_6">
					<h2>Recent Post</h2>
					<!-- <img src="images/page1_img1.jpg" alt="" class="img_inner fleft"> -->
					<div class="extra_wrapper">

						<?php
						$args = array( 'numberposts' => '5' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a>  ';
							echo '<BR><BR>';

						}
						?>


<!-- 						<?php query_posts("post_per_page =3 "); the_post();?>
							<?php the_title(); ?>
							<?php the_excerpt();?>
							<a href="<?php the_permalink();?>" class="btn">Continue Reading...</a>
						<?php wp_reset_query();?>

 -->

						<!-- <p class="col2"><a href="#">Cras facilisis, nulla vel viverra tor, leo magna sodales felis, quis </a></p>
						Proin pharetra luctus diamer scelerisque eros convallisa <br>
						<a href="#" class="btn">Learn More</a> -->
					</div>
					<div class="clear"></div>
				</div>
				<div class="grid_5 prefix_1">
					<h2>Our Mission</h2>
					<div class="rel1">
						<!-- Our Mission Content Here -->
						<p> To spread Buddha’s peace and nonviolence messages and promote Buddha's birthplace Lumbini, Nepal all over the world.</p>
					</div>
				</div>
			</div>
			<div class="hor"></div>
			<div class="container_12">
				<div class="grid_3">
					<h2>Latest News</h2>
					<ul class="list">
					<?php   
					    foreach( $recent_news as $recent ){ 

					        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
					    }
					?>
					</ul>
					<!-- <blockquote class="bq1">
						<div class="title">Upcoming Events</div>

						<table CELLPADDING=5px CELLSPACING=0 style="padding: 5px">
							<tr>
								<td>
								<B>Peace Marathon May 4-5, 2015 </B><BR>
									<a href="<?php echo get_page_link(164); ?>">register here</a><BR>
								</td>
 

							</tr>
							<tr>
								<td>
									<B>Peace Rally May 4-5, 2015 </B><BR>
									<a href="<?php echo get_page_link(150);?>">register here</a><BR>
								</td>

							</tr>
							<tr>
								<td>
									<B>International Conference Belgium</B><BR>
									<a href="<?php echo get_template_directory_uri().'/forms/Registration_For_WPCLN_Inter_Conf_Belgium_2015.pdf' ?>">download here</a><BR>
								</td>

							</tr>
							<tr>
								<td>
									<B>International Conference Sponsor Form </B><BR>
									<a href="<?php echo get_template_directory_uri().'/forms/International_Conference_Sponsor.pdf' ?>">download here</a><BR>
								</td>

							</tr>

						</table>

					</blockquote> -->
				</div>
				<div class="grid_9">
					<h2>Glimpse of our past events</h2> <!-- Need to make it dynamic -->
					<section>
						<ul id="da-thumbs" class="da-thumbs">
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse1.png';?>" alt="" />
								<!-- <div><span>Helping Adults</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse2.png';?>" alt="" />
								<!-- <div><span>Helping Children</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse3.png';?>" alt="" />
								<!-- <div><span>Empowering Women</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse4.png';?>" alt="" />
								<!-- <div><span>Homes for Veterans</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse5.png';?>" alt="" />
								<!-- <div><span>Saving Lives</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse6.png';?>" alt="" />
								<!-- <div><span>Invest in Kids</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse7.png';?>" alt="" />
								<!-- <div><span>Healthy Nutrition</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse8.png';?>" alt="" />
								<!-- <div><span>Educated World</span></div> -->
								<!-- </a> -->
							</li>
							<li>
								<!-- <a href="#"> -->
								<img src="<?php echo get_template_directory_uri().'/images/glimpse/glimpse9.png';?>" alt="" />
								<!-- <div><span>Against Hunger</span></div> -->
								<!-- </a> -->
							</li>
						</ul>
					</section>
				</div>
			</div>
		</div>

<?php get_footer(); ?>