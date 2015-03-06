<?php get_header(); ?>

<div class="container_12">
    <div class="grid_13" >



	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div <?php post_class('post post_singular'); ?> id="post-<?php the_ID(); ?>">

			<?php the_content(); ?>
			

	</div>
	<?php endwhile; else: ?>
	<?php endif; ?>


    </div>
</div>

<?php get_footer(); ?>






