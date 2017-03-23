<?php

/**
 * This file contains the options from the panel.
 *
 * @since 1.0
 */

// Instantiating to work with the options.
$iwlw = TitanFramework::getInstance( 'icons_with_links_widget' );

// These variable stores the default setting set by the user.
$widget_enable = $iwlw->getOption( 'enable_iwlw' );

// This variable stores the widget title set by the user.
$widget_title = $iwlw->getOption ( 'widget_title' );

// This variable stores the widget link option set by the user.
$widget_link = $iwlw->getOption( 'widget_link' );

// These variables stores the icon text set by the user.
$icon_text_1 = $iwlw->getOption( 'first_icon' );
$icon_text_2 = $iwlw->getOption( 'second_icon' );
$icon_text_3 = $iwlw->getOption( 'third_icon' );
$icon_text_4 = $iwlw->getOption( 'fourth_icon' );
$icon_text_5 = $iwlw->getOption( 'fifth_icon' );
$icon_text_6 = $iwlw->getOption( 'sixth_icon' );

// These variables stores the icon URL set by the user.
$icon_url_1 = $iwlw->getOption( 'icon_url1' );
$icon_url_2 = $iwlw->getOption( 'icon_url2' );
$icon_url_3 = $iwlw->getOption( 'icon_url3' );
$icon_url_4 = $iwlw->getOption( 'icon_url4' );
$icon_url_5 = $iwlw->getOption( 'icon_url5' );
$icon_url_6 = $iwlw->getOption( 'icon_url6' );

// These variables stores the icon image selection options.
$icon_img_1 = $iwlw->getOption( 'icon_img_1' );
$icon_img_2 = $iwlw->getOption( 'icon_img_2' );
$icon_img_3 = $iwlw->getOption( 'icon_img_3' );
$icon_img_4 = $iwlw->getOption( 'icon_img_4' );
$icon_img_5 = $iwlw->getOption( 'icon_img_5' );
$icon_img_6 = $iwlw->getOption( 'icon_img_6' );

// Setting Up path for according to selection for icon image 1
if ( $icon_img_1 ) {

		switch ( $icon_img_1 ) {

			case 'icon1':
			  $icon_img_class_1 = 'icon-adjustments';
			  break;

			case 'icon2':
			  $icon_img_class_1 = 'icon-bargraph';
			  break;

			case 'icon3':
			  $icon_img_class_1 = 'icon-camera';
			  break;

			case 'icon4':
			  $icon_img_class_1 = 'icon-caution';
			  break;

			case 'icon5':
			  $icon_img_class_1 = 'icon-chat';
			  break;

			case 'icon6';
			  $icon_img_class_1 = 'icon-cloud';
			  break;

			case 'icon7';
			  $icon_img_class_1 = 'icon-documents';
				break;

			case 'icon8';
				$icon_img_class_1 = 'icon-download';
				break;

			case 'icon9';
				$icon_img_class_1 = 'icon-edit';
				break;

			case 'icon10';
				$icon_img_class_1 = 'icon-envelope';
				break;

			case 'icon11';
				$icon_img_class_1 = 'icon-gears';
				break;

			case 'icon12';
				$icon_img_class_1 = 'icon-hourglass';
				break;

			case 'icon13';
				$icon_img_class_1 = 'icon-linegraph';
				break;

			case 'icon14';
				$icon_img_class_1 = 'icon-lock';
				break;

			case 'icon15';
			  $icon_img_class_1 = 'icon-magnifying-glass';
				break;

			case 'icon16';
			  $icon_img_class_1 = 'icon-pencil';
				break;

			case 'icon17';
			  $icon_img_class_1 = 'icon-search';
				break;

			case 'icon18';
			  $icon_img_class_1 = 'icon-speedometer';
				break;

			case 'icon19';
			  $icon_img_class_1 = 'icon-tools-2';
				break;

			case 'icon20';
			  $icon_img_class_1 = 'icon-tools';
				break;

			case 'icon21';
			  $icon_img_class_1 = 'icon-upload';
				break;

			case 'icon22';
			  $icon_img_class_1 = 'icon-video';
				break;
		}

}

