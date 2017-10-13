<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Gina_Marie
 */

get_header(); ?>

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

	<?php
	if ( have_posts() ) : ?>

			<h1 class="page-title"><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'gina-marie' ), '<span>' . get_search_query() . '</span>' );
			?></h1>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

</article><!-- #primary -->

<?php
get_footer();
