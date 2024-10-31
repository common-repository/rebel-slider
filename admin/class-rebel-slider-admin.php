<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Rebel_Slider_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;


	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rebel-slider-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rebel-slider-jssor.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	 public function custom_post_type_activate() {

 						 	$labels = array(
 						 		'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
 						 		'singular_name'         => _x( 'Sliders', 'Post Type Singular Name', 'text_domain' ),
 						 		'menu_name'             => __( 'Sliders', 'text_domain' ),
 						 		'name_admin_bar'        => __( 'Sliders', 'text_domain' ),
 						 		'archives'              => __( 'Sliders', 'text_domain' ),
 						 		'parent_item_colon'     => __( 'Sliders:', 'text_domain' ),
 						 		'all_items'             => __( 'All Sliders', 'text_domain' ),
 						 		'add_new_item'          => __( 'Add New Slider', 'text_domain' ),
 						 		'add_new'               => __( 'Add New Slider', 'text_domain' ),
 						 		'new_item'              => __( 'New Featured Blog', 'text_domain' ),
 						 		'edit_item'             => __( 'Edit Featured Blog', 'text_domain' ),
 						 		'update_item'           => __( 'Update Featured Blog', 'text_domain' ),
 						 		'view_item'             => __( 'View Featured Blog', 'text_domain' ),
 						 		'search_items'          => __( 'Search Featured Blogs', 'text_domain' ),
 						 		'not_found'             => __( 'Not found', 'text_domain' ),
 						 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
 						 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
 						 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
 						 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
 						 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
 						 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
 						 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
 						 		'items_list'            => __( 'Items list', 'text_domain' ),
 						 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
 						 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
 						 	);
 						 	$args = array(
 						 		'label'                 => __( 'slider', 'text_domain' ),
 						 		'description'           => __( 'Post Type Description', 'text_domain' ),
 						 		'labels'                => $labels,
 						 		'supports'              => array('title' ),
 						 		'taxonomies'            => array(  ),
 						 		'hierarchical'          => false,
 						 		'public'                => true,
 						 		'show_ui'               => true,
 						 		'show_in_menu'          => true,
 						 		'menu_position'         => 5,
 						 		'show_in_admin_bar'     => true,
 						 		'show_in_nav_menus'     => true,
 						 		'can_export'            => true,
 						 		'has_archive'           => true,
 						 		'exclude_from_search'   => false,
 						 		'publicly_queryable'    => true,
 						 		'capability_type'       => 'page',
 						 		'menu_icon'				=> 'dashicons-welcome-view-site',
 						 	);
 						 	register_post_type( 'slider', $args );

 						 }

}
