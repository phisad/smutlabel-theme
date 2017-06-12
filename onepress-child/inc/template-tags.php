<?php
if ( ! function_exists( 'onepress_get_intro_data' ) ) {
  /**
   * Get intro data
   *
   * @since 1.1.4
   * @return array
   */
  function onepress_get_intro_data()
  {
    $array = get_theme_mod('onepress_intro_boxes');
    if (is_string($array)) {
      $array = json_decode($array, true);
    }
    if (!empty($array) && is_array($array)) {
      foreach ($array as $k => $v) {
        $array[$k] = wp_parse_args($v, array(
            'desc' => '',
        ));
      }
    }
    return $array;
  }
}
?>