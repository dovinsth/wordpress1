<!--
	<div class="bottom_block">
				<div class="container_12">
					<div class="grid_4">
						<h3>Stay Informed</h3>
						<div class="text1">Subscribe to Our Newsletter</div>
						<form id="newsletter">
							<div class="rel">
								<div class="success">Your subscribe request has been sent!</div>
								<label class="email">
									<input type="email" value="Enter your Email" >
									<span class="error">*This is not a valid email address.</span>
								</label>
							</div>
							<a href="#" class="btn" data-type="submit">Submit</a>
						</form>
					</div>
					<div class="grid_5 prefix_3">
						<h3>Stay Connected</h3>
						<div class="text1">Follow Us on Social Media Accounts </div>
						Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra
						<div class="socials">
							<a href="#"><div class="fa fa-twitter"></div></a>
							<a href="#"><div class="fa fa-facebook"></div></a>
							<a href="#"><div class="fa fa-pinterest-square"></div></a>
							<a href="#"><div class="fa fa-google-plus"></div></a>
							<a href="#"><div class="fa fa-instagram"></div></a>
						</div>
					</div>
				</div>
			</div>
			-->
<!--==============================footer=================================-->


		<footer>

			<div class="container_12">
			
				<div class="grid_12" align="center">
					<?php echo do_shortcode("[LoginRadius_Share]"); ?>
					<div class="copy">
						Worldamity &copy; 2014 | <a href="#">Privacy Policy</a>
					</div>
				</div>
			</div>
		</footer>
		<script src="<?php echo get_template_directory_uri().'/js/jquery.hoverdir.js';?>"></script>
		<script>
		$(document).ready(function() {
		 $('.iosSlider').iosSlider({
			desktopClickDrag: true,
			snapToChildren: true,
			navSlideSelector: '.sliderContainer .slideSelectors .item',
			onSlideComplete: slideComplete,
			onSliderLoaded: sliderLoaded,
			onSlideChange: slideChange,
			scrollbar: false,
			autoSlide: true,
			autoSlideTimer: 3300,
			infiniteSlider: true
		 });
		});
		function slideChange(args) {
		 $('.sliderContainer .slideSelectors .item').removeClass('selected');
		 $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
		}
		function slideComplete(args) {
		 if(!args.slideChanged) return false;
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		}
		function sliderLoaded(args) {
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 slideChange(args);
		}
		//$(".menu ul").addClass( "sf-menu" );
		$(function() {
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>