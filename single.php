<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gina_Marie
 */

get_header(); ?>

	<?php while(have_posts()) : the_post(); ?>
		<!-- HERO -->
		<section class="content-hero text-center">
			<h1><?php echo the_title(); ?></h1>
			<small><?php echo get_field("subtitle") ?></small>
		</section>
		<div class="purple-bar"></div>
		<div class="yellow-bar"></div>

		<!-- CONTENT -->
		<article class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<?php the_content(); ?>
					</div><!--.col-sm-8-->
					<div class="col-md-4 col-lg-3">
						<?php get_template_part("template-parts/content-sidebar"); ?>
					</div>
				</div><!--.row-->
			</div><!--.container-fluid-->
		</article>
	<?php endwhile; ?>

<?php
get_footer();
