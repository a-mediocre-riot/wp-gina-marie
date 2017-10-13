<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gina_Marie
 */

?>

<div id="post-<?php the_ID(); ?>" class="blog-result">
	<!-- FEATURE IMAGE -->
	<?php
		if(has_post_thumbnail()) {
			the_post_thumbnail();
		}
	?>
	<div class="visible-xs"></div>

	<!-- TITLE -->
	<h4><?php the_title(); ?></h4>

	<!-- DATE -->
	<small><?php the_date(); ?></small>

	<!-- EXCERPT -->
	<p><?php the_excerpt(); ?></p>

	<!-- READ MORE -->
	<a href="<?php esc_url(the_permalink()); ?>">Read more...</a>
</div><!--.blog-result-->
