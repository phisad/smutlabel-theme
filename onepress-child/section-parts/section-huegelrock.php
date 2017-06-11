<?php
$subtitle = '07.07. - 09.07. 2017 - The return of rock';
$title = 'H&uuml;gelrock Open Air 2017';
$desc = 'Auch dieses Jahr sind wir wieder mit die Hauptorganisatoren des "h&uuml;gelrock openairs". Wir freuen uns schon euch dort zu sehen!';
?>

<section id="huegelrock"
	class="onepress_section_class section-padding onepage-section">

	<div class="container">
		<div class="section-title-area">
                    <?php echo '<h5 class="section-subtitle">' . $subtitle . '</h5>'; ?>
                    <?php echo '<h2 class="section-title">' . $title . '</h2>'; ?>
                    <?php echo '<div class="section-desc">' . apply_filters ( 'the_content', wp_kses_post ( $desc ) ) . '</div>';?>
		</div>
		<div class="row">
			<div id="huegelrock-button-wrapper">
				<a id="huegelrock-button" class="btn btn-lg"
					href="https://www.huegelrock.de/">Schaut hier vorbei !</a>
			</div>
		</div>
	</div>
	<?php do_action('onepress_section_after_inner', 'huegelrock'); ?>
</section>
