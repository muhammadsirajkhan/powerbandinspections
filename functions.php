<?php
function my_script_style()
{
	
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
	wp_enqueue_style('font-awesome-main', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css?ver=6.1');	
	wp_enqueue_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');
    wp_enqueue_style('style-sheet', get_template_directory_uri() . '/assets/css/style.css?v='.rand());
    wp_enqueue_style('responsive-sheet', get_template_directory_uri() . '/assets/css/responsive.css?v='.rand());
    wp_enqueue_style('arimamadurai-font', get_template_directory_uri() . '/assets/fonts/stylesheet.css?v='.rand());
     // WordPress Style Sheet
    wp_enqueue_style('styles', get_stylesheet_uri().'?v='.rand());
	
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), false, true);
	wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), '1.0.0', true);
	wp_enqueue_script('form-js', 'https://link.msgsndr.com/js/form_embed.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
	wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js?v='.rand(), array(), '1.0.0', true);
    
}

add_action('wp_enqueue_scripts', 'my_script_style');

// Menu-Functions

function custom_nav_menu()
{
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'text_domain'),
		'footer_main' => __('Footer Main', 'text_domain'),
		'footer_support' => __('Footer Support', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'custom_nav_menu', 0);


// Theme Support Functions

add_theme_support('post-thumbnails');
add_filter('use_block_editor_for_post_type', '__return_false');


// Custom Post Type Funstion

function services()
{
    $labels = array(
        'name' => _x('Services', 'post type general name'),
        'singular_name' => _x('Services', 'post type singular name'),
        'add_new' => _x('Add New', 'Services'),
        'add_new_item' => __('Add New Services'),
        'edit_item' => __('Edit Services'),
        'new_item' => __('New Services'),
        'view_item' => __('View Services'),
        'search_items' => __('Search Services'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor','excerpt')
    );
    register_post_type('services', $args);
}
add_action('init', 'services');

// Theme Setting Options Function

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    )); 
}

// Widgets Function

function twentysixteen_widgets_init()
{
	register_sidebar(
    array(
      'name'          => __('Footer Menu', 'twentysixteen'),
      'id'            => 'footer_menu',
      'description'   => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
      'before_widget' => '<div class="f-items"><div class="f-items-content">',
      'after_widget'  => '</div></div>',
      'before_title'  => '<div class="f-items-title title pb-4"><h5>',
      'after_title'   => '</h5></div>',
    )
  );
	register_sidebar(
    array(
      'name'          => __('Footer Services', 'twentysixteen'),
      'id'            => 'footer_services',
      'description'   => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
      'before_widget' => '<div class="f-items"><div class="f-items-content">',
      'after_widget'  => '</div></div>',
      'before_title'  => '<div class="f-items-title title pb-4"><h5>',
      'after_title'   => '</h5></div>',
    )
  );
}
add_action('widgets_init', 'twentysixteen_widgets_init');

// Woocommerce Functions

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'woocommerce', array(
        // 'thumbnail_image_width' => 300,
        // 'subcategory_archive_thumbnail_size' => 200,
        // 'single_image_width'    => 461,
  
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 3,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 3,
            'max_columns'     => 4,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );