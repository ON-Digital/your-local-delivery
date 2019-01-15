jQuery( document ).ready( function() {

  $( '#ldv_main_menu_btn' ).on( 'click', function() {


    $( '#ldv_menu_nav' ).toggleClass( 'ldv-main-menu-js' );


  } );

  // Make that the footer arrow take us to the home section on click

   $( '#ldv_about_link' ).on( 'click', function( event ) {

     event.stopPropagation();
     $('html, body').animate({

       scrollTop: $("#s_about").offset().top
     }, 1000);

   } );

   $( '#ldv_contact_link' ).on( 'click', function( event ) {

     event.stopPropagation();
     $('html, body').animate({

       scrollTop: $("#s_contact").offset().top
      }, 1000);

   } );

} );
