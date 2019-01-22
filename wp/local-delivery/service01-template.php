<?php
/**
* Template Name: Service 01 Template
*/
  get_header();
?>

  <section class="bg-primary">
    <div class="container grid-wrp justify-items-center position-relative">
    <h1 class="h1--fntsize-movile text-center text-white pb-5 pt-5 header-service-page font-bold mt-4">

      <?php
        // Page VISUAL title
        // $service01_title = get_theme_mod( 'service_offer_item1_tit', __( 'COMMERCIAL & INDUSTRIAL SAME-DAY DELIVERY', 'ldv' ) );
        global $post;

        $service01_title = get_field( 'visual_page_title_01' );

        if ( $service01_title ) {

          echo esc_html( $service01_title );

        } else {

          echo __( 'COMMERCIAL & INDUSTRIAL SAME-DAY DELIVERY', 'ldv' );
        }

      ?>
    </h1>

    <div class="position-relative foo">
      <div class="bg-primary--darker rounded-circle services-icon">
        <p class="text-center pt-1 services-icon-wrp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/commerical-u1556.png" class="mw-100 p-4" alt="">
        </p>
      </div>
    </div>
    </div>
  </section>
  <!-- End header -->

    <!-- Excerpt block -->
    <section class="container mt-5 pt-5">
    <div class="row">
      <p class="text-center pl-5 pr-5">
        <?php

            if( have_posts() ) {
              while ( have_posts() ) {
                the_post();

                  if ( get_the_excerpt() ) {

                    the_excerpt();

                  } else {

                    _e( "When you have a business to manage, worrying about your delivery service wastes valuable time and energy. Your Local Delivery's courier and same-day delivery solutions is reliable and professional, so you can be confident in the way your business is being represented. Our email confirmations give you peace of mind when you have important and confidential documents to be delivered. We are happy to serve Doral businesses and provide you with an invaluable experience. We understand that when it comes to your business, a fast delivery on time-sensitive documents are key to any business' success.", 'ldv' );
                  }
              }
            }

        ?>
      </p>
    </div>
  </section>


  <div class="container">
    <div class="row">
      <header class="mt-5 pt-3 w-100">
        <h2 class="text-center w-100">
          <?php

            $data_metabox = get_field( 'subtitle_page_01' );

            if ( $data_metabox ) {

              echo esc_html( $data_metabox );


            } else {

              _e( 'Commercial & Industrial Same-Day Delivery Services', 'ldv' );
            }

          ?>
        </h2>

        <p class="text-center mt-4 mb-5 pb-4 pr-5 pl-5">
          <?php

            if( have_posts() ) {
              while ( have_posts() ) {
                the_post();

                the_content();
              }
            } else {

              _e( 'Here are just a few examples of commercial & industrial-related items Your Local Delivery delivers.', 'ldv' );

            }

          ?>
        </p>
      </header>
