<?php

function smutlabel_customize_register($wp_customize) {
  /**
   * Section: Huegelrock
   */
  $wp_customize->add_panel ( 'onepress_huegelrock_panel', array (
      'priority' => 150,
      'title' => esc_html__ ( 'Section: Huegelrock', 'onepress' ),
      'description' => '',
      'active_callback' => 'onepress_showon_frontpage' 
  ) );
  
  // Settings
  $wp_customize->add_section ( 'onepress_huegelrock_settings', array (
      'priority' => 1,
      'title' => esc_html__ ( 'Huegelrock Settings', 'onepress' ),
      'description' => '',
      'panel' => 'onepress_huegelrock_panel' 
  ) );
  
  // Show section
  $wp_customize->add_setting ( 'onepress_huegelrock_disable', array (
      'sanitize_callback' => 'onepress_sanitize_checkbox',
      'default' => '' 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_disable', array (
      'type' => 'checkbox',
      'label' => esc_html__ ( 'Hide this section?', 'onepress' ),
      'section' => 'onepress_huegelrock_settings',
      'description' => esc_html__ ( 'Check this box to hide this section.', 'onepress' ) 
  ) );
  
  // Section ID
  $wp_customize->add_setting ( 'onepress_huegelrock_id', array (
      'sanitize_callback' => 'onepress_sanitize_text',
      'default' => esc_html__ ( 'huegelrock', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_id', array (
      'label' => esc_html__ ( 'Section ID:', 'onepress' ),
      'section' => 'onepress_huegelrock_settings',
      'description' => esc_html__ ( 'The section id, we will use this for link anchor.', 'onepress' ) 
  ) );
  
  // Layout
  $wp_customize->add_section ( 'onepress_huegelrock_layout', array (
      'priority' => 2,
      'title' => esc_html__ ( 'Huegelrock Layout', 'onepress' ),
      'description' => '',
      'panel' => 'onepress_huegelrock_panel' 
  ) );
  
  // Title
  $wp_customize->add_setting ( 'onepress_huegelrock_title', array (
      'sanitize_callback' => 'sanitize_text_field',
      'default' => esc_html__ ( 'H&uuml;gelrock Open Air 2017', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_title', array (
      'label' => esc_html__ ( 'Section Title', 'onepress' ),
      'section' => 'onepress_huegelrock_layout',
      'description' => '' 
  ) );
  
  // Sub Title
  $wp_customize->add_setting ( 'onepress_huegelrock_subtitle', array (
      'sanitize_callback' => 'sanitize_text_field',
      'default' => esc_html__ ( '07.07. - 09.07. 2017 - The return of rock', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_subtitle', array (
      'label' => esc_html__ ( 'Section Subtitle', 'onepress' ),
      'section' => 'onepress_huegelrock_layout',
      'description' => '' 
  ) );
  
  // Description
  $wp_customize->add_setting ( 'onepress_huegelrock_description', array (
      'sanitize_callback' => 'onepress_sanitize_text',
      'default' => 'Auch dieses Jahr sind wir wieder mit die Hauptorganisatoren des "h&uuml;gelrock openairs". Wir freuen uns schon euch dort zu sehen!' 
  ) );
  $wp_customize->add_control ( new OnePress_Editor_Custom_Control ( $wp_customize, 'onepress_huegelrock_description', array (
      'label' => esc_html__ ( 'Section Description', 'onepress' ),
      'section' => 'onepress_huegelrock_layout',
      'description' => '' 
  ) ) );
  
  // Button #1 Text
  $wp_customize->add_setting ( 'onepress_huegelrock_button_text', array (
      'sanitize_callback' => 'onepress_sanitize_text',
      'default' => esc_html__ ( 'Schaue hier vorbei', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_button_text', array (
      'label' => esc_html__ ( 'Button Text', 'onepress' ),
      'section' => 'onepress_huegelrock_layout' 
  ) );
  
  // Button #1 Link
  $wp_customize->add_setting ( 'onepress_huegelrock_button_link', array (
      'sanitize_callback' => 'esc_url',
      'default' => esc_url ( 'https://www.huegelrock.de/', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_button_link', array (
      'label' => esc_html__ ( 'Button Link', 'onepress' ),
      'section' => 'onepress_huegelrock_layout' 
  ) );
  // Button #1 Style
  $wp_customize->add_setting ( 'onepress_huegelrock_button_style', array (
      'sanitize_callback' => 'onepress_sanitize_text',
      'default' => 'btn-theme-primary' 
  ) );
  $wp_customize->add_control ( 'onepress_huegelrock_button_style', array (
      'label' => esc_html__ ( 'Button Style', 'onepress' ),
      'section' => 'onepress_huegelrock_layout',
      'type' => 'select',
      'choices' => array (
          'btn-theme-primary' => esc_html__ ( 'Button Primary', 'onepress' ),
          'btn-secondary-outline' => esc_html__ ( 'Button Secondary', 'onepress' ),
          'btn-default' => esc_html__ ( 'Button', 'onepress' ),
          'btn-primary' => esc_html__ ( 'Primary', 'onepress' ),
          'btn-success' => esc_html__ ( 'Success', 'onepress' ),
          'btn-info' => esc_html__ ( 'Info', 'onepress' ),
          'btn-warning' => esc_html__ ( 'Warning', 'onepress' ),
          'btn-danger' => esc_html__ ( 'Danger', 'onepress' ) 
      ) 
  ) );
  // End section Huegelrock
  
  /**
   * Section: Intro
   */
  $wp_customize->add_panel ( 'onepress_intro', array (
      'priority' => 149,
      'title' => esc_html__ ( 'Section: Intro', 'onepress' ),
      'description' => '',
      'active_callback' => 'onepress_showon_frontpage' 
  ) );
  
  $wp_customize->add_section ( 'onepress_intro_settings', array (
      'priority' => 1,
      'title' => esc_html__ ( 'Section Settings', 'onepress' ),
      'description' => '',
      'panel' => 'onepress_intro' 
  ) );
  
  // Show Content
  $wp_customize->add_setting ( 'onepress_intro_disable', array (
      'sanitize_callback' => 'onepress_sanitize_checkbox',
      'default' => '' 
  ) );
  $wp_customize->add_control ( 'onepress_intro_disable', array (
      'type' => 'checkbox',
      'label' => esc_html__ ( 'Hide this section?', 'onepress' ),
      'section' => 'onepress_intro_settings',
      'description' => esc_html__ ( 'Check this box to hide this section.', 'onepress' ) 
  ) );
  
  // Section ID
  $wp_customize->add_setting ( 'onepress_intro_id', array (
      'sanitize_callback' => 'onepress_sanitize_text',
      'default' => esc_html__ ( 'intro', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_intro_id', array (
      'label' => esc_html__ ( 'Section ID:', 'onepress' ),
      'section' => 'onepress_intro_settings',
      'description' => esc_html__ ( 'The section id, we will use this for link anchor.', 'onepress' ) 
  ) );
  
  // Title
  $wp_customize->add_setting ( 'onepress_intro_title', array (
      'sanitize_callback' => 'sanitize_text_field',
      'default' => esc_html__ ( 'Intro', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_intro_title', array (
      'label' => esc_html__ ( 'Section Title', 'onepress' ),
      'section' => 'onepress_intro_settings',
      'description' => '' 
  ) );
  
  // Sub Title
  $wp_customize->add_setting ( 'onepress_intro_subtitle', array (
      'sanitize_callback' => 'sanitize_text_field',
      'default' => esc_html__ ( 'Section subtitle', 'onepress' ) 
  ) );
  $wp_customize->add_control ( 'onepress_intro_subtitle', array (
      'label' => esc_html__ ( 'Section Subtitle', 'onepress' ),
      'section' => 'onepress_intro_settings',
      'description' => '' 
  ) );
  
  // Description
  $wp_customize->add_setting ( 'onepress_intro_description', array (
      'sanitize_callback' => 'onepress_sanitize_text',
      'default' => '' 
  ) );
  $wp_customize->add_control ( new OnePress_Editor_Custom_Control ( $wp_customize, 'onepress_intro_description', array (
      'label' => esc_html__ ( 'Section Description', 'onepress' ),
      'section' => 'onepress_intro_settings',
      'description' => '' 
  ) ) );
  
  // Content
  $wp_customize->add_setting ( 'onepress_intro_layout', array (
      'sanitize_callback' => 'sanitize_text_field',
      'default' => '4' 
  ) );
  
  $wp_customize->add_control ( 'onepress_intro_layout', array (
      'label' => esc_html__ ( 'Layout', 'onepress' ),
      'section' => 'onepress_intro_content',
      'description' => '',
      'type' => 'select',
      'choices' => array (
          '3' => esc_html__ ( '4 Columns', 'onepress' ),
          '4' => esc_html__ ( '3 Columns', 'onepress' ),
          '6' => esc_html__ ( '2 Columns', 'onepress' ) 
      ) 
  ) );
  
  $wp_customize->add_section ( 'onepress_intro_content', array (
      'priority' => 2,
      'title' => esc_html__ ( 'Section Content', 'onepress' ),
      'description' => '',
      'panel' => 'onepress_intro' 
  ) );
  
  // Order & Styling
  $wp_customize->add_setting ( 'onepress_intro_boxes', array (
      // 'default' => '',
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh' 
  ) ) // refresh or postMessage
;
  
  $wp_customize->add_control ( new Onepress_Customize_Repeatable_Control ( $wp_customize, 'onepress_intro_boxes', array (
      'label' => esc_html__ ( 'Intro content', 'onepress' ),
      'description' => '',
      'section' => 'onepress_intro_content',
      'live_title_id' => 'title', // apply for unput text and textarea only
      'title_format' => esc_html__ ( '[live_title]', 'onepress' ), // [live_title]
      'max_item'      => 4, // Maximum item can add
      'fields' => array (
          'image' => array (
              'title' => esc_html__ ( 'Image', 'onepress' ),
              'type' => 'media'
          ),
          'desc' => array (
              'title' => esc_html__ ( 'Description', 'onepress' ),
              'type' => 'editor' 
          ),
      ) 
  ) ) );
  //End section intro
}
add_action ( 'onepress_customize_before_register', "smutlabel_customize_register" );
?>