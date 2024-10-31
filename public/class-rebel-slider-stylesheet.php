<?php
/**
 * Spartan Gallery Plugin plugin style functions
 *
 * @category  WordPress_Spartan_Gallery_Plugin
 * @package   Spartan_Gallery
 * @author    Freelancer Martin
 * @license   GPL-2.0+
 * @link      https://themes.developerforwebsites.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Image styles
*
* @since Spartan Gallery 1.0.2
*
* @param array  $urls           URLs to print for resource hints.
* @param string $relation_type  The relation type the URLs are printed.
* @return array $urls           URLs to print for resource hints.
*/

Class RebelSliderStyles
{
		// Declaring three private varaibles

		private $font_size;
		private $font_color;
		private $string_value;
		// Declarte construct method which accepts three parameters and the method customize_print()
		function __construct()
		{
			$this->background_styles($css_element,$background_color);
			$this->padding_styles($css_element,$padding_right,$padding_left,$padding_top,$padding_bottom);
			$this->margin_styles($css_element,$margin_left,$margin_right,$margin_top,$margin_bottom);
			$this->border_styles($css_element,$border_width,$border_style,$border_color);
			$this->font_styles($css_element,$font_family,$font_size,$font_style,$font_variant,$font_weight,$color);

		}
		// Declare a method for customize print
		public function background_styles($css_element,$background_color)
		{
			$this->background_color = $background_color;
			$this->css_element = $css_element;
			$style_function = '
			<style>
				'.$this->css_element.'
				{
					background-color: '.$this->background_color.';

				}
			</style>
			';
			return $style_function;
		}

		public function margin_styles($css_element,$margin_left,$margin_right,$margin_top,$margin_bottom)
		{
			$this->css_element = $css_element;
			$this->margin_left = $margin_left;
			$this->margin_right = $margin_right;
			$this->margin_top = $margin_top;
			$this->margin_bottom = $margin_bottom;
			$style_function = '
			<style>
				'.$this->css_element.'
				{

					margin-right: '.$this->margin_right.'px;
					margin-left: '.$this->margin_left.'px;
					margin-top: '.$this->margin_top.'px;
					margin-bottom: '.$this->margin_bottom.'px;

				}
			</style>
			';
			return $style_function;
		}

		public function padding_styles($css_element,$padding_left,$padding_right,$padding_top,$padding_bottom)
		{
			$this->css_element = $css_element;
			$this->padding_right = $padding_right;
			$this->padding_left = $padding_left;
			$this->padding_top = $padding_top;
			$this->padding_bottom = $padding_bottom;

			$style_function = '
			<style>
				'.$this->css_element.'
				{
					padding-right: '.$this->padding_right.';
					padding-left: '.$this->padding_left.';
					padding-top: '.$this->padding_top.';
					padding-bottom: '.$this->padding_bottom.';

				}
			</style>
			';
			return $style_function;
		}

		public function border_styles($css_element,$border_width,$border_style,$border_color)
		{
			$this->css_element = $css_element;
			$this->border_width = $border_width;
			$this->border_style = $border_style;
			$this->border_color = $border_color;

			$style_function = '
			<style>
				'.$this->css_element.'
				{
					border-width: '.$this->border_width.';
					border-style: '.$this->border_style.';
					border-color: '.$this->border_color.';


				}
			</style>
			';
			return $style_function;
		}


		public function font_styles($css_element,$font_family,$font_size,$font_style,$font_variant,$font_weight,$color)
		{
			$this->css_element = $css_element;
			$this->font_family = $font_family;
			$this->font_size = $font_size;
			$this->font_style = $font_style;
			$this->font_variant = $font_variant;
			$this->font_weight = $font_weight;
			$this->color = $color;

			$style_function = '
			<style>
				'.$this->css_element.'
				{
					font-family: '.$this->font_family.';
					font-size: '.$this->font_size.'px;
					font-style: '.$this->font_style.';
					font-variant: '.$this->font_variant.';
					font-weight: '.$this->font_weight.';
					color: '.$this->color.';

				}
			</style>
			';
			return $style_function;
		}
}


function slider_display_text_styles(){
	$text_values = get_post_meta( get_the_ID(), 'plugin_demo', true );
	$background_color = get_post_meta( get_the_ID(), 'slider_text_background-color', false );
	$font_family = get_post_meta( get_the_ID(), 'slider_font_family', false );
	$font_weight = get_post_meta( get_the_ID(), 'slider_font_weight', false );
	$title_font_size = get_post_meta( get_the_ID(), 'slider_title_font_size', false );
	$desc_font_size = get_post_meta( get_the_ID(), 'slider_desc_font_size', false );
	$font_style = get_post_meta( get_the_ID(), 'slider_font_style', false );
	$font_variant = get_post_meta( get_the_ID(), 'slider_font_variant', false );
	$color = get_post_meta( get_the_ID(), 'slider_font_color', false );


	$new_style_class = new RebelSliderStyles;
	print $new_style_class->font_styles('.slider-title-container',implode($font_family),implode($title_font_size),implode($font_style),implode($font_variant),implode($font_weight),implode($color));
	print $new_style_class->font_styles('.slider-desc-container',implode($font_family),implode($desc_font_size),implode($font_style),implode($font_variant),implode($font_weight),implode($color));
	print $new_style_class->font_styles('.slider-button-container',implode($font_family),implode($desc_font_size),implode($font_style),implode($font_variant),implode($font_weight),implode($color));



	for($slideno=0;$slideno<=(count($text_values) -1);$slideno++){

		if(isset($text_values[$slideno]['border_background_color'])) {
		 $border_background_color = $text_values[$slideno]['border_background_color']	;
		}
		if(isset($text_values[$slideno]['container_background_color'])) {
		 $container_background_color = $text_values[$slideno]['container_background_color']	;
		}
		if(isset($text_values[$slideno]['button_background_color'])) {
		 $container_background_color = $text_values[$slideno]['button_background_color']	;
		}
		print $new_style_class->background_styles('.text-effect4-container',$border_background_color);
		print $new_style_class->background_styles('.text-effect4-border',$container_background_color);
		print $new_style_class->background_styles('.slider-button-container',$container_background_color);
		print $new_style_class->background_styles('.slider-text-container',implode($background_color));
	 

	}


} // end of slider_display_text_styles function
add_action('wp_head','slider_display_text_styles');



function slider_display_styles(){


}  // end of slider_display_styles function
