<?php
  /**
  * Just kidding!!
  */
  add_action( 'customize_register', 'ldv_customizer_settings' );

  add_action( 'customize_preview_init', 'ldv_customizer_js_scripts' );

  function ldv_customizer_js_scripts()
{
  wp_register_script( 'ldv-customizer-scripts', get_stylesheet_directory_uri() . '/js/ldv-customizer-scripts.js', array( 'jquery', 'customize-preview' ) );

  wp_enqueue_script( 'ldv-customizer-scripts' );
}

  function ldv_customizer_settings( $wp_customize ) {

    // Second section title
    $wp_customize->add_setting(
      'ldv_how_work',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'ldv_how_work_control',
        array(
          'label' => esc_html__( 'Main title section', 'ldv' ),
          'description' => __( 'Customize settings for the second section', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'ldv_how_work',
        )
      )
    );

    // 1st item title
    $wp_customize->add_setting(
      'how_work_01',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'how_work_01_control',
        array(
          'label' => esc_html__( 'First item title', 'ldv' ),
          // 'description' => __( 'Customize settings for the second section', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'how_work_01',
        )
      )
    );

    // 1st item content
    $wp_customize->add_setting(
      'how_work_01_cnt',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'how_work_01_cnt_control',
        array(
          'label' => esc_html__( 'First item content', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'how_work_01_cnt',
        )
      )
    );

    $wp_customize->add_setting(
      'how_work_02',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'how_work_02_control',
        array(
          'label' => esc_html__( 'Second item title', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'how_work_02',
        )
      )
    );

    // 2nd item content
    $wp_customize->add_setting(
      'how_work_02_cnt',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'how_work_02_cnt_control',
        array(
          'label' => esc_html__( 'Second item content', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'how_work_02_cnt',
        )
      )
    );

    // Third item
    $wp_customize->add_setting(
      'how_work_03',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'how_work_03_control',
        array(
          'label' => esc_html__( 'Third item title', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'how_work_03',
        )
      )
    );

    $wp_customize->add_setting(
      'how_work_03_cnt',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'how_work_03_cnt_control',
        array(
          'label' => esc_html__( 'Third item content', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'how_work_03_cnt',
        )
      )
    );

    // Service price section

    $wp_customize->add_setting(
      'ldv_service_price_bg',
      array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize, 'ldv_service_price_bg_control',
        array(
          'label' => esc_html__( 'Background image', 'ldv' ),
          'description' => esc_html__( 'Services price section', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'ldv_service_price_bg',
        )
      )
    );

    $wp_customize->add_setting(
      'ldv_service_price',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'ldv_service_price_control',
        array(
          'label' => esc_html__( 'Main title section', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'ldv_service_price',
        )
      )
    );


    $wp_customize->add_setting(
      'service_price_tit01',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_price_tit01_control',
        array(
          'label' => esc_html__( 'Title first item', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_price_tit01',
        )
      )
    );

    $wp_customize->add_setting(
      'service_price_number',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_price_number_control',
        array(
          'label' => esc_html__( 'Amount price first item', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_price_number',
        )
      )
    );

    $wp_customize->add_setting(
      'service_price_tit02',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_price_tit02_control',
        array(
          'label' => esc_html__( 'Second item title', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_price_tit02',
        )
      )
    );

    $wp_customize->add_setting(
      'service_price_number02',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_price_number02_control',
        array(
          'label' => esc_html__( 'Amount price second item', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_price_number02',
        )
      )
    );

    // Service offer section
    $wp_customize->add_setting(
      'ldv_service_offer_tit',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'ldv_service_offer_tit_control',
        array(
          'label' => esc_html__( 'Main title', 'ldv' ),
          'description' => esc_html__( 'Service offer section', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'ldv_service_offer_tit',
        )
      )
    );

    $wp_customize->add_setting(
      'ldv_service_excerpt',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'ldv_service_excerpt_control',
        array(
          'label' => esc_html__( 'Excerpt text', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'ldv_service_excerpt',
        )
      )
    );

    // $wp_customize->add_setting(
    //   'service_offer_item1_tit',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'service_offer_item1_tit_control',
    //     array(
    //       'label' => esc_html__( 'Title for 1st item', 'ldv' ),
    //       'section' => 'static_front_page',
    //       'settings' => 'service_offer_item1_tit',
    //     )
    //   )
    // );

    $wp_customize->add_setting(
      'service_offer_item1_01',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item1_01_control',
        array(
          'label' => esc_html__( 'First item: list element #1', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item1_01',
        )
      )
    );

    // $wp_customize->add_setting(
    //   'service_offer_item2_tit',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'service_offer_item2_tit_control',
    //     array(
    //       'label' => esc_html__( 'Title for 2nd item', 'ldv' ),
    //       'section' => 'static_front_page',
    //       'settings' => 'service_offer_item2_tit',
    //     )
    //   )
    // );

    $wp_customize->add_setting(
      'service_offer_item2_02',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item2_02_control',
        array(
          'label' => esc_html__( 'First item: list element #2', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item2_02',
        )
      )
    );

    // $wp_customize->add_setting(
    //   'service_offer_item3_tit',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'service_offer_item3_tit_control',
    //     array(
    //       'label' => esc_html__( 'Title for 3rd item', 'ldv' ),
    //       'section' => 'static_front_page',
    //       'settings' => 'service_offer_item3_tit',
    //     )
    //   )
    // );

    $wp_customize->add_setting(
      'service_offer_item3_03',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item3_03_control',
        array(
          'label' => esc_html__( 'First item: list element #3', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item3_03',
        )
      )
    );

    $wp_customize->add_setting(
      'service_offer_item4_04',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item4_04_control',
        array(
          'label' => esc_html__( 'Second item: list element #1', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item4_04',
        )
      )
    );

    $wp_customize->add_setting(
      'service_offer_item5_05',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item5_05_control',
        array(
          'label' => esc_html__( 'Second item: list element #2', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item5_05',
        )
      )
    );

    $wp_customize->add_setting(
      'service_offer_item6_06',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item6_06_control',
        array(
          'label' => esc_html__( 'Second item: list element #3', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item6_06',
        )
      )
    );

    $wp_customize->add_setting(
      'service_offer_item7_07',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item7_07_control',
        array(
          'label' => esc_html__( 'Third item: list element #1', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item7_07',
        )
      )
    );

    $wp_customize->add_setting(
      'service_offer_item8_08',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item8_08_control',
        array(
          'label' => esc_html__( 'Third item: list element #2', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item8_08',
        )
      )
    );

    $wp_customize->add_setting(
      'service_offer_item9_09',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'service_offer_item9_09_control',
        array(
          'label' => esc_html__( 'Third item: list element #3', 'ldv' ),
          'section' => 'static_front_page',
          'settings' => 'service_offer_item9_09',
        )
      )
    );

    // Settings services pages

    $wp_customize->add_section(
        'ldv_services_pages',
        array(
            'title' => esc_html__( 'Services pages', 'ldv' ),
            'priority' => 120,
            'capability'  => 'edit_theme_options',
            'description' => esc_html__( 'Services pages settings', 'ldv' )
          )
    );

    // $wp_customize->add_setting(
    //   'ldv_main_service_pg_tit',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'ldv_main_service_pg_tit_control',
    //     array(
    //       'label' => esc_html__( 'Title #1', 'ldv' ),
    //       'section' => 'ldv_services_pages',
    //       'settings' => 'ldv_main_service_pg_tit',
    //     )
    //   )
    // );

    // $wp_customize->add_setting(
    //   'ldv_pg_info_tit1',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'ldv_pg_info_tit1_control',
    //     array(
    //       'label' => esc_html__( 'Text title for information purposes #1', 'ldv' ),
    //       'section' => 'ldv_services_pages',
    //       'settings' => 'ldv_pg_info_tit1',
    //     )
    //   )
    // );
    //
    // $wp_customize->add_setting(
    //   'page_info_cnt1',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'page_info_cnt1_control',
    //     array(
    //       'label' => esc_html__( 'Text content for information purposes #1', 'ldv' ),
    //       'section' => 'ldv_services_pages',
    //       'settings' => 'page_info_cnt1',
    //     )
    //   )
    // );

    // $wp_customize->add_setting(
    //   'ldv_pg_info_tit2',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'ldv_pg_info_tit2_control',
    //     array(
    //       'label' => esc_html__( 'Text title for information purposes #2', 'ldv' ),
    //       'section' => 'ldv_services_pages',
    //       'settings' => 'ldv_pg_info_tit2',
    //     )
    //   )
    // );
    //
    // $wp_customize->add_setting(
    //   'page_info_cnt2',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'page_info_cnt2_control',
    //     array(
    //       'label' => esc_html__( 'Text content for information purposes #2', 'ldv' ),
    //       'section' => 'ldv_services_pages',
    //       'settings' => 'page_info_cnt2',
    //     )
    //   )
    // );

    // $wp_customize->add_setting(
    //   'service_footer_msg',
    //   array(
    //     'default' => '',
    //     'sanitize_callback' => 'sanitize_text_field',
    //     'transport' => 'postMessage',
    //   )
    // );
    //
    // $wp_customize->add_control(
    //   new WP_Customize_Control(
    //     $wp_customize, 'service_footer_msg_control',
    //     array(
    //       'label' => esc_html__( 'Text message for the footer section', 'ldv' ),
    //       'section' => 'ldv_services_pages',
    //       'settings' => 'service_footer_msg',
    //     )
    //   )
    // );


  }
