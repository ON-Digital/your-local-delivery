<?php
  /**
  * Template Name: Services Template
  */
  get_header();
 ?>
   <section class="bg-primary">
     <div class="container grid-wrp justify-items-center position-relative">
       <h1 class="h1--fntsize-movile text-center text-white pb-5 pt-5 header-service-page font-bold mt-4">
         <?php

            $service_offer_item1_tit = get_field( 'visual_page_title_main' ) ? get_field( 'visual_page_title_main' ) : false;

            if ( $service_offer_item1_tit ) {

              echo esc_html( $service_offer_item1_tit );

            } else {

              _e( 'DOOR-TO-DOOR DELIVERY SERVICE', 'ldv' );
            }
         ?>
       </h1>

       <div class="position-relative foo">
         <div class="bg-primary--darker rounded-circle services-icon">
           <p class="text-center pt-1 services-icon-wrp">
             <img src="<?php echo get_template_directory_uri(); ?>/img/delivery-icon-u1155.png" class="mw-100 p-4" alt="">
           </p>
         </div>
       </div>
     </div>
   </section>

   <section class="container mt-5 pt-5">
     <div class="row">
       <p class="text-center pl-5 pr-5">
         <?php

          if( have_posts() ) {
            while ( have_posts() ) {
              the_post();

              the_excerpt();
            }
          } else {
            /* No posts found */
          }

         ?>
       </p>
     </div>
   </section>

   <section class="s-services container-fluid">
     <div class="row">
       <?php
         // Header services action hook
         do_action( 'ldv_header_delivery_services' );

         // Services action hook
         do_action( 'ldv_services_output' );
       ?>

       <p class="text-center w-100 mt-5">
         <a href="" class="btn btn-primary btn-primary--m pl-4 pr-4 pt-2 font-semibold">
           <?php _e( 'FIND OUT MORE', 'ldv' ); ?>
         </a>
       </p>
     </div>
   </section>

   <section class="grid-wrp s-solutions whole-12cols mt-5">
     <div class="bg-gray s-solutions__descrip">
       <header class="col-12 col-sm-10 col-lg-8 mr-auto ml-auto mr-4 mt-4 p-5 text-center text-sm-left">
         <h2 class="">
           <?php
              global $post;

              $title_delivery_solutions = get_field( 'image_and_content_section_main' );

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
              }

           ?>
         </h2>

         <p class="">
           <?php

            if( have_posts() ) {
              while ( have_posts() ) {
                the_post();

                the_content();
              }
            } else {

                _e( 'At Your Local Delivery, our same-day delivery services raise the bar in the door-to-door delivery service. We deliver items such as sensitive documents, bank runs, medications, printed materials, and more. Our business model has been designed to reach any number of businesses or individuals on the same day, anywhere in Miami-Dade County. In order to provide you with exceptional services, you can schedule your packages for pick up at specific times, daily or weekly. We always provide same-day delivery confirmation via email to our customers. For fast and efficient door-to-door delivery services, Your Local Delivery is your best solution.', 'ldv' );
            }

           ?>

         </p>
       </header>
     </div>

     <div class="s-solutions__img background-no-repeat-cover" style="background-position: center center !important;"></div>
   </section>

   <?php
    // Action hook for services info content
    // do_action( 'ldv_pages_info', 'services-page' );
    ?>
  <section class="container mt-5 pt-5">
    <div class="row">
      <div class="col-10 ml-auto mr-auto col-xl-6 mb-5 text-center text-sm-left">
        <span class="d-inline-block mb-2 mb-sm-0">
          <img src="<?php echo get_template_directory_uri(); ?>/img/security-icon-u1301.png" alt="">
        </span>

        <span class="d-inline-block ml-sm-2 font-bold font-uppercase">
          <?php
            global $post;

            $title1_info_cnt = get_field( 'first_item_title_main' );

              // If it is true, we echo it
              if ( $title1_info_cnt ) {

                echo esc_html( $title1_info_cnt );

              } else {

                  _e( 'SECURITY AND RELIABILITY', 'ldv' );

              }

          ?>

        </span>

        <p class="ml-sm-5">
          <?php

            $info_cnt1 = get_field( 'first_text_content_item_main' );

              // If it is true, we echo it
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


            $title2_info_cnt = get_field( 'second_item_title_main' );

              // If it is true, we echo it
              if ( $title2_info_cnt ) {

                echo esc_html( $title2_info_cnt );

              } else {  // default value in other case

                echo esc_html( 'WE CARE ABOUT DORAL BUSINESSES', 'ldv' );

              }

          ?>
        </span>

        <p class="ml-sm-5">
          <?php
              $info_cnt2 = get_field( 'second_content_item_main' );

              // If it is true, we echo it
              if ( $info_cnt2 ) {

                echo esc_html( $info_cnt2 );

              } else {  // default value in other case

                _e( 'Our experienced dispatch team will route your deliveries in the most efficient way possible and your dedicated customer service team is always just a phone call away. Your Local Delivery operates 9am to 9pm because we know that your time-sensitve business delivery needs can arise any time. We offer extended hours if necessary to satisfy your needs.', 'ldv' );
              }
          ?>
        </p>
      </div>
    </div>
  </section>

   <section class="bg-primary container-mg-t">
     <div class="container pt-3">
       <div class="row">
         <div class="col-12 mr-auto mr-lg-0 col-lg-5 ml-auto text-center">
           <h2 class="text-white mt-4 pt-4">
             <?php

                _e( "Don't waste time and money!" );

             ?>
           </h2>

           <p class="text-white pb-3">
             <?php _e( 'Increase your productivity at home or work by leaving your local deliveries to us', 'ldv' ); ?>
           </p>
         </div>

         <div class="col-6 d-none d-sm-block col-lg-3 mr-auto ml-auto mt-5 mt-lg-0 text-right">
           <img src="<?php echo get_template_directory_uri(); ?>/img/woman-support.png" class="mw-100 img-contact" alt="">
         </div>

         <div class="col-12 col-sm-6 col-lg-3 mr-auto mt-sm-5 mt-lg-0 text-center text-sm-left">
           <a href="" class="btn btn-lg p-3 border border-white border-wide text-white mt-5  font-bold btn-primary--m mb-5 mb-sm-0">
             <?php _e( 'Contact us', 'ldv' ); ?>
           </a>
         </div>
       </div>
     </div>
   </section>

 <?php
  get_footer();
