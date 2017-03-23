<?php

$iwlw = TitanFramework::getInstance( 'icons_with_links_widget' );

$iwlwWidget = $iwlw->createAdminPanel (
	array (
		'name' => 'Icons with Links Widget',
		'icon' => 'dashicons-art'
		)
	);

$settings = $iwlwWidget->createTab (
	array (
		'name' => 'Settings'
		)
	);

$create = $iwlwWidget->createTab (
	array (
		'name' => 'Create'
		)
	);

$iwlwWidget->createOption (
	array (
		'type' => 'save'
		)
	);

$settings->createOption (
	array (
		'name' => 'Enable Icons with Links Widget',
		'id' => 'enable_iwlw',
		'type' => 'enable'
		)
	);

$settings->createOption (
	array (
		'name' => 'Widget Title',
		'id'   => 'widget_title',
		'type' => 'text',
		'desc' => 'Widget title to show.'
		)
);

$settings->createOption (
	array (
		'name'    => 'Icon Color',
		'id'      => 'icon_color',
		'type'    => 'color',
		'desc'    => 'Choose a color for the icons',
		'default' => '#000000'
		)
);

$settings->createOption (
	array(
		'name' 		=> 'Show Widget Plugin Link',
		'id'   		=> 'widget_link',
		'type' 		=> 'enable',
		'desc' 		=> 'This will add a very small link to the Widget plugin.',
		'default' => true
	)
);

