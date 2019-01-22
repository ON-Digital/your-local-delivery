<?php
/**
* Template Name: Service 02 Template
*/
  get_header();
?>

  <section class="bg-primary">
    <div class="container grid-wrp justify-items-center position-relative">
    <h1 class="h1--fntsize-movile text-center text-white pb-5 pt-5 header-service-page font-bold mt-4">
      <?php

        $service02_title = get_field( 'visual_page_title_02' ) ? get_field( 'visual_page_title_02' ) : __( 'BUSINESS SERVICES SAME-DAY DELIVERY', 'ldv' );

        if ( $service02_title ) {

          echo esc_html( $service02_title );

        } else {

          echo __( 'BUSINESS SERVICES SAME-DAY DELIVERY', 'ldv' );
        }

      ?>
    </h1>

    <div class="position-relative foo">
      <div class="bg-primary--darker rounded-circle services-icon">
        <p class="text-center pt-1 services-icon-wrp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/business-icon-u1454.png" class="mw-100 p-4" alt="">
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

  <section class="container mt-5 pt-5">
    <div class="row">
      <div class="col-10 ml-auto mr-auto col-xl-6 mb-5 text-center text-sm-left">
        <span class="d-inline-block mb-2 mb-sm-0">
          <img src="<?php echo get_template_directory_uri(); ?>/img/security-icon-u1301.png" alt="">
        </span>

        <span class="d-inline-block ml-sm-2 font-bold font-uppercase">
          <?php

            $fist_item_tite02 = get_field( 'first_item_title_02' ) ? get_field( 'first_item_title_02' ) : 'SECURITY AND RELIABILITY';

            echo esc_html( $fist_item_tite02 );

          ?>

        </span>

        <p class="ml-sm-5">
          <?php
              $info_cnt1 = get_field( 'first_text_content_item_02' );

              if ( $info_cnt1 ) {

                echo esc_html( $info_cnt1 );

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

            $title2_info_cnt =  get_field( 'second_title_item_02' ) ? get_field( 'second_title_item_02' ) : __( 'WE CARE ABOUT MIAMI BUSINESSES', 'ldv' );

            if ( $title2_info_cnt ) {

              echo esc_html( $title2_info_cnt );

            } else {

              _e( 'WE CARE ABOUT MIAMI BUSINESSES', 'ldv' );
            }


          ?>
        </span>

        <p class="ml-sm-5">
          <?php

            $info_cnt2 = get_field( 'second_text_content_item_02' );

            if ( $info_cnt2 ) {

              echo esc_html( $info_cnt2 );

            } else {

              _e( 'Our experienced dispatch team will route your deliveries in the most efficient way possible and our customer service team is on standby to answer your questions. Have a pallet of printed materials or a large part that needs delivery? We transport items in large and small vans to accommodate all of your commercial and industrial delivery needs.', 'ldv' );
            }
          ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Post content block section -->
  <section class="grid-wrp s-solutions whole-12cols mt-5">
    <div class="s-solutions__img s-solutions-specific-service02-img background-no-repeat-cover"></div>

    <div class="bg-primary s-solutions-specific-service-descrip text-white">
      <header class="col-12 col-sm-10 col-lg-8 mr-auto ml-auto ml-xl-0 mr-4 mt-4 p-5 text-center text-sm-left">
        <h2 class="text-white">

          <?php
             // global $post;

             $title_delivery_solutions = get_field( 'content_image_section_02' ) ? get_field( 'content_image_section_02' ) : false ;

             if ( $title_delivery_solutions ) {

               $middle = strrpos( substr( $title_delivery_solutions, 0, floor( strlen( $title_delivery_solutions ) / 2 ) ), ' ' ) + 1;

               $title_delivery1 = substr( $title_delivery_solutions, 0, $middle );  // "The Quick : Brown Fox "
               $title_delivery2 = substr( $title_delivery_solutions, $middle );  // "Jumped Over The Lazy / Dog"
               ?>

               <span class="font-bold">
                 <?php echo esc_html( $title_delivery1 ); ?>
                 <!-- SAME-DAY DELIVERY SOLUTIONS -->
               </span>

               <span class="text-primary d-block"><?php echo esc_html( $title_delivery2 ); ?></span>
               <?php

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

<?php
  get_footer();
