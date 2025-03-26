<?php
// Template name: Services
get_header();

// SECTION BANNER

$banner = get_field('banner');

// SECTION EXPERT ELECTRICAL

$expert_electrical = get_field('expert_electrical');
$expert_box = $expert_electrical['zigzag_boxes'];

// SECTION SAFETY CHECK

$safety_check = get_field('safety_check');

// SECTION BENEFITS OF CHOOSING

$benefits_of = get_field('benefits_of_choosing');
$benefits_box = $benefits_of['short_boxes'];

// SECTION DOWNLOAD

$compreh = get_field('download');

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

// SECTION HORIZONTAL

$horiz = get_field('comprehensive');
$horiz_box = $horiz['horizontal_accordion'];

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
		
<!-- <section class="inner-header" style="background:url(<?php echo site_url(); ?>/wp-content/uploads/2025/01/electrical-engineers-check-electrical-control-devices-with-multimeter-1_compressed-1.webp);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="inner-header-title">
					<span class="ban-sub">POWERBAND INSPECTION Service</span>
					<h1>
						<span>Electrical</span> Safety Check
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
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
			
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

<!-- SECTION REPAIR SERVICES -->

<section class="rep-service spacing for-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title rep-serv-title text-center">
					<?php echo $expert_electrical['title']; ?>
                </div>
            </div>
        </div>
        <div class="rep-rows-main">	
			
			<?php
				foreach($expert_box as $expert_box_item){
			?>
			
            <div class="row align-items-center" data-aos="fade-right" data-aos-duration="1500">
                <div class="col-lg-6 col-md-8">
                    <div class="rep-serv-item">
                        <div class="rep-serv-img">
                            <img src="<?php echo $expert_box_item['image']['url']; ?>" alt="<?php echo $expert_box_item['image']['alt']; ?>">
                        </div>
                        <div class="rep-box rep-big-box"></div>
                        <div class="rep-box rep-short-box"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rep-serv-content web-title">
                        <?php echo $expert_box_item['content']; ?>
                        <a href="<?php echo $expert_box_item['button']['url']; ?>" class="web-btn"><?php echo $expert_box_item['button']['title']; ?></a>
                    </div>
                </div>
            </div>	
			
			<?php
				}
			?>
					
        </div>
    </div>
</section>

<!-- SECTION HOME SAFE -->

