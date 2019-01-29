<?php
  require_once( get_template_directory() . '/includes/customizer-settings.php' );

  add_action( 'wp_head', 'ldv_head_styles' );

  add_action( 'ldv_services_output', 'ldv_services_offer' );

  add_action( 'wp_enqueue_scripts', 'ldv_enqueue_scripts' );

  // add_action( 'ldv_pages_info', 'ldv_pages_info' );

  add_action( 'ldv_header_delivery_services', 'ldv_header_delivery_services' );

  // add_action( 'ldv_contact_form', 'ldv_contact_form' );

  add_action( 'after_setup_theme', 'ldv_setup_theme' );

  add_filter( 'the_content', 'ldv_filter_content', 0 );

  // Set content width
  add_action( 'after_setup_theme', 'ldv_content_width', 0 );

  add_action( 'ldv_delivery_details_form', 'ldv_delivery_details_form' );

  add_filter( 'ldv_delivery_details_form_filter', 'ldv_delivery_details_form_filter' );

  function ldv_delivery_details_form()
  {
    ?>
    <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" class="row no-gutters">
      <?php wp_nonce_field( 'ldv_form_delivery_action', 'ldv_form_delivery_nonce' ); ?>

      <div class="col-8 ml-auto mr-auto d-table">
        <label class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m rounded-0" placeholder="First and last name" name="ldv_name_delivery_inp" id="ldv_name_delivery_inp" required>
        </label>
      </div>

      <div class="col-8 ml-auto mr-auto d-table">
        <label class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m" placeholder="Email" id="ldv_email_delivery_inp" name="ldv_email_delivery_inp" required>
        </label>
      </div>

      <div class="col-8 ml-auto mr-auto d-table">
        <label class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m" placeholder="Phone Number" id="ldv_phone_delivery_inp" name="ldv_phone_delivery_inp" required>
        </label>
      </div>

      <div class="col-8 ml-auto mr-auto d-table">
        <label class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m" placeholder="Origin address" id="ldv_address1_inp" name="ldv_address1_inp" required>
        </label>
      </div>

      <div class="col-8 ml-auto mr-auto d-table">
        <label class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m" placeholder="Destiny address" id="ldv_address2_inp" name="ldv_address2_inp" required>
        </label>
      </div>

      <div class="col-8 d-table ml-auto mr-auto">
        <input type="submit" class="btn btn-primary btn-primary--m form-control mt-1 w-100 font-semibold font-uppercase" value="SUBMIT" id="ldv_delivery_submit_btn" name="ldv_delivery_submit_btn">
      </div>
    </form>
    <?php

    // if data is submitted we call the filter callback that handle that data, send the mail and display a message that indicate the status of the operation
     if ( isset( $_POST['ldv_delivery_submit_btn'] ) )
     {
       $name_user = isset( $_POST['ldv_name_delivery_inp'] ) ? $_POST['ldv_name_delivery_inp'] : '';

       $email_user = isset( $_POST['ldv_email_delivery_inp'] ) ? $_POST['ldv_email_delivery_inp'] : '';

       $number_user = isset( $_POST['ldv_phone_delivery_inp'] ) ? $_POST['ldv_phone_delivery_inp'] : '';

       $address_1 = isset( $_POST['ldv_address1_inp'] ) ? $_POST['ldv_address1_inp'] : '';

       $address_2 = isset( $_POST['ldv_address2_inp'] ) ? $_POST['ldv_address2_inp'] : '';

       if ( ! empty( $name_user ) && ! empty( $email_user ) && ! empty( $number_user ) && ! empty ( $address_1 ) && ! empty ( $address_2 ) ) {

         echo apply_filters( 'ldv_delivery_details_form_filter', ldv_delivery_details_form_filter( $name_user, $email_user, $number_user, $address_1, $address_2 ) );

       } else {

         $die_message = '<h3 class="text-center mt-3 text-primary">' . __( 'Sorry, but all fields are required', 'ldv' ) . '</h3>';

         wp_die( $die_message );
       }
     }
  }

  function ldv_delivery_details_form_filter( $name, $email, $number, $address_1, $address_2 )
  {
    $invalid_nonce = '<h3 class="text-center">' . __( 'An invalid action has happened.', 'ldv' ) . '</h3>';

    // if there is not a valid value for the nonce we return an error message
    if ( ! isset( $_POST['ldv_form_delivery_nonce'] ) ) {
      return $invalid_nonce;
    }

    if ( ! wp_verify_nonce( $_POST['ldv_form_delivery_nonce'], 'ldv_form_delivery_action' ) ) {
      return $invalid_nonce;
    }

    // if is all good we sanitize data and send the email
    $name = sanitize_text_field( $name );

    $email = is_email( $email ) ? sanitize_email( $email ) : '';

    $number = sanitize_text_field( $number );

    $address_1 = sanitize_text_field( $address_1 );

    $address_2 = sanitize_text_field( $address_2 );

    $message = __( 'Origin address: ', 'ldv' ) .   $address_1 . __( '. Origin destiny: ', 'ldv' ) . $address_2;

    $subject = __( 'New delivery petition', 'ldv' );

    $to = get_option( 'admin_email' ) ? get_option( 'admin_email' ) : 'robertoeat91@gmail.com';
    $headers = __( 'From: ', 'ldv' ) . $name . '(' . $number . ')' . ' <' . $email . '>';
    $mail = wp_mail( $to, $subject, $message, $headers );

    // Return a message with the status of the operation, success or failure
    if ( $mail ) {
        return apply_filters( 'ldv_delivery_details_form', '<h3 class="text-center mt-4 text-primary">' . __( "Your message was successfully sended" , 'ldv' ) . '</h3>' );

    } else {
      return apply_filters( 'ldv_delivery_details_form', '<h3 class="text-center mt-4 text-primary">' . __( 'An unexpected error happened', 'ldv' ) . '</h3>' );
    }
  }

  function ldv_custom_logo_size( $width = 20, $height = 40, $flex_height = true, $flex_width = true ) {
   // Add custom logo feature support
   $args =
     array(
       'width' => $width,
       'height' => $height,
       'flex_height' => $flex_height,
       'flex_width' => $flex_width
     );

   return apply_filters( 'ldv_custom_logo_size', $args );
 }

 /**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
 function ldv_content_width()
{
  $GLOBALS['content_width'] = apply_filters( 'ldv_content_width', 800 );
}

  function fes_contact_form_data_filter( $name, $email, $number , $message )
  {
    $invalid_nonce = '<h3 class="text-center">' . __( 'Ha ocurrido una acción invalida.', 'festejos' ) . '</h3>';

    // if there is not a valid value for the nonce we return an error message
    if ( ! isset( $_POST['fes_form_nonce'] ) ) {
      return $invalid_nonce;
    }

    if ( ! wp_verify_nonce( $_POST['fes_form_nonce'], 'fes_form_action' ) ) {
      return $invalid_nonce;
    }

    // if is all good we sanitize data and send the email
    $name = sanitize_text_field( $name );
    $email = is_email( $email ) ? sanitize_email( $email ) : '';
    $number = sanitize_text_field( $number );
    $message = esc_textarea( $message );
    $subject = __( 'Email enviado desde el sitio web', 'festejos' );
    $to = get_option( 'admin_email' ) ? get_option( 'admin_email' ) : 'info@festejosybrindis.com';
    $headers = __( 'De: ', 'festejos' ) . $name . '(' . $number . ')' . ' <' . $email . '>';
    $mail = wp_mail( $to, $subject, $message, $headers );

    // Return a message with the status of the operation, success or failure
    if ( $mail ) {
        return apply_filters( 'fes_contact_form_data_filter', '<h3 class="text-center mt-4 text-primary">' . __( "Su mensaje fue enviado con éxito" , 'festejos' ) . '</h3>' );

    } else {
      return apply_filters( 'fes_contact_form_data_filter', '<h3 class="text-center mt-4 text-primary">' . __( 'Ocurrió un error inesperado', 'festejos' ) . '</h3>' );
    }
  }

  function ldv_contact_form_data_filter(  $name, $email, $number , $message, $frecquency_deliveries, $company  )
  {
    $invalid_nonce = '<h3 class="text-center">' . __( 'An invalid action has happened.', 'ldv' ) . '</h3>';

    // if there is not a valid value for the nonce we return an error message
    if ( ! isset( $_POST['ldv_form_nonce'] ) ) {
      return $invalid_nonce;
    }

    if ( ! wp_verify_nonce( $_POST['ldv_form_nonce'], 'ldv_form_action' ) ) {
      return $invalid_nonce;
    }

    if ( $frecquency_deliveries == 1 ) {

      $frecquency_deliveries = __( 'Just once', 'ldv' );

    } elseif ( $frecquency_deliveries == 2 ) {

      $frecquency_deliveries = __( '1 per week', 'ldv' );

    } elseif ( $frecquency_deliveries == 3 ) {

      $frecquency_deliveries = __( '2-9 per week', 'ldv' );

    } elseif ( $frecquency_deliveries == 4 ) {

      $frecquency_deliveries = __( '10+ per week', 'ldv' );
    }

    // if is all good we sanitize data and send the email
    $name = sanitize_text_field( $name );
    $email = is_email( $email ) ? sanitize_email( $email ) : '';
    $number = sanitize_text_field( $number );
    $message = esc_textarea( $message );
    $company = sanitize_text_field( $message );
    $frecquency = sanitize_text_field( $frecquency_deliveries );
    $subject = __( 'Email sended from your website', 'ldv' );
    $to = get_option( 'admin_email' ) ? get_option( 'admin_email' ) : 'robertoeat91@gmail.com';
    $headers = __( 'From: ', 'ldv' ) . $name . '(' . $number . ')' . 'of ' . $company . ' <' . $email . '>' . ' Frecquency: ' . $frecquency;
    $mail = wp_mail( $to, $subject, $message, $headers );

    // Return a message with the status of the operation, success or failure
    if ( $mail ) {
        return apply_filters( 'ldv_contact_form_data_filter', '<h3 class="text-center mt-4 text-primary">' . __( "Your message was successfully sended" , 'ldv' ) . '</h3>' );

    } else {
      return apply_filters( 'ldv_contact_form_data_filter', '<h3 class="text-center mt-4 text-primary">' . __( 'An unexpected error happened', 'ldv' ) . '</h3>' );
    }

  }

  function ldv_filter_content( $content ) {

      remove_filter( 'the_content', 'wpautop' );

    return $content;
  }

  function ldv_header_delivery_services() {
    ?>
    <header class="mt-5 pt-3 w-100">
      <h2 class="text-center w-100">
        <?php

          $service_offer_tit = get_field( 'subtitle_page_main' ) ? get_field( 'subtitle_page_main' ) : false;

          if ( $service_offer_tit ) {

            echo esc_html( $service_offer_tit );

          } else {

            _e( 'Local Delivery Services for Your Business', 'ldv' );
          }

        ?>
      </h2>

      <p class="text-center mt-4 mb-5 pb-4 pr-5 pl-5">

        <?php

          $service_offer_excerpt = get_field( 'little_excerpt_main' ) ? get_field( 'little_excerpt_main' ) : false;

          if ( $service_offer_excerpt ) {

            echo esc_html( $service_offer_excerpt );

          } else {

            _e( 'Your Local Delivery serves businesses in a wide variety of industries. Here are some examples of items we can deliver for you.', 'ldv' );
          }

        ?>
      </p>
    </header>
    <?php
  }

  function ldv_services_offer() {
    ?>

    <div class="col-8 ml-auto mr-auto col-md-4 pb-3">
      <a href="https://on-digital.github.io/your-local-delivery/specific-service.html" class="text-dark">
        <div class="bg-gray text-center pb-1">
          <!-- <a href=""> -->
            <div class="d-inline-block mb-3 services-icon-line border border-gray border-top-0 border-bottom-xl-0 border-left-0 border-right-services pr-xl-5">
                <img src="<?php echo get_template_directory_uri() ;?>/img/commerical-u381.png" class="pt-4" alt="">

                <p class="mt-2">
                  COMMERCIAL &
                  <span class="d-block">
                    INDUSTRIAL
                  </span>
                </p>
            </div>

            <ul class="d-xl-inline-block pl-lg-4 list-styling-bullets list-services">
              <?php

                $service_offer_item1_01 = get_theme_mod( 'service_offer_item1_01' ) ? get_theme_mod( 'service_offer_item1_01' ) : false;

              ?>
              <li class="d-block mt-xl-5 ml-xl-2" id="service_offer_item1_01">

                <?php
                  if ( $service_offer_item1_01 ) {

                    echo esc_html( $service_offer_item1_01 );

                  } else {

                    _e( 'Printed materials', 'ldv' );
                  }
                ?>

              </li>

              <li class="d-block ml-xl-2" id="service_offer_item2_02">

                <?php

                  $service_offer_item2_02 = get_theme_mod( 'service_offer_item2_02' ) ? get_theme_mod( 'service_offer_item2_02' ) : false;

                  if ( $service_offer_item2_02 ) {

                    echo esc_html( $service_offer_item2_02 );

                  } else {
                    _e( 'Parts & Equipment', 'ldv' );
                  }

                ?>
              </li>

              <li class="d-block mb-4 ml-xl-2" id="service_offer_item3_03">
                <?php
                  $service_offer_item3_03 = get_theme_mod( 'service_offer_item3_03' ) ? get_theme_mod( 'service_offer_item3_03' ) : false;

                  if ( $service_offer_item3_03 ) {

                    echo esc_html( $service_offer_item3_03 );

                  } else {
                    echo _e( 'Promotional Items', 'ldv' );
                  }
                ?>
              </li>
            </ul>
        </div>
      </a>
    </div>

    <div class="col-8 ml-auto mr-auto col-md-4 pb-3">
      <a href="https://on-digital.github.io/your-local-delivery/specific-service.html" class="text-dark">
        <div class="bg-gray text-center pb-1">
          <div class="d-inline-block mb-3 services-icon-line border border-gray border-top-0 border-bottom-xl-0 border-left-0 border-right-services pr-xl-5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-icon-u374.png" class="pt-4" alt="">

            <p class="mt-2 font-uppercase">
              Business
              <span class="d-block">
                Services
              </span>
            </p>
          </div>

          <ul class="d-xl-inline-block pl-lg-4 list-styling-bullets list-services">

            <?php

               $service_offer_item4_04 = get_theme_mod( 'service_offer_item4_04' ) ? get_theme_mod( 'service_offer_item4_04' ) : false;

            ?>
            <li class="d-block mt-xl-5 ml-xl-2" id="service_offer_item4_04">

              <?php
                if ( $service_offer_item4_04 ) {

                  echo esc_html( $service_offer_item4_04 );
                } else {

                  _e( 'Sensitive Documents', 'ldv' );
                }

              ?>

            </li>

            <li class="d-block ml-xl-2" id="service_offer_item5_05">
              <?php

                $service_offer_item5_05 = get_theme_mod( 'service_offer_item5_05' ) ? get_theme_mod( 'service_offer_item5_05' ) : false;

                if ( $service_offer_item5_05 ) {

                  echo esc_html( $service_offer_item5_05 );

                } else {

                  _e( 'Court Filings', 'ldv' );
                }


              ?>
            </li>

            <li class="d-block mb-4 ml-xl-2" id="service_offer_item6_06">
              <?php

                $service_offer_item6_06 = get_theme_mod( 'service_offer_item6_06' ) ? get_theme_mod( 'service_offer_item6_06' ) : false;

                if ( $service_offer_item6_06 ) {

                  echo esc_html( $service_offer_item6_06 );

                } else {

                  _e( 'Bank Runs', 'ldv' );
                }

              ?>

            </li>
          </ul>
        </div>
      </a>
    </div>

    <div class="col-8 ml-auto mr-auto col-md-4 pb-3">
      <a href="https://on-digital.github.io/your-local-delivery/specific-service.html" class="text-dark">
        <div class="bg-gray text-center pb-1">
          <div class="d-inline-block mb-3 services-icon-line border border-gray border-top-0 border-bottom-xl-0 border-left-0 border-right-services pr-xl-5">
            <img src="<?php echo get_template_directory_uri() ?>/img/health-care-icon-u1200.png" class="pt-4" alt="">

            <p class="mt-2">
              HEALTH
              <span class="d-block">
                CARE
              </span>
            </p>
          </div>

          <ul class="d-xl-inline-block pl-lg-4 list-styling-bullets list-services">

            <li class="d-block mt-xl-5 ml-xl-2" id="service_offer_item7_07">

              <?php

                $service_offer_item7_07 = get_theme_mod( 'service_offer_item7_07' ) ? get_theme_mod( 'service_offer_item7_07' ) : false;

                if ( $service_offer_item7_07 ) {

                  echo esc_html( $service_offer_item7_07 );

                } else {

                  _e( 'Medications', 'ldv' );
                }

              ?>

            </li>

            <li class="d-block ml-xl-2" id="service_offer_item8_08">

              <?php

                $service_offer_item8_08 = get_theme_mod( 'service_offer_item8_08' ) ? get_theme_mod( 'service_offer_item8_08' ) : false;

                if ( $service_offer_item8_08 ) {

                  echo esc_html( $service_offer_item8_08 );

                } else {

                  _e( 'Medical devices', 'ldv' );
                }

              ?>

            </li>

            <li class="d-block mb-4 ml-xl-2" id="service_offer_item9_09">

              <?php

                $service_offer_item9_09 = get_theme_mod( 'service_offer_item9_09' ) ? get_theme_mod( 'service_offer_item9_09' ) : false;

                if ( $service_offer_item9_09 ) {

                  echo esc_html( $service_offer_item9_09 );

                } else {

                  _e( 'Medical supplies', 'ldv' );
                }

              ?>

            </li>
          </ul>
        </div>
      </a>
    </div>
    <?php
  }

  function ldv_head_styles()
  {
    $about_page_option = get_option( 'ldv_about_pg' );
    $thumbnail_src_about = get_the_post_thumbnail_url( $about_page_option, 'large' );

    $home_page_option = get_option( 'ldv_home_pg' );
    $thumbnail_src_home = get_the_post_thumbnail_url( $home_page_option );

    // Courier section image
    $services_price_bg = get_theme_mod( 'ldv_service_price_bg' ) ? get_theme_mod( 'ldv_service_price_bg' ) : false;

    // Services page thumbnail
    $service_pg_ID = get_option( 'ldv_services_pg' );
    $service_thumb_url = get_the_post_thumbnail_url( $service_pg_ID, 'large' );

    // Service 01 page
    $service01_pg = get_the_post_thumbnail_url( get_option( 'ldv_service01' ) );

    // Service 02 page
    $service02_pg = get_the_post_thumbnail_url( get_option( 'ldv_service02' ) );

    // Service 03 page
    $service03_pg = get_the_post_thumbnail_url( get_option( 'ldv_service03' ) );

    ?>
      <!-- Lato font -->
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <style media="screen">

          .s-home {
            background-image: url( <?php echo $thumbnail_src_home ?> );
          }

          .s-our-courier {
            background-image: url( <?php echo $services_price_bg; ?> );
          }

          .s-about__img {
            background-image: url( <?php echo $thumbnail_src_about; ?> );
          }

          .s-solutions__img {
            background-image: url( <?php echo $service_thumb_url; ?> );
          }

          .s-solutions-specific-service-img {
            background-image: url( <?php echo $service01_pg; ?> );
          }

          .s-solutions-specific-service02-img {
            background-image: url( <?php echo $service02_pg; ?> );
          }

          .s-solutions-specific-service03-img  {
            background-image: url( <?php echo $service03_pg; ?> );
          }

      </style>
    <?php
  }

  function ldv_enqueue_scripts() {
      // Enqueue styles
    wp_register_style( 'ldv_bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css' );

    wp_register_style( 'ldv_iconmoon', get_template_directory_uri() . '/IcoMoon-Free/style.css' );

    // wp_register_style( 'ldv_slick_car', get_template_directory_uri() . '/slick-master/slick/slick.css' );

    // wp_register_style( 'ldv_slick_car_th', get_template_directory_uri() . '/slick-master/slick/slick-theme.css' );

    wp_enqueue_style( 'ldv_stylesheets', get_template_directory_uri() . '/style.css', array( 'ldv_bootstrap', 'ldv_iconmoon', ) );


    // Enqueue scripts

    // wp_register_script( 'ldv_popper', get_template_directory_uri() . '/bootstrap/site/docs/4.1/assets/js/vendor/popper.min.js' );

    wp_register_script( 'ldv_boot_js', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js' );

    // wp_register_script( 'ldv_slick_carousel_js', get_template_directory_uri() . '/slick-master/slick/slick.min.js' );

    wp_enqueue_script( 'ldv_scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery', 'ldv_boot_js', ) );
  }

  function ldv_setup_theme() {

    // Add woocommerce plugin support
    add_theme_support( 'woocommerce' );

    // Support html title tag
    add_theme_support( 'title-tag' );

    // Support rss feed
    add_theme_support( 'automatic-feed-links' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo', apply_filters( 'ldv_custom_logo_size', ldv_custom_logo_size() ) );

    // Support html5 features
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );

    // Indicate widget sidebars can use selective refresh in the Customizer.
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_post_type_support( 'page', 'excerpt' );

      // Add navigation menu
    register_nav_menu( 'ldv_main_menu', __( 'Header menu', 'ldv' ) );
    register_nav_menu( 'ldv_footer_menu', __( 'Footer menu', 'ldv' ) );


      $home_page_option = get_option( 'ldv_home_pg' );

 		  if ( false === $home_page_option ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $home_page_option_args =
 	          array(
 	            'post_title' => 'Your premium courier service',
              'post_excerpt' => 'A courier and same-day delivery service for businesses in Doral',
 	            'post_name' => 'ldv-home-pg',
 	            'post_content' => '',
 	            'post_status' => 'publish',
 	            'post_type' => 'page',
               // 'page_template' => 'inventory-template.php',
 	          );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_home_pg = wp_insert_post( $home_page_option_args, true );

 		      // we update an option with the page ID
 		      update_option( 'ldv_home_pg', $inserted_home_pg );
 		  }

      $services_page_option = get_option( 'ldv_services_pg' );

 		  if ( false === $services_page_option ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $services_page_option_args =
 	          array(
 	            'post_title' => 'Services',
              // 'post_excerpt' => "",
 	            'post_name' => 'ldv-services-pg',
 	            'post_excerpt' => __( "The time it takes to deliver is a fundamental component of the door to door service, which is why Your Local Delivery delivers your package to its destination fast, efficiently and for a reasonable price anywhere in Doral, FL. We understand that our clients need a delivery to take place at a specific time, that's the same-day delivery service that our company provides and guarantees. Our service saves you time and money in the delivery of documents, merchandise, payments or banking transactions, all within the same day.", 'ldv' ),
              'post_content' => "At Your Local Delivery, our same-day delivery services raise the bar in the door-to-door delivery service. We deliver items such as sensitive documents, bank runs, medications, printed materials, and more. Our business model has been designed to reach any number of businesses or individuals on the same day, anywhere in Miami-Dade County. In order to provide you with exceptional services, you can schedule your packages for pick up at specific times, daily or weekly. We always provide same-day delivery confirmation via email to our customers. For fast and efficient door-to-door delivery services, Your Local Delivery is your best solution.",
 	            'post_status' => 'publish',
 	            'post_type' => 'page',
               'page_template' => 'services-template.php',
 	          );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_service_pg = wp_insert_post( $services_page_option_args, true );

 		      // we update an option with the page ID
 		      update_option( 'ldv_services_pg', $inserted_service_pg );
 		  }

      // Service 01

      $service01_pg = get_option( 'ldv_service01' );

 		  if ( false === $service01_pg ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $service01_pg_args =
 	          array(
 	            'post_title' => 'Commercial & Industrial',
 	            'post_name' => 'ldv-service01',
              // Post excerpt
 	            'post_excerpt' => __( "Delivering commercial and industrial items to its destination has never been easier with Your Local Delivery. We can delivery any commercial or industrial items such as printed materials, branded products, equipment, vehicle parts, aviation parts, equipment and more. Any commercial business that needs their goods delivered anywhere in Doral, FL, we got you covered. We understand that a customer's impression of your business is at stake, that is why we deliver each and every package on time and with a smile! Our drivers are always neat, courteous, professional, and on time, every time.", 'ldv' ),
              // Post content
              'post_content' => "At Your Local Delivery, our same-day delivery services raise the bar in the door-to-door delivery service. We deliver items such as sensitive documents, bank runs, medications, printed materials, and more. Our business model has been designed to reach any number of businesses or individuals on the same day, anywhere in Miami-Dade County. In order to provide you with exceptional services, you can schedule your packages for pick up at specific times, daily or weekly. We always provide same-day delivery confirmation via email to our customers. For fast and efficient door-to-door delivery services, Your Local Delivery is your best solution.",
 	            'post_status' => 'publish',
 	            'post_type' => 'page',
               'page_template' => 'service01-template.php',
 	          );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_service01 = wp_insert_post( $service01_pg_args, true );

 		      // we update an option with the page ID
 		      update_option( 'ldv_service01', $inserted_service01 );
 		  }

      // Service 02

      $service02_pg = get_option( 'ldv_service02' );

 		  if ( false === $service02_pg ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $service02_pg_args =
 	          array(
 	            'post_title' => 'Business services',
 	            'post_name' => 'ldv-service02',
              // Post excerpt
 	            'post_excerpt' => __( "When you have a business to manage, worrying about your delivery service wastes valuable time and energy. Your Local Delivery's courier and same-day delivery solutions is reliable and professional, so you can be confident in the way your business is being represented. Our email confirmations give you peace of mind when you have important and confidential documents to be delivered. We are happy to serve Doral businesses and provide you with an invaluable experience. We understand that when it comes to your business, a fast delivery on time-sensitive documents are key to any business' success.", 'ldv' ),
              // Post content
              'post_content' => "At Your Local Delivery, our same-day delivery services raise the bar in the door-to-door delivery service. We deliver items such as sensitive documents, bank runs, contracts, legal documents and more. Our business model has been designed to reach any number of businesses or individuals on the same day, anywhere in Miami-Dade County. In order to provide you with exceptional services, you can schedule your packages for pick up at specific times, daily or weekly. We always provide same-day delivery confirmation via email to our customers. For fast and efficient same-day delivery services in Doral, Your Local Delivery is your best solution.",
 	            'post_status' => 'publish',
 	            'post_type' => 'page',
               'page_template' => 'service02-template.php',
 	          );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_service02 = wp_insert_post( $service02_pg_args, true );

 		      // we update an option with the page ID
 		      update_option( 'ldv_service02', $inserted_service02 );
 		  }

      // Service 02

      $service03_pg = get_option( 'ldv_service03' );

 		  if ( false === $service03_pg ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $service03_pg_args =
 	          array(
 	            'post_title' => 'Health services',
 	            'post_name' => 'ldv-service03',
              // Post excerpt
 	            'post_excerpt' => __( "When it comes to medical deliveries, we know how important it is to get a package from point A to point B. When you're off the clock, you shouldn't have to worry about your patients getting their potentially life-saving medications on-time and in pristine condition. Your Local Delivery specializes in the time-sensitive and climate-controlled delivery of medical and health care-related items. Our drivers are background-checked, HIPAA-compliant and uniformed for optimal security. Whether you need home infusions, specimens, oxygen tanks, or prescription medications delivered, Your Local Delivery is here to help. With delivery cars available for drop-off and pick-up throughout Doral, FL anytime.", 'ldv' ),
              // Post content
              'post_content' => "Represent the level of commitment you make to your patients and providers to experience with Your Local Delivery. We become the face of your company when you depend on us to deliver you package to any hospital or pharmacy in Miami-Dade County of Florida. Our uniformed, professional drivers take extra care when handling fragile surgical supplies, medical devices or medical records. You don't have to wonder or worry if your patient's medication made it to them on time. With Your Local Delivery, you will be notified via email the moment your package arrives to your patient. Our same-day delivery courier service allows you to focus on what matters most, your patients! Leave the rest to us.",
 	            'post_status' => 'publish',
 	            'post_type' => 'page',
               'page_template' => 'service03-template.php',
 	          );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_service03 = wp_insert_post( $service03_pg_args, true );

 		      // we update an option with the page ID
 		      update_option( 'ldv_service03', $inserted_service03 );
 		  }


      $about_page_option = get_option( 'ldv_about_pg' );

 		  if ( false === $about_page_option ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $about_page_option_args =
 	          array(
 	            'post_title' => 'About Your Local Delivery',
              'post_excerpt' => 'A courier and same-day delivery service for businesses in Doral',
 	            'post_name' => 'ldv-about-pg',
 	            'post_content' => __( "Your Local Delivery caters to local residents and businesses throughout Doral by providing same-day delivery services. We offer our customers a superior experience built on convenience, reliability and unmatched customer service. Through modern technology and trusted, professional delivery drivers, Your Local Delivery seamlessly becomes an extension of any business. From tracking and confirmations, transparent flat rate pricing, and flexible delivery options, Your Local Delivery offers businesses the same-day delivery solutions they need to satisfy customers and achieve their goals.", 'ldv' ),
 	            'post_status' => 'publish',
 	            'post_type' => 'page',
               // 'page_template' => 'inventory-template.php',
 	          );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_about_pg = wp_insert_post( $about_page_option_args, true );

 		      // we update an option with the page ID
 		      update_option( 'ldv_about_pg', $inserted_about_pg );
 		  }

      // $delivery_page_option = get_option( 'ldv_delivery_pg' );
      //
 		  // if ( false === $delivery_page_option ) { // if there is value
      //
 		  //   // In case that returns false we insert the page
      //
 		  //   /**
 		  //    * Array of arguments for the page
 		  //    *
 		  //    * @var array $main_product_args
 		  //    */
 		  //     $delivery_page_option_args =
 	    //       array(
 	    //         'post_title' => 'SAME-DAY DELIVERY SOLUTIONS FOR DORAL BUSINESSES',
      //         // 'post_excerpt' => 'A courier and same-day delivery service for businesses in Doral',
 	    //         'post_name' => 'ldv-delivery-pg',
 	    //         'post_content' => '',
 	    //         'post_status' => 'publish',
 	    //         'post_type' => 'page',
      //          // 'page_template' => 'inventory-template.php',
 	    //       );
      //
 		  //     /**
 		  //      * Page ID
 		  //      *
 		  //      * @var string $inserted_about_page
 		  //      */
 		  //     $inserted_delivery_pg = wp_insert_post( $delivery_page_option, true );
      //
 		  //     // we update an option with the page ID
 		  //     update_option( 'ldv_home_pg', $inserted_home_pg );
 		  // }

  }
