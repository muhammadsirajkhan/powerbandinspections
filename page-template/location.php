<?php
// Template name: Location
get_header();

// SECTION BANNER

$banner = get_field('banner');

// SECTION SPONSORS

$sponsor = get_field('logos', 9);

// SECTION VIDEO TESTIMONIALS

$vid_testi = get_field('video_testimonials', 9);
$testi_box = $vid_testi['testimonial_box'];

// SECTION OUR PROJECTS

$our_project = get_field('our_project', 9);
$project_box = $our_project['project_box'];

// SECTION SAFER TOMORROW

$appointment = get_field('appointment', 9);

// SECTION ACHIEVEMENT

$achievement = get_field('achievement', 9);
$achievement_box = $achievement['achievement_box'];

// SECTION MAP

$map = get_field('across_melbourne');

// SECTION TRUSTED LOCAL

$trusted = get_field('trusted_local');

// SECTION CONFIDENCE

$confidence = get_field('confidence');
$confi_box = $confidence['boxes'];

// SECTION RELIABLE CHOICE

$reliable_choice = get_field('reliable_choice');

?>

<!-- SECTION MAIN BANNER -->

<section class="main-home">
	<div class="hero-slider">
		<div class="banner">
			<div class="banner-img" style="background-image: url(<?php echo $banner['background_image']['url']; ?>)">
			</div>
			<div class="banner-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
							<div class="banner-title">
								<?php echo $banner['content']; ?>
                                <a href="<?php echo $banner['button']['url']; ?>" class="web-btn"><?php echo $banner['button']['title']; ?></a>
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

<!-- SECTION INNER WRAPPER -->
		
<!-- <section class="inner-header" style="background:url(<?php echo site_url(); ?>/wp-content/uploads/2025/01/electrical-engineers-check-electrical-control-devices-with-multimeter-1-1_compressed.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="inner-header-title">
					<span class="ban-sub">POWERBAND INSPECTION Location</span>
					<h1>
						Expert Electrical Safety Checks in <span>Melbourne</span>
					</h1>
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
</section> -->

<!-- SECTION SPONSORS -->

<section class="sponsor">
    <div class="container">
        <div class="row" data-aos="fade-down" data-aos-duration="1500">
			
			<?php
				foreach($sponsor as $sponsor_item){
			?>
			
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                <div class="sponsor-item">
                    <img src="<?php echo $sponsor_item['logo_image']['url']; ?>" alt="<?php echo $sponsor_item['logo_image']['alt']; ?>">
                </div>
            </div>
			
			<?php
				}
			?>
			
        </div>
    </div>
</section>

<!-- SECTION ACHIEVEMENT -->

<section class="achievement spacing pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title text-center achiev-title">
                    <?php echo $achievement['main_title']; ?>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
			
			<?php 
				foreach($achievement_box as $achievement_box_item){
			?>
			
            <div class="col" data-aos="fade-bottom" data-aos-duration="1500">
                <div class="achiev-main">
                    <div class="achiev-item">
                        <?php echo $achievement_box_item['content']; ?>
                    </div>
                </div>
            </div>
			
			<?php
				}
			?>
			
        </div>
    </div>
</section>

<!-- SECTION THE WAY -->

<section class="the-way spacing for-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="the-way-title web-title text-center">
					<?php echo $trusted['title']; ?>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="rep-serv-item">
					<div class="rep-serv-img">
						<img src="<?php echo $trusted['image']['url']; ?>" alt="<?php echo $trusted['image']['alt']; ?>">
					</div>
					<div class="rep-box rep-big-box"></div>
				</div>
			</div> 
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="rep-serv-content web-title">
					<?php echo $trusted['content']; ?>
					<a href="<?php echo $trusted['button']['url']; ?>" class="web-btn"><?php echo $trusted['button']['title']; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION EXPERT SERVICES -->

<section class="expert-serv spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
				<div class="web-title expert-serv-title">
					<h2>
						<?php echo $confidence['left_title']; ?>
					</h2>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="expert-serv-cont">
					<p>
						<?php echo $confidence['right_title']; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
				<div class="expert-sev-list">
					<ul>	
						
						<?php
							foreach($confi_box as $confi_box_item){
						?>
						
                        <li>
                            <span><i class="<?php echo $confi_box_item['icon']; ?>"></i></span>
							<div class="choose-cont-list">
                            	<?php echo $confi_box_item['content']; ?>
							</div>
                        </li>
						
						<?php
							}
						?>
													
                    </ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-8" data-aos="fade-left" data-aos-duration="1500">
				<div class="expert-serv-img">
					<img src="<?php echo $confidence['image']['url']; ?>" alt="<?php echo $confidence['image']['alt']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION THE WAY -->

<section class="the-way spacing">
	<div class="container">
		<div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="rep-serv-item">
					<div class="rep-serv-img">
						<img src="<?php echo $reliable_choice['image']['url']; ?>" alt="<?php echo $reliable_choice['image']['alt']; ?>">
					</div>
					<div class="rep-box rep-big-box"></div>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="rep-serv-content web-title">
					<?php echo $reliable_choice['content']; ?>
					<a href="<?php echo $reliable_choice['button']['url']; ?>" class="web-btn"><?php echo $reliable_choice['button']['title']; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION LOCATION MAP -->

<section class="location-map spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title text-center loc-map-title">
					<?php echo $map['title']; ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8" data-aos="fade-up" data-aos-duration="1500">
				<div class="loc-map-item">
					<?php echo $map['map']; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION OUR PROJECTS -->

<!-- <section class="projects spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-10" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title project-title">
                    <?php echo $our_project['main_title']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row project-slider" data-aos="fade-up" data-aos-duration="1500">
			
			<?php
				foreach($project_box as $project_box_item){
			?>
			
            <div class="col-lg-3">
                <div class="project-item">
                    <div class="project-img">
                        <img src="<?php echo $project_box_item['image']['url']; ?>" alt="<?php echo $project_box_item['image']['alt']; ?>">
                    </div>
                    <div class="project-content">
                        <?php echo $project_box_item['content']; ?>
                    </div>
                    <div class="project-btn">
                        <a href="<?php echo $project_box_item['button']['url']; ?>"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
			
			<?php
				}
			?>
			
        </div>
    </div>
</section> -->

<!-- SECTION TESTIMONIAL -->

<!-- <section class="testimonial spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title text-center testi-title">
                    <?php echo $vid_testi['main_title']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row testi-slider" data-aos="fade-up" data-aos-duration="1500">
			
			<?php
				foreach($testi_box as $testi_box_item){
			?>
			
            <div class="testi-item">
                <div class="testi-img">
                    <video loop="" playsinline>
						<source src="<?php echo $testi_box_item['Video']; ?>" type="video/mp4">
					</video>
                </div>
                <div class="testi-icon">
                    <a href="javascript:;">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
			
			<?php
				}
			?>
			
        </div>
    </div>
</section> -->

<!-- SECTION SAFER TOMORROW -->

<section class="safer-tomorrow spacing" style="background-image: url(<?php echo $appointment['background_image']['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
                <div class="safer-content">
                    <?php echo $appointment['content']; ?>
                    <a href="<?php echo $appointment['button']['url']; ?>" class="web-btn"><?php echo $appointment['button']['title']; ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="safer-img d-none d-md-block">
                    <img src="<?php echo $appointment['image']['url']; ?>" alt="<?php echo $appointment['image']['alt']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>