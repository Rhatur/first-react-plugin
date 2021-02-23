<?php

/**
 * Fired during plugin activation
 *
 * @link       magic-bears-studio.com/arthur
 * @since      1.0.0
 *
 * @package    Frp
 * @subpackage Frp/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Frp
 * @subpackage Frp/includes
 * @author     Arthur <arthur@mbstudio.email>
 */
class Frp_Activator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        $saved_page_args = array(
            'post_title'   => __('React Testing on wordpress', 'mbs'),
            'post_content' => '[mbs-react]',
            'post_status'  => 'publish',
            'post_type'    => 'page'
        );
    }
}