<section class="home-safe spacing" style="background-image: url(<?php echo $safety_check['background_image']['url']; ?>);"> 
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title text-center home-safe-title">
					<?php echo $safety_check['title']; ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
			<div class="col-lg-8">
				<?php 
				 $video_or_youtube = $safety_check['video_or_youtube'];
				if($video_or_youtube === "youtube") {  ?>
				<div class="home-safe-youtube">
					<iframe width="100%" height="100%"
						src="https://www.youtube.com/embed/<?php echo $safety_check['youtube_link']; ?>">
					</iframe>
				</div>
				<?php } else { ?>
				<div class="home-safe-vid">
					<div class="home-safe-vid-img">
						<video loop="" playsinline>
							<source src="<?php echo $safety_check['video']['url']; ?>" type="video/mp4">
						</video>
					</div>
					<div class="testi-icon">
						<a href="javascript:;">
							<i class="fas fa-play"></i>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<!-- SECTION HORIZ ACCORDION -->

<section class="horiz-accord spacing pt-md-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
				<div class="horiz-title web-title">
					<h2>
						<?php echo $horiz['left_title']; ?>
					</h2>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="horiz-content">
					<p>
						<?php echo $horiz['right_content']; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row d-none d-lg-block">
            <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
                <div class="h-service-items-main">
					
					<?php
						foreach($horiz_box as $key => $horiz_box_item){
					?>
					
                    <div class="h-service-item-box <?php if($key == 0){ echo 'active'; }else{ echo ''; }?>">
                        <div class="h-service-item-box-inner">
                            <div class="h-service-item">
                                <div class="h-service-item-title">
									<img src="<?php echo $horiz_box_item['icon']['url']; ?>" alt="<?php echo $horiz_box_item['icon']['alt']; ?>" style="transform: rotate(-90deg);">
                                    <h3><?php echo $horiz_box_item['title']; ?></h3>
                                </div>
								<div class="h-service-item-count">
									<span><?php echo $horiz_box_item['count_text']; ?></span>
								</div>
                            </div>
                            <div class="h-service-info">
                                <div class="h-service-info-main">
									<div class="h-service-info-title-mega">
										<div class="h-service-info-main-title">
											<img src="<?php echo $horiz_box_item['icon']['url']; ?>" alt="<?php echo $horiz_box_item['icon']['alt']; ?>">
											<h3><?php echo $horiz_box_item['title']; ?></h3>
										</div>
										<div class="h-service-info-boxes-count">
											<span><?php echo $horiz_box_item['count_text']; ?></span>
										</div>
									</div>
									<div class="h-service-info-content-mega">
										<?php echo $horiz_box_item['content']; ?>
										<a href="<?php echo $horiz_box_item['button']['url']; ?>" class="web-btn"><?php echo $horiz_box_item['button']['title']; ?></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php
						}
					?>
					
                </div>
            </div>
        </div>
		<div class="row d-lg-none">
			<div class="col-lg-12">
				<div class="vert-mob-main">
					<div class="accordion" id="accordionExample">
						
						<?php
							foreach($horiz_box as $key => $horiz_box_item){
						?>
						
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading<?php echo $key; ?>">
								<button class="accordion-button <?php if($key == 0){ echo ''; }else{ echo 'collapsed'; }?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
									<img src="<?php echo $horiz_box_item['icon']['url']; ?>" alt="<?php echo $horiz_box_item['icon']['alt']; ?>">
									<h3><?php echo $horiz_box_item['title']; ?></h3>
									<span><?php echo $horiz_box_item['count_text']; ?></span>
								</button>
							</h2>
							<div id="collapse<?php echo $key; ?>" class="accordion-collapse collapse <?php if($key == 0){ echo 'show'; }else{ echo ''; }?>" aria-labelledby="heading<?php echo $key; ?>" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<?php echo $horiz_box_item['content']; ?>
									<a href="<?php echo $horiz_box_item['button']['url']; ?>" class="web-btn"><?php echo $horiz_box_item['button']['title']; ?></a>
								</div>
							</div>
						</div>
						
						<?php
							}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION BENEFITS CHOOSING -->

<section class="benefits-choosing spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title ben-choo-title text-center">
					<?php echo $benefits_of['title']; ?>
				</div>
			</div>
		</div>
		<div class="row" data-aos="fade-up" data-aos-duration="1500">
			<div class="col-lg-12 col-xl-8">
				<div class="row ben-choo-gap">
					
					<?php
						foreach($benefits_box as $benefits_item){
					?>
					
					<div class="col-lg-4 col-md-6">
						<div class="ben-choo-item">
							<?php echo $benefits_item['content']; ?>
							<div class="ben-choo-icon">
								<i class="fas fa-check"></i>
							</div>
						</div>
					</div>
					
					<?php
						}
					?>
					
				</div>
			</div>
			<div class="col-lg-4 d-none d-xl-block">
				<div class="ban-choo-img">
					<img src="<?php echo $benefits_of['image']['url']; ?>" alt="<?php echo $benefits_of['image']['alt']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION CHECK GUIDE -->

<section class="check-guide spacing" style="background-image: url(<?php echo $compreh['background_image']['url']; ?>);">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1500">
				<div class="ch-guide-img mb-4 mb-lg-0">
					<img src="<?php echo $compreh['image']['url']; ?>" alt="<?php echo $compreh['image']['alt']; ?>">
				</div>
			</div>
			<div class="col-lg-8" data-aos="fade-left" data-aos-duration="1500">
				<div class="ch-guide-content web-title">
					<?php echo $compreh['content']; ?>
					<a href="<?php echo $compreh['button']['url']; ?>" class="web-btn"><?php echo $compreh['button']['title']; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

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
    <div class="container-fluid" data-aos="fade-up" data-aos-duration="1500">
        <div class="row testi-slider">
			
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