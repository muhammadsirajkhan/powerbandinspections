<?php

// SECTION FAQ'S
$faqs_sec = get_field('faqs');

if($faqs_sec) {
	} else {
$faqs_sec = get_field('faqs', 9);
	}
$faqs_box = $faqs_sec['faqs_box'];

// SECTION ACCREDIATION

$accreditations = get_field('accreditations', 9);
$acc_logos = $accreditations['logo_box'];

?>

<!-- TESTIMONIALS -->

<section class="testimonials spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title text-center testi-cards-title">
					<?php echo get_field('testimonial_section_title','option'); ?>
				</div>
				<div class="platforms">
					<img src="<?php echo site_url();?>/wp-content/uploads/2025/01/fcbf2cc2cd4f612a8339bd594ef989fe_compressed.webp">
				</div>
			</div>
		</div>
<!-- 		<div class="row">
			<div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
				<div class="testimnial-card-main testimonial-slider">
					<div class="testimonial-card-item" data-aos="fade-up" data-aos-duration="1500">
						<div class="author-image">
							<img src="<?php echo site_url();?>/wp-content/uploads/2025/01/9df8fb6bbfd99db1cb18960fb1e8e0e1_compressed.webp">
						</div>
						<div class="author-details">
							<h2>
								Guy Hawkins
							</h2>
							<h4>
								Creative Director
							</h4>
						</div>
						<div class="author-content">
							<p>
								This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He  who searches for meaning here will be sorely disappointed. This is dummy copy. It is not meant to be read. 
							</p>
						</div>
						<div class="author-ratings">
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="testimonial-card-item" data-aos="fade-up" data-aos-duration="1500">
						<div class="author-image">
							<img src="<?php echo site_url();?>/wp-content/uploads/2025/01/3a906b3de8eaa53e14582edf5c918b5d_compressed.webp">
						</div>
						<div class="author-details">
							<h2>
								sasha Hawkins
							</h2>
							<h4>
								House Wife
							</h4>
						</div>
						<div class="author-content">
							<p>
								This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He  who searches for meaning here will be sorely disappointed. This is dummy copy. It is not meant to be read. 
							</p>
						</div>
						<div class="author-ratings">
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="testimonial-card-item" data-aos="fade-up" data-aos-duration="1500">
						<div class="author-image">
							<img src="<?php echo site_url();?>/wp-content/uploads/2025/01/86efa3df337e8c215dd8095476bb6513_compressed.webp">
						</div>
						<div class="author-details">
							<h2>
								Ronald Richard
							</h2>
							<h4>
								Homeowner
							</h4>
						</div>
						<div class="author-content">
							<p>
								This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He  who searches for meaning here will be sorely disappointed. This is dummy copy. It is not meant to be read. 
							</p>
						</div>
						<div class="author-ratings">
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="testimonial-card-item" data-aos="fade-up" data-aos-duration="1500">
						<div class="author-image">
							<img src="<?php echo site_url();?>/wp-content/uploads/2025/01/ae1e058c2ed75ab981a9f8bb62e96a13_compressed.webp">
						</div>
						<div class="author-details">
							<h2>
								Omen Donald
							</h2>
							<h4>
								Landlord
							</h4>
						</div>
						<div class="author-content">
							<p>
								This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He  who searches for meaning here will be sorely disappointed. This is dummy copy. It is not meant to be read. 
							</p>
						</div>
						<div class="author-ratings">
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="testimonial-card-item" data-aos="fade-up" data-aos-duration="1500">
						<div class="author-image">
							<img src="<?php echo site_url();?>/wp-content/uploads/2025/01/3a906b3de8eaa53e14582edf5c918b5d_compressed.webp">
						</div>
						<div class="author-details">
							<h2>
								sasha Hawkins
							</h2>
							<h4>
								House Wife
							</h4>
						</div>
						<div class="author-content">
							<p>
								This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He  who searches for meaning here will be sorely disappointed. This is dummy copy. It is not meant to be read. 
							</p>
						</div>
						<div class="author-ratings">
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-lg-12">
				<div class="trust-reviews">
					<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION FREQUENTLY ASKED QUESTION -->

