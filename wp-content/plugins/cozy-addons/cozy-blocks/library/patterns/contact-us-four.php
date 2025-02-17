<?php
/**
 * Title: Contact Us section four with column animation
 * Description: This is contact us section with column, animation
 * Slug: cozy-block-patterns/contact-us-four
 * Categories: cozy-block-patterns, contact-us
 */

use ParagonIE\Sodium\Core\Curve25519\H;

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Contact Us', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"592px","justifyContent":"left"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"color":{"text":"#fa9805"},"elements":{"link":{"color":{"text":"#fa9805"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Public Sans"} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#fa9805;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Contact Us', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3","fontSize":"44px","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Give Us A Ring We’d Love to Chat With You.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"}},"fontSize":"small"} -->
<p class="has-text-align-left has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"18px","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--60);font-size:18px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#f49805"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#0d5fff","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:100px;background-color:#f49805;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Contact Us', 'cozy-addons' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"color":{"background":"#fffbf5","text":"#f49805"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"100px"},"elements":{"link":{"color":{"text":"#f49805"}}}},"cozyHoverStyles":{"bgColor":"#0d5fff","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#f49805;background-color:#fffbf5;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Join Our Team', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"color":"#01102e1a","width":"1px","radius":"20px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#01102e1a;border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3","fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:30px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e( 'Contact Info', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"fontSize":"20px"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"#01102e1a","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-link-color" style="border-top-color:#01102e1a;border-top-width:1px;color:#090b10;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-size:20px"><!-- wp:paragraph {"style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Address', 'cozy-addons' ); ?>:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"20px"}}} -->
<p class="has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( '2345 Beach,Rd', 'cozy-addons' ); ?><br><?php esc_html_e( 'Metrocity USA, HWY 1235', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"fontSize":"20px"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"#01102e1a","width":"1px"},"bottom":{"color":"#01102e1a","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-link-color" style="border-top-color:#01102e1a;border-top-width:1px;border-bottom-color:#01102e1a;border-bottom-width:1px;color:#090b10;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-size:20px"><!-- wp:paragraph {"style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Email', 'cozy-addons' ); ?>:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"20px"}}} -->
<p class="has-text-color has-link-color" style="color:#090b10;font-size:20px"><a href="#"><?php esc_html_e( 'sample@email.com', 'cozy-addons' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"fontSize":"20px"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#01102e1a","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-link-color" style="border-bottom-color:#01102e1a;border-bottom-width:1px;color:#090b10;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-size:20px"><!-- wp:paragraph {"style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Phone', 'cozy-addons' ); ?>:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"20px"}}} -->
<p class="has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( '(321)234-8756', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:cozy-block/social-icon {"blockClientId":"f2f79509-004b-40ac-9332-565a163edaa6","view":"default","iconSize":16,"iconColorLayout":"custom","iconColor":"#f49805","iconColorHover":"#0d5fff","gap":15,"boxStyles":{"padding":{"top":12,"right":12,"bottom":12,"left":12},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f48905"}} -->
<div class="cozy-block-social-icon default fill icon-color-custom" id="cozyBlock_f2f79509_004b_40ac_9332_565a163edaa6"><!-- wp:cozy-block/social-icon-picker {"blockClientId":"5d1a3493-099b-43ad-aab7-ccf8d61db46c","parentAttrs":{"view":"default","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#1877f2","bgDefaultColor":"#1877f2"} -->
<style>
		#cozyBlock_5d1a3493_099b_43ad_aab7_ccf8d61db46c.stacked.icon-color-default {
		background: #1877f2;
		}
		#cozyBlock_5d1a3493_099b_43ad_aab7_ccf8d61db46c.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_5d1a3493_099b_43ad_aab7_ccf8d61db46c.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_5d1a3493_099b_43ad_aab7_ccf8d61db46c.fill.icon-color-default svg {
		fill: #1877f2;
		}
		#cozyBlock_5d1a3493_099b_43ad_aab7_ccf8d61db46c.outline.icon-color-default svg {
		stroke: #1877f2;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker default fill icon-color-custom" id="cozyBlock_5d1a3493_099b_43ad_aab7_ccf8d61db46c"><svg viewBox="0 0 14 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.5122 14.0625L13.2065 9.53809H8.86523V6.60205C8.86523 5.36426 9.47168 4.15771 11.416 4.15771H13.3896V0.305664C13.3896 0.305664 11.5986 0 9.88623 0C6.31104 0 3.97412 2.16699 3.97412 6.08984V9.53809H0V14.0625H3.97412V25H8.86523V14.0625H12.5122Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"627c7f85-59ae-46c0-b130-3ca05975f290","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":24},"iconPath":"M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z","parentAttrs":{"view":"default","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#000","bgDefaultColor":"#000"} -->