<!--
      <p class="text-center w-100 mt-5">
        <a href="" class="btn btn-primary btn-primary--m pl-4 pr-4 pt-2 font-semibold">
          <?php
            #_e( 'FIND OUT MORE', 'ldv' );
          ?>
        </a>
      </p> -->

      <div class="col-8 ml-auto mr-auto col-md-6 pb-3">
        <a href="https://on-digital.github.io/your-local-delivery/specific-service.html" class="text-dark">
          <div class="bg-gray text-center pb-1">
            <!-- <a href=""> -->
              <div class="d-inline-block mb-3 services-icon-line border border-gray border-top-0 border-bottom-xl-0 border-left-0 border-right-services pr-xl-5">
                  <img src="<?php echo get_template_directory_uri() ;?>/img/printing-icon.png" class="pt-4" alt="">

                  <p class="mt-2">
                    <?php echo _e( 'PRINT SHOPS &', 'ldv' ); ?>
                    <span class="d-block">
                      <?php _e( 'MANUFACTURERS', 'ldv' ); ?>
                    </span>
                  </p>
              </div>

              <ul class="d-xl-inline-block pl-lg-4 list-styling-bullets list-services">
                <?php

                  // $service_offer_item1_01 = get_theme_mod( 'service_offer_item1_01' ) ? get_theme_mod( 'service_offer_item1_01' ) : false;

                ?>
                <li class="d-block mt-xl-5 ml-xl-2">

                  <?php
                    // if ( $service_offer_item1_01 ) {
                    //
                    //   echo esc_html( $service_offer_item1_01 );

                    // } else {

                      _e( 'Printed materials', 'ldv' );
                    // }
                  ?>

                </li>

                <li class="d-block ml-xl-2">

                  <?php

                    // $service_offer_item2_02 = get_theme_mod( 'service_offer_item2_02' ) ? get_theme_mod( 'service_offer_item2_02' ) : false;

                    _e( 'Branded Products', 'ldv' );

                  ?>
                </li>

                <li class="d-block mb-4 ml-xl-2">
                  <?php
                    _e( 'Equipment', 'ldv' );
                  ?>
                </li>
              </ul>
          </div>
        </a>
      </div>

      <div class="col-8 ml-auto mr-auto col-md-6 pb-3">
        <a href="https://on-digital.github.io/your-local-delivery/specific-service.html" class="text-dark">
          <div class="bg-gray text-center pb-1">
            <div class="d-inline-block mb-3 services-icon-line border border-gray border-top-0 border-bottom-xl-0 border-left-0 border-right-services pr-xl-5">
              <img src="<?php echo get_template_directory_uri(); ?>/img/car-icon-u1597.png" class="pt-4" alt="">

              <p class="mt-2 font-uppercase">
                <?php _e( 'TRANSPORTATION', 'ldv' ); ?>
                <span class="d-block">
                  <?php _e( 'INDUSTRY', 'ldv' ); ?>
                </span>
              </p>
            </div>

            <ul class="d-xl-inline-block pl-lg-4 list-styling-bullets list-services">

              <?php

                 // $service_offer_item4_04 = get_theme_mod( 'service_offer_item4_04' ) ? get_theme_mod( 'service_offer_item4_04' ) : false;

              ?>
              <li class="d-block mt-xl-5 ml-xl-2">

                <?php
                  // if ( $service_offer_item4_04 ) {
                  //
                  //   echo esc_html( $service_offer_item4_04 );
                  // } else {

                    _e( 'Vehicle parts', 'ldv' );
                  // }

                ?>

              </li>

              <li class="d-block ml-xl-2">
                <?php

                  // $service_offer_item5_05 = get_theme_mod( 'service_offer_item5_05' ) ? get_theme_mod( 'service_offer_item5_05' ) : false;
                  //
                  // if ( $service_offer_item5_05 ) {
                  //
                  //   echo esc_html( $service_offer_item5_05 );
                  //
                  // } else {

                    _e( 'Aviation Parts', 'ldv' );
                  // }


                ?>
              </li>

              <li class="d-block mb-4 ml-xl-2">
                <?php

                  // $service_offer_item6_06 = get_theme_mod( 'service_offer_item6_06' ) ? get_theme_mod( 'service_offer_item6_06' ) : false;
                  //
                  // if ( $service_offer_item6_06 ) {
                  //
                  //   echo esc_html( $service_offer_item6_06 );
                  //
                  // } else {

                    _e( 'Equipment', 'ldv' );
                  // }

                ?>

              </li>
            </ul>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Post content block section -->
  <section class="grid-wrp s-solutions whole-12cols mt-5">
    <div class="s-solutions__img s-solutions-specific-service-img background-no-repeat-cover"></div>

    <div class="bg-primary s-solutions-specific-service-descrip text-white">
      <header class="col-12 col-sm-10 col-lg-8 mr-auto ml-auto ml-xl-0 mr-4 mt-4 p-5 text-center text-sm-left">
        <h2 class="text-white">
          <?php

            $visual_title_content01 = get_field( 'image_and_content_section_01' ) ? get_field( 'image_and_content_section_01' ) : false;

            if ( $visual_title_content01 ) {

              $middle = strrpos( substr( $visual_title_content01, 0, floor( strlen( $visual_title_content01 ) / 2 ) ), ' ' ) + 1;

              $title_delivery1 = substr( $visual_title_content01, 0, $middle );  // "The Quick : Brown Fox "
              $title_delivery2 = substr( $visual_title_content01, $middle );  // "Jumped Over The Lazy / Dog"

              echo '<span class="font-bold">' . sprintf( __( '%s', 'ldv' ), $title_delivery1 ) . '</span>' .

              '<span class="text-white d-block">' . sprintf( __( '%s', 'ldv' ), $title_delivery2 ) . '</span>';

            } else { ?>

              <span class="font-bold"><?php _e( 'SAME-DAY DELIVERY SOLUTIONS', 'ldv' ); ?></span>
              <span class="text-white d-block"><?php _e( 'FOR DORAL BUSINESSES' ); ?></span>

            <?php }

          ?>
        </h2>

        <p class="text-white">
          <?php

            if( have_posts() ) {
              while ( have_posts() ) {
                the_post();

                the_content();

              }
            } else {

              _e( 'At Your Local Delivery, our same-day delivery services raise the bar in the door-to-door delivery service. We deliver items such as sensitive documents, bank runs, medications, printed materials, and more. Our business model has been designed to reach any number of businesses or individuals on the same day, anywhere in Miami-Dade County. In order to provide you with exceptional services, you can schedule your packages for pick up at specific times, daily or weekly. We always provide same-day delivery confirmation via email to our customers. For fast and efficient door-to-door delivery services, Your Local Delivery is your best solution.' );

            }

          ?>
        </p>
      </header>
    </div>
  </section>

  <section class="container mt-5 pt-5">
    <div class="row">
      <div class="col-10 ml-auto mr-auto col-xl-6 mb-5 text-center text-sm-left">
        <span class="d-inline-block mb-2 mb-sm-0">
          <img src="<?php echo get_template_directory_uri(); ?>/img/security-icon-u1301.png" alt="">
        </span>

        <span class="d-inline-block ml-sm-2 font-bold font-uppercase">
          <?php

            $first_txt_title_01 = get_field( 'first_item_title_01' );

            if ( $first_txt_title_01 ) {

               echo esc_html( $first_txt_title_01 );

            } else {

              _e( 'SECURITY AND RELIABILITY', 'ldv' );
            }
          ?>
        </span>

        <p class="ml-sm-5">
          <?php
            $first_txt_content_01 = get_field( 'first_text_content_item_01' );

            if ( $first_txt_content_01 ) {

              echo esc_html( $first_txt_content_01 );

            } else {

              _e( 'Your Local Delivery has extensive experience in the delivery of sensitive and confidential business documents. Our drivers are uniformed, background-checked and insured, with extensive customer service experience. Once your order has been delivered, you will receive a photo confirmation of your delivery at its destination via email.', 'ldv' );
            }

          ?>
        </p>
      </div>

      <div class="col-10 ml-auto mr-auto col-xl-6 text-center text-sm-left">
        <span class="d-inline-block mb-2 mb-sm-0">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hand-heart-u1309.png" alt="">
        </span>

        <span class="d-inline-block ml-sm-2 font-bold font-uppercase">
          <?php

            $second_txt_title_01 = get_field( 'second_item_title_01' ) ? get_field( 'second_item_title_01' ) : false;

            if ( $second_txt_title_01 ) {

              echo esc_html( $second_txt_title_01 );

            } else {

              _e( 'SERVICE WITH A PASSION', 'ldv' );
            }

          ?>
        </span>

        <p class="ml-sm-5">
          <?php

              $second_txt_content_02 = get_field( 'second_content_item_01' ) ? get_field( 'second_content_item_01' ) : false;

              if ( $second_txt_content_02 ) {

                echo esc_html( $second_txt_content_02 );

              } else {

                _e( 'Our experienced dispatch team will route your deliveries in the most efficient way possible and our customer service team is on standby to answer your questions. Have a pallet of printed materials or a large part that needs delivery? We transport items in large and small vans to accommodate all of your commercial and industrial delivery needs.', 'ldv' );
              }

          ?>
        </p>
      </div>
    </div>
  </section>

<?php
  get_footer();
