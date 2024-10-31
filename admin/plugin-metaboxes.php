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



      //if ( is_admin() ) {
        if ( file_exists( dirname( __FILE__ ) . '/includes/admin/CMB2/init.php' ) ) {
          require_once dirname( __FILE__ ) . '/includes/admin/CMB2/init.php';
        } elseif ( file_exists( dirname( __FILE__ ) . '/admin/public/CMB2/init.php' ) ) {
          require_once dirname( __FILE__ ) . '/includes/admin/CMB2/init.php';
        }
      //}
      // CMB2
      add_filter( 'cmb2_init', 'rebel_tabs_metaboxes' );
      function rebel_tabs_metaboxes() {
       $box_options = array(
         'id'           => 'rebel_tabs_metaboxes',
         'title'        => __( 'Sliders Options Page', 'cmb2' ),
         'object_types' => array( 'slider' ),
         'show_names'   => true,
       );

       // Setup meta box
       $cmb = new_cmb2_box( $box_options );
       $prefix = 'slider_';
       // setting tabs
       $plugin_url = plugins_url() ;
       $tabs_setting           = array(
         'config' => $box_options,
         'layout' => 'vertical', // Default : horizontal
         'tabs'   => array()
       );
       $tabs_setting['tabs'][] = array(
         'id'     => 'tab1',
         'title'  => __( 'Slides', 'cmb2' ),
         'fields' => array(

/*
           array(
             'name'             => __( 'Select Slider Layout', 'cmb2' ),
             'desc'             => __( 'field description (optional)', 'cmb2' ),
             'id'               => 'plugin_image-thumbnail',
             'type'             => 'radio_image',
             'options'          => array(
               'img-thumb-left'    => __('Image thumbnail Left', 'cmb2'),
               'img-thumb-bottom'  => __('Image Thumbnail Bottom', 'cmb2'),
               'img-thumb-none' => __('Image Thumbnail None', 'cmb2'),
             ),
             'images_path'      => $plugin_url  ,
             'images'           => array(
               'img-thumb-left'    =>  '/rebel-slider/includes/public/img/thumb-side-layout.png',
               'img-thumb-bottom'  =>  '/rebel-slider/includes/public/img/thumb-bottom-layout.png',
               'img-thumb-none' =>  '/rebel-slider/includes/public/img/center-center.png',
             )
           ),
*/

           array(
             'name' => __('Slider Test Effect', 'cmb2'),
             'desc' => __('Select slider effect from drop down menu  after that copy and paste "Transition Code"  to "Slide Effect Box" under SLIDE TAB', 'cmb2'),
             'id' => 'page_custom_layout',
             'type' => 'image_select',




           ),

             array(
               'id'          => 'plugin_demo',
               'type'        => 'group',
               'description' => esc_html__( 'Add New Slide', 'cmb2' ),
               'options'     => array(
                 'group_title'   => esc_html__( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
                 'add_button'    => esc_html__( 'Add Slide', 'cmb2' ),
                 'remove_button' => esc_html__( 'Remove Slide', 'cmb2' ),
                 'sortable'      => true, // beta
                 'closed'     => true, // true to have the groups closed by default
               ),

             'fields'  => array(




               array(
                 'name'             => __( 'Slide Effect Box', 'cmb2' ),
                 'desc'             => __( 'Copy and Paste your selected slider effect to this box', 'cmb2' ),
                 'id'               => 'plugin_effects',
                 'type'             => 'text',
                 'default' => '{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Easing:$Jease$.$OutQuad}',

               ),

              array(
                'name'             => __( 'Select Slider Text Design', 'cmb2' ),
                'desc'             => __( 'field description (optional)', 'cmb2' ),
                'id'               =>  'slide_text_effect',
                'type'             => 'radio_image',
                'options'          => array(
                  'none' => __('none', 'cmb2'),
                  'effect-1'    => __('effect 1', 'cmb2'),
                  'effect-2'  => __('Effect 2', 'cmb2'),
                  'effect-3' => __('Effect 3', 'cmb2'),
                  'effect-4' => __('Effect 4', 'cmb2'),
                ),
                'images_path'      => $plugin_url  ,
                'images'           => array(
                  'none'    =>  'rebel-slider/admin/img/none.png',
                  'effect-1'    =>  '/rebel-slider/admin/img/effect-1.png',
                  'effect-2'  =>  '/rebel-slider/admin/img/effect-2.png',
                  'effect-3' =>  '/rebel-slider/admin/img/effect-3.png',
                  'effect-4' =>  '/rebel-slider/admin/img/effect-4.png',
                ),
                 'default' => 'none',
              ),

               array(
                 'name'       => esc_html__( 'Entry Title', 'cmb2' ),
                 'id'         => 'plugin_slide_title',
                 'type'       => 'text',
                 'attributes' => array(
             			//'required'               => true, // Will be required only if visible.
             			'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
             			'data-conditional-value' => wp_json_encode( array( 'effect-1', 'effect-2','effect-3', 'effect-4' ) ),
             		),
                 'default' => 'CREATIVE',
                 // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
               ),

               array(
                 'name'       => esc_html__( 'Entry Title 2', 'cmb2' ),
                 'id'         => 'plugin_slide_title_2',
                 'type'       => 'text',
                 'attributes' => array(
             			//'required'               => true, // Will be required only if visible.
             			'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
             			'data-conditional-value' => 'effect-3',
             		),
                 'default' => 'AMAZING',
                 // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
               ),

               array(
                 'name'       => esc_html__( 'Entry Title 3', 'cmb2' ),
                 'id'         => 'plugin_slide_title_3',
                 'type'       => 'text',
                 'attributes' => array(
                   //'required'               => true, // Will be required only if visible.
                   'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
                   'data-conditional-value' => 'effect-3',
                 ),
                 'default' => 'DESIGN',
                 // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
               ),
               array(
                 'name'    => 'Button Background Color',
                 'id'      => 'button_background_color',
                 'type'    => 'colorpicker',
                 'default' => '#11e299',
                 'options' => array(
                    'alpha' => true, // Make this a rgba color picker.
                  ),
                  'attributes' => array(
                    //'required'               => true, // Will be required only if visible.
                    'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
                    'data-conditional-value' => wp_json_encode( array( 'effect-1', 'effect-2' ) ),
                  ),
               ),
               array(
                 'name'    => 'Border Background Color',
                 'id'      => 'border_background_color',
                 'type'    => 'colorpicker',
                 'default' => '#11e299',
                 'options' => array(
                    'alpha' => true, // Make this a rgba color picker.
                  ),
                  'attributes' => array(
                    //'required'               => true, // Will be required only if visible.
                    'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
                    'data-conditional-value' => 'effect-4',
                  ),
               ),
               array(
                 'name'    => 'Title Background Color',
                 'id'      => 'container_background_color',
                 'type'    => 'colorpicker',
                 'default' => '#ffffff',
                 'options' => array(
                    'alpha' => true, // Make this a rgba color picker.
                  ),
                  'attributes' => array(
                    //'required'               => true, // Will be required only if visible.
                    'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
                    'data-conditional-value' => 'effect-4',
                  ),
               ),

               array(
                 'name'        => esc_html__( 'Description', 'cmb2' ),
                 'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
                 'id'          => 'plugin_slide_description',
                 'type'        => 'textarea_small',
                 'attributes' => array(
             			//'required'               => true, // Will be required only if visible.
             			'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
             			'data-conditional-value' => wp_json_encode( array( 'effect-1', 'effect-2' ) ),
             		),
                 'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,',
               ),
               array(
                 'name' => esc_html__( 'Slide Image', 'cmb2' ),
                 'id'   => 'plugin_slide_image',
                 'type' => 'file',
               ),
               array(
                 'name' => esc_html__( 'Button Text', 'cmb2' ),
                 'id'   => 'plugin_slide_button_text',
                 'type' => 'text',
                 'attributes' => array(
             			//'required'               => true, // Will be required only if visible.
             			'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
             			'data-conditional-value' => wp_json_encode( array( 'effect-1', 'effect-2' ) ),
             		),
                 'default' => 'Read More',
               ),
               array(
                 'name' => esc_html__( 'Button Url', 'cmb2' ),
                 'id'   => 'plugin_slide_button_text_url',
                 'type' => 'text',
                 'attributes' => array(
             			//'required'               => true, // Will be required only if visible.
             			'data-conditional-id'    => wp_json_encode( array( 'plugin_demo', 'slide_text_effect' ) ),
             			'data-conditional-value' => wp_json_encode( array( 'effect-1', 'effect-2' ) ),
             		),
                 'default' => '#',
               )
             )
           )




         ) // end of tabs
       );

       $tabs_setting['tabs'][] = array(
           'id'     => 'tab2',
           'title'  => __( 'Slider General Options', 'cmb2' ),
           'fields' => array(
             array(
              	'name'             => 'Autoplay Options',
              	'desc'             => '*Stop at user navigation = (click on arrow/bullet/thumbnail, swipe slide, press keyboard left, right arrow key)',
              	'id'               => $prefix .'slide_autoplay',
              	'type'             => 'select',
              	'show_option_none' => true,
              	'default'          => '1',
              	'options'          => array(
                  '0'   => __( 'Disable', 'cmb2' ),
              		'1' => __( 'Continuously', 'cmb2' ),
              		'2'   => __( 'Stop at last slide', 'cmb2' ),
                  '4'   => __( 'Stop on click', 'cmb2' ),
                  '8'   => __( 'Stop on use navigation*', 'cmb2' ),
                  '12'   => __( 'Stop on click or user navigation', 'cmb2' ),

              	),
              ),
             array(
               'name'             => esc_html__( 'Slide Idle', 'cmb2' ),
               'desc'             => esc_html__( '', 'cmb2' ),
               'id'              => $prefix . 'slide_idles',
               'type'             => 'text',
               'default'          => '3000',

             ),
             array(
               'name'             => esc_html__( 'Slide Duration ', 'cmb2' ),
               'desc'             => esc_html__( 'Specifies duration (in milliseconds) for right to left swipe animation ', 'cmb2' ),
               'id'              => $prefix . 'slide_durations ',
               'type'             => 'text',
               'default'          => '500',

             ),
             array(
                'name'             => 'Pause On Hover ',
                'desc'             => 'Whether to pause when mouse over if a slider is auto playing',
                'id'               => $prefix .'Pause_On_Hover',
                'type'             => 'select',
                'show_option_none' => true,
                'default'          => '1',
                'options'          => array(
                  '0'   => __( 'Disable', 'cmb2' ),
                  '1' => __( 'Pause for desktop', 'cmb2' ),
                  '2'   => __( 'Pause for touch device', 'cmb2' ),
                  '3'   => __( 'Pause for desktop and touch device', 'cmb2' ),
                  '4'   => __( ' Freeze for desktop', 'cmb2' ),
                  '8'   => __( ' Freeze for touch device', 'cmb2' ),
                  '12'   => __( 'Freeze for desktop and touch device', 'cmb2' ),

                ),
              ),
              array(
                 'name'             => 'Fill Mode',
                 'desc'             => 'The way to fill the main image in a slide ',
                 'id'               => $prefix .'Fill_Mode',
                 'type'             => 'select',
                 'show_option_none' => true,
                 'default'          => '0',
                 'options'          => array(
                   '0'   => __( 'stretch', 'cmb2' ),
                   '1' => __( 'Contain (keep aspect ratio and put all inside slide)', 'cmb2' ),
                   '2'   => __( 'Cover (keep aspect ratio and cover whole slide)', 'cmb2' ),
                   '4'   => __( 'Actual size', 'cmb2' ),
                   '5'   => __( 'Contain for large image and actual size for small image ', 'cmb2' ),


                 ),
               ),
             array(
               'name'             => esc_html__( 'Slide Width', 'cmb2' ),
               'desc'             => esc_html__( 'Width of every slide in pixels', 'cmb2' ),
               'id'              => $prefix . 'Slide_Width',
               'type'             => 'text',
               'default'          => '0',

             ),
             array(
               'name'             => esc_html__( 'SlideHeight ', 'cmb2' ),
               'desc'             => esc_html__( 'Height of every slide in pixels ', 'cmb2' ),
               'id'              => $prefix . 'Slide_Height',
               'type'             => 'text',
               'default'          => '0',

             ),
             array(
                'name'             => 'Play Orientation ',
                'desc'             => 'Orientation to play slide (for auto play, navigation)',
                'id'               => $prefix .'Play_Orientation',
                'type'             => 'select',
                'show_option_none' => true,
                'default'          => '1',
                'options'          => array(
                  '1' => __( 'Horizental', 'cmb2' ),
                  '2'   => __( 'Vertical', 'cmb2' ),
                      ),
              ),
              array(
                 'name'             => 'Drag Orientation ',
                 'desc'             => 'Orientation to drag slide',
                 'id'               => $prefix .'Drag_Orientation',
                 'type'             => 'select',
                 'show_option_none' => true,
                 'default'          => '1',
                 'options'          => array(
                   '0' => __( 'Disable', 'cmb2' ),
                   '1'   => __( 'Horizental', 'cmb2' ),
                   '2' => __( 'Vertical', 'cmb2' ),
                   '3'   => __( 'Either', 'cmb2' ),
                       ),
               ),
               array(
                  'name'             => 'Loop',
                  'desc'             => 'Enable loop(circular) of carousel or not',
                  'id'               => $prefix .'loop_options',
                  'type'             => 'select',
                  'show_option_none' => true,
                  'default'          => '1',
                  'options'          => array(
                    '0' => __( 'Stop', 'cmb2' ),
                    '1'   => __( 'Loop', 'cmb2' ),
                    '2' => __( 'Rewind', 'cmb2' ),

                        ),
                ),


      )

      );
      $tabs_setting['tabs'][] = array(
         'id'     => 'tab33',
         'title'  => __( 'Slider Style Options', 'cmb2' ),
         'fields' => array(
           array(
             'name'             => __( 'Select Arrows', 'cmb2' ),
             'desc'             => __( 'Select arrows to display in slider', 'cmb2' ),
             'id'               => $prefix . 'plugin_arrows',
             'type'             => 'radio_image',
             'default'         =>  '2',
             'options'          => array(
               '1'    => __('Simple Arrows', 'cmb2'),
               '2'  => __('Circle Arrows', 'cmb2'),

             ),
             'images_path'      => $plugin_url  ,
             'images'           => array(
               '1'    =>  'rebel-slider/admin/img/SliderArrow.png',
               '2'  =>  'rebel-slider/admin/img/SliderRingArrow.png',

             )
           ),
/*
           array(
              'name'          => __( 'Image Padding and Margin Options', 'cmb2' ),
              'desc'          => __( 'These option values are signed to every image in gallery', 'cmb2' ),
              'id'            => $prefix . 'image_style_editor',
              'type'          => 'visual_style_editor',
              //'hide_margin'   => true,
              //'hide_border'   => true,
              //'hide_padding'   => true,
              //'hide_text_options'   => true,
              //'hide_text_options'   => true,
              'hide_background_options'   => true,
              //'hide_border_options'   => true,
          ),
*/
         )
       );

           $tabs_setting['tabs'][] = array(
               'id'     => 'tab44',
               'title'  => __( 'Slider Font Options', 'cmb2' ),
               'fields' => array(
/*
                 array(
                    'name'          => __( 'Slide Text Margin and Padding', 'cmb2' ),
                    'desc'          => __( 'Insert slide text container margin and padding values', 'cmb2' ),
                    'id'            => $prefix . 'text_style_editor',
                    'type'          => 'visual_style_editor',
                    //'hide_margin'   => true,
                    //'hide_border'   => true,
                    //'hide_padding'   => true,
                    'hide_text_options'   => true,
                    //'hide_text_options'   => true,
                    'hide_background_options'   => true,
                    //'hide_border_options'   => true,
                  ),
*/
                array(
                  'name'    => 'Background Color',
                  'id'      => $prefix .  'text_background-color',
                  'type'    => 'colorpicker',
                  'default' => '#ffffff',
                  'options' => array(
                   	'alpha' => true, // Make this a rgba color picker.
                   ),
                ),

                 array(
                   'name'             => esc_html__( 'Font Family', 'cmb2' ),
                   'desc'             => esc_html__( '', 'cmb2' ),
                   'id'              => $prefix . 'font_family',
                   'type'             => 'text',
                   'default'         =>  'Spectral SC',

                 ),
                 array(
                   'name'             => esc_html__( 'Font Weight', 'cmb2' ),
                   'desc'             => esc_html__( '', 'cmb2' ),
                   'id'              => $prefix . 'font_weight',
                   'type'             => 'text',
                   'default'         =>  '300',

                 ),
                 array(
                   'name'             => esc_html__( 'Title Font Size', 'cmb2' ),
                   'desc'             => esc_html__( '', 'cmb2' ),
                   'id'              => $prefix . 'title_font_size',
                   'type'             => 'text',
                   'default'         =>  '30',

                 ),
                 array(
                   'name'             => esc_html__( 'Description Font Size', 'cmb2' ),
                   'desc'             => esc_html__( '', 'cmb2' ),
                   'id'              => $prefix . 'desc_font_size',
                   'type'             => 'text',
                   'default'         =>  '25',

                 ),
                 array(
                   'name'             => esc_html__( 'Font Style', 'cmb2' ),
                   'desc'             => esc_html__( '', 'cmb2' ),
                   'id'              => $prefix . 'font_style',
                   'type'             => 'text',
                   'default'         =>  'italic',

                 ),
                 array(
                   'name'             => esc_html__( 'Font Variant', 'cmb2' ),
                   'desc'             => esc_html__( '', 'cmb2' ),
                   'id'              => $prefix . 'font_variant',
                   'type'             => 'text',
                   'default'         =>  'small-caps',

                 ),
                 array(
                  'name'    => 'Font Color',
                  'id'      => $prefix . 'font_color',
                  'type'    => 'colorpicker',
                  'default' => '#ffffff',
                   'options' => array(
                   	'alpha' => true, // Make this a rgba color picker.
                   ),
                ),
/*
                 array(
                   'name'    => esc_html__( 'Text Shadow Color', 'cmb2' ),
                   'desc'    => esc_html__( '', 'cmb2' ),
                   'id'      => 'plugin_text_colorpicker',
                   'type'    => 'colorpicker',
                   //'default' => '#000000',
                   // 'attributes' => array(
                   // 	'data-colorpicker' => json_encode( array(
                   // 		'palettes' => array( '#3dd0cc', '#ff834c', '#4fa2c0', '#0bc991', ),
                   // 	) ),
                   // ),
                 ),
*/

      )
      );
      $tabs_setting['tabs'][] = array(
          'id'     => 'tab5',
          'title'  => __( 'Bullet Nav Options', 'cmb2' ),
          'fields' => array(
            array(
               'name'             => 'Chance To Show ',
               'desc'             => 'Show bullet navigator',
               'id'               => $prefix .'Bullet_Chance_To_Shows',
               'type'             => 'select',
               'show_option_none' => true,
               'default'          => '2',
               'options'          => array(
                 '0'   => __( 'Disable', 'cmb2' ),
                 '1' => __( 'Mouse Over', 'cmb2' ),
                 '2'   => __( 'Always ', 'cmb2' ),
                 ),
             ),
             array(
                'name'             => 'Action Mode ',
                'desc'             => 'Action to trigger navigation',
                'id'               => $prefix .'Bullet_Action_Mode',
                'type'             => 'select',
                'show_option_none' => true,
                'default'          => '2',
                'options'          => array(

                  '1' => __( 'Click', 'cmb2' ),
                  '2'   => __( 'Mouse Over', 'cmb2' ),
                  ),
              ),
            array(
              'name'             => esc_html__( 'Steps', 'cmb2' ),
              'desc'             => esc_html__( 'Steps to go for each navigation request ', 'cmb2' ),
              'id'              => $prefix . 'Bullet_Steps',
              'type'             => 'text',
              'default'          => '1',

            ),
            array(
              'name'             => esc_html__( 'Rows', 'cmb2' ),
              'desc'             => esc_html__( 'Rows to arrange bullets', 'cmb2' ),
              'id'              => $prefix . 'Bullet_Rows',
              'type'             => 'text',
              'default'          => '1',

            ),
            array(
              'name'             => esc_html__( 'SpacingX', 'cmb2' ),
              'desc'             => esc_html__( 'Vertical space (in pixels) between each item ', 'cmb2' ),
              'id'              => $prefix . 'Bullet_SpacingX',
              'type'             => 'text',
              'default'          => '10',

            ),
            array(
              'name'             => esc_html__( 'SpacingY ', 'cmb2' ),
              'desc'             => esc_html__( 'Height of every slide in pixels ', 'cmb2' ),
              'id'              => $prefix . 'Bullet_SpacingY',
              'type'             => 'text',
              'default'          => '10',

            ),
            array(
               'name'             => 'Orientation',
               'desc'             => 'The layout orientation',
               'id'               => $prefix .'Bullet_Orientation',
               'type'             => 'select',
               'show_option_none' => true,
               'default'          => '1',
               'options'          => array(
                 '1' => __( 'Horizental', 'cmb2' ),
                 '2'   => __( 'Vertical', 'cmb2' ),
                     ),
             ),
     )

     );

      $tabs_setting['tabs'][] = array(
          'id'     => 'tab7',
          'title'  => __( 'Thumbnail Nav Options', 'cmb2' ),
          'fields' => array(
            array(
               'name'             => 'Chance To Show ',
               'desc'             => 'Show bullet navigator',
               'id'               => $prefix .'Thumbnail_Chance_To_Shows',
               'type'             => 'select',
               'show_option_none' => true,
               'default'          => '2',
               'options'          => array(
                 '0'   => __( 'Disable', 'cmb2' ),
                 '1' => __( 'Mouse Over', 'cmb2' ),
                 '2'   => __( 'Always ', 'cmb2' ),
                 ),
             ),
             array(
                'name'             => 'Action Mode ',
                'desc'             => 'Action to trigger navigation',
                'id'               => $prefix .'Thumbnail_Action_Mode',
                'type'             => 'select',
                'show_option_none' => true,
                'default'          => '2',
                'options'          => array(

                  '1' => __( 'Click', 'cmb2' ),
                  '2'   => __( 'Mouse Over', 'cmb2' ),
                  ),
              ),
            array(
              'name'             => esc_html__( 'Steps', 'cmb2' ),
              'desc'             => esc_html__( 'Steps to go for each navigation request ', 'cmb2' ),
              'id'              => $prefix . 'Thumbnail_Steps',
              'type'             => 'text',
              'default'          => '1',

            ),
            array(
              'name'             => esc_html__( 'Rows', 'cmb2' ),
              'desc'             => esc_html__( 'Rows to arrange bullets', 'cmb2' ),
              'id'              => $prefix . 'Thumbnail_Rows',
              'type'             => 'text',
              'default'          => '2',

            ),
            array(
              'name'             => esc_html__( 'SpacingX', 'cmb2' ),
              'desc'             => esc_html__( 'Vertical space (in pixels) between each item ', 'cmb2' ),
              'id'              => $prefix . 'Thumbnail_SpacingX',
              'type'             => 'text',
              'default'          => '10',

            ),
            array(
              'name'             => esc_html__( 'SpacingY ', 'cmb2' ),
              'desc'             => esc_html__( 'Height of every slide in pixels ', 'cmb2' ),
              'id'              => $prefix . 'Thumbnail_SpacingY',
              'type'             => 'text',
              'default'          => '10',

            ),
            array(
               'name'             => 'Orientation',
               'desc'             => 'Change image thumbnail location and layout, if "Vertical" is selected image thumbnail is displayed bottom centerm, if "Horizontal" image thumbnail is displayed left side.',
               'id'               => $prefix .'Thumbnail_Orientation',
               'type'             => 'select',
               'show_option_none' => true,
               'default'          => '1',
               'options'          => array(
                 '1' => __( 'Horizental', 'cmb2' ),
                 '2'   => __( 'Vertical', 'cmb2' ),
                     ),
             ),
     )

     );


       // set tabs
       $cmb->add_field( array(
         'id'   => '__tabs',
         'type' => 'tabs',
         'tabs' => $tabs_setting
       ) );
      }



      // Displays shortcode in theme slider page
      //  ----------------------------------------------------------------------------------------    Meta boxes section   ----------------------------------------


      function cd_meta_box_add()
      {
          add_meta_box( 'my-meta-box-id', 'Shortcode', 'cd_meta_box_cb', 'slider', 'side', 'low' );
      }


      add_action( 'add_meta_boxes', 'cd_meta_box_add' );
      function cd_meta_box_cb()
      {

      ?>


      <div id="example_tabs_metaboxes" class="postbox  cmb2-postbox">


      <div class="postbox">
          <h3 style="border-bottom: 1px solid #EEE;background: #f7f7f7;"><span class="tcode"><?php _e("Shortcode", "easy-textillate"); ?></span></h3>
          <div class="inside" style="padding-bottom:20px;display: block;">

          <table width="100%">
          <tr><td>

          <span style="color:#183691;" class="plugin_demo-container1">[rebel  page_id="<span style="color:green;" ><?php print_r(get_the_ID()); ?></span>"]<span style="color:#A71D5D;" class="plugin_demo-box5"></span></span>
          </td>
          <td width="50px" style="align:right;">



           </td></tr>
           </table>

          </div>
      </div>

      <div class="postbox">
          <h3 style="border-bottom: 1px solid #EEE;background: #f7f7f7;"><span class="tcode"><?php _e("PHP code", "easy-textillate"); ?></span></h3>
          <div class="inside" style="padding-bottom:20px;display: block;">

          <table width="100%">
          <tr><td>

          <span style="color:#183691;" class="plugin_demo-container2"><span style="color:#A71D5D;">&lt;?php</span> <span style="color:red;">echo do_shortcode("</span>[rebel  page_id="<span style="color:green;" ><?php print_r(get_the_ID()); ?></span>"]<span style="color:#A71D5D;" class="plugin_demo-box5"></span><span style="color:red;">");</span> <span style="color:#A71D5D;">?&gt;</span>
       </span>

           </td>
          <td width="50px" style="align:right;">



           </td></tr>
           </table>

          </div>
      </div>





      </div>

    <?php }


    function buy_beer_meta_box_add()
    {
        add_meta_box( 'buy-beer', 'Why should you Give Us Feedback', 'buy_beer_meta_box_cb', 'slider', 'normal', 'low' );
    }


    add_action( 'add_meta_boxes', 'buy_beer_meta_box_add' );
    function buy_beer_meta_box_cb()
    {

    ?>


    <div id="example_tabs_metaboxes" class="buy-beer-main postbox  cmb2-postbox">
      <div class="buy-beer-main">
                <p style="padding-bottom: 12px; font-size: 15px; color: #555;">
                  We developers looking to develop new things and ideas for wordpress every day, but for this we need some data. Now comes YOUR important part, please
                  take few minutes to fill up customer survey. That is pricless to our team because than we now what you are expecting from us in future.</p>

                  <p style="padding-bottom: 12px; font-size: 15px; color: #555;">If you like a plugin , share few words in facebook or Linkedin Community, When it is bad, we will learn from that and when it is good we THANK you for that, it helps the theme to spread.
                  Few words of appriciation also motivates the designers and the developers.  </p>

                  <p style="padding-bottom: 12px; font-size: 15px; color: #555;"><b>If you have not posted your review/feedback yet, we would be very happy you to post your review.
                  Even if you drop a single word, they are worth gold for us.</b></p>
                  <a class="button button-primary button-hero" href="http://www.developerforwebsites.com/contact">Write Your Feedback</a>
                  <p style="padding-top: 6px; font-size: 15px; color: #555;"><b>Thanks in Advance</b><br /><span style="font-size: 12px;"><i><a href="http://developerforwebsites.com">Freelancer Martin</a></i></span></p>

      </div>
    </div>

  <?php }  ?>
