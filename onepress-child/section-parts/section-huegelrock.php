<?php
$onepress_huegelrock_id = get_theme_mod ( 'onepress_huegelrock_id', esc_html__ ( 'huegelrock', 'onepress' ) );
$onepress_huegelrock_disable = get_theme_mod ( 'onepress_huegelrock_disable' ) == 1 ? true : false;

if (onepress_is_selective_refresh ()) {
  $onepress_huegelrock_disable = false;
}

?>

<?php if ( ! $onepress_huegelrock_disable ) { ?>
<section
	id="<?php if ( $onepress_huegelrock_id != '' ){ echo esc_attr( $onepress_huegelrock_id ); } ?>"
	class="onepress_section_class section-padding onepage-section">

	<div class="container">
		<div class="section-title-area">
<?php
  
  $subtitle = get_theme_mod ( "onepress_huegelrock_subtitle", wp_kses_post ( '07.07. - 09.07. 2017 - The return of rock' ) );
  $title = get_theme_mod ( "onepress_huegelrock_title", wp_kses_post ( 'H&uuml;gelrock Open Air 2017' ) );
  $desc = get_theme_mod ( "onepress_huegelrock_description", wp_kses_post ( 'Auch dieses Jahr sind wir wieder mit die Hauptorganisatoren des "h&uuml;gelrock openairs". Wir freuen uns schon euch dort zu sehen!' ) );
  
  echo '<h5 class="section-subtitle">' . $subtitle . '</h5>';
  echo '<h2 class="section-title">' . $title . '</h2>';
  echo '<div class="section-desc">' . apply_filters ( 'the_content', wp_kses_post ( $desc ) ) . '</div>';
  ?>
		</div>
		<div class="row">
			<!-- Center the button within a wrapper div -->
			<div style="text-align: center; width: 100%;">
<?php
  $btn_style = get_theme_mod ( 'onepress_huegelrock_button_style', 'btn-theme-primary' );
  $btn_text = get_theme_mod ( 'onepress_huegelrock_button_text', 'Schaut hier vorbei !' );
  $btn_link = get_theme_mod ( 'onepress_huegelrock_button_link', 'https://www.huegelrock.de/' );
  
  echo '<a href="' . esc_url ( $btn_link ) . '" class="btn ' . esc_attr ( $btn_style ) . ' btn-lg">' . wp_kses_post ( $btn_text ) . '</a>';
  ?>
			</div>
		</div>
	</div>
	<?php do_action('onepress_section_after_inner', 'huegelrock'); ?>
</section>
<?php }; ?>