// Setting Up path for according to selection for icon image 2
if ( $icon_img_2 ) {

		switch ( $icon_img_2 ) {

			case 'icon1':
			  $icon_img_class_2 = 'icon-adjustments';
			  break;

			case 'icon2':
			  $icon_img_class_2 = 'icon-bargraph';
			  break;

			case 'icon3':
			  $icon_img_class_2 = 'icon-camera';
			  break;

			case 'icon4':
			  $icon_img_class_2 = 'icon-caution';
			  break;

			case 'icon5':
			  $icon_img_class_2 = 'icon-chat';
			  break;

			case 'icon6';
			  $icon_img_class_2 = 'icon-cloud';
			  break;

			case 'icon7';
			  $icon_img_class_2 = 'icon-documents';
				break;

			case 'icon8';
				$icon_img_class_2 = 'icon-download';
				break;

			case 'icon9';
				$icon_img_class_2 = 'icon-edit';
				break;

			case 'icon10';
				$icon_img_class_2 = 'icon-envelope';
				break;

			case 'icon11';
				$icon_img_class_2 = 'icon-gears';
				break;

			case 'icon12';
				$icon_img_class_2 = 'icon-hourglass';
				break;

			case 'icon13';
				$icon_img_class_2 = 'icon-linegraph';
				break;

			case 'icon14';
				$icon_img_class_2 = 'icon-lock';
				break;

			case 'icon15';
			  $icon_img_class_2 = 'icon-magnifying-glass';
				break;

			case 'icon16';
			  $icon_img_class_2 = 'icon-pencil';
				break;

			case 'icon17';
			  $icon_img_class_2 = 'icon-search';
				break;

			case 'icon18';
			  $icon_img_class_2 = 'icon-speedometer';
				break;

			case 'icon19';
			  $icon_img_class_2 = 'icon-tools-2';
				break;

			case 'icon20';
			  $icon_img_class_2 = 'icon-tools';
				break;

			case 'icon21';
			  $icon_img_class_2 = 'icon-upload';
				break;

			case 'icon22';
			  $icon_img_class_2 = 'icon-video';
				break;
		}

}

// Setting Up path for according to selection for icon image 3
if ( $icon_img_3 ) {

		switch ( $icon_img_3 ) {

			case 'icon1':
			  $icon_img_class_3 = 'icon-adjustments';
			  break;

			case 'icon2':
			  $icon_img_class_3 = 'icon-bargraph';
			  break;

			case 'icon3':
			  $icon_img_class_3 = 'icon-camera';
			  break;

			case 'icon4':
			  $icon_img_class_3 = 'icon-caution';
			  break;

			case 'icon5':
			  $icon_img_class_3 = 'icon-chat';
			  break;

			case 'icon6';
			  $icon_img_class_3 = 'icon-cloud';
			  break;

			case 'icon7';
			  $icon_img_class_3 = 'icon-documents';
				break;

			case 'icon8';
				$icon_img_class_3 = 'icon-download';
				break;

			case 'icon9';
				$icon_img_class_3 = 'icon-edit';
				break;

			case 'icon10';
				$icon_img_class_3 = 'icon-envelope';
				break;

			case 'icon11';
				$icon_img_class_3 = 'icon-gears';
				break;

			case 'icon12';
				$icon_img_class_3 = 'icon-hourglass';
				break;

			case 'icon13';
				$icon_img_class_3 = 'icon-linegraph';
				break;

			case 'icon14';
				$icon_img_class_3 = 'icon-lock';
				break;

			case 'icon15';
			  $icon_img_class_3 = 'icon-magnifying-glass';
				break;

			case 'icon16';
			  $icon_img_class_3 = 'icon-pencil';
				break;

			case 'icon17';
			  $icon_img_class_3 = 'icon-search';
				break;

			case 'icon18';
			  $icon_img_class_3 = 'icon-speedometer';
				break;

			case 'icon19';
			  $icon_img_class_3 = 'icon-tools-2';
				break;

			case 'icon20';
			  $icon_img_class_3 = 'icon-tools';
				break;

			case 'icon21';
			  $icon_img_class_3 = 'icon-upload';
				break;

			case 'icon22';
			  $icon_img_class_3 = 'icon-video';
				break;
		}

}

// Setting Up path for according to selection for icon image 4
if ( $icon_img_4 ) {

		switch ( $icon_img_4 ) {

			case 'icon1':
			  $icon_img_class_4 = 'icon-adjustments';
			  break;

			case 'icon2':
			  $icon_img_class_4 = 'icon-bargraph';
			  break;

			case 'icon3':
			  $icon_img_class_4 = 'icon-camera';
			  break;

			case 'icon4':
			  $icon_img_class_4 = 'icon-caution';
			  break;

			case 'icon5':
			  $icon_img_class_4 = 'icon-chat';
			  break;

			case 'icon6';
			  $icon_img_class_4 = 'icon-cloud';
			  break;

			case 'icon7';
			  $icon_img_class_4 = 'icon-documents';
				break;

			case 'icon8';
				$icon_img_class_4 = 'icon-download';
				break;

			case 'icon9';
				$icon_img_class_4 = 'icon-edit';
				break;

			case 'icon10';
				$icon_img_class_4 = 'icon-envelope';
				break;

			case 'icon11';
				$icon_img_class_4 = 'icon-gears';
				break;

			case 'icon12';
				$icon_img_class_4 = 'icon-hourglass';
				break;

			case 'icon13';
				$icon_img_class_4 = 'icon-linegraph';
				break;

			case 'icon14';
				$icon_img_class_4 = 'icon-lock';
				break;

			case 'icon15';
			  $icon_img_class_4 = 'icon-magnifying-glass';
				break;

			case 'icon16';
			  $icon_img_class_4 = 'icon-pencil';
				break;

			case 'icon17';
			  $icon_img_class_4 = 'icon-search';
				break;

			case 'icon18';
			  $icon_img_class_4 = 'icon-speedometer';
				break;

			case 'icon19';
			  $icon_img_class_4 = 'icon-tools-2';
				break;

			case 'icon20';
			  $icon_img_class_4 = 'icon-tools';
				break;

			case 'icon21';
			  $icon_img_class_4 = 'icon-upload';
				break;

			case 'icon22';
			  $icon_img_class_4 = 'icon-video';
				break;
		}

}

