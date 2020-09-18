<?php

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) add_action('wp_enqueue_scripts', 'investjp_jquery_enqueue');
function investjp_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    if ($_SERVER['REMOTE_ADDR'] == '::1') {
        /*- JQUERY ON LOCAL  -*/
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.5.1', false);
        /*- JQUERY MIGRATE ON LOCAL  -*/
        wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js',  array('jquery'), '3.1.0', false);
    } else {
        /*- JQUERY ON WEB  -*/
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, '3.5.1', false);
        /*- JQUERY MIGRATE ON WEB  -*/
        wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.3.1.js', array('jquery'), '3.3.1', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
}

/* NOW ALL THE JS FILES */

require_once('includes/wp_enqueue_scripts.php');

/* --------------------------------------------------------------
    ADD CUSTOM WALKER BOOTSTRAP
-------------------------------------------------------------- */

add_action( 'after_setup_theme', 'investjp_register_navwalker' );
function investjp_register_navwalker(){
    require_once('includes/class-wp-bootstrap-navwalker.php');
}

/* --------------------------------------------------------------
    ADD CUSTOM WORDPRESS FUNCTIONS
-------------------------------------------------------------- */

require_once('includes/wp_custom_functions.php');

/* --------------------------------------------------------------
    ADD REQUIRED WORDPRESS PLUGINS
-------------------------------------------------------------- */

require_once('includes/class-tgm-plugin-activation.php');
require_once('includes/class-required-plugins.php');

/* --------------------------------------------------------------
    ADD CUSTOM WOOCOMMERCE OVERRIDES
-------------------------------------------------------------- */
if ( class_exists( 'WooCommerce' ) ) {
    require_once('includes/wp_woocommerce_functions.php');
}

/* --------------------------------------------------------------
    ADD JETPACK COMPATIBILITY
-------------------------------------------------------------- */
if ( defined( 'JETPACK__VERSION' ) ) {
    require_once('includes/wp_jetpack_functions.php');
}

/* --------------------------------------------------------------
    ADD NAV MENUS LOCATIONS
-------------------------------------------------------------- */

register_nav_menus( array(
    'header_menu' => __( 'Menu Header - Principal', 'investjp' )
) );

/* --------------------------------------------------------------
    ADD DYNAMIC SIDEBAR SUPPORT
-------------------------------------------------------------- */

add_action( 'widgets_init', 'investjp_widgets_init' );

function investjp_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Principal', 'investjp' ),
        'id' => 'main_sidebar',
        'description' => __( 'Estos widgets seran vistos en las entradas y páginas del sitio', 'investjp' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebars( 5, array(
        'name'          => __('Pie de Página %d', 'investjp'),
        'id'            => 'sidebar_footer',
        'description'   => __('Estos widgets seran vistos en el pie de página del sitio', 'investjp'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ) );
}

/* --------------------------------------------------------------
    ADD CUSTOM METABOX
-------------------------------------------------------------- */

require_once('includes/wp_custom_metabox.php');

/* --------------------------------------------------------------
    ADD CUSTOM POST TYPE
-------------------------------------------------------------- */

require_once('includes/wp_custom_post_type.php');

/* --------------------------------------------------------------
    ADD CUSTOM THEME CONTROLS
-------------------------------------------------------------- */

require_once('includes/wp_custom_theme_control.php');

/* --------------------------------------------------------------
    ADD CUSTOM IMAGE SIZE
-------------------------------------------------------------- */
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 9999, 400, true);
}
if ( function_exists('add_image_size') ) {
    add_image_size('avatar', 100, 100, true);
    add_image_size('small_avatar', 70, 70, true);
    add_image_size('logo', 200, 40, false);
    add_image_size('logo_larger', 260, 440, false);
    add_image_size('special_large', 384, 410, true);
    add_image_size('special_large_cat', 300, 700, array('center', 'center'));
    add_image_size('banner_img', 1900, 400, array('center', 'center'));
    add_image_size('special_medium', 382, 199, true);
    add_image_size('single_img', 636, 297, true );
}

