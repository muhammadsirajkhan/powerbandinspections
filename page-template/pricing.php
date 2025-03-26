<?php
// Template name: Pricing
get_header();

// SECTION BANNER

$banner = get_field('banner');

// SECTION GET QUALITY

$get_quality = get_field('get_quality');

// SECTION AFFORDABLE

$affordable = get_field('affordable_powerband');
$afford_box = $affordable['pricing_box'];

// SECTION SPONSORS

$sponsor = get_field('logos', 9);

?>

<!-- SECTION INNER WRAPPER -->
		
<section class="inner-header" style="background:url(<?php echo $banner['background_image']['url']; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-8" data-aos="fade-down" data-aos-duration="1500">
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
					<?php echo $get_quality['title']; ?>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="rep-serv-item">
					<div class="rep-serv-img">
						<img src="<?php echo $get_quality['image']['url']; ?>" alt="Image">
					</div>
					<div class="rep-box rep-big-box"></div>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
				<div class="rep-serv-content web-title">
					<?php echo $get_quality['content']; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- PRICING -->

<section class="pricing spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title pricing-title text-center">
					<?php echo $affordable['title']; ?>
				</div>
			</div>
		</div>
		<div class="row" data-aos="fade-up" data-aos-duration="1500">
			
			<?php
				foreach($afford_box as $afford_item){
			?>
			
			<div class="col-lg-6 col-xl-3 col-md-6">
				<div class="pricing-box-main">
					<div class="pricing-box-item">
						<div class="pricing-name">
							<?php echo $afford_item['pricing_title']; ?>
						</div>
						<div class="price-main">
							<?php echo $afford_item['pricing_price']; ?>
						</div>
						<div class="pricing-btn">
							<a href="<?php echo $afford_item['button']['url']; ?>" class="web-btn"><?php echo $afford_item['button']['title']; ?></a>
						</div>
						<div class="pricing-features">
							<?php echo $afford_item['pricing_list']; ?>
						</div>
					</div>
				</div>
			</div>
			
			<?php
				}
			?>
			
		</div>
	</div>
</section>

<?php 
get_footer();
?>