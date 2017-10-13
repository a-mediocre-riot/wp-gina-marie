<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gina_Marie
 */

?>

	</div><!-- #content -->

	<!-- FOOTER -->
	<footer class="text-center">
		<?php
        	wp_nav_menu(array(
        	    "menu"        => "Social Buttons",
        	    "menu_class"  => "social-menu",
        	    "link_before" => "<span class='social-btn fa-stack fa-lg'><i class='fa fa-stack-2x fa-circle'></i><i class='fa fa-stack-1x fa-inverse fa-",
        	    "link_after"  => "'></i></span>"
        	));
    	?>

		<!-- EXTRA LINKS -->
		<div class="links container text-center">
			<a href="https://goo.gl/forms/cFrPZZZlct6pumQU2" class="gm-link">Request For Proposal</a>
			<a href="http://www.calendly.com/ginamarie/15min/" class="gm-link">Schedule A Call</a>
		</div><!--.container-->

		<!-- COPYRIGHT -->
		<div id="copyright" class="container text-center">
			<p>Copyright &copy; 2017 Gina Ribniscky</p>
		</div><!--.container-->
	</footer>

	<!-- jQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- BOOTSTRAP CORE -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
