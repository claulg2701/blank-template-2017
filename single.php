<?php get_header(); ?>
	<div class="row">
		<div class="twelve columns">
<!-- Begin single PHP -->
			<?php if (have_posts()) :
				/* Data Context is defined here	*/
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
<!-- End single PHP -->
		</div>
	</div>
<?php get_footer(); ?>
