<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container_12">
			<div class="grid_10">
				<div class="block2">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><?php the_title(); ?></h2>
						<p align="justify"> <?php the_content(); ?></p>
					</article>
				</div>
			

	<?php endwhile; ?>	

	 
			</div>
		</div>
	<?php endif; ?>
<!-- <?php echo do_shortcode('[facebook-members]'); ?> -->
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
