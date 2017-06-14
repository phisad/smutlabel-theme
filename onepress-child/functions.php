<?php

/**
 * Extend one press styles. 
 */
add_action ( 'wp_enqueue_scripts', 'one_press_child_enqueue_styles', PHP_INT_MAX );
function one_press_child_enqueue_styles() {
  
  $version = wp_get_theme ()->get ( 'Version' );
  $inherits = array (
      'onepress-style' 
  );
  
  $parent_style_uri = get_template_directory_uri () . '/style.css';
  wp_enqueue_style ( 'onepress-style', $parent_style_uri );
  write_log($parent_style_uri);
  
  $child_style_uri = get_stylesheet_directory_uri () . '/style.css';
  wp_enqueue_style ( 'onepress-child-style', $child_style_uri, $inherits, $version );
  write_log($child_style_uri);
}

/**
 * Extend one press theme section parts by allowing additional section parts.
 *
 * Put additional sections in the $additional array.
 */
function cmp_section_by_position($a, $b) {
  return $a ["position"] - $b ["position"];
}

if (! function_exists ( "onepress_child_frontpage_section_parts" )) {

  function onepress_child_frontpage_section_parts() {
    $additionals = array (
        array (
            "name" => 'intro',
            "position" => 110 
        ),
        array (
            "name" => 'huegelrock',
            "position" => 150 
        ) 
    );
    
    $originals = array (
        array (
            "name" => 'hero',
            "position" => 100 
        ),
        array (
            "name" => 'features',
            "position" => 200 
        ),
        array (
            "name" => 'about',
            "position" => 300 
        ),
        array (
            "name" => 'services',
            "position" => 400 
        ),
        array (
            "name" => 'videolightbox',
            "position" => 500 
        ),
        array (
            "name" => 'gallery',
            "position" => 600 
        ),
        array (
            "name" => 'counter',
            "position" => 700 
        ),
        array (
            "name" => 'team',
            "position" => 800 
        ),
        array (
            "name" => 'news',
            "position" => 900 
        ),
        array (
            "name" => 'contact',
            "position" => 1000 
        ) 
    );
    $merged_sections = array_merge ( $originals, $additionals );
    usort ( $merged_sections, "cmp_section_by_position" );
    $sections = apply_filters ( 'onepress_frontpage_sections_order', array_column ( $merged_sections, "name" ) );
    
    foreach ( $sections as $section ) {
      /**
       * Hook before section
       */
      do_action ( 'onepress_before_section_' . $section );
      do_action ( 'onepress_before_section_part', $section );
      
      /**
       * Load section template part
       */
      get_template_part ( 'section-parts/section', $section );
      
      /**
       * Hook after section
       */
      do_action ( 'onepress_after_section_part', $section );
      do_action ( 'onepress_after_section_' . $section );
    }
  }
}
add_action ( 'onepress_frontpage_section_parts', 'onepress_child_frontpage_section_parts' );

/**
 * Custom template tags for this theme.
 */
require get_theme_file_path ( '/inc/template-tags.php' );

/**
 * Customizer additions.
 */
require get_theme_file_path ( '/inc/customizer.php' );
?>