<section class="faqs spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title faq-title text-center">
                    <?php echo $faqs_sec['main_title']; ?>
                </div>
            </div>
			<div class="col-lg-12" data-aos="fade-up" data-aos-duration="1500">
				<div class="faqs-item-main">
                    <div class="accordion" id="accordionExample">
						
						<?php
							foreach($faqs_box as $key => $faqs_box_item){
						?>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $key; ?>">
                            <button class="accordion-button <?php if($key == 0){ echo ''; } else{ echo 'collapsed'; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
                                <?php echo $faqs_box_item['question']; ?>
                            </button>
                            </h2>
                            <div id="collapse<?php echo $key; ?>" class="accordion-collapse collapse <?php if($key == 0){ echo 'show'; } ?>" aria-labelledby="heading<?php echo $key; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><?php echo $faqs_box_item['answer']; ?></p>
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

<!-- SECTION ACCREDIATION -->

<section class="acceridiation spacing pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-down" data-aos-duration="1500">
                <div class="web-title text-center accred-title">
                    <h2><?php echo $accreditations['main_title']; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
			
			<?php
				foreach($acc_logos as $acc_logos_item){
			?>
			
            <div class="col-lg-2 col-md-4 col-sm-4 col-6" data-aos="fade-down" data-aos-duration="1500">
                <div class="sponsor-item">
                    <img src="<?php echo $acc_logos_item['logo_image']['url']; ?>" alt="<?php echo $acc_logos_item['logo_image']['alt']; ?>">
                </div>
            </div>
			
			<?php
				}
			?>
			
        </div>
    </div>
</section>

<!-- SECTION BOOK INSPECTION -->

<section class="book-inspection spacing pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 d-none d-lg-block" data-aos="fade-right" data-aos-duration="1500">
                <div class="book-man">
                    <div class="book-socials">
                        <ul>
                            <li><a href="<?php echo get_field('facebook_link','option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo get_field('twitter_link','option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo get_field('pinterest_link','option'); ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="<?php echo get_field('youtube_link','option'); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="book-man-img">
<!--                         <img src="<?php echo site_url()?>/wp-content/uploads/2024/12/4126-1_compressed.webp" alt="Image"> -->
						
						<img src="<?php echo get_field('contact_image','option'); ?>" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1500">
                <div class="book-form-main">
					<!--  <h5>Book Your <span>Home Inspection</span> Now</h5> -->
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

<!-- FOOTER -->

<footer class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-5 col-md-6">
                    <div class="foot-logo-main foot-item">
                        <h3>About Us</h3>
                        <p><?php echo get_field('footer_text','option'); ?></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="foot-item">
                        <h3>Useful Links</h3>
                        <div class="foot-links">
                            <?php
								wp_nav_menu( array(
									'theme_location' => 'footer_main',
								) );
							?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="foot-item">
                        <h3>Support</h3>
                        <div class="foot-links">
                            <?php
								wp_nav_menu( array(
									'theme_location' => 'footer_support',
								) );
							?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-xxl-3 col-md-6">
                    <div class="foot-item">
                        <h3>Contact Info</h3>
                        <div class="foot-contact-info">
                            <ul>
                                <li><i class="fal fa-map-marker-alt"></i><?php echo get_field('location','option'); ?></li>
                                <li><i class="fal fa-phone"></i><a href="tel:<?php echo get_field('phone_number','option'); ?>"><?php echo get_field('phone_number','option'); ?></a></li>
                                <li><i class="fal fa-envelope"></i><a href="mailto:<?php echo get_field('email','option'); ?>"><?php echo get_field('email','option'); ?></a></li>
                            </ul>
                            <?php echo do_shortcode('[mc4wp_form id=482]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyrights">
                        <p><?php echo get_field('copyright_text','option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>