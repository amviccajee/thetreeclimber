<?php
// Define a constant to indicate whether it's a development environment
define('DEV_ENVIRONMENT', true);
// Function to include Livereload script in the functions.php
function liveReload() {
    if (defined('DEV_ENVIRONMENT') && DEV_ENVIRONMENT) {
        echo '<script src="http://' . $_SERVER['HTTP_HOST'] . ':35729/livereload.js?snipver=1"></script>';
    }
}
// Hook the function to the wp_footer action with priority 100
add_action('wp_footer', 'liveReload', 100);
/**
 * Enqueue scripts and styles.
 */
function cg_your_theme_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'cg_your_theme_scripts' );
/* Styles */
function enqueue_styles() {
    wp_enqueue_style('styles.css', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
?>
<?php
    add_theme_support( 'menus' );
?>
<?php
// Register custom menus
function my_custom_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init', 'my_custom_menus');
?>
<?php
	function my_theme_enqueue_scripts() {
		wp_enqueue_script(
			'my-script', // Handle name
			get_template_directory_uri() . '/src/js/main.js', // File path
			array('jquery'), // Dependencies (if any)
			'1.0.0', // Version number
			true // Load in the footer
		);
	}
	add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>
<?php
	function enqueue_slick_slider() {
		// Enqueue Slick CSS
		wp_enqueue_style('slick-css', get_template_directory_uri() . '/src/scss/slick.css', array(), '1.8.1');
		wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/src/scss/slick-theme.css', array(), '1.8.1');

		// Enqueue Slick JS
		wp_enqueue_script('slick-js', get_template_directory_uri() . '/src/js/slick.min.js', array('jquery'), '1.8.1', true);

		// Add custom JS to initialize Slick Slider
		wp_enqueue_script('custom-slick-init', get_template_directory_uri() . '/src/js/my-slider.js', array('slick-js'), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'enqueue_slick_slider');
?>
<?php
/* Add WooCommerce Support */
function adv_theme_add_woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'adv_theme_add_woocommerce_support');
?>
<?php
add_action( 'init', 'your_prefix_register_post_type' );
function your_prefix_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'Projects', 'your-textdomain' ),
		'singular_name'            => esc_html__( 'Project', 'your-textdomain' ),
		'add_new'                  => esc_html__( 'Add New', 'your-textdomain' ),
		'add_new_item'             => esc_html__( 'Add New Project', 'your-textdomain' ),
		'edit_item'                => esc_html__( 'Edit Project', 'your-textdomain' ),
		'new_item'                 => esc_html__( 'New Project', 'your-textdomain' ),
		'view_item'                => esc_html__( 'View Project', 'your-textdomain' ),
		'view_items'               => esc_html__( 'View Projects', 'your-textdomain' ),
		'search_items'             => esc_html__( 'Search Projects', 'your-textdomain' ),
		'not_found'                => esc_html__( 'No projects found.', 'your-textdomain' ),
		'not_found_in_trash'       => esc_html__( 'No projects found in Trash.', 'your-textdomain' ),
		'parent_item_colon'        => esc_html__( 'Parent Project:', 'your-textdomain' ),
		'all_items'                => esc_html__( 'All Projects', 'your-textdomain' ),
		'archives'                 => esc_html__( 'Project Archives', 'your-textdomain' ),
		'attributes'               => esc_html__( 'Project Attributes', 'your-textdomain' ),
		'insert_into_item'         => esc_html__( 'Insert into project', 'your-textdomain' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this project', 'your-textdomain' ),
		'featured_image'           => esc_html__( 'Featured image', 'your-textdomain' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain' ),
		'menu_name'                => esc_html__( 'Projects', 'your-textdomain' ),
		'filter_items_list'        => esc_html__( 'Filter projects list', 'your-textdomain' ),
		'filter_by_date'           => esc_html__( '', 'your-textdomain' ),
		'items_list_navigation'    => esc_html__( 'Projects list navigation', 'your-textdomain' ),
		'items_list'               => esc_html__( 'Projects list', 'your-textdomain' ),
		'item_published'           => esc_html__( 'Project published.', 'your-textdomain' ),
		'item_published_privately' => esc_html__( 'Project published privately.', 'your-textdomain' ),
		'item_reverted_to_draft'   => esc_html__( 'Project reverted to draft.', 'your-textdomain' ),
		'item_scheduled'           => esc_html__( 'Project scheduled.', 'your-textdomain' ),
		'item_updated'             => esc_html__( 'Project updated.', 'your-textdomain' ),
		'text_domain'              => esc_html__( 'your-textdomain', 'your-textdomain' ),
	];
	$args = [
		'label'               => esc_html__( 'Projects', 'your-textdomain' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'menu_position'       => '',
		'menu_icon'           => 'dashicons-admin-media',
		'capability_type'     => 'post',
		'supports'            => ['title', 'editor', 'thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];
	register_post_type( 'project', $args );
}
?>