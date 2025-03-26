<?php
// Template name: Home Inspection
get_header();

// SECTION SPONSORS

$sponsor = get_field('logos');

// SECTION ABOUT US

$about_us = get_field('about_us');

// SECTION PEACE MIND

$peace_mind = get_field('services');
$peace_box = $peace_mind['service_tab'];

// SECTION REPAIR SERVICES

$repair = get_field('repair_solutions');
$repair_item = $repair['repair_box'];

// SECTION SAFER TOMORROW

$appointment = get_field('appointment');

// SECTION ACHIEVEMENT

$achievement = get_field('achievement');
$achievement_box = $achievement['achievement_box'];

// SECTION PROPERTY SERVICES

$prop_manage = get_field('property_managers');
$prop_box = $prop_manage['property_box'];

// SECTION OUR PROJECTS

$our_project = get_field('our_project');
$project_box = $our_project['project_box'];

// SECTION VIDEO TESTIMONIALS

$vid_testi = get_field('video_testimonials');
$testi_box = $vid_testi['testimonial_box'];

// SECTION CHOOSE US

$choose_us = get_field('choose_us');
$choose_list = $choose_us['content_list'];

?>

<!-- SECTION SPONSORS -->

<section class="sponsor">
    <div class="container">
        <div class="row">
			
			<?php
				foreach($sponsor as $sponsor_item){
			?>
			
            <div class="col-lg-2 col-md-4 col-sm-4 col-6" data-aos="fade-down" data-aos-duration="1500">
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


<!-- SECTION ABOUT US -->

<section class="about-us spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
                <div class="about-img-main">
					<?php 
				 $video_or_youtube = $about_us['video_or_youtube'];
				if($video_or_youtube === "youtube") {  ?>
					<div class="about-youtube">
						<iframe width="100%" height="100%"
						src="https://www.youtube.com/embed/<?php echo $about_us['youtube_link']; ?>">
					</iframe>
					</div>
					
					<?php } else { ?>
                    <div class="about-img">
						<video loop="" playsinline>
							<source src="<?php echo $about_us['video']['url']; ?>" type="video/mp4">
						</video>
						<div class="testi-icon">
							<a href="javascript:;">
								<i class="fas fa-play"></i>
							</a>
						</div>
						<!-- <img src="< ?php echo $about_us['image']['url']; ?>" alt="< ?php echo $about_us['image']['alt']; ?>"> -->
                    </div>
					<?php } ?>
<!--                     <div class="exper-box">
                        <h3>
                            < ?php echo $about_us['experience_box']; ?>
                        </h3>
                    </div> -->
                    <div class="about-img-dot">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/dot_shapes_compressed.webp" alt="Image">
                    </div>
                    <div class="about-line"></div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                <div class="web-title about-content">
                    <?php echo $about_us['content']; ?>
                    <a href="<?php echo $about_us['button']['url']; ?>" class="web-btn"><?php echo $about_us['button']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PEACE MIND -->

<section class="peace-mind spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1500">
                <div class="web-title peace-title">
                    <?php echo $peace_mind['main_title']; ?>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500">
                <div class="peace-tit-cont">
                    <?php echo $peace_mind['title_content']; ?>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-lg-3">
                <div class="peace-tabs-btn">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
						
						<?php 
							foreach($peace_box as $key => $peace_item){
						?>
						
                        <li class="nav-item" role="presentation">
                            <button class="nav-link 
										   <?php 
												if($key == 0) { 
													echo 'active';
												}
										   ?>
									" id="tab<?php echo $key; ?>" data-bs-toggle="tab" data-bs-target="#serv<?php echo $key; ?>" type="button" role="tab" aria-controls="serv<?php echo $key; ?>" aria-selected="true">
                                <img src="<?php echo $peace_item['button_image']['url']; ?>" alt="<?php echo $peace_item['button_image']['alt']; ?>">
                                <span><?php echo $peace_item['button_text']; ?></span>
                            </button>
                        </li>
						
						<?php 
							}
						?>
						
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="peace-tab-content">
                    <div class="tab-content" id="myTabContent">
						
						<?php 
							foreach($peace_box as $key => $peace_item){
						?>
						
                        <div class="tab-pane fade 
									<?php 
										if($key == 0) { 
											echo 'show active';
										}
									?>
							" id="serv<?php echo $key; ?>" role="tabpanel" aria-labelledby="tab<?php echo $key; ?>">
							
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="peace-tab-item">
                                        <?php echo $peace_item['service_tab_content']; ?>
                                        <a href="<?php echo $peace_item['service_tab_button']['url']; ?>" class="web-btn"><?php echo $peace_item['service_tab_button']['title']; ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="peace-tab-img">
                                        <img src="<?php echo $peace_item['service_tab_image']['url']; ?>" alt="<?php echo $peace_item['service_tab_image']['alt']; ?>">
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
        </div>
    </div>
</section>

<!-- SECTION REPAIR SERVICES -->

<section class="rep-service spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title rep-serv-title text-center">
                    <?php echo $repair['main_title']; ?>
                </div>
            </div>
        </div>
        <div class="rep-rows-main">
			
			<?php
				foreach($repair_item as $repair_box){
			?>
			
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
                    <div class="rep-serv-item">
                        <div class="rep-serv-img">
                            <img src="<?php echo $repair_box['image']['url']; ?>" alt="<?php echo $repair_box['image']['alt']; ?>">
                        </div>
                        <div class="rep-box rep-big-box"></div>
                        <div class="rep-box rep-short-box"></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="rep-serv-content web-title">
                        <?php echo $repair_box['content']; ?>
                        <a href="<?php echo $repair_box['button']['url']; ?>" class="web-btn"><?php echo $repair_box['button']['title']; ?></a>
                    </div>
                </div>
            </div>
			
			<?php
				}
			?>
			
        </div>
    </div>
</section>

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



<!-- SECTION PROP SERVICES -->

<section class="prop-services spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                <div class="web-title prop-serv-content">
                    <?php echo $prop_manage['content']; ?>
                    <a href="<?php echo $prop_manage['button']['url']; ?>" class="web-btn"><?php echo $prop_manage['button']['title']; ?></a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                <div class="prop-serv-boxes">
					
					<?php
						foreach($prop_box as $prop_box_item){
					?>
					
                    <div class="pro-serv-box-item">
                        <div class="pro-serv-item-icon">
                            <img src="<?php echo $prop_box_item['property_box_image']['url']; ?>" alt="<?php echo $prop_box_item['property_box_image']['alt']; ?>">
                        </div>
                        <?php echo $prop_box_item['property_box_content']; ?>
                    </div>
					
					<?php
						}
					?>
					
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
        <div class="row project-slider">
			
			<?php
				foreach($project_box as $project_box_item){
			?>
			
            <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1500">
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
        <div class="row testi-slider">
			
			<?php
				foreach($testi_box as $testi_box_item){
			?>
			
            <div class="testi-item" data-aos="fade-up" data-aos-duration="1500">
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

<!-- SECTION WHY CHOOSE US -->

<section class="why-choose spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="choose-content web-title">
                    <?php echo $choose_us['main_title']; ?>
                    <ul data-aos="fade-right" data-aos-duration="1500">
						
						<?php
							foreach($choose_list as $choose_list_item){
						?>
						
                        <li>
                            <span><i class="fal fa-check"></i></span>
							<div class="choose-cont-list">
                            	<?php echo $choose_list_item['content']; ?>
							</div>
                        </li>
						
						<?php
							}
						?>
						
                    </ul>
                    <a href="<?php echo $choose_us['button']['url']; ?>" class="web-btn" data-aos="fade-right" data-aos-duration="1500"><?php echo $choose_us['button']['title']; ?></a>
<!-- 					<div class="choose-video d-none d-lg-block">
						<a href="javascript:;">
							<i class="fas fa-play"></i>
						</a>
					</div> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="choose-img">
                    <img src="<?php echo $choose_us['image']['url']; ?>" alt="<?php echo $choose_us['image']['alt']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>