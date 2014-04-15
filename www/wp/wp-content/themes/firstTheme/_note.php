<div class="post_box" <?php post_class(); ?>>
	<h2><?php the_title(); ?></h2>
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'firstTheme' ) ); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'firstTheme' ), 'after' => '</div>' ) ); ?>
	<div class="post_meta">
		<?php
			$catList = get_the_category_list( ', ', '', $post->ID )
		?>
		<span class="cat">Posted in <?php echo $catList ?></span> | Date: <?php echo get_the_date() ?> | 
		<a href="#"><?php $count = wp_count_comments( $post->ID ); echo $count->approved ?> comments</a>
		<a href="blog_post.html" class="more float_r">Continue</a>
	</div>
</div>	