$iwlw->createCSS(
	'.icon-mobile:before {
	    content: "\e000000";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-laptop:before {
	    content: "\e001";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-desktop:before {
	    content: "\e002";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-tablet:before {
	    content: "\e003";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-phone:before {
	    content: "\e004";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-document:before {
	    content: "\e005";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-documents:before {
	    content: "\e006";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-search:before {
	    content: "\e007";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-clipboard:before {
	    content: "\e008";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-newspaper:before {
	    content: "\e009";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-notebook:before {
	    content: "\e00a";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-book-open:before {
	    content: "\e00b";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-browser:before {
	    content: "\e00c";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-calendar:before {
	    content: "\e00d";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-presentation:before {
	    content: "\e00e";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-picture:before {
	    content: "\e00f";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-pictures:before {
	    content: "\e010";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-video:before {
	    content: "\e011";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-camera:before {
	    content: "\e012";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-printer:before {
	    content: "\e013";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-toolbox:before {
	    content: "\e014";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-briefcase:before {
	    content: "\e015";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-wallet:before {
	    content: "\e016";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-gift:before {
	    content: "\e017";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-bargraph:before {
	    content: "\e018";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-grid:before {
	    content: "\e019";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-expand:before {
	    content: "\e01a";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-focus:before {
	    content: "\e01b";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-edit:before {
	    content: "\e01c";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-adjustments:before {
	    content: "\e01d";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-ribbon:before {
	    content: "\e01e";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-hourglass:before {
	    content: "\e01f";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-lock:before {
	    content: "\e020";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-megaphone:before {
	    content: "\e021";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-shield:before {
	    content: "\e022";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-trophy:before {
	    content: "\e023";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-flag:before {
	    content: "\e024";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-map:before {
	    content: "\e025";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-puzzle:before {
	    content: "\e026";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-basket:before {
	    content: "\e027";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-envelope:before {
	    content: "\e028";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-streetsign:before {
	    content: "\e029";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-telescope:before {
	    content: "\e02a";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-gears:before {
	    content: "\e02b";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-key:before {
	    content: "\e02c";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-paperclip:before {
	    content: "\e02d";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-attachment:before {
	    content: "\e02e";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-pricetags:before {
	    content: "\e02f";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-lightbulb:before {
	    content: "\e030";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-layers:before {
	    content: "\e031";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-pencil:before {
	    content: "\e032";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-tools:before {
	    content: "\e033";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-tools-2:before {
	    content: "\e034";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-scissors:before {
	    content: "\e035";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-paintbrush:before {
	    content: "\e036";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-magnifying-glass:before {
	    content: "\e037";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-circle-compass:before {
	    content: "\e038";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-linegraph:before {
	    content: "\e039";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-mic:before {
	    content: "\e03a";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-strategy:before {
	    content: "\e03b";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-beaker:before {
	    content: "\e03c";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-caution:before {
	    content: "\e03d";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-recycle:before {
	    content: "\e03e";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-anchor:before {
	    content: "\e03f";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-profile-male:before {
	    content: "\e040";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-profile-female:before {
	    content: "\e041";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-bike:before {
	    content: "\e042";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-wine:before {
	    content: "\e043";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-hotairballoon:before {
	    content: "\e044";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-globe:before {
	    content: "\e045";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-genius:before {
	    content: "\e046";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-map-pin:before {
	    content: "\e047";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-dial:before {
	    content: "\e048";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-chat:before {
	    content: "\e049";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-heart:before {
	    content: "\e04a";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-cloud:before {
	    content: "\e04b";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-upload:before {
	    content: "\e04c";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-download:before {
	    content: "\e04d";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-target:before {
	    content: "\e04e";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-hazardous:before {
	    content: "\e04f";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-piechart:before {
	    content: "\e050";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-speedometer:before {
	    content: "\e051";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-global:before {
	    content: "\e052";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-compass:before {
	    content: "\e053";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-lifesaver:before {
	    content: "\e054";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-clock:before {
	    content: "\e055";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-aperture:before {
	    content: "\e056";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-quote:before {
	    content: "\e057";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-scope:before {
	    content: "\e058";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-alarmclock:before {
	    content: "\e059";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-refresh:before {
	    content: "\e05a";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-happy:before {
	    content: "\e05b";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-sad:before {
	    content: "\e05c";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-facebook:before {
	    content: "\e05d";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-twitter:before {
	    content: "\e05e";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-googleplus:before {
	    content: "\e05f";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-rss:before {
	    content: "\e060";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-tumblr:before {
	    content: "\e061";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-linkedin:before {
	    content: "\e062";
	    color: $icon_color;
	    font-size: 32px;
	}
	.icon-dribbble:before {
	    content: "\e063";
	    color: $icon_color;
	    font-size: 32px;
	}
'
	);

$create->createOption (
	array (
		'name' => 'First Icon',
		'type' => 'heading',
		'desc' => 'Set up your first icon here.'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Text',
		'id' => 'first_icon',
		'type' => 'text',
		'desc' => 'This is the icon text.',
 		'default' => 'Icon text 1.'
		)
	);

$create->createOption (
	array(
		'name' => 'Icon URL',
		'id' => 'icon_url1',
		'type' => 'text',
		'desc' => 'This is the URL for the icon text'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Image',
		'id' => 'icon_img_1',
		'type' => 'radio-image',
		'desc' => 'Select icon image here.',
		'options' => array (
			'icon1' => IWLW_IMAGES . 'icons/adjustments_32px.png',
			'icon2' => IWLW_IMAGES . 'icons/bargraph_32px.png',
			'icon3' => IWLW_IMAGES . 'icons/camera_32px.png',
			'icon4' => IWLW_IMAGES . 'icons/caution_32px.png',
			'icon5' => IWLW_IMAGES . 'icons/chat_32px.png',
			'icon6' => IWLW_IMAGES . 'icons/cloud_32px.png',
			'icon7' => IWLW_IMAGES . 'icons/documents_32px.png',
			'icon8' => IWLW_IMAGES . 'icons/download_32px.png',
			'icon9' => IWLW_IMAGES . 'icons/edit_32px.png',
			'icon10' => IWLW_IMAGES . 'icons/envelope_32px.png',
			'icon11' => IWLW_IMAGES . 'icons/gears_32px.png',
			'icon12' => IWLW_IMAGES . 'icons/hourglass_32px.png',
			'icon13' => IWLW_IMAGES . 'icons/linegraph_32px.png',
			'icon14' => IWLW_IMAGES . 'icons/lock_32px.png',
			'icon15' => IWLW_IMAGES . 'icons/magnifying-glass_32px.png',
			'icon16' => IWLW_IMAGES . 'icons/pencil_32px.png',
			'icon17' => IWLW_IMAGES . 'icons/search_32px.png',
			'icon18' => IWLW_IMAGES . 'icons/speedometer_32px.png',
			'icon19' => IWLW_IMAGES . 'icons/tools-2_32px.png',
			'icon20' => IWLW_IMAGES . 'icons/tools_32px.png',
			'icon21' => IWLW_IMAGES . 'icons/upload_32px.png',
			'icon22' => IWLW_IMAGES . 'icons/video_32px.png'
			)
		)
	);

$create->createOption (
	array (
		'name' => 'Second Icon',
		'type' => 'heading',
		'desc' => 'Set up your second icon here.'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Text',
		'id' => 'second_icon',
		'type' => 'text',
		'desc' => 'This is the icon text.',
		'default' => 'Icon text 2.'
		)
	);

$create->createOption (
	array(
		'name' => 'Icon URL',
		'id' => 'icon_url2',
		'type' => 'text',
		'desc' => 'This is the URL for the icon text'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Image',
		'id' => 'icon_img_2',
		'type' => 'radio-image',
		'desc' => 'Select icon image here.',
		'options' => array (
			'icon1' => IWLW_IMAGES . 'icons/adjustments_32px.png',
			'icon2' => IWLW_IMAGES . 'icons/bargraph_32px.png',
			'icon3' => IWLW_IMAGES . 'icons/camera_32px.png',
			'icon4' => IWLW_IMAGES . 'icons/caution_32px.png',
			'icon5' => IWLW_IMAGES . 'icons/chat_32px.png',
			'icon6' => IWLW_IMAGES . 'icons/cloud_32px.png',
			'icon7' => IWLW_IMAGES . 'icons/documents_32px.png',
			'icon8' => IWLW_IMAGES . 'icons/download_32px.png',
			'icon9' => IWLW_IMAGES . 'icons/edit_32px.png',
			'icon10' => IWLW_IMAGES . 'icons/envelope_32px.png',
			'icon11' => IWLW_IMAGES . 'icons/gears_32px.png',
			'icon12' => IWLW_IMAGES . 'icons/hourglass_32px.png',
			'icon13' => IWLW_IMAGES . 'icons/linegraph_32px.png',
			'icon14' => IWLW_IMAGES . 'icons/lock_32px.png',
			'icon15' => IWLW_IMAGES . 'icons/magnifying-glass_32px.png',
			'icon16' => IWLW_IMAGES . 'icons/pencil_32px.png',
			'icon17' => IWLW_IMAGES . 'icons/search_32px.png',
			'icon18' => IWLW_IMAGES . 'icons/speedometer_32px.png',
			'icon19' => IWLW_IMAGES . 'icons/tools-2_32px.png',
			'icon20' => IWLW_IMAGES . 'icons/tools_32px.png',
			'icon21' => IWLW_IMAGES . 'icons/upload_32px.png',
			'icon22' => IWLW_IMAGES . 'icons/video_32px.png'
			)
		)
	);

$create->createOption (
	array (
		'name' => 'Third Icon',
		'type' => 'heading',
		'desc' => 'Set up your third icon here.'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Text',
		'id' => 'third_icon',
		'type' => 'text',
		'desc' => 'This is the icon text.',
		'default' => 'Icon text 3.'
		)
	);

$create->createOption (
	array(
		'name' => 'Icon URL',
		'id' => 'icon_url3',
		'type' => 'text',
		'desc' => 'This is the URL for the icon text'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Image',
		'id' => 'icon_img_3',
		'type' => 'radio-image',
		'desc' => 'Select icon image here.',
		'options' => array (
			'icon1' => IWLW_IMAGES . 'icons/adjustments_32px.png',
			'icon2' => IWLW_IMAGES . 'icons/bargraph_32px.png',
			'icon3' => IWLW_IMAGES . 'icons/camera_32px.png',
			'icon4' => IWLW_IMAGES . 'icons/caution_32px.png',
			'icon5' => IWLW_IMAGES . 'icons/chat_32px.png',
			'icon6' => IWLW_IMAGES . 'icons/cloud_32px.png',
			'icon7' => IWLW_IMAGES . 'icons/documents_32px.png',
			'icon8' => IWLW_IMAGES . 'icons/download_32px.png',
			'icon9' => IWLW_IMAGES . 'icons/edit_32px.png',
			'icon10' => IWLW_IMAGES . 'icons/envelope_32px.png',
			'icon11' => IWLW_IMAGES . 'icons/gears_32px.png',
			'icon12' => IWLW_IMAGES . 'icons/hourglass_32px.png',
			'icon13' => IWLW_IMAGES . 'icons/linegraph_32px.png',
			'icon14' => IWLW_IMAGES . 'icons/lock_32px.png',
			'icon15' => IWLW_IMAGES . 'icons/magnifying-glass_32px.png',
			'icon16' => IWLW_IMAGES . 'icons/pencil_32px.png',
			'icon17' => IWLW_IMAGES . 'icons/search_32px.png',
			'icon18' => IWLW_IMAGES . 'icons/speedometer_32px.png',
			'icon19' => IWLW_IMAGES . 'icons/tools-2_32px.png',
			'icon20' => IWLW_IMAGES . 'icons/tools_32px.png',
			'icon21' => IWLW_IMAGES . 'icons/upload_32px.png',
			'icon22' => IWLW_IMAGES . 'icons/video_32px.png'
			)
		)
	);

$create->createOption (
	array (
		'name' => 'Fourth Icon',
		'type' => 'heading',
		'desc' => 'Set up your fourth icon here.'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Text',
		'id' => 'fourth_icon',
		'type' => 'text',
		'desc' => 'This is the icon text.',
		'default' => 'Icon text 4.'
		)
	);

$create->createOption (
	array(
		'name' => 'Icon URL',
		'id' => 'icon_url4',
		'type' => 'text',
		'desc' => 'This is the URL for the icon text'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Image',
		'id' => 'icon_img_4',
		'type' => 'radio-image',
		'desc' => 'Select icon image here.',
		'options' => array (
			'icon1' => IWLW_IMAGES . 'icons/adjustments_32px.png',
			'icon2' => IWLW_IMAGES . 'icons/bargraph_32px.png',
			'icon3' => IWLW_IMAGES . 'icons/camera_32px.png',
			'icon4' => IWLW_IMAGES . 'icons/caution_32px.png',
			'icon5' => IWLW_IMAGES . 'icons/chat_32px.png',
			'icon6' => IWLW_IMAGES . 'icons/cloud_32px.png',
			'icon7' => IWLW_IMAGES . 'icons/documents_32px.png',
			'icon8' => IWLW_IMAGES . 'icons/download_32px.png',
			'icon9' => IWLW_IMAGES . 'icons/edit_32px.png',
			'icon10' => IWLW_IMAGES . 'icons/envelope_32px.png',
			'icon11' => IWLW_IMAGES . 'icons/gears_32px.png',
			'icon12' => IWLW_IMAGES . 'icons/hourglass_32px.png',
			'icon13' => IWLW_IMAGES . 'icons/linegraph_32px.png',
			'icon14' => IWLW_IMAGES . 'icons/lock_32px.png',
			'icon15' => IWLW_IMAGES . 'icons/magnifying-glass_32px.png',
			'icon16' => IWLW_IMAGES . 'icons/pencil_32px.png',
			'icon17' => IWLW_IMAGES . 'icons/search_32px.png',
			'icon18' => IWLW_IMAGES . 'icons/speedometer_32px.png',
			'icon19' => IWLW_IMAGES . 'icons/tools-2_32px.png',
			'icon20' => IWLW_IMAGES . 'icons/tools_32px.png',
			'icon21' => IWLW_IMAGES . 'icons/upload_32px.png',
			'icon22' => IWLW_IMAGES . 'icons/video_32px.png'
			)
		)
	);

$create->createOption (
	array (
		'name' => 'Fifth Icon',
		'type' => 'heading',
		'desc' => 'Set up your fifth icon here.'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Text',
		'id' => 'fifth_icon',
		'type' => 'text',
		'desc' => 'This is the icon text.',
		'default' => 'Icon text 5.'
		)
	);

$create->createOption (
	array(
		'name' => 'Icon URL',
		'id' => 'icon_url5',
		'type' => 'text',
		'desc' => 'This is the URL for the icon text'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Image',
		'id' => 'icon_img_5',
		'type' => 'radio-image',
		'desc' => 'Select icon image here.',
		'options' => array (
			'icon1' => IWLW_IMAGES . 'icons/adjustments_32px.png',
			'icon2' => IWLW_IMAGES . 'icons/bargraph_32px.png',
			'icon3' => IWLW_IMAGES . 'icons/camera_32px.png',
			'icon4' => IWLW_IMAGES . 'icons/caution_32px.png',
			'icon5' => IWLW_IMAGES . 'icons/chat_32px.png',
			'icon6' => IWLW_IMAGES . 'icons/cloud_32px.png',
			'icon7' => IWLW_IMAGES . 'icons/documents_32px.png',
			'icon8' => IWLW_IMAGES . 'icons/download_32px.png',
			'icon9' => IWLW_IMAGES . 'icons/edit_32px.png',
			'icon10' => IWLW_IMAGES . 'icons/envelope_32px.png',
			'icon11' => IWLW_IMAGES . 'icons/gears_32px.png',
			'icon12' => IWLW_IMAGES . 'icons/hourglass_32px.png',
			'icon13' => IWLW_IMAGES . 'icons/linegraph_32px.png',
			'icon14' => IWLW_IMAGES . 'icons/lock_32px.png',
			'icon15' => IWLW_IMAGES . 'icons/magnifying-glass_32px.png',
			'icon16' => IWLW_IMAGES . 'icons/pencil_32px.png',
			'icon17' => IWLW_IMAGES . 'icons/search_32px.png',
			'icon18' => IWLW_IMAGES . 'icons/speedometer_32px.png',
			'icon19' => IWLW_IMAGES . 'icons/tools-2_32px.png',
			'icon20' => IWLW_IMAGES . 'icons/tools_32px.png',
			'icon21' => IWLW_IMAGES . 'icons/upload_32px.png',
			'icon22' => IWLW_IMAGES . 'icons/video_32px.png'
			)
		)
	);

$create->createOption (
	array (
		'name' => 'Sixth Icon',
		'type' => 'heading',
		'desc' => 'Set up your sixth icon here.'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Text',
		'id' => 'sixth_icon',
		'type' => 'text',
		'desc' => 'This is the icon text.',
		'default' => 'Icon text 6.'
		)
	);

$create->createOption (
	array(
		'name' => 'Icon URL',
		'id' => 'icon_url6',
		'type' => 'text',
		'desc' => 'This is the URL for the icon text'
		)
	);

$create->createOption (
	array (
		'name' => 'Icon Image',
		'id' => 'icon_img_6',
		'type' => 'radio-image',
		'desc' => 'Select icon image here.',
		'options' => array (
			'icon1' => IWLW_IMAGES . 'icons/adjustments_32px.png',
			'icon2' => IWLW_IMAGES . 'icons/bargraph_32px.png',
			'icon3' => IWLW_IMAGES . 'icons/camera_32px.png',
			'icon4' => IWLW_IMAGES . 'icons/caution_32px.png',
			'icon5' => IWLW_IMAGES . 'icons/chat_32px.png',
			'icon6' => IWLW_IMAGES . 'icons/cloud_32px.png',
			'icon7' => IWLW_IMAGES . 'icons/documents_32px.png',
			'icon8' => IWLW_IMAGES . 'icons/download_32px.png',
			'icon9' => IWLW_IMAGES . 'icons/edit_32px.png',
			'icon10' => IWLW_IMAGES . 'icons/envelope_32px.png',
			'icon11' => IWLW_IMAGES . 'icons/gears_32px.png',
			'icon12' => IWLW_IMAGES . 'icons/hourglass_32px.png',
			'icon13' => IWLW_IMAGES . 'icons/linegraph_32px.png',
			'icon14' => IWLW_IMAGES . 'icons/lock_32px.png',
			'icon15' => IWLW_IMAGES . 'icons/magnifying-glass_32px.png',
			'icon16' => IWLW_IMAGES . 'icons/pencil_32px.png',
			'icon17' => IWLW_IMAGES . 'icons/search_32px.png',
			'icon18' => IWLW_IMAGES . 'icons/speedometer_32px.png',
			'icon19' => IWLW_IMAGES . 'icons/tools-2_32px.png',
			'icon20' => IWLW_IMAGES . 'icons/tools_32px.png',
			'icon21' => IWLW_IMAGES . 'icons/upload_32px.png',
			'icon22' => IWLW_IMAGES . 'icons/video_32px.png'

			)
		)
	);
