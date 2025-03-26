<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- RESPONSIVE MENU -->
	
	<div class="responsive-menu">
		<div class="responsive-menu-main">
			<div class="responsive-logo">
				<a href="<?php echo site_url()?>">
					<img src="<?php echo get_field('header_logo','option'); ?>" alt="Logo">
				</a>
			</div>
			<div class="responsive-links">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'header_menu',
					) );
				?>
			</div>
			<div class="responsive-icon">
				<a href="javascript:;" class="menu-close"><i class="far fa-times"></i></a>
			</div>
			<div class="resp-social">
				<ul>
					<li>
						<a href="<?php echo get_field('facebook_link','option'); ?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('twitter_link','option'); ?>" target="_blank">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('youtube_link','option'); ?>" target="_blank">
							<i class="fab fa-youtube"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

    <div class="wrapper-main">
		
	<?php
    	if (is_front_page()) {
    ?>
		
	<!-- PRELOADER -->
		
	<div id="preloader">
        <div classs="preloader-inner">
            <div class="custom-loader"></div>
        </div>
    </div>	
		
	<?php } ?>
	
	<!-- HEADER -->

    <header class="header">
		<div class="top-header d-none d-lg-block">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-lg-6">
						<div class="top-head-links">
                            <ul>
                                <li><a href="mailto:<?php echo get_field('email','option'); ?>"><i class="fal fa-envelope"></i><?php echo get_field('email','option'); ?></a></li>
                                <li><a href="tel:<?php echo get_field('phone_number','option'); ?>"><i class="fal fa-phone"></i><?php echo get_field('phone_number','option'); ?></a></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-6 col-6">
						<div class="head-logo">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_field('header_logo','option'); ?>" alt="Logo">
                            </a>
                        </div>
					</div>
                    <div class="col-lg-9 col-md-6 col-6">
                        <div class="nav-bar d-none d-lg-block">
                            <nav>
                                <?php
									wp_nav_menu( array(
										'theme_location' => 'header_menu',
									) );
								?>
                            </nav>
                        </div>
						<div class="ham-menu d-lg-none text-end">
							<a href="javascript:;" class="open-menu"><i class="far fa-bars"></i></a>
						</div>
                    </div>
				</div>
			</div>
		</div>
    </header>

    <?php
    	if (is_front_page()) {
    ?>
		
	<?php
		$banner = get_field('main_banner');
	?>	

    <!-- SECTION MAIN BANNER -->

    <section class="main-home">
        <div class="hero-slider">
            <div class="banner">
                <div class="banner-img" style="background-image: url(<?php echo $banner['banner_image']['url']; ?>)">
                </div>
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
                                <div class="banner-title">
                                    <?php echo $banner['banner_content']; ?>
                                    <a href="<?php echo $banner['banner_button']['url']; ?>" class="web-btn"><?php echo $banner['banner_button']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="curve one">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/Polygon-2.png" alt="Image">
                </div>
                <div class="curve two">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/Polygon-1.png" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <?php } else { 
		// $header_detail 	= get_field('inner_header');
		// $banner 		= $header_detail['banner_image'];
		// if(empty($banner)){
		// 	$banner = get_template_directory_uri().'/assets/images/office-cleaning.jpg';
		// }		
	?>
		
    <?php } ?>