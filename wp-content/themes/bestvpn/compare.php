<?php /* Template Name: compare */ ?>
<?php
get_header();
?>
<main>

	<section class="section section--hero section--has-bg" style="background-image:url('<?php echo get_template_directory_uri() ?>/img/bg/hero-bg-3.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6">
					<h1 class="h3 text-white">Top Best VPN’s December 2016</h1>
					<ul class="list-ok text-white">
						<li class="list-ok__item">Access ALL websites & apps from any location</li>
						<li class="list-ok__item">Stream video from any country at super fast speeds</li>
						<li class="list-ok__item">Secure, anonymous & encrypted browsing</li>
						<li class="list-ok__item">Free trials, money-back guarantees & great deals</li>
					</ul><!-- list-ok -->

					<ul class="list-inline text-white">
						<li><b>Available For:</b></li>
						<li class="text-info"><i class="bestvpn-icon-windows"></i></li>
						<li class="text-gray"><i class="bestvpn-icon-apple"></i></li>
						<li class="text-success"><i class="bestvpn-icon-android"></i></li>
						<li class="text-white"><i class="bestvpn-icon-linux"></i></li>
					</ul>
				</div><!-- col -->

				<div class="col-md-7 col-sm-6">
					<img src="<?php echo get_template_directory_uri() ?>/img/temp/computers.png" class="hero__floatet-img--sm" alt="">
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->



	<section class="section section--below-hero-sm">
		<div class="container">
			<div class="panel-cards">

				<div class="panel-card__titles">
					<div class="row">
						<div class="col-lg-3 col-md-2 col-sm-3">
							<h4 class="panel-card__title">OUR TOP PICKS</h4>
						</div><!-- col -->

						<div class="col-lg-4 col-md-4 col-sm-4">
							<h4 class="panel-card__title">FEATURES</h4>
						</div><!-- col -->

						<div class="col-lg-3 col-md-3 col-sm-2">
							<h4 class="panel-card__title">GOOD FOR</h4>
						</div><!-- col -->

						<div class="col-lg-2 col-md-3 col-sm-3">
							<h4 class="panel-card__title">SCORE</h4>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- panel-card__title -->

                <main role="main">
                    <!-- section -->
                    <section>

                        <?php get_template_part('custom-loop'); ?>

                    </section>
                    <!-- /section -->
                </main>

			</div><!-- panel-card -->
		</div><!-- container -->
	</section><!-- section -->



</main>

<?php get_footer();