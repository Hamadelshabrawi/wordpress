<?php
	/**
	 * Title: Popup section two with contact form
	 * Description: This is popup section with contact form
	 * Slug: cozy-block-patterns/popup-two
	 * Categories: cozy-block-patterns, popup
	 * Premium: true
	 * Dynamic: true
	 */

	$images = array(
		CT_ASSETS_URL . 'images/popup_2_1.jpg',
	);
	?>
	
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Popup', 'cozy-addons' ); ?>"},"className":"cozy-block-pattern__popup-two","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__popup-two"><!-- wp:cozy-block/modal {"blockClientId":"defc8c1d-9bee-417f-b0b5-f5ddb259840e","boxWidth":470,"loadOnRefresh":false,"iconStyles":{"alignment":"right","horizontalSpacing":10,"verticalSpacing":10,"iconSize":14,"iconColor":"#090b10","iconColorHover":"","border":"1px solid #000","borderRadius":20},"padding":{"top":0,"right":0,"bottom":0,"left":0}} -->
<div class="cozy-block-modal  type-default event-load display-none icon-align-right" id="cozyBlock_defc8c1d_9bee_417f_b0b5_f5ddb259840e"><div class="close-icon-wrapper"><div class="modal-icon-wrapper"><svg class="modal-close-icon" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"></path></svg></div></div><!-- wp:group {"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"},"cozyResponsiveShow":{"desktopShow":true,"tabletShow":true,"tabletViewport":980,"mobileShow":false,"mobileViewport":767}} -->
<div class="wp-block-group"><!-- wp:image {"id":3061,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-3061" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"color":{"background":"#fffffe"},"dimensions":{"minHeight":""}},"className":"cozy-popup-two__form-wrapper","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group cozy-popup-two__form-wrapper has-background" style="background-color:#fffffe;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"typography":{"fontSize":"35px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}},"className":"is-style-default"} -->
<h2 class="wp-block-heading has-text-align-left is-style-default has-text-color has-link-color" style="color:#090b10;font-size:35px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Subscribe to Our Newsletter', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:shortcode -->
[contact-form-7 id="c5d7413" title="Newsletter with stacked button label"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/modal --></div>
<!-- /wp:group -->