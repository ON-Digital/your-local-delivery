<?php get_header(); ?>


  <div class="s-home bg-image-height background-no-repeat-cover grid-wrp align-items-center bg-dark-layer">
    <div>
      <?php
        $home_page_option = get_option( 'ldv_home_pg' );

      ?>
      <h1 class="text-center text-white font-3rem font-uppercase h1--fntsize-movile">
        <?php
          echo esc_html( get_the_title() );
        ?>
      </h1>

      <p class="text-center text-white font-semibold s-home__descrip">
        <?php
          echo esc_html( get_the_excerpt() );
        ?>
      </p>

      <p class="text-center w-100 mt-4">
        <a href="" class="btn btn-primary p-3 btn-primary--m font-semibold">
          <?php _e( 'GET STARTED', 'ldv' ); ?>
        </a>
      </p>
    </div>
  </div>

  <section class="s-how-to container mt-5">
    <div class="row">
      <h2 class="text-center w-100 mb-5" id="ldv_how_work">
        <?php
          $title_how_work = get_theme_mod( 'ldv_how_work', 'How it works' ) ? get_theme_mod( 'ldv_how_work', 'How it works' ) : 'How it works';

          echo esc_html( $title_how_work );
        ?>
      </h2>

      <div class="col-8 ml-auto mr-auto col-md-4 grid-wrp justify-items-center mt-2">
        <div class="border border-wide border-primary p-4 rounded-circle text-center s-how-to__box">

          <img src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.png" alt="">

        </div>

        <h3 class="text-center mt-3 text-primary">
          <?php

            $how_work_01 = get_theme_mod( 'how_work_01' ) ? get_theme_mod( 'how_work_01' ) : '';

            if ( $how_work_01 ) {

              echo esc_html( $how_work_01 );

            } else {
              _e( 'Call us to get started', 'ldv' );
            }

          ?>
        </h3>

        <p class="text-center">
          <?php

            $how_work_01_cnt = get_theme_mod( 'how_work_01_cnt' ) ? get_theme_mod( 'how_work_01_cnt' ) : false;

            if ( $how_work_01_cnt ) {

              echo esc_html( $how_work_01_cnt );

            } else {

              _e( 'Give us a ring to begin your local delivery. At the office, home or on the go. Get upfront pricing and arrival times.', 'ldv' );

            }
          ?>
        </p>
      </div>

      <div class="col-8 ml-auto mr-auto col-md-4 grid-wrp justify-items-center mt-2">
        <div class="border border-wide border-primary p-4 rounded-circle text-center s-how-to__box">

          <img src="<?php echo get_template_directory_uri(); ?>/img/1080 logo-crop-u2715.png" alt="">

        </div>

        <h3 class="text-center mt-3 text-primary">
          <?php

            $how_work_02 = get_theme_mod( 'how_work_02' ) ? get_theme_mod( 'how_work_02' ) : false;

            if ( $how_work_02 ) {

              echo esc_html( $how_work_02 );

            } else {

              _e( 'Driver Arrives for Pickup', 'ldv' );
            }
          ?>
        </h3>

        <p class="text-center">
          <?php

            $how_work_02_cnt = get_theme_mod( 'how_work_02_cnt' ) ? get_theme_mod( 'how_work_02_cnt' ) : false;

            if ( $how_work_02_cnt ) {

              echo esc_html( $how_work_02_cnt );

            } else {

              _e( 'Driver arrives at your location to pickup your package. Delivery info will be received at this time.', 'ldv' );
            }
          ?>
        </p>
      </div>

      <div class="col-8 ml-auto mr-auto col-md-4 grid-wrp justify-items-center mt-2">
        <div class="border border-wide border-primary p-4 rounded-circle text-center s-how-to__box">

          <img src="<?php echo get_template_directory_uri(); ?>/img/package-delivered-512-u288.png" alt="">

        </div>

        <h3 class="text-center mt-3 text-primary">
          <?php

            $how_work_03 = get_theme_mod( 'how_work_03' ) ? get_theme_mod( 'how_work_03' ) : false;

            if ( $how_work_03 ) {

              echo esc_html( $how_work_03 );

            } else {

              _e( 'Delivered and Confirmed' );
            }
          ?>
        </h3>

        <p class="text-center">
          <?php

          $how_work03_cnt = get_theme_mod( 'how_work_03_cnt' ) ? get_theme_mod( 'how_work_03_cnt' ) : false;

            if ( $how_work03_cnt ) {

              echo esc_html( $how_work03_cnt );

            } else {

              _e( 'Give us a ring to begin your local delivery. At the office, home or on the go. Get upfront pricing and arrival times.', 'ldv' );
            }

          ?>
        </p>
      </div>
    </div>
  </section>

  <section class="s-our-courier background-no-repeat-cover container-mg-t bg-dark-layer pb-5">
    <div class="container pt-5">
      <h2 class="text-center text-white w-100 font-semibold">
        <?php
          $services_price_tit = get_theme_mod( 'ldv_service_price' ) ? get_theme_mod( 'ldv_service_price' ) : false;

          if ( $services_price_tit ) {

            echo esc_html( $services_price_tit );

          } else {

            _e( 'Our Courier Service Prices', 'ldv' );
          }
        ?>
      </h2>

      <div class="row">
        <div class="col-8 mr-auto mr-md-4 col-md-3 ml-auto mt-2 text-center">
          <div class="border border-white border-wide mt-3 pb-4">
            <h3 class="text-center mt-4 text-white s-our-courier__subti font-semibold">

              <?php
                $services_price_tit01 = get_theme_mod( 'service_price_tit01' ) ? get_theme_mod( 'service_price_tit01' ) : false;

                $services_price_number = get_theme_mod( 'service_price_number' ) ? get_theme_mod( 'service_price_number' ) : false;

                if ( $services_price_tit01 ) {

                  echo esc_html( $services_price_tit01 );

                } else {

                  _e( 'FLAT RATE', 'ldv' );
                }

              ?>
            </h3>
            <span class="d-block text-primary courier-amount">

              <?php

                if ( $services_price_number ) {

                  echo esc_html( $services_price_number );

                } else {

                  echo '20$';

                }

              ?>

            </span>
          </div>
        </div>

        <div class="col-8 ml-auto ml-md-4 col-md-3 mr-auto mt-2 text-center">
          <div class="border border-wide border-white mt-3 pb-4">
            <h3 class="text-center mt-4 text-white s-our-courier__subti font-semibold">
              <?php

                $services_price_tit02 = get_theme_mod( 'service_price_tit02' ) ? get_theme_mod( 'service_price_tit02' ) : false;

                $services_price_number02 = get_theme_mod( 'service_price_number02' ) ? get_theme_mod( 'service_price_number02' ) : false;

                if ( $services_price_tit02 ) {

                  echo esc_html( $services_price_tit02 );

                } else {

                  echo 'FLAT RATE';
                }
              ?>
            </h3>
            <span class="d-block text-primary courier-amount">

              <?php

                if ( $services_price_number02 ) {

                  echo esc_html( $services_price_number02 );

                } else {

                  echo '20$';

                }

              ?>

            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s-services container-fluid">
    <div class="row">
      <header class="mt-5 pt-3 w-100">
        <h2 class="text-center w-100">
          <?php

            $service_offer_tit = get_theme_mod( 'ldv_service_offer_tit' ) ? get_theme_mod( 'ldv_service_offer_tit' ) : false;

            if ( $service_offer_tit ) {

              echo esc_html( $service_offer_tit );

            } else {

              _e( 'Local Delivery Services for Your Business', 'ldv' );
            }

          ?>
        </h2>

        <p class="text-center mt-4 mb-5 pb-4 pr-5 pl-5">
          <?php

            $service_offer_excerpt = get_theme_mod( 'ldv_service_excerpt' ) ? get_theme_mod( 'ldv_service_excerpt' ) : false;

            if ( $service_offer_excerpt ) {

              echo esc_html( $service_offer_excerpt );

            } else {

              _e( 'Your Local Delivery serves businesses in a wide variety of industries. Here are some examples of items we can deliver for you.', 'ldv' );
            }

          ?>
        </p>
      </header>

      <?php
        // Header services action hook
        // do_action( 'ldv_header_delivery_services' );

        // Services action hook
        do_action( 'ldv_services_output' );
      ?>

      <p class="text-center w-100 mt-5">
        <a href="" class="btn btn-primary btn-primary--m pl-4 pr-4 pt-2 font-semibold">
          <?php
            _e( 'FIND OUT MORE', 'ldv' );
          ?>
        </a>
      </p>
    </div>
  </section>

  <div class="s-about grid-wrp whole-12cols mt-5" id="s_about">

  <?php
    $about_page_option = get_option( 'ldv_about_pg' );

    $args_about =
      array(
          'page_id' => $about_page_option,
      );

      $about_pg_query = new WP_Query( $args_about );

      if( $about_pg_query->have_posts() ) {
        while ( $about_pg_query->have_posts() ) {
          $about_pg_query->the_post();
            ?>
            <div class="s-about__img h-25rem background-no-repeat-cover"></div>

            <div class="bg-primary s-about__txt pb-4">

              <h2 class="text-white ml-5 mt-5">
                <?php
                  echo esc_html( get_the_title() );
                ?>
              </h2>

              <p class="text-white ml-5 w-75">
                <?php
                  the_content();

                ?>
              </p>
            </div>
          <?php
        }
      } else {
        /* No posts found */
      }

      wp_reset_postdata();

    ?>
  </div>

  <div class="s-contact container mt-5 mb-5" id="s_contact">
    <div class="row no-gutters">
      <h2 class="w-100 text-center position-relative grid-wrp justify-items-center">
        <span class="d-block contact-icon bg-primary rounded-circle p-3 justify-self-center ml-auto mr-auto mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/delivery-icon-u1155.png" class="pt-1" alt="">
        </span>

          <?php _e( "Let's Get Started", 'ldv' ); ?>
      </h2>

      <p class="text-center mt-1">
        <?php _e( "Find out how Your Local Delivery can solve your business' same-day delivery challenges with our fast and local delivery, flexible delivery options, flat rate pricing and email confirmations.", 'ldv' ); ?>
      </p>
    </div>

    <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" class="row no-gutters mt-3">
      <?php wp_nonce_field( 'ldv_form_action', 'ldv_form_nonce' ); ?>

      <div class="col-10 col-md-5 ml-auto mr-auto mr-md-0 d-table mb-3">
        <label for="" class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m rounded-0" placeholder="First and last name" name="ldv_name" id="ldv_name" required>
        </label>
      </div>

      <div class="col-10 col-md-5 ml-auto ml-md-5 mr-auto d-table mb-3">
        <label for="" class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m rounded-0" placeholder="Email" id="ldv_email" name="ldv_email" required>
        </label>
      </div>

      <div class="col-10 col-md-5 ml-auto mr-auto mr-md-0 d-table mb-3">
        <label for="" class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m rounded-0 mt-md-3" placeholder="Phone Number" id="ldv_phone" name="ldv_phone" required>
        </label>
      </div>

      <div class="col-10 col-md-5 ml-auto ml-md-5 mr-auto d-table mb-3">
        <label for="" class="d-table-cell">
          <input type="text" class="form-control form-control-lg form-control--m rounded-0 mt-md-3" placeholder="Company" id="ldv_company" name="ldv_company" required>
        </label>
      </div>

      <div class="col-10 col-md-5 ml-auto mr-auto">
        <h3 class="text-primary text-center mr-md-4 mt-5">
          <?php _e( 'How many deliveries per week?', 'ldv' ); ?>
        </h3>
      </div>

      <div class="col-10 col-md-5 ml-auto mr-auto text-center text-md-left">
        <?php
          $index_array = isset( $_POST['ldv_frecquency'] ) ? $_POST['ldv_frecquency'] : 0;
        ?>

        <p class="mt-4">
          <label for="" class="ml-2 input-480media">
            <input type="radio" id="ldv_once_frecquency" name="ldv_frecquency" value="1" <?php echo checked( $index_array, 1 ); ?> required>

            <span class="ml-md-1">
              <?php _e( 'Just this once', 'ldv' ); ?>
            </span>
          </label>

          <label for="" class="ml-2 ml-md-4 input-480media">
            <input type="radio" id="ldv_1_week_frecquency" name="ldv_frecquency" value="2" <?php echo checked( $index_array, 2 ); ?> required>

            <span class="ml-md-1">
              <?php _e( '1 per week', 'ldv' ); ?>
            </span>
          </label>
        </p>

        <p class="">
          <label for="">
            <input type="radio" id="ldv_2_week_frecquency" name="ldv_frecquency" value="3" <?php echo checked( $index_array, 3 ); ?> required>

            <span class="ml-md-1">
              <?php _e( '2-9 per week', 'ldv' ); ?>
            </span>
          </label>

          <label for="">
            <input type="radio" class="ml-2 ml-md-5" id="ldv_10_week_frecquency" name="ldv_frecquency" value="4" <?php echo checked( $index_array, 4 ); ?> required>
            <span class="ml-md-1">
              <?php _e( '10+ per week', 'ldv' ); ?>
            </span>
          </label>
        </p>
      </div>

      <div class="col-10 d-table ml-auto mr-auto mt-4 d-table">
        <!-- <label for="" class="d-table-cell"> -->
          <!-- <input type="text" class="form-control form-control--m"> -->
        <textarea name="name" rows="4" cols="68" class="form-control--m d-table-cell c-textarea-comments w-100 pl-3 pt-2" placeholder="Tell us about your delivery needs" id="ldv_message" name="ldv_message" required></textarea>
        <!-- </label> -->

        <input type="submit" class="btn btn-primary btn-primary--m rounded-0 form-control mt-1 w-100 font-semibold font-uppercase" value="LET'S GET STARTED" id="ldv_submit_btn" name="ldv_submit_btn">

      </div>
    </form>
  </div>
  <?php
  // if data is submitted we call the filter callback that handle that data, send the mail and display a message that indicate the status of the operation
   if ( isset( $_POST['ldv_submit_btn'] ) )
   {
     $name_user = $_POST['ldv_name'];
     $email_user = $_POST['ldv_email'];
     $number_user = $_POST['ldv_phone'];
     $company = $_POST['ldv_company'];
     $frecquency_deliveries = $_POST['ldv_frecquency'];
     $message = $_POST['ldv_message'];

     if ( ! empty( $name_user ) && ! empty( $email_user ) && ! empty( $number_user ) && ! empty ( $message ) && ! empty ( $frecquency_deliveries ) && ! empty ( $company ) ) {

       echo apply_filters( 'ldv_contact_form_data_filter', ldv_contact_form_data_filter( $name_user, $email_user, $number_user, $message, $frecquency_deliveries, $company ) );

     } else {

       $die_message = '<h3 class="text-center mt-3 text-primary">' . __( 'Lo siento, pero todos los campos son requeridos', 'ldv' ) . '</h3>';

       wp_die( $die_message );
     }
   }

  get_footer();
