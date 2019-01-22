jQuery( document ).ready( function( $ ) {

   wp.customize( 'ldv_how_work', function( value ) {

    value.bind( function( to ) {
      $( '#ldv_how_work' ).html( to );
    } );

  } );

    wp.customize( 'how_work_01', function( value ) {

     value.bind( function( to ) {
       $( '#ldv_how_work_01' ).html( to );
     } );

   } );

   wp.customize( 'how_work_01_cnt', function( value ) {

    value.bind( function( to ) {
      $( '#how_work_01_cnt' ).html( to );
    } );

  } );

   wp.customize( 'how_work_02', function( value ) {

    value.bind( function( to ) {
      $( '#how_work_02' ).html( to );
    } );

  } );

  wp.customize( 'how_work_02_cnt', function( value ) {

   value.bind( function( to ) {
     $( '#how_work_02_cnt' ).html( to );
   } );

  } );

  wp.customize( 'how_work_03', function( value ) {

   value.bind( function( to ) {
     $( '#how_work_03' ).html( to );
   } );

  } );

  wp.customize( 'how_work_03_cnt', function( value ) {

   value.bind( function( to ) {
     $( '#how_work_03_cnt' ).html( to );
   } );

  } );

  wp.customize( 'ldv_service_price', function( value ) {

   value.bind( function( to ) {
     $( '#ldv_service_price' ).html( to );
   } );

  } );

  wp.customize( 'service_price_tit01', function( value ) {

   value.bind( function( to ) {
     $( '#service_price_tit01' ).html( to );
   } );

  } );

  wp.customize( 'service_price_number', function( value ) {

   value.bind( function( to ) {
     $( '#service_price_number' ).html( to );
   } );

  } );

  wp.customize( 'service_price_tit02', function( value ) {

   value.bind( function( to ) {
     $( '#service_price_tit02' ).html( to );
   } );

  } );

  wp.customize( 'service_price_number02', function( value ) {

   value.bind( function( to ) {
     $( '#service_price_number02' ).html( to );
   } );

  } );

  wp.customize( 'ldv_service_offer_tit', function( value ) {

   value.bind( function( to ) {
     $( '#ldv_service_offer_tit' ).html( to );
   } );

  } );

  wp.customize( 'ldv_service_excerpt', function( value ) {

   value.bind( function( to ) {
     $( '#ldv_service_excerpt' ).html( to );
   } );

  } );


  wp.customize( 'ldv_service_price_bg', function( value ) {

   value.bind( function( to ) {
     $( '.s-our-courier' ).css( 'background-image', 'url(' + to + ')' );
   } );

  } );

  wp.customize( 'service_offer_item1_01', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item1_01' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item2_02', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item2_02' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item3_03', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item3_03' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item4_04', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item4_04' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item5_05', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item5_05' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item6_06', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item6_06' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item7_07', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item7_07' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item8_08', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item8_08' ).html( to );
   } );

  } );

  wp.customize( 'service_offer_item9_09', function( value ) {

   value.bind( function( to ) {
     $( '#service_offer_item9_09' ).html( to );
   } );

  } );

} );