// Setting Up path for according to selection for icon image 5
if ( $icon_img_5 ) {

		switch ( $icon_img_5 ) {

			case 'icon1':
			  $icon_img_class_5 = 'icon-adjustments';
			  break;

			case 'icon2':
			  $icon_img_class_5 = 'icon-bargraph';
			  break;

			case 'icon3':
			  $icon_img_class_5 = 'icon-camera';
			  break;

			case 'icon4':
			  $icon_img_class_5 = 'icon-caution';
			  break;

			case 'icon5':
			  $icon_img_class_5 = 'icon-chat';
			  break;

			case 'icon6';
			  $icon_img_class_5 = 'icon-cloud';
			  break;

			case 'icon7';
			  $icon_img_class_5 = 'icon-documents';
				break;

			case 'icon8';
				$icon_img_class_5 = 'icon-download';
				break;

			case 'icon9';
				$icon_img_class_5 = 'icon-edit';
				break;

			case 'icon10';
				$icon_img_class_5 = 'icon-envelope';
				break;

			case 'icon11';
				$icon_img_class_5 = 'icon-gears';
				break;

			case 'icon12';
				$icon_img_class_5 = 'icon-hourglass';
				break;

			case 'icon13';
				$icon_img_class_5 = 'icon-linegraph';
				break;

			case 'icon14';
				$icon_img_class_5 = 'icon-lock';
				break;

			case 'icon15';
			  $icon_img_class_5 = 'icon-magnifying-glass';
				break;

			case 'icon16';
			  $icon_img_class_5 = 'icon-pencil';
				break;

			case 'icon17';
			  $icon_img_class_5 = 'icon-search';
				break;

			case 'icon18';
			  $icon_img_class_5 = 'icon-speedometer';
				break;

			case 'icon19';
			  $icon_img_class_5 = 'icon-tools-2';
				break;

			case 'icon20';
			  $icon_img_class_5 = 'icon-tools';
				break;

			case 'icon21';
			  $icon_img_class_5 = 'icon-upload';
				break;

			case 'icon22';
			  $icon_img_class_5 = 'icon-video';
				break;
		}

}

// Setting Up path for according to selection for icon image 6
if ( $icon_img_6 ) {

		switch ( $icon_img_6 ) {

			case 'icon1':
			  $icon_img_class_6 = 'icon-adjustments';
			  break;

			case 'icon2':
			  $icon_img_class_6 = 'icon-bargraph';
			  break;

			case 'icon3':
			  $icon_img_class_6 = 'icon-camera';
			  break;

			case 'icon4':
			  $icon_img_class_6 = 'icon-caution';
			  break;

			case 'icon5':
			  $icon_img_class_6 = 'icon-chat';
			  break;

			case 'icon6';
			  $icon_img_class_6 = 'icon-cloud';
			  break;

			case 'icon7';
			  $icon_img_class_6 = 'icon-documents';
				break;

			case 'icon8';
				$icon_img_class_6 = 'icon-download';
				break;

			case 'icon9';
				$icon_img_class_6 = 'icon-edit';
				break;

			case 'icon10';
				$icon_img_class_6 = 'icon-envelope';
				break;

			case 'icon11';
				$icon_img_class_6 = 'icon-gears';
				break;

			case 'icon12';
				$icon_img_class_6 = 'icon-hourglass';
				break;

			case 'icon13';
				$icon_img_class_6 = 'icon-linegraph';
				break;

			case 'icon14';
				$icon_img_class_6 = 'icon-lock';
				break;

			case 'icon15';
			  $icon_img_class_6 = 'icon-magnifying-glass';
				break;

			case 'icon16';
			  $icon_img_class_6 = 'icon-pencil';
				break;

			case 'icon17';
			  $icon_img_class_6 = 'icon-search';
				break;

			case 'icon18';
			  $icon_img_class_6 = 'icon-speedometer';
				break;

			case 'icon19';
			  $icon_img_class_6 = 'icon-tools-2';
				break;

			case 'icon20';
			  $icon_img_class_6 = 'icon-tools';
				break;

			case 'icon21';
			  $icon_img_class_6 = 'icon-upload';
				break;

			case 'icon22';
			  $icon_img_class_6 = 'icon-video';
				break;
		}

}
