<?php
$id       = get_theme_mod( 'onepress_intro_id', esc_html__('intro', 'onepress') );
$disable  = get_theme_mod( 'onepress_intro_disable' ) == 1 ? true : false;
$title    = get_theme_mod( 'onepress_intro_title', esc_html__('Intro', 'onepress' ));
$subtitle = get_theme_mod( 'onepress_intro_subtitle', esc_html__('Subtitle', 'onepress' ));
if ( onepress_is_selective_refresh() ) {
    $disable = false;
}
if ( !$disable ) {
    $data  = onepress_get_intro_data();
    $desc = get_theme_mod( 'onepress_intro_description' );
?>
<?php if ( ! onepress_is_selective_refresh() ){ ?>
<section id="<?php if ( $id != '') echo $id; ?>" <?php do_action('onepress_section_atts', 'intro'); ?>
         class="<?php echo esc_attr(apply_filters('onepress_section_class', 'section-features section-padding section-meta onepage-section', 'intro')); ?>">
<?php } ?>
    <?php do_action('onepress_section_before_inner', 'intro'); ?>
    <div class="container">
        <div class="section-content">
            <div class="row">
            <?php
            $layout = intval( get_theme_mod( 'onepress_intro_layout', 4 ) );
            if ( ! empty($data)) {
              foreach ( $data as $k => $f ) {
                  $media = '';
                  $f =  wp_parse_args( $f, array(
                      'image' => '',
                      'desc' => '',
                  ) );
                  $url = onepress_get_media_url( $f['image'] );
                  if ( $url ) {
                      $media = '<span class="icon-image"><img src="'.esc_url( $url ).'" alt=""></span>';
                  }
                  $width = get_theme_mod( 'onepress_intro_image_width', "640" );
                  ?>
                  <div class="feature-item col-lg-<?php echo esc_attr( $layout ); ?> col-sm-6 wow slideInDown">
                      <div class="feature-media">
                          <?php echo $media; ?>
                      </div>
                      <div class="feature-item-content"><?php echo apply_filters( 'the_content', $f['desc'] ); ?></div>
                  </div>
            <?php
              }
            }// end loop featues

            ?>
            </div>
        </div>
        <div class="section-title-area">
            <?php if ($subtitle != '') echo '<h5 class="section-subtitle">' . esc_html($subtitle) . '</h5>'; ?>
            <?php if ($title != '') echo '<h2 class="section-title">' . esc_html($title) . '</h2>'; ?>
            <?php if ( $desc ) {
                echo '<div class="section-desc">' . apply_filters( 'the_content', wp_kses_post( $desc ) ) . '</div>';
            } ?>
        </div>
    </div>
    <?php do_action('onepress_section_after_inner', 'intro'); ?>

<?php if ( ! onepress_is_selective_refresh() ){ ?>
</section>
<?php } ?>
<?php } ?>