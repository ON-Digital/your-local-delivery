<?php
  /**
  * The template for the site header
  *
  * @package Local Delivery
  * @since Local Delivery 1.0
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>

    <header class="bg-white">
      <nav class="container-fluid">
        <div class="row justify-content-center mt-lg-3">

          <div class="col-4 d-none d-lg-block">
            <span class="text-left">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="mw-100" alt="">
              </a>
            </span>
          </div>

          <div class="col-lg-8 ml-auto grid-wrp justify-content-end align-items-center justify-items-end">

            <div class="d-block d-lg-none cursor-pointer ldv-menu-icon-wrp bg-primary position-absolute p-4 pt-5 rounded-circle mr-1" id="ldv_main_menu_btn">
              <div class="bg-white ldv-menu-icon"></div>
            </div>

            <ul class="list-unstyled w-100 ldv-main-menu ldv-main-menu-js transition" id="ldv_menu_nav">
              <li class="d-block w-100 text-center d-lg-none mt-5">

                <?php
                  $frontpage_iD = get_option( 'page_on_front' );

                  $frontpage_link = get_the_permalink( $frontpage_iD );
                ?>

                <a href="<?php echo esc_url( $frontpage_link ); ?>">
                  <img src="<?php echo get_template_directory_uri() ?>/img/logo-negative.png" class="mw-100" alt="">
                </a>
              </li>

              <?php

                    /**
               * The resulting array of menu locations registered with his assigned menus
               *
               * @var array $location
               */
              $location = get_nav_menu_locations();

              /**
               * Store the menu id of the 'main_menu' location
               *
               * @var integer $menu_id
               */
              $menu_id = isset( $location['ldv_main_menu'] ) ? $location['ldv_main_menu'] : false;

              if ( $menu_id ) {

                /**
                 * Menu object of 'main_menu'
                 *
                 * @var object $menu_object
                 */
                $menu_object = wp_get_nav_menu_object( $menu_id );

                /**
                 * An array of menu items objects
                 *
                 * @var array $array_menu_items
                 */
                $array_menu_items = wp_get_nav_menu_items( $menu_object->term_id );

                foreach ( $array_menu_items as $key => $menu_item ) {

                  /**
                   * Store the menu item title
                   *
                   * @var string $title
                   */
                  $title = $menu_item->title;

                  /**
                   * Store the menu item url
                   *
                   * @var string $url
                   */
                  $url = $menu_item->url;

                  $mr_right_end = end( $array_menu_items ) ? 'mr-lg-4' : '';

                  echo
                    '<li class="d-block w-100 text-center d-lg-inline ml-lg-5 font-semibold mt-5 mt-lg-0">
                      <a href="' . esc_url( $url ) . '" class="text-dark">' .

                      esc_html( $title ) .

                      '</a>
                    </li>';

                }

              }

                 ?>

              <!-- <li class="d-block w-100 text-center d-lg-inline ml-lg-5 font-semibold mt-5 mt-lg-0">
                <a href="https://on-digital.github.io/your-local-delivery/" class="text-dark">Home</a>
              </li>

              <li class="d-block d-lg-inline ml-lg-5 font-semibold mt-4 mt-lg-0 text-center">
                <a href="https://on-digital.github.io/your-local-delivery/index.html#s_about" class="text-dark" id="ldv_about_link">About</a>
              </li>

              <li class="d-block d-lg-inline ml-lg-5 font-semibold mt-4 mt-lg-0 text-center">
                <a href="https://on-digital.github.io/your-local-delivery/services-page.html" class="text-dark">Services</a>
              </li>

              <li class="d-block d-lg-inline ml-lg-5 font-semibold mt-4 mt-lg-0 text-center">
                <a href="https://on-digital.github.io/your-local-delivery/index.html#s_contact" class="text-dark" id="ldv_contact_link">Get Started</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
    </header>
