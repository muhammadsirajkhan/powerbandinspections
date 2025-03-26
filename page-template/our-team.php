<?php
// Template name: Our Team
get_header();

// SECTION BANNER

$banner = get_field('banner');

// SECTION SPONSORS

$sponsor = get_field('logos', 9);

// SECTION TEAM

$team = get_field('team_skilled');
$team_box = $team['team_box'];

// SECTION COMMITTED

$committed = get_field('committed');

?>

<!-- SECTION INNER WRAPPER -->
		
<section class="inner-header" style="background:url(<?php echo $banner['background_image']['url']; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-8" data-aos="fade-right" data-aos-duration="1500">
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

<!-- SECTION THE WAY -->

<section class="the-way spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="the-way-title web-title text-center">
					<?php echo $committed['title']; ?>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="rep-serv-item">
					<div class="rep-serv-img">
						<img src="<?php echo $committed['image']['url']; ?>" alt="<?php echo $committed['image']['alt']; ?>">
					</div>
					<div class="rep-box rep-big-box"></div>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="rep-serv-content web-title">
					<?php echo $committed['content']; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION TEAM ZIGZAG -->

<section class="team-zigzag spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title team-zig-title text-center">
					<?php echo $team['title']; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
				<div class="team-items-main">
					
					<?php
						foreach($team_box as $team_box_item){
					?>
					
					<div class="team-item-box">
						<div class="team-item-content">
							<div class="team-cont-name">
								<?php echo $team_box_item['name']; ?>
							</div>
							<div class="team-cont-desc">
								<?php echo $team_box_item['content']; ?>
							</div>
						</div>
						<div class="team-item-img">
							<img src="<?php echo $team_box_item['image']['url']; ?>" alt="<?php echo $team_box_item['image']['alt']; ?>">
						</div>
						<div class="team-experience">
							<span><?php echo $team_box_item['experience']; ?></span>
						</div>
					</div>
					
					<?php
						}
					?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
get_footer();
?>