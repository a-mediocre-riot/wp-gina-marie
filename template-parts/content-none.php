<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gina_Marie
 */

?>

<!-- RESULTS -->
<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'gina-marie' ); ?></h1>

<!-- ERROR MESSAGE -->
<?php if(is_search()): ?>
	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gina-marie' ); ?></p>
<?php else : ?>
	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gina-marie' ); ?></p>
<?php endif; ?>

