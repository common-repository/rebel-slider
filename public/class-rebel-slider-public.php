<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://rebel-slider.developerforwebsites.com
 * @since      1.0.0
 *
 * @package    Rebel_Slider
 * @subpackage Plugin_Name/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Rebel_Slider
 * @subpackage Rebel_Slider/public
 * @author     Freelancer Martin <developerforwebsites@gmail.com>
 */
class Rebel_Slider_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rebel-slider-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rebel-slider-public.js', array( 'jquery' ), $this->version, false );

	}


	/**
	* Function to display and add shortcode function for plugin
	*
	*
	* @since Rebel Slider 1.0.0
	*
	* @param array  $urls           URLs to print for resource hints.
	* @param string $relation_type  The relation type the URLs are printed.
	* @return array $urls           URLs to print for resource hints.
	*/
	public function rebel_slider_shortcode($atts = [], $content = null, $tag = '') {
	// normalize attribute keys, lowercase
	$atts = array_change_key_case((array)$atts, CASE_LOWER);

	// override default attributes with user attributes
	$wporg_atts = shortcode_atts(['title' => 'WordPress.org',], $atts, $tag);

	// start output
	$o = '';
	$o .= '<div class="rebel-slider-box">';
					 $page_id .= implode($atts);
					 $args = array( 'post_type' => 'slider', 'posts_per_page' => 10,'page_id' => $page_id);
						 $loop = new WP_Query( $args );
						 while ( $loop->have_posts() ) : $loop->the_post();

								 $o .= '<div class="slider-content">';
								 $entries = get_post_meta( get_the_ID(), 'plugin_demo', true );
								 $short_autoplays = get_post_meta( get_the_ID(), 'slider_slide_autoplay', true );
								 $short_FillMode = get_post_meta( get_the_ID(), 'slider_Fill_Mode', true );
								 $short_SlideDuration = get_post_meta( get_the_ID(), 'slider_slide_duration', true );
								 $short_PauseOnHover = get_post_meta( get_the_ID(), 'slider_Pause_On_Hover', true );
								 $short_idles = get_post_meta( get_the_ID(), 'slider_slide_idle', true );
								 $short_SlideWidth = get_post_meta( get_the_ID(), 'slider_Slide_Width', true );
								 $short_SlideHeight = get_post_meta( get_the_ID(), 'slider_Slide_Height', true );
								 $short_PlayOrientation = get_post_meta( get_the_ID(), 'slider_Play_Orientation', true );
								 $short_DragOrientation = get_post_meta( get_the_ID(), 'slider_Drag_Orientation', true );
								 $short_Loop = get_post_meta( get_the_ID(), 'slider_loop_options', true );
								 $thumbnail_locations = esc_attr(get_post_meta( get_the_id(),'slider_Thumbnail_Bullet_Orientation', true ));

								 // Bullet Navigator options
								 $bullet_Bullet_Chance_To_Show = get_post_meta( get_the_ID(), 'slider_Thumbnail_Chance_To_Shows', true );
								 $bullet_Bullet_Action_Mode = get_post_meta( get_the_ID(), 'slider_Bullet_Action_Mode', true );
								 $bullet_Bullet_Steps = get_post_meta( get_the_ID(), 'slider_Bullet_Steps', true );
								 $bullet_Bullet_Rows = get_post_meta( get_the_ID(), 'slider_Bullet_Rows', true );
								 $bullet_Bullet_SpacingX = get_post_meta( get_the_ID(), 'slider_Bullet_SpacingX', true );
								 $bullet_Bullet_SpacingY = get_post_meta( get_the_ID(), 'slider_Bullet_SpacingY', true );
								 $bullet_Bullet_Orientation = get_post_meta( get_the_ID(), 'slider_Bullet_Orientation', true );

								 // Thumbnail Navigator options
								 $T_Thumbnail_Chance_To_Show = get_post_meta( get_the_ID(), 'slider_Thumbnail_Chance_To_Shows', true );
								 $T_Thumbnail_Action_Mode = get_post_meta( get_the_ID(), 'slider_Thumbnail_Action_Mode', true );
								 $T_Thumbnail_Steps = get_post_meta( get_the_ID(), 'slider_Thumbnail_Steps', true );
								 $T_Thumbnail_Rows = get_post_meta( get_the_ID(), 'slider_Thumbnail_Rows', true );
								 $T_Thumbnail_SpacingX = get_post_meta( get_the_ID(), 'slider_Thumbnail_SpacingX', true );
								 $T_Thumbnail_SpacingY = get_post_meta( get_the_ID(), 'slider_Thumbnail_SpacingY', true );
								 $T_Thumbnail_Orientation = get_post_meta( get_the_ID(), 'slider_Thumbnail_Orientation', true );



								 foreach ($entries as $key => $value) {
									 $sm .= $value['plugin_effects'] . ',';
								 }

								 $m =	new RebelSliderFunction;
								 $m->jqueryStartTag();
								 $m->SliderEffects($page_id,$sm);
								 $m->SlideoTransitions($page_id);
								 $m->SliderOptions($page_id,$short_autoplays,$short_Idles,$short_SlideDuration,$short_PauseOnHover,$short_FillMode,$short_SlideWidth,$short_SlideHeight,$short_PlayOrientation,$short_DragOrientation,$short_Loop);
								 $m->BulletNavigatorOptions($bullet_Bullet_Chance_To_Show,$bullet_Bullet_Action_Mode,$bullet_Bullet_Steps,$bullet_Bullet_Rows,$bullet_Bullet_SpacingX,$bullet_Bullet_SpacingY,$bullet_Bullet_Orientation);
								 $m->ThumbnailNavigatorOptions($T_Thumbnail_Chance_To_Show,$T_Thumbnail_Action_Mode,$T_Thumbnail_Steps,$T_Thumbnail_Rows,$T_Thumbnail_SpacingX,$T_Thumbnail_SpacingY,$T_Thumbnail_Orientation);
								 $m->CaptionSliderOptions($page_id);
								 $m->ScaleSlider($page_id);
								 $m->jqueryEndTag();
								 $m->SliderMainFunctions($page_id);
								 print_r(slider_display_text_styles());
								 //print_r($atts);
								 //print_r($args);
								 $o .= '</div>';

						 endwhile;



	// enclosing tags
	if (!is_null($content)) {
			// secure output by executing the_content filter hook on $content
			$o .= apply_filters('the_content', $content);

			// run shortcode parser recursively
			$o .= do_shortcode($content);
	}

	// return output
	return $o;

	}


}
