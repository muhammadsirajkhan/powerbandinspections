<?php
// Template name: Contact Us
get_header();

// SECTION BANNER

$banner = get_field('banner');

// SECTION GET EXPERT

$get_expert = get_field('contact_grp');

// SECTION OUR LOCATIONS

$location = get_field('our_locations');

// SECTION SPONSORS

$sponsor = get_field('logos', 9);

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

<!-- CONTACT US PAGE -->

<section class="contact-us-page spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title text-center contact-title">
					<?php echo $get_expert['content']; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
				<div class="contact-form-main">
					<!-- < ?php echo do_shortcode('[contact-form-7 id="49d3e44" title="Home Inspection"]'); ?> -->
					<iframe
					  src="https://api.leadconnectorhq.com/widget/form/pqL6bMu5HItD7o5ReTWW"
					  style="width:100%;height:100%;border:none;border-radius:4px"
					  id="inline-pqL6bMu5HItD7o5ReTWW" 
					  data-layout="{'id':'INLINE'}"
					  data-trigger-type="alwaysShow"
					  data-trigger-value=""
					  data-activation-type="alwaysActivated"
					  data-activation-value=""
					  data-deactivation-type="neverDeactivate"
					  data-deactivation-value=""
					  data-form-name="Powerband Inspection"
					  data-height="535"
					  data-layout-iframe-id="inline-pqL6bMu5HItD7o5ReTWW"
					  data-form-id="pqL6bMu5HItD7o5ReTWW"
					  title="Powerband Inspection"
						  >
					</iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CONTACT DETAIL CARDS -->

<section class="contact-us-cards spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title text-center contact-card-title">
					<?php echo $location['title']; ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
			<div class="col-lg-4 col-md-6">
				<div class="contact-card-main">
					<div class="contact-card-icon">
						<i class="fas fa-phone-alt"></i>
					</div>
					<div class="contact-card-content">
						<h4>
							CALL NOW
						</h4>
						<a href="tel:<?php echo get_field('phone_number','option'); ?>"><?php echo get_field('phone_number','option'); ?></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-card-main">
					<div class="contact-card-icon">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="contact-card-content">
						<h4>
							EMAIL NOW
						</h4>
						<a href="mailto:<?php echo get_field('email','option'); ?>"><?php echo get_field('email','option'); ?></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-card-main">
					<div class="contact-card-icon">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="contact-card-content">
						<h4>
							ADDRESS
						</h4>
						<h5><?php echo get_field('location','option'); ?></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
get_footer();
?>