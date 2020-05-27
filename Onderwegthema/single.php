<?php acf_form_head(); ?>
<?php get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
				
				<p>My custom field: <?php the_field('my_custom_field'); ?></p>
				
				<?php acf_form(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>