<style>
		#cozyBlock_627c7f85_59ae_46c0_b130_3ca05975f290.stacked.icon-color-default {
		background: #000;
		}
		#cozyBlock_627c7f85_59ae_46c0_b130_3ca05975f290.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_627c7f85_59ae_46c0_b130_3ca05975f290.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_627c7f85_59ae_46c0_b130_3ca05975f290.fill.icon-color-default svg {
		fill: #000;
		}
		#cozyBlock_627c7f85_59ae_46c0_b130_3ca05975f290.outline.icon-color-default svg {
		stroke: #000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker default fill icon-color-custom" id="cozyBlock_627c7f85_59ae_46c0_b130_3ca05975f290"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"e0fe14fd-de25-46f5-8b4b-76ed0a23a554","iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M4.89648 21.8745H0.361328V7.27002H4.89648V21.8745ZM2.62646 5.27783C1.17627 5.27783 0 4.07666 0 2.62646C1.03799e-08 1.92988 0.276716 1.26183 0.769274 0.769274C1.26183 0.276716 1.92988 0 2.62646 0C3.32305 0 3.9911 0.276716 4.48366 0.769274C4.97621 1.26183 5.25293 1.92988 5.25293 2.62646C5.25293 4.07666 4.07617 5.27783 2.62646 5.27783ZM21.8701 21.8745H17.3447V14.7651C17.3447 13.0708 17.3105 10.8979 14.9868 10.8979C12.6289 10.8979 12.2676 12.7388 12.2676 14.6431V21.8745H7.73731V7.27002H12.0869V9.26221H12.1504C12.7559 8.11475 14.2349 6.90381 16.4414 6.90381C21.0312 6.90381 21.875 9.92627 21.875 13.8521V21.8745H21.8701Z","parentAttrs":{"view":"default","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#0a66c2","bgDefaultColor":"#0a66c2"} -->
<style>
		#cozyBlock_e0fe14fd_de25_46f5_8b4b_76ed0a23a554.stacked.icon-color-default {
		background: #0a66c2;
		}
		#cozyBlock_e0fe14fd_de25_46f5_8b4b_76ed0a23a554.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_e0fe14fd_de25_46f5_8b4b_76ed0a23a554.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_e0fe14fd_de25_46f5_8b4b_76ed0a23a554.fill.icon-color-default svg {
		fill: #0a66c2;
		}
		#cozyBlock_e0fe14fd_de25_46f5_8b4b_76ed0a23a554.outline.icon-color-default svg {
		stroke: #0a66c2;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker default fill icon-color-custom" id="cozyBlock_e0fe14fd_de25_46f5_8b4b_76ed0a23a554"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M4.89648 21.8745H0.361328V7.27002H4.89648V21.8745ZM2.62646 5.27783C1.17627 5.27783 0 4.07666 0 2.62646C1.03799e-08 1.92988 0.276716 1.26183 0.769274 0.769274C1.26183 0.276716 1.92988 0 2.62646 0C3.32305 0 3.9911 0.276716 4.48366 0.769274C4.97621 1.26183 5.25293 1.92988 5.25293 2.62646C5.25293 4.07666 4.07617 5.27783 2.62646 5.27783ZM21.8701 21.8745H17.3447V14.7651C17.3447 13.0708 17.3105 10.8979 14.9868 10.8979C12.6289 10.8979 12.2676 12.7388 12.2676 14.6431V21.8745H7.73731V7.27002H12.0869V9.26221H12.1504C12.7559 8.11475 14.2349 6.90381 16.4414 6.90381C21.0312 6.90381 21.875 9.92627 21.875 13.8521V21.8745H21.8701Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"12509859-1216-4fab-9257-1f3ab64572bb","iconViewBox":{"vx":0,"vy":0,"vw":22,"vh":22},"iconPath":"M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z","parentAttrs":{"view":"default","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)","bgDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)"} -->
<style>
		#cozyBlock_12509859_1216_4fab_9257_1f3ab64572bb.stacked.icon-color-default {
		background: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_12509859_1216_4fab_9257_1f3ab64572bb.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_12509859_1216_4fab_9257_1f3ab64572bb.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_12509859_1216_4fab_9257_1f3ab64572bb.fill.icon-color-default svg {
		fill: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_12509859_1216_4fab_9257_1f3ab64572bb.outline.icon-color-default svg {
		stroke: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker default fill icon-color-custom" id="cozyBlock_12509859_1216_4fab_9257_1f3ab64572bb"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker --></div>
<!-- /wp:cozy-block/social-icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->