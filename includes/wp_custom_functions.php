<?php

/* --------------------------------------------------------------
    ADD THEME SUPPORT
-------------------------------------------------------------- */
load_theme_textdomain( 'investjp', get_template_directory() . '/languages' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ));
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-background',
                  array(
                      'default-image' => '',
                      'default-color' => 'ffffff',
                      'wp-head-callback' => '_custom_background_cb',
                      'admin-head-callback' => '',
                      'admin-preview-callback' => ''
                  )
                 );
add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
) );
add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

/* ADD SHORTCODE SUPPORT TO TEXT WIDGETS */
add_filter('widget_text', 'do_shortcode');

/* --------------------------------------------------------------
    SECURITY ISSUES
-------------------------------------------------------------- */
/* REMOVE WORDPRESS VERSION */
function investjp_remove_version() {
    return '';
}
add_filter('the_generator', 'investjp_remove_version');

/* CHANGE WORDPRESS ERROR ON LOGIN */
function investjp_wordpress_errors(){
    return __('Valores Incorrectos, intente de nuevo', 'investjp');
}
add_filter( 'login_errors', 'investjp_wordpress_errors' );

/* DISABLE WORDPRESS RSS FEEDS */
function investjp_disable_feed() {
    wp_die( __('No hay RSS Feeds disponibles', 'investjp') );
}

add_action('do_feed', 'investjp_disable_feed', 1);
add_action('do_feed_rdf', 'investjp_disable_feed', 1);
add_action('do_feed_rss', 'investjp_disable_feed', 1);
add_action('do_feed_rss2', 'investjp_disable_feed', 1);
add_action('do_feed_atom', 'investjp_disable_feed', 1);

/* --------------------------------------------------------------
    IMAGES RESPONSIVE ON ATTACHMENT IMAGES
-------------------------------------------------------------- */
function image_tag_class($class) {
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );

/* --------------------------------------------------------------
    ADD NAV ITEM TO MENU AND LINKS
-------------------------------------------------------------- */
function special_nav_class($classes, $item){
    $classes[] = 'nav-item';
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/* --------------------------------------------------------------
    CUSTOM ADMIN LOGIN
-------------------------------------------------------------- */

function custom_admin_styles() {
    $version_remove = NULL;
    wp_register_style('wp-admin-style', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css', false, $version_remove, 'all');
    wp_enqueue_style('wp-admin-style');
}
add_action('login_head', 'custom_admin_styles');
add_action('admin_init', 'custom_admin_styles');

/* --------------------------------------------------------------
    CUSTOM ADMIN LOGO
-------------------------------------------------------------- */

function investjp_custom_logo() {
    ob_start();
?>
<style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
        background-image: url(<?php echo get_template_directory_uri('/');
        ?>/images/icon-wp.png) !important;
        background-size: cover;
        background-position: 0 0;
        color: rgba(0, 0, 0, 0);
    }

    #wpadminbar #wp-admin-bar-wp-logo.hover>.ab-item .ab-icon {
        background-position: 0 0;
    }

</style>
<?php
    $content = ob_get_clean();
    echo $content;
}

add_action('wp_before_admin_bar_render', 'investjp_custom_logo');


/* --------------------------------------------------------------
    CUSTOM ADMIN FOOTER
-------------------------------------------------------------- */
function dashboard_footer() {
    echo '<span id="footer-thankyou">';
    _e ('Gracias por crear con ', 'investjp' );
    echo '<a href="http://wordpress.org/" target="_blank">WordPress.</a> - ';
    _e ('Tema desarrollado por ', 'investjp' );
    echo '<a href="http://robertochoa.com.ve/?utm_source=footer_admin&utm_medium=link&utm_content=investjp" target="_blank">Robert Ochoa</a></span>';
}
add_filter('admin_footer_text', 'dashboard_footer');



// Creating the widget
class custom_social_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

            // Base ID of your widget
            'custom_social_widget',

            // Widget name will appear in UI
            __('Social Networks Widget', 'investjp'),

            // Widget description
            array( 'description' => __( 'Social Networks added in customize', 'investjp' ), )
        );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        $social_options = get_option('ijp_social_settings');

?>
<div class="social-header">
    <?php if ((isset($social_options['facebook'])) && ($social_options['facebook'] != '')) { ?>
    <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'investjp'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
    <?php } ?>

    <?php if ((isset($social_options['twitter'])) && ($social_options['twitter'] != '')) { ?>
    <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'investjp'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
    <?php } ?>

    <?php if ((isset($social_options['instagram'])) && ($social_options['instagram'] != '')) { ?>
    <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'investjp'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
    <?php } ?>

    <?php if ((isset($social_options['linkedin'])) && ($social_options['linkedin'] != '')) { ?>
    <a href="<?php echo $social_options['linkedin']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'investjp'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
    <?php } ?>

    <?php if ((isset($social_options['youtube'])) && ($social_options['youtube'] != '')) { ?>
    <a href="<?php echo $social_options['youtube']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'investjp'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
    <?php } ?>
</div>
<?php
        // This is where you run the code and display the output
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'investjp' );
        }
        // Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

    // Class wpb_widget ends here
}


// Register and load the widget
function wpb_load_widget() {
    register_widget( 'custom_social_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
