<?php
	/**
	 * Title: Header section thirteen with background image cover
	 * Description: This is a header section with background image cover.
	 * Slug: cozy-block-patterns/header-thirteen
	 * Categories: cozy-block-patterns, header
	 */

	$images = array(
		CT_ASSETS_URL . 'images/header_13.jpg',
	);
	?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":1631,"dimRatio":50,"customOverlayColor":"#3e1a34","isUserOverlayColor":true,"minHeight":220,"minHeightUnit":"px","contentPosition":"bottom center","metadata":{"name":"Header"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:220px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#3e1a34"></span><img class="wp-block-cover__image-background wp-image-1631" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:site-logo {"width":60,"align":"center"} /-->

<!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"},":hover":{"color":{"text":"#f49805"}}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:navigation {"customTextColor":"#fffffe","customOverlayTextColor":"#2c2c2c","style":{"typography":{"fontSize":"18px"}},"cozyHoverColor":{"menuText":"#f49805","menuBg":"","submenuText":"","submenuBg":""}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'cozy-addons' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About Us', 'cozy-addons' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-bottom:2px"><!-- wp:cozy-block/social-icon {"blockClientId":"22456c95-7969-40b0-a68c-226c83d644a5","iconSize":13,"iconColorLayout":"custom","iconColor":"#090b10","boxStyles":{"padding":{"top":5,"right":5,"bottom":5,"left":5},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#fffffe","bgColorHover":"#f49805"}} -->
<div class="cozy-block-social-icon stacked fill icon-color-custom" id="cozyBlock_22456c95_7969_40b0_a68c_226c83d644a5"><!-- wp:cozy-block/social-icon-picker {"blockClientId":"21b78dec-2e2e-4bf3-81aa-6a85b1634dd4","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#1877f2","bgDefaultColor":"#1877f2"} -->
<style>
		#cozyBlock_21b78dec_2e2e_4bf3_81aa_6a85b1634dd4.stacked.icon-color-default {
		background: #1877f2;
		}
		#cozyBlock_21b78dec_2e2e_4bf3_81aa_6a85b1634dd4.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_21b78dec_2e2e_4bf3_81aa_6a85b1634dd4.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_21b78dec_2e2e_4bf3_81aa_6a85b1634dd4.fill.icon-color-default svg {
		fill: #1877f2;
		}
		#cozyBlock_21b78dec_2e2e_4bf3_81aa_6a85b1634dd4.outline.icon-color-default svg {
		stroke: #1877f2;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_21b78dec_2e2e_4bf3_81aa_6a85b1634dd4"><svg viewBox="0 0 14 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.5122 14.0625L13.2065 9.53809H8.86523V6.60205C8.86523 5.36426 9.47168 4.15771 11.416 4.15771H13.3896V0.305664C13.3896 0.305664 11.5986 0 9.88623 0C6.31104 0 3.97412 2.16699 3.97412 6.08984V9.53809H0V14.0625H3.97412V25H8.86523V14.0625H12.5122Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"6996071f-bdf6-42e0-a347-7667fc33bbdc","iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)","bgDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)"} -->
<style>
		#cozyBlock_6996071f_bdf6_42e0_a347_7667fc33bbdc.stacked.icon-color-default {
		background: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_6996071f_bdf6_42e0_a347_7667fc33bbdc.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_6996071f_bdf6_42e0_a347_7667fc33bbdc.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_6996071f_bdf6_42e0_a347_7667fc33bbdc.fill.icon-color-default svg {
		fill: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_6996071f_bdf6_42e0_a347_7667fc33bbdc.outline.icon-color-default svg {
		stroke: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_6996071f_bdf6_42e0_a347_7667fc33bbdc"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"18e63c99-53e6-4866-827a-28b3e88aca49","iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"19"},"iconPath":"M21.8107 1.66995L18.5099 17.2364C18.2609 18.335 17.6115 18.6084 16.6887 18.0908L11.6594 14.3848L9.2326 16.7188C8.96405 16.9873 8.73944 17.2119 8.22186 17.2119L8.58319 12.0899L17.9045 3.66702C18.3097 3.30569 17.8166 3.1055 17.2746 3.46683L5.75116 10.7227L0.790218 9.16995C-0.288883 8.83304 -0.308415 8.09085 1.01483 7.57327L20.4191 0.0976854C21.3176 -0.239229 22.1037 0.297881 21.8107 1.66995Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#0088cc","bgDefaultColor":"#0088cc"} -->
<style>
		#cozyBlock_18e63c99_53e6_4866_827a_28b3e88aca49.stacked.icon-color-default {
		background: #0088cc;
		}
		#cozyBlock_18e63c99_53e6_4866_827a_28b3e88aca49.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_18e63c99_53e6_4866_827a_28b3e88aca49.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_18e63c99_53e6_4866_827a_28b3e88aca49.fill.icon-color-default svg {
		fill: #0088cc;
		}
		#cozyBlock_18e63c99_53e6_4866_827a_28b3e88aca49.outline.icon-color-default svg {
		stroke: #0088cc;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_18e63c99_53e6_4866_827a_28b3e88aca49"><svg viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M21.8107 1.66995L18.5099 17.2364C18.2609 18.335 17.6115 18.6084 16.6887 18.0908L11.6594 14.3848L9.2326 16.7188C8.96405 16.9873 8.73944 17.2119 8.22186 17.2119L8.58319 12.0899L17.9045 3.66702C18.3097 3.30569 17.8166 3.1055 17.2746 3.46683L5.75116 10.7227L0.790218 9.16995C-0.288883 8.83304 -0.308415 8.09085 1.01483 7.57327L20.4191 0.0976854C21.3176 -0.239229 22.1037 0.297881 21.8107 1.66995Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"a272d27c-98ed-4bb3-8bce-a091be65e33b","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#000","bgDefaultColor":"#000"} -->
<style>
		#cozyBlock_a272d27c_98ed_4bb3_8bce_a091be65e33b.stacked.icon-color-default {
		background: #000;
		}
		#cozyBlock_a272d27c_98ed_4bb3_8bce_a091be65e33b.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_a272d27c_98ed_4bb3_8bce_a091be65e33b.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_a272d27c_98ed_4bb3_8bce_a091be65e33b.fill.icon-color-default svg {
		fill: #000;
		}
		#cozyBlock_a272d27c_98ed_4bb3_8bce_a091be65e33b.outline.icon-color-default svg {
		stroke: #000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_a272d27c_98ed_4bb3_8bce_a091be65e33b"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker --></div>
<!-- /wp:cozy-block/social-icon --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"fontSize":"16px"},"color":{"text":"#fffffe"}},"backgroundColor":"transparent","className":"cozy-block-pattern__search-bar"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->