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
