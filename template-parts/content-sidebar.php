<?php
    $sidebarHeader  = get_field("sidebar_header");
    $sidebarContent = get_field("sidebar_content");
    $subscribeImg   = get_field("subscribe_img");
    $subscribeLink  = get_field("subscribe_link");
 ?>

<div id="sidebar" class="text-center">
	<?php
    	wp_nav_menu(array(
    	    "menu"        => "Social Buttons",
    	    "menu_class"  => "social-menu",
    	    "link_before" => "<span class='social-btn fa-stack fa-lg'><i class='fa fa-stack-2x fa-circle'></i><i class='fa fa-stack-1x fa-inverse fa-",
    	    "link_after"  => "'></i></span>"
    	));
	?>

	<h3><?php echo $sidebarHeader; ?></h3>
	<p><?php echo $sidebarContent; ?></p>

	<?php get_search_form(); ?>


	<?php if (!empty($subscribeImg)) { ?>
	    <a href="<?php echo $subscribeLink; ?>">
    		<img src="<?php echo $subscribeImg['url']; ?>" alt="<?php echo $subscribeImg['alt']; ?>"/>
    	</a>
	<?php } ?>
</div><!--#sidebar-->