<?php
/*
Plugin Name:  Rebel Slider
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  150 Effect perfect slider for any theme
Version:      1.00
Author:       WordPress.org
Author URI:   https://themes.developerforwebsites.com/rebel-slider
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages


Rebel Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Rebel Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Rebel Slider. If not, see {License URI}.
*/


// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( !class_exists( 'RebelSliderFunction' ) ) {
	class RebelSliderFunction {
				private $slider_nr;
				private $autoplayer;
				private $FillMode;
				private $SlideDuration;
				private $PauseOnHover;
				private $Idle;
				private $SlideWidth;
				private $SlideHeight;
				private $PlayOrientation;
				private $DragOrientation;
				private $Loop;
				protected $values = '';


				function jqueryStartTag() {
					$this->slider_nr = $slider_nr;
					$function = '
					<script>
							jQuery(document).ready(function($){
						';
					print $function;
				}

				function SliderEffects($slider_nr,$values) {
					$this->slider_nr = $slider_nr;
					$function .= '
					jssor_'.$this->slider_nr.'_slider_init = function() {

					var jssor_'.$this->slider_nr.'_SlideshowTransitions = [';
									//$prefixed_array = preg_filter('/^/', ',', $values);
									$function .= $values;//implode($prefixed_array) ;
	            $function .= ' ];
						';
				 	print $function;
					}


				function SlideoTransitions($slider_nr) {
					$this->slider_nr = $slider_nr;
					$function = '

						var jssor_'.$this->slider_nr.'_SlideoTransitions = [
							[{b:500,d:300,c:{x:487},e:{c:{x:16}}},{b:800,d:300,c:{x:-487},e:{c:{x:16}}}],
 						 [{b:800,d:300,o:-1},{b:1100,d:300,o:1}],
 						 [{b:-1,d:1,sX:-0.2},{b:300,d:400,sX:0.3,sY:0.4,e:{sX:19,sY:19}}],
 						 [{b:200,d:300,o:-1}],
 						 [{b:-1,d:1,o:-1},{b:100,d:300,o:1}],
 						 [{b:-1,d:1,o:-1,c:{t:-199}},{b:580,d:220,y:28,o:1,c:{t:199},e:{y:16,o:16,c:{t:16}}}],
 						 [{b:-1,d:1,o:-1,c:{m:-119}},{b:980,d:600,y:28,o:1,c:{m:119},e:{y:16,o:16,c:{m:16}}}],
 						 [{b:-1,d:1,o:-1,c:{t:-413}},{b:740,d:340,y:31,o:1,c:{t:413},e:{y:16,o:16,c:{t:16}}}],
 						 [{b:-1,d:1,sX:-1,sY:-1},{b:100,d:480,x:-32,y:38,r:180,sX:1,sY:1,e:{x:16,y:16,r:16,sX:16,sY:16}}],
 						 [{b:-1,d:1,o:-1},{b:1580,d:260,y:28,o:1,e:{y:16}}],
 						 [{b:-1,d:1,o:-1},{b:20,d:380,o:1,e:{o:7}}],
 						 [{b:100,d:400,c:{x:198.0,t:-22.0},e:{c:{x:7,t:7}}}],
 						 [{b:-1,d:1,c:{y:53.5,m:-53.5}},{b:100,d:500,c:{y:-53.5,m:53.5},e:{c:{y:16,m:16}}}],
 						 [{b:-1,d:1,o:-1,c:{y:61}},{b:500,d:600,o:1,c:{y:-61},e:{c:{y:16}}}],
 						 [{b:-1,d:1,o:-1,sY:0.5,c:{x:333}},{b:900,d:700,o:1,c:{x:-333},e:{c:{x:16}}}],
 						 [{b:-1,d:1,o:-1,c:{m:-43}},{b:500,d:400,o:1,c:{m:43}}],
 						 [{b:-1,d:1,c:{t:-608}},{b:1000,d:400,c:{t:608},e:{c:{t:7}}}],
 						 [{b:-1,d:1,o:-1,c:{t:-608}},{b:100,d:400,o:1,c:{t:608},e:{c:{t:7}}},{b:900,d:400,c:{x:608},e:{c:{x:7}}}],
 						 [{b:-1,d:1,o:-1,c:{x:608}},{b:300,d:400,o:1,c:{x:-608},e:{c:{x:7}}},{b:1800,d:400,c:{x:608},e:{c:{x:7}}}],
 						 [{b:-1,d:1,o:-1,c:{x:608}},{b:500,d:400,o:1,c:{x:-608},e:{c:{x:7}}},{b:1700,d:400,c:{t:-608},e:{c:{t:7}}}],
 						 [{b:-1,d:1,o:-1,c:{x:505}},{b:1400,d:500,x:-36,o:1,c:{x:-505},e:{x:7,c:{x:7}}}]
		 			 ];  ';
 				 	 print $function;
				}




				public function SliderOptions($slider_nr,$autoplayer,$Idle,$SlideDuration,$PauseOnHover,$FillMode,$SlideWidth,$SlideHeight,$PlayOrientation,$DragOrientation,$Loop) {
					$this->slider_nr = $slider_nr;
					$this->autoplayer = $autoplayer;
					$this->Idle = $Idle;
					$this->SlideDuration = $SlideDuration;
					$this->PauseOnHover = $PauseOnHover;
					$this->FillMode = $FillMode;
					$this->SlideWidth = $SlideWidth;
					$this->SlideHeight = $SlideHeight;
					$this->PlayOrientation = $PlayOrientation;
					$this->DragOrientation = $DragOrientation;
					$this->Loop = $Loop;
					$function = '
					var jssor_'.$this->slider_nr.'_options = {
						$AutoPlay: '.$this->autoplayer.',
						$Idle: 6000,
						$SlideDuration: 900,
						$PauseOnHover:'.$this->PauseOnHover.',
						$FillMode: '.$this->FillMode.',
						$SlideWidth: '.$this->SlideWidth.',
						$SlideHeight: '.$this->SlideHeight.',
						$PlayOrientation: '.$this->PlayOrientation.',
						$DragOrientation: '.$this->DragOrientation.',
						$Loop: '.$this->Loop.',
						$SlideshowOptions: {
							$Class: $JssorSlideshowRunner$,
							$Transitions: jssor_'.$this->slider_nr.'_SlideshowTransitions,
							$TransitionsOrder: 1
						},
					   ';
					print $function;
					//return $function;
				}

				public function BulletNavigatorOptions($Bullet_Chance_To_Show,$Bullet_Action_Mode,$Bullet_Steps,$Bullet_Rows,$Bullet_SpacingX,$Bullet_SpacingY,$Bullet_Orientation){
					$this->Bullet_Chance_To_Show = $Bullet_Chance_To_Show;
					$this->Bullet_Action_Mode = $Bullet_Action_Mode;
					$this->Bullet_Steps = $Bullet_Steps;
					$this->Bullet_Rows = $Bullet_Rows;
					$this->Bullet_SpacingX = $Bullet_SpacingX;
					$this->Bullet_SpacingY = $Bullet_SpacingY;
					$this->Bullet_Orientation = $Bullet_Orientation;
					$function = '
					$BulletNavigatorOptions: {
							$Class: $JssorBulletNavigator$,
							$ChanceToShow: '.$this->Bullet_Chance_To_Show.',
							$ActionMode: '.$this->Bullet_Action_Mode.',
							$Steps: '.$this->Bullet_Steps.',
							$Rows: '.$this->Bullet_Rows.',
							$SpacingX: '.$this->Bullet_SpacingX.',
							$SpacingY: '.$this->Bullet_SpacingY.',
							$Orientation: '.$this->Bullet_Orientation.',
					},
					$DragOrientation: 1, // Moves picture Veritcali
					$PlayOrientation: 1, // Drags picture Verticali
					$ArrowNavigatorOptions: {
						$Class: $JssorArrowNavigator$
					},
					';
					print $function;
				}

				public function ThumbnailNavigatorOptions($Thumbnail_Chance_To_Show,$Thumbnail_Action_Mode,$Thumbnail_Steps,$Thumbnail_Rows,$Thumbnail_SpacingX,$Thumbnail_SpacingY,$Thumbnail_Orientation){
					$this->Thumbnail_Chance_To_Show = $Thumbnail_Chance_To_Show;
					$this->Thumbnail_Action_Mode = $Thumbnail_Action_Mode;
					$this->Thumbnail_Steps = $Thumbnail_Steps;
					$this->Thumbnail_Rows = $Thumbnail_Rows;
					$this->Thumbnail_SpacingX = $Thumbnail_SpacingX;
					$this->Thumbnail_SpacingY = $Thumbnail_SpacingY;
					$this->Thumbnail_Orientation = $Thumbnail_Orientation;
					$function = '
					$ThumbnailNavigatorOptions: {
						$Class: $JssorThumbnailNavigator$,
						$ChanceToShow: '.$this->Thumbnail_Chance_To_Show.',
						$ActionMode: '.$this->Thumbnail_Action_Mode.' ,
						$Steps: '.$this->Thumbnail_Steps.',
						$Rows: '.$this->Thumbnail_Rows.',
						$SpacingX: '.$this->Thumbnail_SpacingX.',
						$SpacingY: '.$this->Thumbnail_SpacingY.',
						$Orientation: '.$this->Thumbnail_Orientation.',
					},

				   ';
				print $function;
				//return $function;
			}

				public function CaptionSliderOptions($slider_nr){
					$this->slider_nr = $slider_nr;
				$function = '
					$CaptionSliderOptions: {
						$Class: $JssorCaptionSlideo$,
						$Transitions: jssor_'.$this->slider_nr.'_SlideoTransitions,
						$Breaks: [
							[{d:2000,b:1000}]
						]
					},
					};
				 ';
					print $function;
					//return $function;
				}


				function ScaleSlider($slider_nr) {
					$this->slider_nr = $slider_nr;
					$function = '

					var jssor_'.$this->slider_nr.'_slider = new $JssorSlider$("jssor_'.$this->slider_nr.'", jssor_'.$this->slider_nr.'_options);


					// Slider Width settngs

					var MAX_WIDTH = 3000;

					function ScaleSlider() {
							var containerElement = jssor_'.$this->slider_nr.'_slider.$Elmt.parentNode;
							var containerWidth = containerElement.clientWidth;

							if (containerWidth) {

									var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

									jssor_'.$this->slider_nr.'_slider.$ScaleWidth(expectedWidth);
							}
							else {
									window.setTimeout(ScaleSlider, 20);
							}
					}





					$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
					$Jssor$.$AddEvent(window, "load", ScaleSlider);
					$Jssor$.$AddEvent(window, "resize", ScaleSlider);
				};
					jssor_'.$this->slider_nr.'_slider_init();
					';
					 print $function;
				}



				function jqueryEndTag() {

					$entries = get_post_meta( get_the_ID(), 'plugin_demo', true );
					$function = '
					});
						</script>

						';
					print $function;
					}



				 function SliderMainFunctions($slider_nr) {

					$this->slider_nr = $slider_nr;
					$arrslidestxt = array();
					$template_dir = get_template_directory_uri();
					$entries = get_post_meta( get_the_ID(), 'plugin_demo', true );
					$color =  esc_attr(get_post_meta( get_the_id(),'plugin_text_colorpicker', true ));
					$background_color =  esc_attr(get_post_meta( get_the_id(),'plugin_plugin_slider_height', true ));
					$slider =   esc_attr(get_post_meta( get_the_id(),'select_slider_displayededed', true ));
					$plugin_slider_height =   esc_attr(get_post_meta( get_the_id(),'plugin_slider_height', true ));
					$slider_img_thumbnail =   esc_attr(get_post_meta( get_the_id(),'plugin_image-thumbnail', true ));


					for($slideno=0;$slideno<=(count($entries) -1);$slideno++){

						$slide_text = $entries[$slideno]['slide_text_effect'];

						if(isset($entries[$slideno]['plugin_slide_title'])) {
						 $title = $entries[$slideno]['plugin_slide_title']	;
						}
						if(isset($entries[$slideno]['plugin_slide_title_2'])) {
						 $title2 = $entries[$slideno]['plugin_slide_title_2']	;
						}
						if(isset($entries[$slideno]['plugin_slide_title_3'])) {
						 $title3 = $entries[$slideno]['plugin_slide_title_3']	;
						}
						if(isset($entries[$slideno]['plugin_slide_image'])) {
						 $image = $entries[$slideno]['plugin_slide_image']	;
						}
						if(isset($entries[$slideno]['plugin_slide_description'])) {
							$desc = $entries[$slideno]['plugin_slide_description']	;
						}
						if(isset($entries[$slideno]['plugin_slide_button_text'])) {
							$linktext = $entries[$slideno]['plugin_slide_button_text']	;
						}
						if(isset($entries[$slideno]['plugin_slide_button_text_url'])) {
							$linkurl = $entries[$slideno]['plugin_slide_button_text_url']	;
						}


						$setting ='';
								if($setting == ''){

									if(! empty($image)) {

										$setting .= '<div>';
										$setting .= '<img data-u="image" src="'.$image.'" alt="'.$title.'" />';
										$setting .= '<img data-u="thumb" src="'.$image.'" alt="'.$title.'" />';
										$setting .= '<p>'.	$slide_text.'<p>';
										$setting .= '<p>'.	$slide_text.'<p>';
										//================================================       Slider Text Slides     =================================================


										//if(isset($title)) {
											switch ($slide_text) {
    									case "effect-1":
											$setting .= '

														<div data-p="267">

														<div class="slider-text-container" data-p="150" style="position:absolute;top:184px;left:283px;width:800px;height:400px;overflow:hidden;">

																<div data-u="caption" data-t="1" style="position:absolute;top:170px;left:164px;width:461px;height:28px;text-align:center;">
																		<div class="slider-desc-container" >'.$desc.'</div>
																</div>
																<div data-u="caption" data-t="2" style="position:absolute;top:97px;left:71px;width:658px;height:92px;text-align:center;">
																		<div class="slider-title-container" >'.$title.'</div>
																</div>
																<a href="'.$linkurl.'" data-play="53" data-rollback="48" style="display:block; position:absolute;top:292px;left:302px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;">
																		<div  class="slider-button-container" data-u="caption" data-t="3" style="position:absolute;top:0px;left:0px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;text-align:center;padding:4%;">'.$linktext.'<br />
																		</div>
																		<div class="slider-button-container" data-u="caption" data-t="4" style="position:absolute;top:0px;left:0px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;text-align:center;padding:4%;">'.$linktext.'</div>
																</a>
														</div>
												</div>';
												break;
    										case "effect-2":
				                $setting .= '
												<div>
												<div class="slider-text-container" data-p="138" style="position:absolute;top:80px;left:170px;width:600px;height:500px;overflow:hidden;">

														<div class="slider-desc-container" data-u="caption" data-t="6" style="position:absolute;top:170px;left:91px;width:405px;height:119px;">'.$desc.'</div>
														<div class="slider-title-container" data-u="caption" data-t="7" style="position:absolute;top:95px;left:88px;width:413px;height:53px;">'.$title.'<br /><br />
														</div>
														<div data-u="caption" data-t="8" data-p="114" style="position:absolute;top:-1px;left:89px;width:481px;height:427px;border:12px solid #ffffff;background-clip:padding-box;box-sizing:border-box;"></div>
												</div>
												<a href="'.$linkurl.'" data-play="53" data-rollback="48" style="display:block; position:absolute;top:450px;left:302px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;margin:1%;">
														<div class="slider-button-container" data-u="caption" data-t="3" style="position:absolute;top:0px;left:0px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;text-align:center;padding:4%;">'.$linktext.'<br />
														</div>
														<div class="slider-button-container" data-u="caption" data-t="4" style="position:absolute;top:0px;left:0px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;text-align:center;padding:4%;">'.$linktext.'</div>
												</a>
												</div>';
												break;
    										case "effect-3":
												$setting .= '
				                <div data-p="267">

				                    <div class="slider-text-container" data-p="143" style="position:absolute;top:29px;left:308px;width:715px;height:429px;overflow:hidden;">
				                        <div data-u="caption" data-t="12" data-p="15" style="position:absolute;top:160px;left:382px;width:13px;height:107px;background-color:#a64d01;"></div>
				                        <div data-u="caption" class="slider-title-container" data-t="13" style="position:absolute;top:156px;left:410px;width:267px;height:61px;font-weight:900;color:#000000;line-height:1;text-align:left;">'.$title.'<br />
				                        </div>
				                        <div data-u="caption" data-t="14" style="position:absolute;top:182px;left:39px;width:333px;height:61px;font-size:57px;font-weight:900;color:#000000;line-height:1;text-align:center;">'.$title2.'<br /><br />
				                        </div>
				                        <div data-u="caption" data-t="15" style="position:absolute;top:224px;left:406px;width:180px;height:43px;font-size:43px;color:#a64d01;line-height:1;text-align:center;">'.$title3.'</div>
				                    </div>
				                </div>';
												break;
    										case "effect-4":

				               $setting .= '

											 <div data-p="267">

													 <div class="slider-text-container" data-p="132" style="position:absolute;top:139px;left:357px;width:658px;height:395px;overflow:hidden;">
															 <div class="text-effect4-container" data-u="caption" data-t="16" data-p="90" style="position:absolute;top:135px;left:25px;width:608px;height:110px;"></div>
															 <div class="text-effect4-container" data-u="caption" data-t="17" data-p="90" style="position:absolute;top:135px;left:25px;width:608px;height:110px;"></div>
															 <div class="text-effect4-border" data-u="caption" data-t="18" data-p="77" style="position:absolute;top:122px;left:25px;width:608px;height:8px;"></div>
															 <div class="text-effect4-border" data-u="caption" data-t="19" data-p="77" style="position:absolute;top:250px;left:25px;width:608px;height:8px;"></div>
															 <div class="slider-title-container" data-u="caption" data-t="20" style="position:absolute;top:165px;left:115px;width:505px;height:58px;text-align: center;">'.$title.'<br />
															 </div>
													 </div>
											 </div>';
												break;
												default:

											}
											$setting .= '</div>';

									}
								}
								if ($setting !=''){
									$arrslidestxt[$slideno] = $setting;
								}
							}


							//================================================       Slider container     =================================================
							echo '<div id="jssor_'.$slider_nr.'" style="position: relative; margin:0 auto;top:0px;left:0px;width:1300px;height:600px;overflow:hidden;visibility:hidden;background-color:#24262e;">';
								echo '<div data-u="slides" style="cursor:default;position:relative;top:0px;width:1300px;height:600px;overflow:hidden;">';
								foreach ( $arrslidestxt as $slidetxt ) :

									print $slidetxt;

								endforeach;
								echo '	</div>'; // end of slider container
							//================================================       Slider Bullet Navigation     =================================================


							$bullet_nav = esc_attr(get_post_meta( get_the_id(),'slider_Bullet_Orientation', true ));
							switch ($bullet_nav) {
								case '1':
								 // simple arrow
								 echo '  <!-- Bullet Navigator -->
								 	<div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
								 			<div data-u="prototype" class="i" style="width:16px;height:16px;">
								 					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								 							<circle class="b" cx="8000" cy="8000" r="5800"></circle>
								 					</svg>
								 			</div>
								 	</div>';
									break;
								case '2':
											// circle arrow inside
									echo '
									<div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="2" data-scale="0.5" data-scale-right="0.75">
					            <div data-u="prototype" class="i" style="width:12px;height:12px;">
					                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
					                </svg>
					            </div>
					        </div>';
									break;
								default:
									// code...
									break;
							}

							//================================================       Slider Navigation Arrows     =================================================
							$arrow = esc_attr(get_post_meta( get_the_id(),'slider_plugin_arrows', true ));
							switch ($arrow) {
								case '1':
								 // simple arrow
									echo '
					        <div data-u="arrowleft" class="jssora" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
					            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
					            </svg>
					        </div>
					        <div data-u="arrowright" class="jssora" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
					            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
					            </svg>
					        </div>';
									break;
								case '2':
											// circle arrow inside
									echo '  <div data-u="arrowleft" class="jssora" style="width:55px;height:55px;top:282px;left:30px;" data-scale="0.75">
												<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
														<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
														<polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
														<line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
												</svg>
										</div>
										<div data-u="arrowright" class="jssora" style="width:55px;height:55px;top:282px;right:30px;" data-scale="0.75">
												<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
														<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
														<polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
														<line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
												</svg>
										</div>';
									break;
								default:
									// code...
									break;
							}

							//================================================       Slider Thumbnail Navigation     =================================================
							$thumbnail_location = esc_attr(get_post_meta( get_the_id(),'slider_Thumbnail_Orientation', true ));
							switch ($thumbnail_location) {
								case '1':
									echo '<!-- Thumbnail Navigator -->
									<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:transparent;" data-autocenter="1" data-scale-bottom="0.75">
											<div data-u="slides">
													<div data-u="prototype" class="p" style="width:190px;height:90px;">
															<div data-u="thumbnailtemplate" class="t"></div>
															<svg viewbox="0 0 16000 16000" class="cv">
																	<circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
																	<line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
																	<line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
															</svg>
													</div>
											</div>
									</div>';
									break;
								case '2':
									echo '<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:transparent;" data-autocenter="2" data-scale-left="0.75">
											<div data-u="slides">
													<div data-u="prototype" class="p" style="width:99px;height:66px;">
															<div data-u="thumbnailtemplate" class="t"></div>
															<svg viewbox="0 0 16000 16000" class="cv">
																	<circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
																	<line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
																	<line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
															</svg>
													</div>
											</div>
									</div>';
									break;
								default:
									// code...
									break;
							}
							echo '	</div>';



				}

			}

}
