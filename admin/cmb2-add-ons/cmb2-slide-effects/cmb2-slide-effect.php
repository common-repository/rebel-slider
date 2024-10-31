<?php



// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( !class_exists( 'RebelSliderSlideTestEffect' ) ) {
	class RebelSliderSlideTestEffect {


				function __construct() {
          $this->values = $values;
          $this->slider_nr = $slider_nr;
					add_action( 'cmb2_render_image_select', array($this, 'cmb2_render_image_select') );
          wp_enqueue_script( 'jssor slider ', get_stylesheet_directory_uri() . '/assets/js/jssor.slider.min.js', array( 'jquery' ), '1.0.0', true );

				}

        function cmb2_render_image_select(  ) {
          $this->slider_jquery();
          $this->SliderMainFunctions();

        }


				function slider_jquery() {

					$function = '
          <script>

              var _SlideshowTransitionC = {};
              var _SlideshowTransitionCodes = {};
              var _SlideshowTransitions = [];
              jQuery(document).ready(function ($) {
              //---- Compound Transitions -----
              {

                  _SlideshowTransitionC["Fade in Left"] = {$Duration:1000,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Left"] = "{$Duration:1000,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in Right"] = {$Duration:1500,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Right"] = "{$Duration:1500,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in Top"] = {$Duration:2500,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Top"] = "{$Duration:2500,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in Bottom"] = {$Duration:2500,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Bottom"] = "{$Duration:2500,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in Left to Right"] = {$Duration:1500,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Left to Right"] = "{$Duration:1500,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in LR Chess"] = {$Duration:1500,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in LR Chess"] = "{$Duration:1500,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in Top to Bottom"] = {$Duration:1500,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Top to Bottom"] = "{$Duration:1500,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade in Corners"] = {$Duration:1500,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade in Corners"] = "{$Duration:1500,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade out Left"] = {$Duration:1500,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade out Left"] = "{$Duration:1500,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade out Right"] = {$Duration:1500,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade out Right"] = "{$Duration:1500,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";




                  _SlideshowTransitionC["Fade out top"] = {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade out top"] = "{$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade out Top to bottom"] = {$Duration:1500,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade out Top to bottom"] = "{$Duration:1500,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade Fly out Corners"] = {$Duration:1500,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2,$Outside:true};
                  _SlideshowTransitionCodes["Fade Fly out Corners"] = "{$Duration:1500,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2,$Outside:true}";

                  _SlideshowTransitionC["Fade Fly out TB Chess"] = {$Duration:1500,x:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2,$Outside:true};
                  _SlideshowTransitionCodes["Fade Fly out TB Chess"] = "{$Duration:1500,x:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2,$Outside:true}";

                  _SlideshowTransitionC["Fade Fly out TB"] = {$Duration:1500,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2,$Outside:true};
                  _SlideshowTransitionCodes["Fade Fly out TB"] = "{$Duration:1500,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2,$Outside:true}";

                  _SlideshowTransitionC["Fade Clip in Horizontal"] = {$Duration:1500,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade Clip in Horizontal"] = "{$Duration:1500,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade Clip in Vertical"] = {$Duration:1500,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade Clip in Vertical"] = "{$Duration:1500,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade Clip out Horizontal"] = {$Duration:1500,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade Clip out Horizontal"] = "{$Duration:1500,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Fade Clip out Verticali"] = {$Duration:1500,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Fade Clip out Verticali"] = "{$Duration:1500,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}";







                  _SlideshowTransitionC["Fade Stairs"] = {$Duration:1500,$Delay:20,$Cols:8,$Rows:4,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Opacity:2};
                  _SlideshowTransitionCodes["Fade Stairs"] = "{$Duration:1500,$Delay:20,$Cols:8,$Rows:4,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Opacity:2}";

                  _SlideshowTransitionC["Fade Random"] = {$Duration:600,$Delay:60,$Cols:8,$Rows:4,$Opacity:2};
                  _SlideshowTransitionCodes["Fade Random"] = "{$Duration:600,$Delay:60,$Cols:8,$Rows:4,$Opacity:2}";

                  _SlideshowTransitionC["Fade Swirl"] = {$Duration:600,$Delay:20,$Cols:8,$Rows:4,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Opacity:2};
                  _SlideshowTransitionCodes["Fade Swirl"] = "{$Duration:600,$Delay:20,$Cols:8,$Rows:4,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Opacity:2}";

                  _SlideshowTransitionC["Fade ZigZag"] = {$Duration:1500,$Delay:20,$Cols:8,$Rows:4,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Opacity:2};
                  _SlideshowTransitionCodes["Fade ZigZag"] = "{$Duration:1500,$Delay:20,$Cols:8,$Rows:4,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Opacity:2}";

                  _SlideshowTransitionC["Rotate away"] = {$Duration:1500,$Zoom:1,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:11,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}};
                  _SlideshowTransitionCodes["Rotate away"] = "{$Duration:1500,$Zoom:1,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:11,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}}";

                  _SlideshowTransitionC["Rotate away acw"] = {$Duration:1500,$Zoom:1,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:11,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}};
                  _SlideshowTransitionCodes["Rotate away acw"] = "{$Duration:1500,$Zoom:1,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:11,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}}";

                  _SlideshowTransitionC["Rotate back"] = {$Duration:1500,$Zoom:11,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:1,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}};
                  _SlideshowTransitionCodes["Rotate back"] = "{$Duration:1500,$Zoom:11,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:1,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}}";

                  _SlideshowTransitionC["Switch"] = {$Duration:1500,x:0.25,$Zoom:1.5,$Easing:{$Left:$Jease$.$InWave,$Zoom:$Jease$.$InCubic},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:800,x:-0.25,$Zoom:1.5,$Easing:{$Left:$Jease$.$InWave,$Zoom:$Jease$.$InCubic},$Opacity:2,$ZIndex:-10}};
                  _SlideshowTransitionCodes["Switch"] = "{$Duration:1500,x:0.25,$Zoom:1.5,$Easing:{$Left:$Jease$.$InWave,$Zoom:$Jease$.$InCubic},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:800,x:-0.25,$Zoom:1.5,$Easing:{$Left:$Jease$.$InWave,$Zoom:$Jease$.$InCubic},$Opacity:2,$ZIndex:-10}}";

                  _SlideshowTransitionC["Rotate Relay"] = {$Duration:1500,$Zoom:11,$Rotate:1,$Easing:{$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad,$Zoom:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:1},$ZIndex:-10,$Brother:{$Duration:800,$Zoom:11,$Rotate:-1,$Easing:{$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad,$Zoom:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:1},$ZIndex:-10,$Shift:400}};
                  _SlideshowTransitionCodes["Rotate Relay"] = "{$Duration:1500,$Zoom:11,$Rotate:1,$Easing:{$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad,$Zoom:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:1},$ZIndex:-10,$Brother:{$Duration:800,$Zoom:11,$Rotate:-1,$Easing:{$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad,$Zoom:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:1},$ZIndex:-10,$Shift:400}}";

                  _SlideshowTransitionC["Doors"] = {$Duration:1500,x:0.5,$Cols:2,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InOutCubic},$Opacity:2,$Brother:{$Duration:1200,$Opacity:2}};
                  _SlideshowTransitionCodes["Doors"] = "{$Duration:1500,x:0.5,$Cols:2,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InOutCubic},$Opacity:2,$Brother:{$Duration:1200,$Opacity:2}}";




                  _SlideshowTransitionC["Doors close"] = {$Duration:1500,$Opacity:2,$Brother:{$Duration:1200,x:0.5,$Cols:2,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InOutCubic},$Opacity:2}};
                  _SlideshowTransitionCodes["Doors close"] = "{$Duration:1500,$Opacity:2,$Brother:{$Duration:1200,x:0.5,$Cols:2,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InOutCubic},$Opacity:2}}";

                  _SlideshowTransitionC["Rotate in+ out- "] = {$Duration:1500,x:-0.3,y:0.5,$Zoom:1,$Rotate:0.1,$During:{$Left:[0.6,0.4],$Top:[0.6,0.4],$Rotate:[0.6,0.4],$Zoom:[0.6,0.4]},$Easing:{$Left:$Jease$.$InSine,$Top:$Jease$.$InSine,$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$InSine},$Opacity:2,$Brother:{$Duration:600,$Zoom:11,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$InSine},$Opacity:2}};
                  _SlideshowTransitionCodes["Rotate in+ out- "] = "{$Duration:1500,x:-0.3,y:0.5,$Zoom:1,$Rotate:0.1,$During:{$Left:[0.6,0.4],$Top:[0.6,0.4],$Rotate:[0.6,0.4],$Zoom:[0.6,0.4]},$Easing:{$Left:$Jease$.$InSine,$Top:$Jease$.$InSine,$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$InSine},$Opacity:2,$Brother:{$Duration:600,$Zoom:11,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$InSine},$Opacity:2}}";

                  _SlideshowTransitionC["Chess Replace TB "] = {$Duration:1500,x:1,$Rows:2,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InOutQuart,$Opacity:$Jease$.$Linear},$Opacity:2,$Brother:{$Duration:1000,x:-1,$Rows:2,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InOutQuart,$Opacity:$Jease$.$Linear},$Opacity:2}};
                  _SlideshowTransitionCodes["Chess Replace TB "] = "{$Duration:1500,x:1,$Rows:2,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InOutQuart,$Opacity:$Jease$.$Linear},$Opacity:2,$Brother:{$Duration:1000,x:-1,$Rows:2,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InOutQuart,$Opacity:$Jease$.$Linear},$Opacity:2}}";

                  _SlideshowTransitionC["Zoom back"] = {$Duration:1500,$Zoom:11,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Brother:{$Duration:600,$Zoom:1.5,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Shift:-100}};
                  _SlideshowTransitionCodes["Zoom back"] = "{$Duration:1500,$Zoom:11,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Brother:{$Duration:600,$Zoom:1.5,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Shift:-100}}";

                  _SlideshowTransitionC["Zoom away"] = {$Duration:1500,$Zoom:1.9,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Brother:{$Duration:600,$Zoom:11,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Shift:-100}};
                  _SlideshowTransitionCodes["Zoom away"] = "{$Duration:1500,$Zoom:1.9,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Brother:{$Duration:600,$Zoom:11,$Easing:{$Zoom:$Jease$.$InOutExpo},$Opacity:2,$Shift:-100}}";


                  _SlideshowTransitionC["Rotate Axis down"] = {$Duration:1500,x:-0.1,y:-0.7,$Rotate:0.1,$During:{$Left:[0.6,0.4],$Top:[0.6,0.4],$Rotate:[0.6,0.4]},$Easing:{$Left:$Jease$.$InQuad,$Top:$Jease$.$InQuad,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad},$Opacity:2,$Brother:{$Duration:1000,x:0.2,y:0.5,$Rotate:-0.1,$Easing:{$Left:$Jease$.$InQuad,$Top:$Jease$.$InQuad,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad},$Opacity:2}};
                  _SlideshowTransitionCodes["Rotate Axis down"] = "{$Duration:1500,x:-0.1,y:-0.7,$Rotate:0.1,$During:{$Left:[0.6,0.4],$Top:[0.6,0.4],$Rotate:[0.6,0.4]},$Easing:{$Left:$Jease$.$InQuad,$Top:$Jease$.$InQuad,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad},$Opacity:2,$Brother:{$Duration:1000,x:0.2,y:0.5,$Rotate:-0.1,$Easing:{$Left:$Jease$.$InQuad,$Top:$Jease$.$InQuad,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuad},$Opacity:2}}";

                  _SlideshowTransitionC["Rotate VDouble+ in"] = {$Duration:1200,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}};
                  _SlideshowTransitionCodes["Rotate VDouble+ in"] = "{$Duration:1200,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}";

                  _SlideshowTransitionC["Rotate VDouble- in"] = {$Duration:1200,x:-0.5,y:1,$Rows:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}};
                  _SlideshowTransitionCodes["Rotate VDouble- in"] = "{$Duration:1200,x:-0.5,y:1,$Rows:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}}";






                  _SlideshowTransitionC["Rotate HDouble- in"] = {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}};
                  _SlideshowTransitionCodes["Rotate HDouble- in"] = "{$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}}";

                  _SlideshowTransitionC["Rotate HDouble+ out"] = {$Duration:1000,x:4,y:2,$Cols:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}};
                  _SlideshowTransitionCodes["Rotate HDouble+ out"] = "{$Duration:1000,x:4,y:2,$Cols:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}}";

                  _SlideshowTransitionC["Rotate VFork+ in"] = {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}};
                  _SlideshowTransitionCodes["Rotate VFork+ in"] = "{$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}}";

                  _SlideshowTransitionC["Rotate Zoom+ in"] = {$Duration:1200,$Zoom:11,$Rotate:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}};
                  _SlideshowTransitionCodes["Rotate Zoom+ in"] = "{$Duration:1200,$Zoom:11,$Rotate:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}}";

                  _SlideshowTransitionC["Rotate Zoom- out BR"] = {$Duration:1000,x:-0.5,y:-0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}};
                  _SlideshowTransitionCodes["Rotate Zoom- out BR"] = "{$Duration:1000,x:-0.5,y:-0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}}";

                  _SlideshowTransitionC["RRotate Zoom- out BL"] = {$Duration:1200,x:0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}};
                  _SlideshowTransitionCodes["Rotate Zoom- out BL"] = "{$Duration:1500,$Zoom:1,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:11,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}}";

                  _SlideshowTransitionC["Rotate Zoom- in BL"] = {$Duration:1500,$Zoom:11,$Rotate:0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Brother:{$Duration:800,$Zoom:1,$Rotate:-0.5,$Easing:{$Rotate:$Jease$.$InSine,$Zoom:$Jease$.$Swing},$Opacity:2,$Shift:200}};
                  _SlideshowTransitionCodes["Rotate Zoom- in BL"] = "{$Duration:1200,x:0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}}";

                  _SlideshowTransitionC["Rotate Zoom- in B"] = {$Duration:1200,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}};
                  _SlideshowTransitionCodes["Rotate Zoom- in B"] = "{$Duration:1200,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}}";

                  _SlideshowTransitionC["RZoom VDouble+ in"] = {$Duration:1200,y:2,$Rows:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Zoom VDouble+ in"] = "{$Duration:1200,y:2,$Rows:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Zoom HDouble+ in "] =  {$Duration:1200,x:4,$Cols:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Zoom HDouble+ in"] = "{$Duration:1200,x:4,$Cols:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";



                  _SlideshowTransitionC["Collapse Rectangle Cross"] = {$Duration:1200,y:2,$Rows:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Collapse Rectangle Cross"] = "{$Duration:1200,y:2,$Rows:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Zoom- out"] = {$Duration:1000,$Zoom:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2};
                  _SlideshowTransitionCodes["Zoom- out"] = "{$Duration:1000,$Zoom:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}";

                  _SlideshowTransitionC["Collapse Stairs"] = {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse Stairs"] = "{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Collapse Swirl"] = {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse Swirl "] = "{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Collapse Rectangle Cross"] = {$Duration:500,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse Rectangle Cross"] = "{$Duration:500,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Collapse Rectangle"] = {$Duration:500,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse Rectangle"] = "{$Duration:500,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Collapse Cross"] = {$Duration:500,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCross,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse Cross"] = "{$Duration:500,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCross,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Collapse Circle"] = {$Duration:500,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:2049};
                  _SlideshowTransitionCodes["Collapse Circle"] = "{$Duration:500,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:2049}";

                  _SlideshowTransitionC["Collapse ZigZag "] =  {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse ZigZag"] = "{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Collapse Random"] = {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad};
                  _SlideshowTransitionCodes["Collapse Random"] = "{$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad}";

                  _SlideshowTransitionC["Expand Stairs"] = {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Clip:$Jease$.$InSine}};
                  _SlideshowTransitionCodes["Expand Stairs"] = "{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Clip:$Jease$.$InSine}}";

                  _SlideshowTransitionC["Expand Swirl"] = {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:{$Clip:$Jease$.$InSine}};
                  _SlideshowTransitionCodes["Expand Swirl"] = "{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:{$Clip:$Jease$.$InSine}}";




                  _SlideshowTransitionC["Expand Cross"] = {$Duration:500,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationCross,$Easing:{$Clip:$Jease$.$InSine}};
                  _SlideshowTransitionCodes["Expand Cross"] = "{$Duration:500,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationCross,$Easing:{$Clip:$Jease$.$InSine}}";

                  _SlideshowTransitionC["Expand ZigZag"] = {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Clip:$Jease$.$InSine}};
                  _SlideshowTransitionCodes["Expand ZigZag"] = "{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Clip:$Jease$.$InSine}}";

                  _SlideshowTransitionC["Expand Random"] = {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Easing:$Jease$.$InSine};
                  _SlideshowTransitionCodes["Expand Random"] = "{$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Easing:$Jease$.$InSine}";

                  _SlideshowTransitionC["Flutter Inside in "] = {$Duration:1200,x:1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Clip:$Jease$.$InOutQuad},$Round:{$Top:0.8}};
                  _SlideshowTransitionCodes["Flutter Inside in "] = "{$Duration:1200,x:1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Clip:$Jease$.$InOutQuad},$Round:{$Top:0.8}}";

                  _SlideshowTransitionC["Flutter Inside in Wind"] = {$Duration:1200,x:1,y:0.2,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Round:{$Top:1.3}};
                  _SlideshowTransitionCodes["Flutter Inside in Wind"] = "{$Duration:1200,x:1,y:0.2,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Round:{$Top:1.3}}";

                  _SlideshowTransitionC["Flutter Inside in Swirl"] = {$Duration:1200,x:1,y:0.2,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Round:{$Top:1.3}};
                  _SlideshowTransitionCodes["Flutter Inside in Swirl"] = "{$Duration:1200,x:1,y:0.2,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Round:{$Top:1.3}}";

                  _SlideshowTransitionC["Flutter Inside in Column"] = {$Duration:1500,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}};
                  _SlideshowTransitionCodes["Flutter Inside in Column"] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}}";

                  _SlideshowTransitionC["Flutter Inside out"] = {$Duration:1200,x:1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Clip:$Jease$.$InOutQuad},$Round:{$Top:0.8}};
                  _SlideshowTransitionCodes["Flutter Inside out"] = "{$Duration:1200,x:1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Clip:$Jease$.$InOutQuad},$Round:{$Top:0.8}}";

                  _SlideshowTransitionC["Fade Flutter Inside out Wind"] = {$Duration:1200,x:1,y:0.2,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Round:{$Top:1.3}};
                  _SlideshowTransitionCodes["Fade Flutter Inside out Wind"] = "{$Duration:1200,x:1,y:0.2,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Round:{$Top:1.3}}";




                  _SlideshowTransitionC["Flutter Inside out Column"] = {$Duration:1800,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}};
                  _SlideshowTransitionCodes["Flutter Inside out Column"] = "{$Duration:1800,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}}";

                  _SlideshowTransitionC["Dominoes Stripe"] = {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Dominoes Stripe"] = "{$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Extrude out Stripe"] = {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}};
                  _SlideshowTransitionCodes["Extrude out Stripe"] = "{$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}}";

                  _SlideshowTransitionC["Horizontal Blind Stripe"] = {$Duration:400,$Delay:50,$Rows:7,$Clip:4,$Formation:$JssorSlideshowFormations$.$FormationStraight};
                  _SlideshowTransitionCodes["Horizontal Blind Stripe "] = "{$Duration:400,$Delay:50,$Rows:7,$Clip:4,$Formation:$JssorSlideshowFormations$.$FormationStraight}";

                  _SlideshowTransitionC["Horizontal Fade Stripe"] = {$Duration:400,$Delay:40,$Rows:10,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260};
                  _SlideshowTransitionCodes["Horizontal Fade Stripe"] = "{$Duration:400,$Delay:40,$Rows:10,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260}";

                  _SlideshowTransitionC["Vertical Fade Stripe"] = {$Duration:400,$Delay:40,$Cols:16,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260};
                  _SlideshowTransitionCodes["Vertical Fade Stripe"] = "{$Duration:400,$Delay:40,$Cols:16,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260}";

                  _SlideshowTransitionC["Horizontal Fly Stripe"] = {$Duration:600,x:1,$Delay:50,$Rows:8,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Horizontal Fly Stripe"] = "{$Duration:600,x:1,$Delay:50,$Rows:8,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Vertical Fly Stripe"] = {$Duration:600,y:1,$Delay:50,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Vertical Fly Stripe"] = "{$Duration:600,y:1,$Delay:50,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Horizontal Chess Stripe"] =  {$Duration:600,x:-1,$Rows:10,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Row:3},$Easing:$Jease$.$InCubic};
                  _SlideshowTransitionCodes["Horizontal Chess Stripe"] = "{$Duration:600,x:-1,$Rows:10,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Row:3},$Easing:$Jease$.$InCubic}";

                  _SlideshowTransitionC["Vertical Chess Stripe"] = {$Duration:600,y:-1,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$Easing:$Jease$.$InCubic};
                  _SlideshowTransitionCodes["Vertical Chess Stripe"] = "{$Duration:600,y:-1,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$Easing:$Jease$.$InCubic}";





                  _SlideshowTransitionC["Flutter Inside out Column"] = {$Duration:1800,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}};
                  _SlideshowTransitionCodes["Flutter Inside out Column"] = "{$Duration:1800,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}}";

                  _SlideshowTransitionC["Dominoes Stripe"] = {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Dominoes Stripe"] = "{$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Extrude out Stripe"] = {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}};
                  _SlideshowTransitionCodes["Extrude out Stripe"] = "{$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}}";

                  _SlideshowTransitionC["Horizontal Blind Stripe"] = {$Duration:400,$Delay:50,$Rows:7,$Clip:4,$Formation:$JssorSlideshowFormations$.$FormationStraight};
                  _SlideshowTransitionCodes["Horizontal Blind Stripe "] = "{$Duration:400,$Delay:50,$Rows:7,$Clip:4,$Formation:$JssorSlideshowFormations$.$FormationStraight}";

                  _SlideshowTransitionC["Horizontal Fade Stripe"] = {$Duration:400,$Delay:40,$Rows:10,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260};
                  _SlideshowTransitionCodes["Horizontal Fade Stripe"] = "{$Duration:400,$Delay:40,$Rows:10,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260}";

                  _SlideshowTransitionC["Vertical Fade Stripe"] = {$Duration:400,$Delay:40,$Cols:16,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260};
                  _SlideshowTransitionCodes["Vertical Fade Stripe"] = "{$Duration:400,$Delay:40,$Cols:16,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2,$Assembly:260}";

                  _SlideshowTransitionC["Horizontal Fly Stripe"] = {$Duration:600,x:1,$Delay:50,$Rows:8,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Horizontal Fly Stripe"] = "{$Duration:600,x:1,$Delay:50,$Rows:8,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Vertical Fly Stripe"] = {$Duration:600,y:1,$Delay:50,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Vertical Fly Stripe"] = "{$Duration:600,y:1,$Delay:50,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Horizontal Chess Stripe"] =  {$Duration:600,x:-1,$Rows:10,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Row:3},$Easing:$Jease$.$InCubic};
                  _SlideshowTransitionCodes["Horizontal Chess Stripe"] = "{$Duration:600,x:-1,$Rows:10,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Row:3},$Easing:$Jease$.$InCubic}";

                  _SlideshowTransitionC["Vertical Chess Stripe"] = {$Duration:600,y:-1,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$Easing:$Jease$.$InCubic};
                  _SlideshowTransitionCodes["Vertical Chess Stripe"] = "{$Duration:600,y:-1,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$Easing:$Jease$.$InCubic}";




                  _SlideshowTransitionC["Vertical Random Fade Stripe"] = {$Duration:1800,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}};
                  _SlideshowTransitionCodes["Vertical Random Fade Stripe"] = "{$Duration:1800,x:0.2,y:-0.1,$Delay:150,$Cols:12,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:2}}";

                  _SlideshowTransitionC["Horizontal Bounce Stripe"] = {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Horizontal Bounce Stripe"] = "{$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Vertical Bounce Stripe"] = {$Duration:600,$Delay:40,$Cols:16,$Clip:1,$Move:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:264,$Easing:$Jease$.$InBounce};
                  _SlideshowTransitionCodes["Vertical Bounce Stripe"] ="{$Duration:600,$Delay:40,$Cols:16,$Clip:1,$Move:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:264,$Easing:$Jease$.$InBounce}";

                  _SlideshowTransitionC["Parabola Swirl in"] = {$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:264,$Easing:{$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}};
                  _SlideshowTransitionCodes["Parabola Swirl in"] = "{$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:264,$Easing:{$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}}";

                  _SlideshowTransitionC["Parabola Swirl out"] = {$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:264,$Easing:{$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}};
                  _SlideshowTransitionCodes["Parabola Swirl out"] = "{$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:264,$Easing:{$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}}";

                  _SlideshowTransitionC["Parabola ZigZag in"] = {$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$ChessMode:{$Row:3},$Easing:{$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}};
                  _SlideshowTransitionCodes["Parabola ZigZag in"] = "{$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$ChessMode:{$Row:3},$Easing:{$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}}";

                  _SlideshowTransitionC["Parabola Stairs in "] = {$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InQuart,$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}};
                  _SlideshowTransitionCodes["Parabola Stairs in "] = "{$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InQuart,$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}}";

                  _SlideshowTransitionC["Parabola Stairs out"] = {$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InQuart,$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}};
                  _SlideshowTransitionCodes["Parabola Stairs out"] = "{$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InQuart,$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}}";

                  _SlideshowTransitionC["Swing Inside in Stairs"] =  {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["Swing Inside in Stairs"] = "{$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";

                  _SlideshowTransitionC["Swing Inside in ZigZag"] = {$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["Swing Inside in ZigZag"] = "{$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";



                  _SlideshowTransitionC["wing Inside in Swirl"] = {$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["wing Inside in Swirl"] = "{$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";

                  _SlideshowTransitionC["Swing Inside in Random"] = {$Duration:1200,x:0.2,y:-0.1,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["Swing Inside in Random"] = "{$Duration:1200,x:0.2,y:-0.1,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";

                  _SlideshowTransitionC["Swing Inside in Random Chess"] = {$Duration:1200,x:0.2,y:-0.1,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:3},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["Swing Inside in Random Chess"] ="{$Duration:1200,x:0.2,y:-0.1,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:3},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";

                  _SlideshowTransitionC["Swing Inside out ZigZag"] = {$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["Swing Inside out ZigZag"] = "{$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";

                  _SlideshowTransitionC["Swing Inside out Swirl"] = {$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}};
                  _SlideshowTransitionCodes["Swing Inside out Swirl"] = "{$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}";

                  _SlideshowTransitionC["Float Right Random"] = {$Duration:500,x:-1,$Delay:40,$Cols:10,$Rows:5,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float Right Random"] = "{$Duration:500,x:-1,$Delay:40,$Cols:10,$Rows:5,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Float up Random"] = {$Duration:500,y:1,$Delay:40,$Cols:10,$Rows:5,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float up Random"] = "{$Duration:600,x:-1,y:1,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InQuart,$Top:$Jease$.$InQuart,$Opacity:$Jease$.$Linear}}";

                  _SlideshowTransitionC["Float up Random with Chess"] = {$Duration:500,x:1,y:-1,$Delay:40,$Cols:10,$Rows:5,$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float up Random with Chess"] = "{$Duration:500,x:1,y:-1,$Delay:40,$Cols:10,$Rows:5,$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Float Right ZigZag"] =  {$Duration:600,x:-1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float Right ZigZag"] = "{$Duration:600,x:-1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Swing Inside in ZigZag"] = {$Duration:600,y:1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:264,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Swing Inside in ZigZag"] = "{$Duration:600,y:1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:264,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";



                  _SlideshowTransitionC["Float Right Swirl"] = {$Duration:600,x:-1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float Right Swirl"] = "{$Duration:600,x:-1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:513,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Float up Swirl"] = {$Duration:600,y:1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:2049,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float up Swirl"] ="{$Duration:600,y:1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:2049,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Float up Swirl with Chess"] = {$Duration:600,x:1,y:1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:513,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2};
                  _SlideshowTransitionCodes["Float up Swirl with Chess"] = "{$Duration:600,x:1,y:1,$Delay:12,$Cols:10,$Rows:5,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:513,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2}";

                  _SlideshowTransitionC["Dodge Pet Inside in Stairs"] = {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside in Stairs"] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Pet Inside in Swirl"] = {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside in Swirl"] = "{{$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Pet Inside in ZigZag"] = {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside in ZigZag"] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Pet Inside in Random"] = {$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$Linear},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside in Random"] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$Linear},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Pet Inside out Random Chess"] =  {$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$SlideOut:true,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$Linear},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside out Random Chess"] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$SlideOut:true,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$Linear},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Pet Inside out Random"] = {$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$SlideOut:true,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$Linear},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside out Random"] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$SlideOut:true,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$Linear},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Pet Inside out Stairs "] = {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Pet Inside out Stairs "] = "{$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";



                  _SlideshowTransitionC["Dodge Inside out TR"] = {$Duration:1200,x:-0.3,y:0.3,$Delay:60,$Zoom:1,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Opacity:$Jease$.$Linear,$Zoom:$Jease$.$Swing},$Opacity:2,$Round:{$Left:0.8,$Top:0.8}};
                  _SlideshowTransitionCodes["Dodge Inside out TR"] = "{$Duration:1200,x:-0.3,y:0.3,$Delay:60,$Zoom:1,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Opacity:$Jease$.$Linear,$Zoom:$Jease$.$Swing},$Opacity:2,$Round:{$Left:0.8,$Top:0.8}}";

                  _SlideshowTransitionC["Dodge Inside in Random Chess"] = {$Duration:1200,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Assembly:260,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$Swing},$Round:{$Left:0.8,$Top:0.8}};
                  _SlideshowTransitionCodes["Dodge Inside in Random Chess"] ="{$Duration:1200,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Assembly:260,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$Swing},$Round:{$Left:0.8,$Top:0.8}}";


                  _SlideshowTransitionC["Clip & Chess in"] = {$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5};
                  _SlideshowTransitionCodes["Clip & Chess in"] = "{$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5}";

                  _SlideshowTransitionC["Clip & Chess out"] = {$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5};
                  _SlideshowTransitionCodes["Clip & Chess out"] = "{$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5}";

                  _SlideshowTransitionC["Clip & Oblique Chess in"] = {$Duration:1200,x:-1,y:-1,$Cols:6,$Rows:6,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Clip:[0,0.2]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Clip:$Jease$.$Swing},$ScaleClip:0.5};
                  _SlideshowTransitionCodes["Clip & Oblique Chess in"] = "{$Duration:1200,x:-1,y:-1,$Cols:6,$Rows:6,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Clip:[0,0.2]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Clip:$Jease$.$Swing},$ScaleClip:0.5}";

                  _SlideshowTransitionC["Clip & Oblique Chess out"] = {$Duration:1200,x:-1,y:-1,$Cols:6,$Rows:6,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Clip:[0,0.2]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Clip:$Jease$.$Swing},$ScaleClip:0.5};
                  _SlideshowTransitionCodes["Clip & Oblique Chess out"] = "{$Duration:1200,x:-1,y:-1,$Cols:6,$Rows:6,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Clip:[0,0.2]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Clip:$Jease$.$Swing},$ScaleClip:0.5}";

                  _SlideshowTransitionC["Clip & Wave in"] =  {$Duration:4000,x:-1,y:0.45,$Delay:80,$Cols:12,$Opacity:2,$Clip:15,$During:{$Left:[0.35,0.65],$Top:[0.35,0.65],$Clip:[0,0.15]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:2049,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Clip:$Jease$.$OutQuad},$ScaleClip:0.7,$Round:{$Top:4}};
                  _SlideshowTransitionCodes["Clip & Wave in"] = "{$Duration:4000,x:-1,y:0.45,$Delay:80,$Cols:12,$Opacity:2,$Clip:15,$During:{$Left:[0.35,0.65],$Top:[0.35,0.65],$Clip:[0,0.15]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:2049,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Clip:$Jease$.$OutQuad},$ScaleClip:0.7,$Round:{$Top:4}}";

                  _SlideshowTransitionC["Clip & Jump in"] = {$Duration:4000,x:-1,y:0.7,$Delay:80,$Cols:12,$Opacity:2,$Clip:11,$Move:true,$During:{$Left:[0.35,0.65],$Top:[0.35,0.65],$Clip:[0,0.1]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:2049,$Easing:{$Left:$Jease$.$OutQuad,$Top:$Jease$.$OutJump,$Clip:$Jease$.$OutQuad},$ScaleClip:0.7,$Round:{$Top:4}};
                  _SlideshowTransitionCodes["Clip & Jump in"] = "{$Duration:4000,x:-1,y:0.7,$Delay:80,$Cols:12,$Opacity:2,$Clip:11,$Move:true,$During:{$Left:[0.35,0.65],$Top:[0.35,0.65],$Clip:[0,0.1]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:2049,$Easing:{$Left:$Jease$.$OutQuad,$Top:$Jease$.$OutJump,$Clip:$Jease$.$OutQuad},$ScaleClip:0.7,$Round:{$Top:4}}";

                  _SlideshowTransitionC["Dodge Dance Inside in Stairs"] = {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Dance Inside in Stairs"] = "{$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";



                  _SlideshowTransitionC["Dodge Dance Inside in ZigZag"] = {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Dance Inside in ZigZag"] = "{$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Dance Inside in Random"] = {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Dance Inside in Random"] ="{{$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";


                  _SlideshowTransitionC["Dodge Dance Inside in Random Chess"] = {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Dance Inside in Random Chess"] = "{$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";

                  _SlideshowTransitionC["Dodge Dance Inside out Stairs"] = {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}};
                  _SlideshowTransitionCodes["Dodge Dance Inside out Stairs"] = "{$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}";


                  _SlideshowTransitionC["Dodge Dance Inside out Swirl"] = {$Duration:1200,x:-1,y:-1,$Cols:6,$Rows:6,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Clip:[0,0.2]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Clip:$Jease$.$Swing},$ScaleClip:0.5};
                  _SlideshowTransitionCodes["Dodge Dance Inside out Swirl"] = "{$Duration:1200,x:-1,y:-1,$Cols:6,$Rows:6,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Clip:[0,0.2]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:15,$Row:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Clip:$Jease$.$Swing},$ScaleClip:0.5}";

                  _SlideshowTransitionC["Jump out Straight"] =  {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Jump out Straight"] = "{$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Jump out Swirl"] = {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Jump out Swirl"] = "{$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Jump out ZigZag"] = {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Jump out ZigZag"] = "{$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Jump out Rectangle"] = {$Duration:1500,x:-1,y:0.5,$Delay:800,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Jump out Rectangle"] = "{$Duration:1500,x:-1,y:0.5,$Delay:800,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}}";




                  _SlideshowTransitionC["Jump out Circle"] = {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Jump out Circle"] = "{$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Jump out Rectangle Cross"] = {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Jump out Rectangle Cross"] ="{$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}}";


                  _SlideshowTransitionC["Wave out"] = {$Duration:1500,y:-0.5,$Delay:60,$Cols:16,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Top:$Jease$.$InWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out"] = "{$Duration:1500,y:-0.5,$Delay:60,$Cols:16,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Top:$Jease$.$InWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Wave out Eagle"] = {$Duration:1200,y:-0.5,$Delay:30,$Cols:15,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:{$Top:$Jease$.$InWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out Eagle"] = "{$Duration:1200,y:-0.5,$Delay:30,$Cols:15,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:{$Top:$Jease$.$InWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";


                  _SlideshowTransitionC["Wave out Swirl"] = {$Duration:1200,x:-1,y:0.5,$Delay:30,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out Swirl"] = "{$Duration:1200,x:-1,y:0.5,$Delay:30,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Wave out ZigZag"] =  {$Duration:1500,x:-1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out ZigZag"] = "{$Duration:1500,x:-1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Wave out Rectangle"] = {$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out Rectangle"] = "{$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Wave out Circle"] = {$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out Circle"] = "{$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Wave out Cross"] = {$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out Cross"] = "{$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";

                  _SlideshowTransitionC["Wave out Rectangle Cross"] = {$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}};
                  _SlideshowTransitionCodes["Wave out Rectangle Cross"] = "{$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}";



              }

              $Jssor$.$Each(_SlideshowTransitionC, function (slideshowTransition, name) {
                  _SlideshowTransitions.push(slideshowTransition);
              });
            });
            </script>
            <script>

              jssor_slider1_init = function (containerId) {
                jQuery(document).ready(function ($) {

                  var jssor_1_SlideshowTransitions = [
                    /* Fade in Left */  {$Duration:1000,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                   /* Fade in Right */  {$Duration:1500,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                   /* Fade in Top */  {$Duration:2500,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},

                 ];
                  var jssor_slider1 = new $JssorSlider$(containerId, {
                      $AutoPlay: 1,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                      $Idle: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                      $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                      $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                      $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                          $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                          $Transitions: jssor_1_SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                          $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                          $ShowLink: true                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                      }
                  });

                  PlaySlideshowTransition = function (event) {
                      $Jssor$.$StopEvent(event);
                      $Jssor$.$CancelEvent(event);

                      try {
                          var eventSrcElement = $Jssor$.$EvtSrc(event);
                          var transitionName = $Jssor$.$InnerText(eventSrcElement);
                          jssor_slider1.$Next();

                          jssor_slider1.$SetSlideshowTransitions([_SlideshowTransitionC[transitionName]]);

                          var effectStr = _SlideshowTransitionCodes[transitionName];

                          if (transitionNameTextBox) {
                              transitionNameTextBox.value = transitionName;
                          }
                          if (transitionCodeTextBox) {
                              transitionCodeTextBox.value = effectStr;
                          }
                      }
                      catch (e) { }
                  }

                  TransitionTextBoxClickEventHandler = function (event) {
                      transitionCodeTextBox.select();

                      $Jssor$.$CancelEvent(event);
                      $Jssor$.$StopEvent(event);
                  }

                  var transitionCodeTextBox = $Jssor$.$GetElement("stTransition");
                  var transitionNameTextBox = $Jssor$.$GetElement("stTransitionName");
                  $Jssor$.$AddEvent(transitionCodeTextBox, "click", TransitionTextBoxClickEventHandler);


                  function ScaleSlider() {
                      var bodyWidth = document.body.clientWidth;
                      if (bodyWidth)
                          jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 600));
                      else
                          $Jssor$.$Delay(ScaleSlider, 30);
                  }

                  ScaleSlider();
                  $Jssor$.$AddEvent(window, "load", ScaleSlider);

                  $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                  $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                  //responsive code end
                });
              };
            </script>
						';
					print $function;
					}



				 function SliderMainFunctions() {
          $function = '
          <div id="slider1_container" style="position: relative; margin: 0 auto; width:300px; height:150px; left:-19%; top:0px;">

            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 300px; height: 150px;
                overflow: hidden;">
                <div>
                    <img u="image" src="https://images.pexels.com/photos/258609/pexels-photo-258609.jpeg?auto=compress&cs=tinysrgb&h=350" />
                </div>
                <div>
                    <img u="image" src="https://images.pexels.com/photos/690729/pexels-photo-690729.jpeg?auto=compress&cs=tinysrgb&h=350" />
                </div>
            </div>
            <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
            <!-- Trigger -->
        </div>
        <!-- Jssor Slider End -->
        <!--#region slideshow codes-->
        <div style="height: 20px;"></div>

        <div class="slideshow-block">
            <div style="height: 22px; line-height: 22px;">
                Transition Name:
            </div>
            <div style="margin: 0 4px;">
                <input id="stTransitionName" readonly type=text style="width:200px;height:40px;" />
            </div>
            <div style="margin-top: 10px; height: 22px; line-height: 22px;">
                Transition Code:
            </div>
            <div style="margin: 0 4px;">
                <input id="stTransition" readonly type=text style="width:100%;height:40px;" />
            </div>

            <div style="margin: 20px 0;">
                <!-- ---- Compound Transitions ----- -->
                <select>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Left</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Right</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Top</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Bottom</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Left to Right</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in LR Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Top to Bottom</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade in Corners</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade out Left</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade out Right</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade out top</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade out Top to bottom</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Fly out Corners</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Fly out TB Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Fly out TB</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Clip in Horizontal</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Clip in Vertical</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Clip out Horizontal</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Clip out Verticali </option>


                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Stairs</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate away</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate away acw</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate back</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Switch</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Relay</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Doors</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Doors close</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate in+ out- </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Chess Replace TB</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Zoom back</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Zoom away</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Axis down</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Extrude Return</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate VDouble+ </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate VDouble- in</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate HDouble- in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate HDouble+ out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate VFork+ in </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Zoom+ in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Zoom- out BR</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Zoom- out BL</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Zoom- in BL</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Rotate Zoom- in B</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Zoom VDouble+ in </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Room HDouble+ in</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Zoom VDouble+ out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Zoom- out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Stairs  </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Rectangle Cross</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Rectangle</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Cross</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Circle</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Collapse Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Expand Stairs</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Expand Swirl</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Expand Cross</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Expand ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Expand Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Flutter Inside in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Flutter Inside in Wind</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Flutter Inside in Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Flutter Inside in Column</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Flutter Inside out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Fade Flutter Inside out Wind</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Flutter Inside out Column</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dominoes Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Extrude out Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Horizontal Blind Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Horizontal Fade Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Horizontal Fly Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Vertical Fly Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Horizontal Chess Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Vertical Chess Stripe</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Vertical Random Fade Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Horizontal Bounce Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Vertical Bounce Stripe</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Parabola Swirl in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Parabola Swirl out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Parabola ZigZag in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Parabola Stairs in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Parabola Stairs out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside in Stairs</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside in ZigZag</option>


                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside in Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside in Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside in Random Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside out ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Swing Inside out Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float Right Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up Random with Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float Right ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up ZigZag</option>


                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float Right Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up Swirl with Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in Stairs</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside out Random Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside out Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside out Stairs</option>


                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Inside out TR </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Inside in Random Chess</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Clip & Chess in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Clip & Chess out</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Clip & Oblique Chess in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Clip & Oblique Chess out </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Clip & Wave in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Clip & Jump in</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Dance Inside in Stairs</option>



                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float Right Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Float up Swirl with Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in Stairs</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside in Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside out Random Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside out Random</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Pet Inside out Stairs</option>


                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Dance Inside in ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Dance Inside in Random </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Dance Inside in Random Chess</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Dance Inside out Stairs</option>

                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Dodge Dance Inside out Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Jump out Straight</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Jump out Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Jump out ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Jump out Rectangle</option>



                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Jump out Circle</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Jump out Rectangle Cross</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out Eagle </option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out Swirl</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out ZigZag</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out Rectangle</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out Circle</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out Cross</option>
                <option class="effectButton" onclick="PlaySlideshowTransition(event)" href="#">Wave out Rectangle Cross</option>


                </select>



            </div>
        </div>

        <script>
        jQuery(document).ready(function ($) {
          jssor_slider1_init("slider1_container");
        });
      </script>
         		';
        print $function;



				}

			}

	$rebel_slider_function = new RebelSliderSlideTestEffect();
}
