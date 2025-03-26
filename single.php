<?php get_header(); ?>

<section class="inner-header" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="inner-header-title">
					<h1><?php the_title(); ?></h1>
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

<section class="single-post-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<section class="related">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
            <div class="web-title text-center testi-cards-title">
                                <h4><span class="awdaw">Latest</span> Blogs</h4>
                        <h2>Discover Our Newest <span class="awdaw">Insights</span> & Stories</h2>
            
            
                            </div>
            </div>
        </div>
   <div class="blog-wrap">
        <?php
$current_post_id = get_the_ID(); // Get current post ID

$s_box = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post__not_in'   => array($current_post_id), // Exclude the current post
);

$item = new WP_Query($s_box);

if ($item->have_posts()) : ?>
    <div class="row gy-4 mb-5">
        <?php while ($item->have_posts()) : $item->the_post(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="blog-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
</div>
    </div>
</section>

<?php get_footer(); ?>
