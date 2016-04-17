<?php
/**
 * WordPress Widget Boilerplate
 *
 * The WordPress Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * @package   Widget_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       (Materialize) Fullscreen Slider
 * Plugin URI:        http://materializecss.com/media.html
 * Description:       Our slider is a simple and elegant image carousel. You can also have captions that will be transitioned on their own depending on their alignment. You can also have indicators that show up on the bottom of the slider.
 * Version:           1.0.0
 * Author:            Jason Kilpatrick
 * Author URI:        @TODO
 * Text Domain:       materialize_fullscreen_slider
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /lang
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */
 
 // Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// TODO: change 'Widget_Name' to the name of your plugin
class materialize_fullscreen_slider extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     *
     * The variable name is used as the text domain when internationalizing strings
     * of text. Its value should match the Text Domain file header in the main
     * widget file.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'materialize_fullscreen_slider';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, instantiates the widget,
	 * loads localization files, and includes necessary stylesheets and JavaScript.
	 */
	public function __construct() {

		// load plugin text domain
		add_action( 'init', array( $this, 'widget_textdomain' ) );

		// Hooks fired when the Widget is activated and deactivated
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			__( '(Materialize) Fullscreen Slider', $this->get_widget_slug() ),
			array(
				'classname'  => $this->get_widget_slug(),
				'description' => __( 'Our slider is a simple and elegant image carousel.', $this->get_widget_slug() )
			)
		);

		// Register admin styles and scripts
		add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );

		// Register site styles and scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_scripts' ) );

		// Refreshing the widget's cached output with each new post
		add_action( 'save_post',    array( $this, 'flush_widget_cache' ) );
		add_action( 'deleted_post', array( $this, 'flush_widget_cache' ) );
		add_action( 'switch_theme', array( $this, 'flush_widget_cache' ) );

	} // end constructor


    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array args  The array of form elements
	 * @param array instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		
		// Check if there is a cached output
		$cache = wp_cache_get( $this->get_widget_slug(), 'widget' );

		if ( !is_array( $cache ) )
			$cache = array();

		if ( ! isset ( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset ( $cache[ $args['widget_id'] ] ) )
			return print $cache[ $args['widget_id'] ];
		
		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;
        
		extract( $instance );

		// TODO: Here is where you manipulate your widget's values based on their input fields
		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;


		$cache[ $args['widget_id'] ] = $widget_string;

		wp_cache_set( $this->get_widget_slug(), $cache, 'widget' );

		print $widget_string;

	} // end widget
	
	
	public function flush_widget_cache() 
	{
    	wp_cache_delete( $this->get_widget_slug(), 'widget' );
	}
	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array new_instance The new instance of values to be generated via the update.
	 * @param array old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		// TODO: Here is where you update your widget's old values with the new, incoming values
        $instance                                   = array();
        
        $instance['pre_title_1']                    = $new_instance['pre_title_1'];
        $instance['title_1']                        = $new_instance['title_1'];
        $instance['sub_title_1']                    = $new_instance['sub_title_1'];
        $instance['link_1_1']                       = $new_instance['link_1_1'];
        $instance['link_1_1_url']                   = $new_instance['link_1_1_url'];
        $instance['link_1_2']                       = $new_instance['link_1_2'];
        $instance['link_1_2_url']                   = $new_instance['link_1_2_url'];
        
        $instance['pre_title_2']                    = $new_instance['pre_title_2'];
        $instance['title_2']                        = $new_instance['title_2'];
        $instance['sub_title_2']                    = $new_instance['sub_title_2'];
        $instance['textarea_2']                     = $new_instance['textarea_2'];
        $instance['link_2_1']                       = $new_instance['link_2_1'];
        $instance['link_2_1_url']                   = $new_instance['link_2_1_url'];
        $instance['link_2_2']                       = $new_instance['link_2_2'];
        $instance['link_2_2_url']                   = $new_instance['link_2_2_url'];
        
        $instance['pre_title_3']                    = $new_instance['pre_title_3'];
        $instance['title_3']                        = $new_instance['title_3'];
        $instance['sub_title_3']                    = $new_instance['sub_title_3'];
        $instance['textarea_3']                     = $new_instance['textarea_3'];
        $instance['link_3_1']                       = $new_instance['link_3_1'];
        $instance['link_3_1_url']                   = $new_instance['link_3_1_url'];
        $instance['link_3_2']                       = $new_instance['link_3_2'];
        $instance['link_3_2_url']                   = $new_instance['link_3_2_url'];
        
        $instance['pre_title_4']                    = $new_instance['pre_title_4'];
        $instance['title_4']                        = $new_instance['title_4'];
        $instance['sub_title_4']                    = $new_instance['sub_title_4'];
        $instance['textarea_4']                     = $new_instance['textarea_4'];
        $instance['link_4_1']                       = $new_instance['link_4_1'];
        $instance['link_4_1_url']                   = $new_instance['link_4_1_url'];
        $instance['link_4_2']                       = $new_instance['link_4_2'];
        $instance['link_4_2_url']                   = $new_instance['link_4_2_url'];
        
        $instance['pre_title_5']                    = $new_instance['pre_title_5'];
        $instance['title_5']                        = $new_instance['title_5'];
        $instance['sub_title_5']                    = $new_instance['sub_title_5'];
        $instance['textarea_5']                     = $new_instance['textarea_5'];
        $instance['link_5_1']                       = $new_instance['link_5_1'];
        $instance['link_5_1_url']                   = $new_instance['link_5_1_url'];
        $instance['link_5_2']                       = $new_instance['link_5_2'];
        $instance['link_5_2_url']                   = $new_instance['link_5_2_url'];

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables
		$instance = wp_parse_args(
			(array) $instance, array(
                
                'pre_title_1'                     => '', 
                'title_1'                         => '', 
                'sub_title_1'                     => '', 
                'link_1_1'                        => '',
                'link_1_1_url'                    => '',
                'link_1_2'                        => '',
                'link_1_2_url'                    => '',
                
                'pre_title_2'                     => '', 
                'title_2'                         => '', 
                'sub_title_2'                     => '',  
                'link_2_1'                        => '',
                'link_2_1_url'                    => '',
                'link_2_2'                        => '',
                'link_2_2_url'                    => '',
                
                'pre_title_3'                     => '', 
                'title_3'                         => '', 
                'sub_title_3'                     => '', 
                'link_3_1'                        => '',
                'link_3_1_url'                    => '',
                'link_3_2'                        => '',
                'link_3_2_url'                    => '',
                
                'pre_title_4'                     => '', 
                'title_4'                         => '', 
                'sub_title_4'                     => '', 
                'link_4_1'                        => '',
                'link_4_1_url'                    => '',
                'link_4_2'                        => '',
                'link_4_2_url'                    => '',
                
                'pre_title_5'                     => '', 
                'title_5'                         => '', 
                'sub_title_5'                     => '', 
                'link_5_1'                        => '',
                'link_5_1_url'                    => '',
                'link_5_2'                        => '',
                'link_5_2_url'                    => '',
            )
		);

		// TODO: Store the values of the widget in their own variable
        
        $pre_title_1                      = $instance['pre_title_1'];
        $title_1                          = $instance['title_1'];
        $sub_title_1                      = $instance['sub_title_1'];
        $link_1_1                         = $instance['link_1_1'];
        $link_1_1_url                     = $instance['link_1_1_url'];
        $link_1_2                         = $instance['link_1_2'];
        $link_1_2_url                     = $instance['link_1_2_url'];
        
        $pre_title_2                      = $instance['pre_title_2'];
        $title_2                          = $instance['title_2'];
        $sub_title_2                      = $instance['sub_title_2'];
        $link_2_1                         = $instance['link_2_1'];
        $link_2_1_url                     = $instance['link_2_1_url'];
        $link_2_2                         = $instance['link_2_2'];
        $link_2_2_url                    = $instance['link_2_2_url'];
        
        $pre_title_3                      = $instance['pre_title_3'];
        $title_3                          = $instance['title_3'];
        $sub_title_3                      = $instance['sub_title_3'];
        $link_3_1                         = $instance['link_3_1'];
        $link_3_1_url                     = $instance['link_3_1_url'];
        $link_3_2                         = $instance['link_3_2'];
        $link_3_2_url                    = $instance['link_3_2_url'];
        
        $pre_title_4                      = $instance['pre_title_4'];
        $title_4                          = $instance['title_4'];
        $sub_title_4                      = $instance['sub_title_4'];
        $link_4_1                         = $instance['link_4_1'];
        $link_4_1_url                     = $instance['link_4_1_url'];
        $link_4_2                         = $instance['link_4_2'];
        $link_4_2_url                    = $instance['link_4_2_url'];
        
        $pre_title_5                      = $instance['pre_title_5'];
        $title_5                          = $instance['title_5'];
        $sub_title_5                      = $instance['sub_title_5'];
        $link_5_1                         = $instance['link_5_1'];
        $link_5_1_url                     = $instance['link_5_1_url'];
        $link_5_2                         = $instance['link_5_2'];
        $link_5_2_url                    = $instance['link_5_2_url'];

		// Display the admin form
		include( plugin_dir_path(__FILE__) . 'views/admin.php' );

	} // end form

	/*--------------------------------------------------*/
	/* Public Functions
	/*--------------------------------------------------*/

	/**
	 * Loads the Widget's text domain for localization and translation.
	 */
	public function widget_textdomain() {

		// TODO be sure to change 'widget-name' to the name of *your* plugin
		load_plugin_textdomain( $this->get_widget_slug(), false, plugin_dir_path( __FILE__ ) . 'lang/' );

	} // end widget_textdomain

	/**
	 * Fired when the plugin is activated.
	 *
	 * @param  boolean $network_wide True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog.
	 */
	public function activate( $network_wide ) {
		// TODO define activation functionality here
	} // end activate

	/**
	 * Fired when the plugin is deactivated.
	 *
	 * @param boolean $network_wide True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog
	 */
	public function deactivate( $network_wide ) {
		// TODO define deactivation functionality here
	} // end deactivate

	/**
	 * Registers and enqueues admin-specific styles.
	 */
	public function register_admin_styles() {

		wp_enqueue_style( $this->get_widget_slug().'-admin-styles', plugins_url( 'css/admin.css', __FILE__ ) );
        
	} // end register_admin_styles

	/**
	 * Registers and enqueues admin-specific JavaScript.
	 */
	public function register_admin_scripts() {

		wp_enqueue_script( $this->get_widget_slug().'-admin-script', plugins_url( 'js/admin.js', __FILE__ ), array('jquery') );

	} // end register_admin_scripts

	/**
	 * Registers and enqueues widget-specific styles.
	 *
	public function register_widget_styles() {

		wp_enqueue_style( $this->get_widget_slug().'-widget-styles', plugins_url( 'css/widget.css', __FILE__ ) );

	} // end register_widget_styles

	/**
	 * Registers and enqueues widget-specific scripts.
	 *
	public function register_widget_scripts() {

		wp_enqueue_script( $this->get_widget_slug().'-script', plugins_url( 'js/widget.js', __FILE__ ), array('jquery') );

	} // end register_widget_scripts */
    
} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', create_function( '', 'register_widget("materialize_fullscreen_slider");' ) );
