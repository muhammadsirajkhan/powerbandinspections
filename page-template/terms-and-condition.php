<?php
// Template name: Terms and Condition
get_header();

// SECTION BANNER

$banner = get_field('banner');

?>

<!-- SECTION INNER WRAPPER -->
		
<section class="inner-header" style="background:url(<?php echo $banner['background_image']['url']; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8" data-aos="fade-down" data-aos-duration="1500">
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

<!-- SECTION TERMS DESCRIPTION -->

<section class="terms-discription spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1500">
                <div class="terms-title">
                    <h2>Terms and <br> Condition</h2>
                </div>
            </div>
            <div class="col-lg-9" data-aos="fade-left" data-aos-duration="1500">
                <div class="instruction-sec-content">
					<?php echo the_content();?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>