<?php
/**
 * This is a custom widget to show the icons.
 * You can show icons with links and engage more with your readers.
 *
 * @package    iwlw_plugin
 * @since      1.0
 * @author     Imtiaz Rayhan
 */

class icons_with_links_widget extends WP_Widget {

    /**
     *  This function sets up the widgets.
     *
     * @since 1.0
     */
    public function __construct() {

        // Setting the widget details.
        $widget_details = array(
            'classname' => 'icons_with_links_widget',
            'description' => 'Help your readers with this amazing Widget'
        );

        // Creating the widget.
        parent::__construct( 'icons_with_links_widget', 'Icons with Links Widget', $widget_details );

        // Load the Options.
        include( IWLW_INCLUDES . 'options.php' );

        // If user enables the widget, loading the stylesheet.
        if ( 1 == $widget_enable ) {

          function iwlw_style() {
              wp_enqueue_style( 'iwlw-style', IWLW_CSS . 'style.css' );
          }

          add_action( 'wp_enqueue_scripts', 'iwlw_style' );

        }

    }

    /**
     * This function displays the widget controls in Widget Admin Screen.
     *
     * @since 1.0
     */
    public function form( $instance ) { ?>

        <h4>There's nothing you have to do here. Just create widget from the <a href="<?php echo admin_url() . 'admin.php?page=icons-with-links-widget'; ?>">option panel</a> and drag the widget. You're all set.</h4>

    <?php }

    /**
     * This function updates the widget control options.
     *
     * @since 1.0
     */
    public function update( $new_instance, $old_instance ) {

        return $new_instance;

    }

    /**
     * This function outputs the widget according to user settings.
     *
     * @since 1.0
     */
    public function widget( $args, $instance ) {

      // Load the options.
      include( IWLW_INCLUDES . 'options.php' );

      // Load icons if widget is enabled.
      if ( 1 == $widget_enable ) { ?>

        <div class = "helpwidget">
            <div class = "widgetheading"><?php echo $widget_title; ?></div>
            <div class = "helpicon">
             <a href="<?php echo $icon_url_1; ?>" target="_blank"><span class="<?php echo $icon_img_class_1; ?>"></span><br>
               <?php echo $icon_text_1; ?></a>
             </a>
            </div>
            <div class = "helpicon">
             <a href="<?php echo $icon_url_2; ?>" target="_blank"><span class="<?php echo $icon_img_class_2; ?>"></span><br>
               <?php echo $icon_text_2; ?></a>
             </a>
            </div>
            <div class = "helpicon">
             <a href="<?php echo $icon_url_3; ?>" target="_blank"><span class="<?php echo $icon_img_class_3; ?>"></span><br>
               <?php echo $icon_text_3; ?></a>
             </a>
            </div>
            <div class = "helpicon">
             <a href="<?php echo $icon_url_4; ?>" target="_blank"><span class="<?php echo $icon_img_class_4; ?>"></span><br>
               <?php echo $icon_text_4; ?></a>
             </a>
            </div>
            <div class = "helpicon">
             <a href="<?php echo $icon_url_5; ?>" target="_blank"><span class="<?php echo $icon_img_class_5; ?>"></span><br>
               <?php echo $icon_text_5; ?></a>
             </a>
            </div>
            <div class = "helpicon">
             <a href="<?php echo $icon_url_6; ?>" target="_blank"><span class="<?php echo $icon_img_class_6; ?>"></span><br>
               <?php echo $icon_text_6; ?></a>
             </a>
            </div>
            <?php if ( 1 == $widget_link ) { ?>
            <div class = 'widgetlink'>
             <a href="https://wordpress.org/plugins/icons-with-links-widget/" target="_blank">Get this Widget</a>
            </div>
            <?php } ?>
        </div>

      <?php

      }

  }

}
