<?php
/**
 * Ribbon with right button section
 *
 * @package zerif-lite
 */

$zerif_ribbonright_text = get_theme_mod( 'zerif_ribbonright_text' );

$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel' );

$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink' );

/* For new users, add default values for the Ribbon section controls */
if ( ! zerif_check_if_old_version_of_theme() && current_user_can( 'edit_theme_options' ) ) {
	$zerif_ribbonright_text        = get_theme_mod( 'zerif_ribbonright_text', __( 'Change this text in RightButton Ribbon', 'zerif-lite' ) );
	$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel', __( 'Get in touch', 'zerif-lite' ) );
	$zerif_ribbonright_buttonlink  = get_theme_mod( 'zerif_ribbonright_buttonlink', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_ribbonright_buttonlink' ) ) );
}

if ( ! empty( $zerif_ribbonright_text ) ) {
	echo '<section class="purchase-now ribbon-without-button" id="kursplan">';
	echo '    <div class="container">';
	echo '        <div class="section-header">';
	echo '            <h2 class="white-text">Kursplan</h2>';
	echo '        </div>';
	echo '        <div class="row" data-scrollreveal="enter right after 0s over 1s" data-sr-init="true" data-sr-complete="true">';
	echo '            <div style="margin-bottom: 50px; margin-top: -30px;  padding-top: 20px;  padding-bottom: 20px; padding-left: 30px; padding-right: 30px; -moz-border-radius: 12px; -webkit-border-radius: 12px; border-radius: 12px; -moz-box-shadow: 4px 4px 14px #000; -webkit-box-shadow: 4px 4px 14px #000; box-shadow: 4px 4px 14px #000;  background: #FFFFFF;">';
	echo '		          <iframe src="https://bergerrommelfitnessgmbh.virtuagym.com//classes/week/?event_type=1&embedded=1" height="500" width="100%" border="0" style="width: 100%; height: 500;"></iframe>';
	echo '		          <div align="right">';
	echo '		               <a href="https://bergerrommelfitnessgmbh.virtuagym.com/" class="btn btn-primary custom-button green-btn">Zur Buchung</a>';
	echo '		          </div>';
	echo '            </div>';
	echo '        </div>';
	echo '    </div>';
	echo '</section>';

	echo '<section class="contact-us" id="studio" style="background-color: rgba(0,0,0, 0.95);">';
	echo '    <div class="container">';
	echo '        <div class="section-header">';
	echo '            <h2 class="white-text">Unser Studio</h2>';
	echo '        </div>';
	echo          do_shortcode('[ngg_images source="galleries" container_ids="3" display_type="photocrati-nextgen_basic_slideshow" gallery_width="1110" gallery_height="739" cycle_effect="fade" cycle_interval="3" show_thumbnail_link="0" order_by="sortorder" order_direction="ASC" returns="included" maximum_entity_count="500"]');
	echo '    </div>';
	echo '    <br/>';
	echo '    <br/>';
	echo '    <div class="container">';
	echo '        <div class="section-header">';
	echo '            <h2 class="white-text">Öffnungszeiten</h2>';
	echo '        </div>';
	echo          do_shortcode('[op-overview set_id="388" show_closed_days="true" highlight="day" include_io="true" include_holidays="true" hide_io_date="true"]');
	echo '    </div>';
	echo '</section>';
} elseif ( is_customize_preview() ) {

	$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel' );

	$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink' );

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<section class="purchase-now zerif_hidden_if_not_customizer" id="ribbon_right">';

	} else {

		echo '<section class="purchase-now ribbon-without-button zerif_hidden_if_not_customizer" id="ribbon_right">';

	}

	echo '<div class="container">';

		echo '<div class="row">';

			echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';

				echo '<h3 class="white-text"></h3>';

			echo '</div>';

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {


		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


		echo '<a href="' . esc_url( $zerif_ribbonright_buttonlink ) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post( $zerif_ribbonright_buttonlabel ) . '</a>';


		echo '</div>';


	} elseif ( is_customize_preview() ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


		echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';


		echo '</div>';

	}


	echo '</div>';


	echo '</div>';


	echo '</section>';

}


