<?php
  /**
  * Template Name: Service 03 Template
  */
  wp_head();
 ?>
 <section class="bg-primary">
   <div class="container grid-wrp justify-items-center position-relative">
   <h1 class="h1--fntsize-movile text-center text-white pb-5 pt-5 header-service-page font-bold mt-4">
     <?php

       $service03_title = get_field( 'visual_page_title_03' ) ? get_field( 'visual_page_title_03' ) : __( 'HEALTHCARE & MEDICAL SAME-DAY DELIVERY', 'ldv' );

       if ( $service03_title ) {

         echo esc_html( $service03_title );

       } else {

         echo __( 'HEALTHCARE & MEDICAL SAME-DAY DELIVERY', 'ldv' );
       }

     ?>
   </h1>

   <div class="position-relative foo">
     <div class="bg-primary--darker rounded-circle services-icon">
       <p class="text-center pt-1 services-icon-wrp">
         <img src="<?php echo get_template_directory_uri(); ?>/img/health-care-icon-u1716.png" class="mw-100 p-4" alt="">
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

             _e( "When it comes to medical deliveries, we know how important it is to get a package from point A to point B. When you're off the clock, you shouldn't have to worry about your patients getting their potentially life-saving medications on-time and in pristine condition. Your Local Delivery specializes in the time-sensitive and climate-controlled delivery of medical and health care-related items. Our drivers are background-checked, HIPAA-compliant and uniformed for optimal security. Whether you need home infusions, specimens, oxygen tanks, or prescription medications delivered, Your Local Delivery is here to help. With delivery cars available for drop-off and pick-up throughout Doral, FL anytime.", 'ldv' );

         }

       }
     }

     ?>
   </p>
 </div>
</section>

<!-- Informative section -->
<section class="container mt-5 pt-5">
  <div class="row">
    <div class="col-10 ml-auto mr-auto col-xl-6 mb-5 text-center text-sm-left">
      <span class="d-inline-block mb-2 mb-sm-0">
        <img src="<?php echo get_template_directory_uri(); ?>/img/security-icon-u1301.png" alt="">
      </span>

      <span class="d-inline-block ml-sm-2 font-bold font-uppercase">
        <?php

            $fist_item_tite03 = get_field( 'first_item_title_03' );

            if ( $fist_item_tite03 ) {

              echo esc_html( $fist_item_tite03 );

            } else {

              _e( 'SECURITY AND RELIABILITY', 'ldv' );
            }

        ?>

      </span>

      <p class="ml-sm-5">
        <?php

            $info_cnt1 = get_field( 'first_text_content_item_03' );

            if ( $info_cnt1 ) {

              echo esc_html( $info_cnt1 );

            } else {

              _e( 'Your Local Delivery has extensive experience delivering for specialty, compounding, and community pharmacies. Our climate controlled vehicles stay cool, and our drivers carry insulated bags for added measure. All our drivers have extensive customer service experience and go above and beyond for your patients.', 'ldv' );

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


          $title2_info_cnt = get_field( 'second_title_item_03' );

          if ( $title2_info_cnt ) {

            echo esc_html( $title2_info_cnt );

          } else {

            _e( 'SERVICE WITH A PASSION', 'ldv' );
          }

        ?>
      </span>

      <p class="ml-sm-5">
        <?php

            $info_cnt2 = get_field( 'second_text_content_item_03' );

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

     <div class="container">
       <div class="row">
         <header class="mt-5 pt-3 w-100">
           <h2 class="text-center w-100">
             <?php

               $data_metabox = get_field( 'subtitle_page_03' );

               if ( $data_metabox ) {

                 echo esc_html( $data_metabox );


               } else {

                 _e( 'Healthcare Same-Day Delivery Services', 'ldv' );
               }

             ?>
           </h2>

           <p class="text-center mt-4 mb-5 pb-4 pr-5 pl-5">
             <?php

               if( have_posts() ) {
                 while ( have_posts() ) {
                   the_post();

                   $little_excerpt_03 = get_field( 'little_excerpt_03' );

                   echo esc_html( $little_excerpt_03 );
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
                     <img src="<?php echo get_template_directory_uri() ;?>/img/pharmacy-icon.png" class="pt-4" alt="">

                     <p class="mt-2">
                       <?php echo _e( 'PHARMACY', 'ldv' ); ?>
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

                         _e( 'Medications', 'ldv' );
                       // }
                     ?>

                   </li>

                   <li class="d-block ml-xl-2">

                     <?php
                       // if ( $service_offer_item1_01 ) {
                       //
                       //   echo esc_html( $service_offer_item1_01 );

                       // } else {

                         _e( 'Medical Supplies', 'ldv' );
                       // }
                     ?>

                   </li>

                   <li class="d-block ml-xl-2">

                     <?php

                       // $service_offer_item2_02 = get_theme_mod( 'service_offer_item2_02' ) ? get_theme_mod( 'service_offer_item2_02' ) : false;

                       _e( 'Oxygen Tanks', 'ldv' );

                     ?>
                   </li>

                   <li class="d-block mb-4 ml-xl-2">
                     <?php
                       _e( 'Tinctures', 'ldv' );
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
                 <img src="<?php echo get_template_directory_uri(); ?>/img/hospital-icon.png" class="pt-4" alt="">

                 <p class="mt-2 font-uppercase">
                   <?php _e( 'HOSPITALS &', 'ldv' ); ?>
                   <span class="d-block">
                     <?php _e( 'PRACTICES', 'ldv' ); ?>
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

                       _e( 'Specimen Samples', 'ldv' );
                     // }

                   ?>

                 </li>

                 <li class="d-block ml-xl-2">

                   <?php
                     // if ( $service_offer_item4_04 ) {
                     //
                     //   echo esc_html( $service_offer_item4_04 );
                     // } else {

                       _e( 'X-Rays', 'ldv' );
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

                       _e( 'Medical Records', 'ldv' );
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

                       _e( 'Medical Devices', 'ldv' );
                     // }

                   ?>

                 </li>
               </ul>
             </div>
           </a>
         </div>
       </div>
     </div>


 <section class="grid-wrp s-solutions whole-12cols mt-5">
   <div class="bg-gray s-solutions__descrip">
     <header class="col-12 col-sm-10 col-lg-8 mr-auto ml-auto mr-4 mt-4 p-5 text-center text-sm-left">
       <h2 class="">
         <?php
            global $post;

            $title_delivery_solutions = get_field( 'content_image_section_03' );

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

              _e( "Represent the level of commitment you make to your patients and providers to experience with Your Local Delivery. We become the face of your company when you depend on us to deliver you package to any hospital or pharmacy in Miami-Dade County of Florida. Our uniformed, professional drivers take extra care when handling fragile surgical supplies, medical devices or medical records. You don't have to wonder or worry if your patient's medication made it to them on time. With Your Local Delivery, you will be notified via email the moment your package arrives to your patient. Our same-day delivery courier service allows you to focus on what matters most, your patients! Leave the rest to us.", 'ldv' );
          }

         ?>

       </p>
     </header>
   </div>

   <div class="s-solutions__img s-solutions-specific-service03-img background-no-repeat-cover" style="background-position: center center !important;"></div>

 </section>
 <?php
    wp_footer();
