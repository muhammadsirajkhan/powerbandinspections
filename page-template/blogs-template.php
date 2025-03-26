<?php
// Template name: Blogs
get_header();

// SECTION BANNER

$banner = get_field('section_banner');
if($banner){
	$image_url = $banner['background_image']['url'];
	$content = $banner['content'];
}

?>

<!-- SECTION INNER WRAPPER -->
		
<section class="inner-header" style="background:url(<?php echo $image_url ?? ''; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="1500">
				<div class="inner-header-title">
					<?php echo $content ?? ''; ?>
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


<?php
$blog_section = get_field('blog_section');
if($banner){
	$title = $blog_section['title'];
	// $content = $blog_section['content'];
}

?>
<section class="blog-sec spacing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9" data-aos="fade-down" data-aos-duration="1500">
				<div class="web-title text-center testi-cards-title">
					<?php echo $title ?? ''; ?>
				</div>
			</div>
		</div>
		<div class="blog-wrap">
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$s_box = array(
				'post_type' => 'post',
				'showposts' => 6,
				'paged'          => $paged,
				'orderby'        => 'date',
				'order'          => 'DESC',
				// 'order' => 'ASC',
				// 'tax_query' => array(
				// 	array(
				// 		'taxonomy' => 'events_cat',
				// 		'field' => 'slug',
				// 		'terms' => 'past-events'
				// 	)
				// )
			);

				$item = new WP_Query( $s_box );
			?>

			<?php if ( $item->have_posts() ) : ?>
		<div class="row gy-4 mb-5">
			<?php while ( $item->have_posts() ) : $item->the_post(); ?>

	
			
			
			
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

			   
				<?php if ($item->max_num_pages > 1) : ?>
    <nav aria-label="Page navigation example" class="mb-5">
        <ul class="pagination justify-content-center">
            <?php
            $big = 999999999; // Need an unlikely integer for `paginate_links`
            $pagination_links = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $item->max_num_pages,
                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                'next_text' => '<i class="fas fa-chevron-right"></i>',
                'type'      => 'array', // Get links as an array to customize structure
            ));

            if ($pagination_links) :
                foreach ($pagination_links as $link) :
                    // Check for active or disabled classes
                    $class = '';
                    if (strpos($link, 'current') !== false) {
                        $class = 'active';
                    } elseif (strpos($link, 'dots') !== false) {
                        $class = 'disabled';
                    }
            ?>
                    <li class="page-item <?php echo $class; ?>">
                        <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                    </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul>
    </nav>
<?php endif; ?>

	
			<?php 
			
			wp_reset_postdata();
			// wp_reset_query(); ?>
			<?php endif; ?>
			
			
		</div>

		
	</div>
</section>

<?php 
get_footer();
?>