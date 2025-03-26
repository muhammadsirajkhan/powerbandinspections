<?php
// Template name: About Us
get_header();

// SECTION BANNER

$banner = get_field('section_banner');

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

// SECTION EXPERT

$expert = get_field('choose_powerband_grp');
$expert_rep = $expert ['expert_rep'];

?>

<!-- SECTION INNER WRAPPER -->
		
<section class="inner-header" style="background:url(<?php echo $banner['background_image']['url']; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="inner-header-title">
					<?php echo $banner['content']; ?>
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
</section>

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
			
			<?php } ?>
			
        </div>
    </div>
</section>

<!-- SECTION COMMITTED -->

<?php 
$comit = get_field('comitted_grp');
?>

<!-- <section class="comitted spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title comitted-title text-center">
					<?php echo $comit['content'];?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
				<div class="comitted-vid-main">
					<div class="comitted-vid-img">
						<video loop playsinline>
							<source src="<?php echo esc_url($comit['comitted_vedio']['url']); ?>" type="video/mp4">
						</video>

					</div>
					<div class="testi-icon">
						<a href="javascript:;">
							<i class="<?php echo $comit['icon'];?>"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- SECTION EXPERT SERVICES -->

<section class="expert-serv spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
				<div class="web-title expert-serv-title">
					<h2> <?php echo $expert['title'];?>
					</h2>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="expert-serv-cont">
					<p><?php echo $expert['title_2'];?></p>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
				<div class="expert-sev-list">
					
					<ul>
						<?php 
						    foreach($expert_rep as $expert_rep_content){							
						?>
                        <li>
                            <span><i class="<?php echo $expert_rep_content['icon'];?>"></i></span>
							<div class="choose-cont-list">
                            <?php echo $expert_rep_content['content'];?>	
							</div>
                        </li>	
						<?php } ?>						
                    </ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-8" data-aos="fade-left" data-aos-duration="1500">
				<div class="expert-serv-img">
					<img src="<?php echo $expert ['image']['url'];?>" alt="Image">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION THE WAY -->

<?php 
$way = get_field('the_way_grp');
?>

<!-- <section class="the-way spacing">
	<div class="container">
		<div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="rep-serv-item">
					<div class="rep-serv-img">
						<img src="<?php echo $way ['image']['url'];?>" alt="Image">
					</div>
					<div class="rep-box rep-big-box"></div>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="rep-serv-content web-title">
					<?php echo $way['content'];?>
				</div>
			</div>
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