/* --------------------------------------------------------------
    ADD CUSTOM AJAX HANDLER
-------------------------------------------------------------- */
add_action('wp_ajax_nopriv_send_message', 'send_message_handler');
add_action('wp_ajax_send_message', 'send_message_handler');

function send_message_handler() {
    if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
        error_reporting( E_ALL );
        ini_set( 'display_errors', 1 );
    }

    $full_name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $phone = $_POST['contact_phone'];
    $message = $_POST['contact_comments'];
    $logo = get_template_directory_uri() . '/images/logo.png';
    $grecaptcha = $_POST['g-recaptcha-response'];

    $google_options = get_option('ijp_google_settings');

    if ($grecaptcha) {
        $post_data = http_build_query(
            array(
                'secret' => $google_options['secretkey'],
                'response' => $grecaptcha,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ), '', '&');

        $opts = array('http' =>
                      array(
                          'method'  => 'POST',
                          'header'  => 'Content-type: application/x-www-form-urlencoded',
                          'content' => $post_data
                      )
                     );

        $context  = stream_context_create($opts);
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $captcha_response = json_decode($response);
    }

    if($captcha_response->success == true) {
        ob_start();
        require_once get_theme_file_path( '/templates/template-contact-email.php' );
        $body = ob_get_clean();
        $body = str_replace( [
            '{contact_name}',
            '{contact_email}',
            '{contact_phone}',
            '{contact_comments}',
            '{logo}'
        ], [
            $full_name,
            $email,
            $phone,
            $message,
            $logo
        ], $body );


        require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
        require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer;

        $mail->isHTML( true );
        $mail->Body = $body;
        $mail->CharSet = 'UTF-8';
        $mail->addAddress( 'ochoa.robert1@gmail.com' );
        $mail->setFrom( "noreply@{$_SERVER['SERVER_NAME']}", esc_html( get_bloginfo( 'name' ) ) );
        $mail->Subject = esc_html__( 'Invest JP: Nuevo Mensaje de Contacto', 'holpack' );

        if ( ! $mail->send() ) {
            wp_send_json_success( esc_html__( "Thank You for your interest in our products, you will be contacted shortly.", 'holpack' ), 200 );
            //            wp_send_json_error( esc_html__( 'Your request could not be sent. Please try again.', 'holpack' ), 400 );
        } else {
            wp_send_json_success( esc_html__( "Thank You for your interest in our products, you will be contacted shortly.", 'holpack' ), 200 );
        }

    } else {
        wp_send_json_error( esc_html__( 'Your request2 could not be sent. Please try again.', 'holpack' ), 400 );
    }

    wp_die();
}


/* --------------------------------------------------------------
    ADD CUSTOM AJAX HANDLER
-------------------------------------------------------------- */
add_action('wp_ajax_nopriv_load_locations', 'load_locations_handler');
add_action('wp_ajax_load_locations', 'load_locations_handler');

function load_locations_handler() {
    if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
        error_reporting( E_ALL );
        ini_set( 'display_errors', 1 );
    }
    $json_array = array();

    $arr_locations = new WP_Query(array('post_type' => 'activos', 'posts_per_page' => -1));

    if ($arr_locations->have_posts()) :
    while ($arr_locations->have_posts()) : $arr_locations->the_post();

    $coordinates = get_post_meta(get_the_ID(), 'ijp_activos_hero_desc', true);
    $coordinates = explode(',', $coordinates);
    $log = $coordinates[1];
    $lat = $coordinates[0];
    $json_array[] = array(
        'type' => 'Feature',
        'geometry' => array(
            'type' => 'Point',
            'coordinates' => array((float)$log, (float)$lat)
        ),
        'properties' => array(
            'title' => get_the_title(),
            'description' => get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'img-fluid'))
        )
    );

    endwhile;
    endif;
    wp_reset_query();

    wp_send_json_success( $json_array, 200 );
}
