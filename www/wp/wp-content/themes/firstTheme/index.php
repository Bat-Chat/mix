<?php get_header(); ?>

<div id="templatemo_content">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( '_note', get_post_format() ); ?>
		<?php endwhile; ?>

	<?php else : ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'No posts to display', 'firstTheme' ); ?></h1>
		</header>

	<?php endif ?>
</div>