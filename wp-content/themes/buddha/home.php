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

	<div style="margin-left:10%">
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
					<img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<?php query_posts("post_per_page =1 "); the_post();?>
							<?php the_title(); ?>
							<?php the_excerpt();?>
							<a href="<?php the_permalink();?>" class="btn">More...</a>
						<?php wp_reset_query();?>
						<!-- <p class="col2"><a href="#">Cras facilisis, nulla vel viverra tor, leo magna sodales felis, quis </a></p>
						Proin pharetra luctus diamer scelerisque eros convallisa <br>
						<a href="#" class="btn">Learn More</a> -->
					</div>
					<div class="clear"></div>
				</div>
				<div class="grid_5 prefix_1">
					<h2>Our Mission</h2>
					<div class="rel1">
						<p>Following the <span class="col1"><a href="http://blog.templatemonster.com/free-website-templates/" >link</a></span> you’ll find all you wanted to know about free theme released by TemplateMonster.</p>
						Need more themes of this kind? Find a variety of premium <span class="col1"><a href="http://www.templatemonster.com/properties/topic/society-people/" rel="nofollow">society &amp; people templates</a></span> at TemplateMonster.
					</div>
					<a href="#" class="btn">Learn More</a>
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
						<!-- <li>
							<time datetime="2014-01-01">29<span>Jan</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">Vivamuagna</a></div>
								amus at magn
								malesuada fauc
							</div>
						</li>
						<li>
							<time datetime="2014-01-01">02<span>Feb</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">Dereamuagne</a></div>
								amus at magn
								malesuada faut
							</div>
						</li>
						<li>
							<time datetime="2014-01-01">20<span>Feb</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">Hovamuagrt</a></div>
								emus at mago malesuada fau
							</div>
						</li>
						<li>
							<time datetime="2014-01-01">05<span>Mar</span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="#">Meloamuar</a></div>
								ferus at magne malesuada faui
							</div>
						</li> -->
					</ul>
					<blockquote class="bq1">
						<div class="title">Testimonials</div>
						<p>Nulla vel viverra auctorleo magna sodales felis, quis malesuada nibh odio ut </p>
						<div class="col2">Sandra Wood</div>
					</blockquote>
				</div>
				<div class="grid_9">
					<h2>Our Campaigns</h2>
					<section>
						<ul id="da-thumbs" class="da-thumbs">
							<li>
								<a href="#">
								<img src="images/th1.jpg" alt="" />
								<div><span>Helping Adults</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th2.jpg" alt="" />
								<div><span>Helping Children</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th3.jpg" alt="" />
								<div><span>Empowering Women</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th4.jpg" alt="" />
								<div><span>Homes for Veterans</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th5.jpg" alt="" />
								<div><span>Saving Lives</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th6.jpg" alt="" />
								<div><span>Invest in Kids</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th7.jpg" alt="" />
								<div><span>Healthy Nutrition</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th8.jpg" alt="" />
								<div><span>Educated World</span></div>
								</a>
							</li>
							<li>
								<a href="#">
								<img src="images/th9.jpg" alt="" />
								<div><span>Against Hunger</span></div>
								</a>
							</li>
						</ul>
					</section>
				</div>
			</div>
		</div>

<?php get_footer(); ?>