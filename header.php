<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
  <?php do_action( 'wp_body_open' ); ?>
  <div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <header id="wrapper-navbar">
      <div class="top-header-holder">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-4">
              <a href="#" class="logo-holder">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="The Backbeach LOGO"
                  width="220px">
              </a>
            </div>
            <div class="col-6">
              <div class="reservation-holder">
                <div class="contact-holder">
                  <a href="#" class="phone">
                    <i class="fa fa-phone"></i>
                    08 9791 6575
                  </a>
                  <a href="#" class="address">
                    <i class="fa fa-map"></i>
                    Lot 757, Ocean Drive, Bunbury
                  </a>
                </div>
                <a href="#" class="reservation-btn">
                  Make a Reservation
                </a>
              </div>
            </div>
            <div class="col-1">
              <div class="socaial-media-holder">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
        <?php esc_html_e( 'Skip to content', 'understrap' ); ?>
      </a>

      <?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version );?>

    </header><!-- #wrapper-navbar -->