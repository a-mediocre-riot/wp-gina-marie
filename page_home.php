<?php
 /* Template Name: Home */

 $heroHeader     = get_field("home_hero_header");
 $heroSubheader  = get_field("home_hero_subheader");
 $heroBtnText    = get_field("home_hero_btn_text");

 $serviceHeader  = get_field("home_service_header");
 $serviceBtnText = get_field("home_service_btn_text");

 $service1Img    = get_field("home_service1_img");
 $service1Title  = get_field("home_service1_title");
 $service1Desc   = get_field("home_service1_desc");

 $service2Img    = get_field("home_service2_img");
 $service2Title  = get_field("home_service2_title");
 $service2Desc   = get_field("home_service2_desc");

 $service3Img    = get_field("home_service3_img");
 $service3Title  = get_field("home_service3_title");
 $service3Desc   = get_field("home_service3_desc");

 $aboutTitle     = get_field("home_about_title");
 $aboutImg       = get_field("home_about_image");
 $aboutContent   = get_field("home_about_content");

 $social1Url     = get_field("home_social1_url");
 $social1Class   = get_field("home_social1_class");
 $social2Url     = get_field("home_social2_url");
 $social2Class   = get_field("home_social2_class");
 $social3Url     = get_field("home_social3_url");
 $social3Class   = get_field("home_social3_class");

 $modalHeader    = get_field("modal_header");
 $modalContent   = get_field("modal_content");
 $ckId           = get_field("convertkit_id");
 $ckSource       = get_field("convertkit_source");

 get_header();

?>

	<!-- HERO -->
	<section id="hero">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<h1 class="text-light"><?php echo $heroHeader; ?></h1>
					<br>
					<small><?php echo $heroSubheader; ?></small>
					<br><br>
					<button type="button" class="gm-btn" data-toggle="modal" data-target="#signup-modal"><?php echo $heroBtnText ?></button>
				</div><!--.col-sm-6-->
			</div><!--.row-->
		</div><!--.container-->
	</section><!--#hero-->

	<!-- SERVICES -->
	<section id="services">

		<!-- Services List-->
		<div class="container text-center">
			<h2>what do you want to improve?</h2>
			<div class="row">

				<!-- SERVICE ONE -->
				<div class="col-sm-4">
					<?php if (!empty($service1Img)) { ?>
						<img src="<?php echo $service1Img['url']; ?>" alt="<?php echo $service1Img['alt']; ?>"/>
					<?php } ?>
					<h3><?php echo $service1Title; ?></h3>
					<p><?php echo $service1Desc; ?></p>
				</div><!--.col-sm-4-->

				<!-- SERVICE TWO -->
				<div class="col-sm-4">
					<?php if (!empty($service2Img)) { ?>
						<img src="<?php echo $service2Img['url']; ?>" alt="<?php echo $service2Img['alt']; ?>"/>
					<?php } ?>
					<h3><?php echo $service2Title; ?></h3>
					<p><?php echo $service2Desc; ?></p>
				</div><!--.col-sm-4-->

				<!-- SERVICE THREE -->
				<div class="col-sm-4">
					<?php if (!empty($service3Img)) { ?>
						<img src="<?php echo $service3Img['url']; ?>" alt="<?php echo $service3Img['alt']; ?>"/>
					<?php } ?>
					<h3><?php echo $service3Title; ?></h3>
					<p><?php echo $service3Desc; ?></p>
				</div><!--.col-sm-4-->

			</div><!--.row-->

			<br><br>
			<a href="https://goo.gl/forms/cFrPZZZlct6pumQU2" class="gm-btn"><?php echo $serviceBtnText; ?></a>
		</div><!--.container-->
	</section><!--#services-->

	<!-- MEET THE DEVELOPER -->
	<section id="about-me">
		<div class="container">

			<div class="sm-text-center">
				<h2><?php echo $aboutTitle; ?></h2>
				<a href="<?php echo $social1Url; ?>"><i class="fa fa-2x fa-<?php echo $social1Class; ?>"></i></a>
				<a href="<?php echo $social2Url; ?>"><i class="fa fa-2x fa-<?php echo $social2Class; ?>"></i></a>
				<a href="<?php echo $social3Url; ?>"><i class="fa fa-2x fa-<?php echo $social3Class; ?>"></i></a>
			</div><!--.sm-text-center-->

			<div class="row">
				<div class="col-sm-4 col-sm-push-8 text-center">
					<?php if (!empty($aboutImg)) { ?>
						<img id="selfie" src="<?php echo $aboutImg['url']; ?>" alt="<?php echo $aboutImg['alt']; ?>"/>
					<?php } ?>
				</div><!--.col-sm-4-->
				<div class="col-sm-8 col-sm-pull-4">
					<?php echo $aboutContent; ?>
				</div>
			</div><!--.row-->

		</div><!--.container-->
	</section><!--#about-me-->

	<!-- Modal -->
	<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id=""><?php echo $modalHeader; ?></h4>
				</div><!--.modal-header-->
				<div class="modal-body">

					<!-- MAILCHIMP SIGNUP FORM -->
					<div id="mc_embed_signup">
						<form action="//tech.us16.list-manage.com/subscribe/post?u=ce3856ba616223f315d666528&amp;id=36d68774ba" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					 		<div id="mc_embed_signup_scroll">

					 			<p><?php echo $modalContent; ?></p>
								<br>

					 			<!-- FIRST NAME -->
								<div class="mc-field-group">
									<label for="mce-FNAME">First Name </label>
									<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
								</div>

								<!-- EMAIL ADDRESS -->
								<div class="mc-field-group">
									<label for="mce-EMAIL">Email Address </span></label>
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								</div>

								<!-- SUCCESS/ERROR RESPONSES -->
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>

								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ce3856ba616223f315d666528_36d68774ba" tabindex="-1" value=""></div>

							    <!-- SUBMIT BUTTON -->
							    <div class="clear text-center">
							    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="gm-btn">
							    </div>
						    </div>
						</form>
					</div>

				<!--End mc_embed_signup-->
				</div><!--.modal-body-->
			</div><!--.modal-content-->
		</div><!--.modal-dialog-->
	</div><!--.modal-->

<?php get_footer(); ?>