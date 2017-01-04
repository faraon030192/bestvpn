<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->

			<header class="header clear" role="banner">

                <div class="info info--default info--top hidden-xs">
                    <div class="container">
                        <div class="info__row">

                            <div class="info__cell">
                                <div class="info__item">
					<span class="info__flag">
						<img src="<?php echo get_template_directory_uri() ?>/img/temp/flag-usa-2.png" class="info__flag__img" alt="">
					</span>
                                    <span>117.123.535.334</span>
                                </div><!-- info__item -->

                                <div class="info__item">
                                    <span>You From:</span>
                                    <span class="info__span">N/A</span>
                                </div><!-- info__item -->

                                <div class="info__item">
                                    <span>ISP:</span>
                                    <span class="info__span">Time Warner Cable</span>
                                </div><!-- info__item -->
                            </div><!-- info-cell -->

                            <div class="info__cell">
                                <div class="info__item">
                                    <span>Your IP:</span>
                                    <span class="info__span">56.344.223.23</span>
                                </div><!-- info__item -->

                                <div class="info__item">
                                    <span>Need to hide this info ?</span>
                                    <a href="#" class="info__span">Use VPN!</a>
                                </div><!-- info__item -->

                            </div><!-- info-cell -->

                        </div><!-- info__row -->
                    </div><!-- container -->
                </div><!-- info -->

                <!-- nav -->
                <nav class="navbar-holder">
                    <div class="container">
                        <div class="navbar__row">
                            <div class="navbar__cell">
                                <a href="#" class="site__logo navbar__logo">
                                    10BEST<span class="site__logo__span navbar__logo__span">VPN</span>
                                </a>
                                <button class="offcanvas__toggle">
                                    <i class="bestvpn-icon-menu"></i>
                                </button>
                            </div><!-- navbar__cell -->

                            <div class="navbar__cell offcanvas-wrapper">
                                <div class="offcanvas-holder">
                                    <button class="offcanvas__close">
                                        <i class="bestvpn-icon-cancel"></i>
                                    </button>
                                    <ul class="navbar__list">
                                        <li class="navbar__list__item"><a href="/home" class="navbar__list__link">Home</a></li>
                                        <li class="navbar__list__item"><a href="/compare" class="navbar__list__link">Compare</a></li>
                                        <li class="navbar__list__item"><a href="#" class="navbar__list__link">VPN</a></li>
                                        <li class="navbar__list__item"><a href="/reviews" class="navbar__list__link">Reviews</a></li>
                                        <li class="navbar__list__item"><a href="#" class="navbar__list__link">FAQs</a></li>
                                        <li class="navbar__list__item"><a href="#" class="navbar__list__link">Advertiser Disclosure</a></li>
                                    </ul><!-- navbar__lis -->
                                </div><!-- offcanvas-holder -->
                            </div><!-- navbar__cell -->
                        </div><!-- row -->
                    </div><!-- container -->
                </nav><!-- navbar-holder -->
                <!-- /nav -->

			</header>
			<!-- /header -->
