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

if ( ! defined( 'WPINC' ) ) {

    die;

}

/**
 * Welcome page redirect.
 *
 * Only happens once and if the site is not a network or multisite.
 *
 * @since 1.0.2
 */
function rebel_slider_safe_welcome_redirect() {

    // Bail if no activation redirect transient is present.
    if ( ! get_transient( '_welcome_redirect_rebel_slider' ) ) {

        return;

    }

  // Delete the redirect transient.
  delete_transient( '_welcome_redirect_rebel_slider' );

  // Bail if activating from network or bulk sites.
  if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {

    return;

  }

  // Redirect to Welcome Page.
  // Redirects to `your-domain.com/wp-admin/plugin.php?page=wpw_welcome_page`.
  wp_safe_redirect( add_query_arg( array( 'page' => 'rebel_slider_welcome_page' ), admin_url( 'plugins.php' ) ) );

}

add_action( 'admin_init', 'rebel_slider_safe_welcome_redirect' );

/**
 * Adds welcome page sub menu.
 *
 * @since 1.0.2
 */
function rebel_slider_welcome_page() {

  global $wpw_sub_menu;

  $wpw_sub_menu = add_submenu_page(
      'plugins.php', // The slug name for the parent menu (or the file name of a standard WordPress admin page).
      __( 'Welcome Rebel Slider Page', 'wpw' ), // The text to be displayed in the title tags of the page when the menu is selected.
      __( 'Welcome Rebel Slider Page', 'wpw' ), // The text to be used for the menu.
      'read', // The capability required for this menu to be displayed to the user.
      'rebel_slider_welcome_page', // The slug name to refer to this menu by (should be unique for this menu).
      'rebel_slider_welcome_page_content' // The function to be called to output the content for this page.
  );

}

add_action( 'admin_menu', 'rebel_slider_welcome_page' );

/**
 * Welcome page content.
 *
 * @since 1.0.2
 */
function rebel_slider_welcome_page_content() {

  $logo_url = plugins_url('/plugin-welcome.jpeg' ,  __FILE__);
  $active_tab = 'ispirit_about';
  $ocdi_buttont = "";
  if ( class_exists('OCDI_Plugin') ) {
    $ocdi_buttont = "button-enabled";
  } else
  {
    $ocdi_buttont = "button-disabled";
  }
  $details_theme = wp_get_theme();
  $name_version = $details_theme->get( 'Name' ) . " - " . $details_theme->get( 'Version' );

    ?>
    <div class="wrapp">
        <div class="nx-info-wrap-2 welcome-panel">

          <div class="nx-info-wrap">


                <div class="tx-wspace-24"></div>
                <div class="tx-wspace-24"></div>
                <div class="welcome-logo">
                <img src="<?php echo $logo_url; ?>" alt="" class="welcome-logo-img" width="900" height="300" /></div>



                <div style="display: block; clear: both; padding-top: 56px; padding-bottom: 96px;">
                  <div style="text-align: left;">
                    <div class="nx-welcome">Welcome To Spartan Gallery</div>
                    <div class="tx-wspace-24"></div>
                      <div style="width: 100%; text-align:left; display: block; font-size: 24px; padding-bottom: 24px;">What Next?</div>
                    </div>
                  <div style="text-align: left;color: black;">

                          <h4><a href="<?php echo admin_url(); ?>themes.php?page=tgmpa-install-plugins">1. Install required Plugins and Activate them</a></h4>
                          <h4>2. Select Rebel Slider from dashboard Menu</h4>
                          <h4>3. Create New Slider</h4>
                          <h4>4. Select Text Settings</h4>
                          <h4>5. Upload Images</h4>
                          <h4>6. Select Slider Settings</h4>
                          <h4>7. Copy and Paste shortcode where do you wish</h4>

                  </div>
                    <div style="display: block; clear: both; padding-top: 12px; padding-bottom: 8px;">
                      <div style="width: 40%; text-align:right; display: block; float:left; min-height: 33px;">
                          <img src="<?php echo $img_url; ?>arrow-down-left-right.png" alt="" class="step-arrow" />
                        </div>
                      <div style="width: 20%; text-align:center; display: block; float:left; min-height: 33px;"></div>
                      <div style="width: 40%; text-align:left; display: block; float:left; min-height: 33px;">
                          <img src="<?php echo $img_url; ?>arrow-down-right.png" alt="" class="step-arrow" />
                        </div>
                    </div>

                </div>
        <div class="nx-info-desc">


                    <p>Congratulations! You are about to use one of the best gallery plugin available.</p>
                    <p><a class="" href="<?php echo admin_url(); ?>themes.php?page=tgmpa-install-plugins">Install Recommended Plugins</a>
                    <p> 	<a class="button button-primary button-hero" href="http://www.developerforwebsites.com/help">Give Us Feedback</a></p>


                </div>
                <div class="tx-wspace-24"></div>


                  <div class="nx-tab-content" style="font-size: 15px;">
                    <p>&nbsp;</p>
                        <h2>Starting with Spartan Gallery</h2>
                        <ol>
                          <li>Make sure you have all recommended plugins installed and active. To install and activate all the recommended plugin at once, go to
                              menu "Appearance" > "<a href="<?php echo admin_url(); ?>themes.php?page=tgmpa-install-plugins">Install Plugins</a>".
                                This menu will not be available once all the recommended plugins are installed and active.</li>
                          <li>To start setting up your plugin go to menu "Dashboard" > Select Spartan Gallery > "<a href="<?php echo admin_url(); ?>post-new.php?post_type=rebel_slider" >Create New Gallery</a>".</li>

                        </ol>

              </div>

                <div class="tx-wspace-24"></div><div class="tx-wspace-24"></div>

                <div id="dashboard_right_now" class="postbox">
                    <h2 class="hndle nxw-title"><span>Why should you Give Us Feedback?</span></h2>
                    <div class="inside">
                        <div class="main">
                          <p style="padding-bottom: 12px; font-size: 15px; color: #555;">
                            We developers looking to develop new things and ideas for wordpress every day, but for this we need some data. Now comes YOUR important part, please
                            take few minutes to fill up customer survey. That is pricless to our team because than we now what you are expecting from us in future.</p>

                            <p style="padding-bottom: 12px; font-size: 15px; color: #555;">If you like a theme , share few words in facebook or Linkedin Community, When it is bad, we will learn from that and when it is good we THANK you for that, it helps the theme to spread.
                            Few words of appriciation also motivates the designers and the developers.  </p>

                            <p style="padding-bottom: 12px; font-size: 15px; color: #555;"><b>If you have not posted your review/feedback yet, we would be very happy you to post your review.
                            Even if you drop a single word, they are worth gold for us.</b></p>
                            <a class="button button-primary button-hero" href="http://www.developerforwebsites.com/help">Write Your Feedback</a>
                            <p style="padding-top: 6px; font-size: 15px; color: #555;"><b>Thanks in Advance</b><br /><span style="font-size: 12px;"><i><a href="http://developerforwebsites.com">Freelancer Martin</a></i></span></p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="tx-wspace"></div>
        </div>
    </div>
    <?php
}
