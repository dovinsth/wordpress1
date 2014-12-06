<?php
/*
Template Name: Fullwidth Page
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container_12">
			<div class="grid_16">
				<div class="block2">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); // Dynamic Content ?>
					</article>
				</div>
			</div>
		</div>

	<?php endwhile; ?>	
	<?php endif; ?>	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
