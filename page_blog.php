<?php
	/* Template Name: Blog */

	get_header();
 ?>

<!-- SEARCH BUTTON -->
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php get_search_form(); ?>
		</div><!--.col-sm-8-->
	</div><!--.row-->
</div><!--.container-->

<!-- CONTENT -->
<article class="container">

	<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post();
			get_template_part( 'template-parts/content', 'search' );
		endwhile;
	?>

		<?php if ($paged > 1) { ?>
			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
			</nav>
		<?php } else { ?>
			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			</nav>
		<?php } ?>

		<?php wp_reset_postdata(); ?>

</article>

<?php
	get_footer();
 ?>
