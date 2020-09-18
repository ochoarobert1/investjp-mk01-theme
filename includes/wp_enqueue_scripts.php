<?php
function investjp_load_js() {
    $version_remove = NULL;
    if (!is_admin()){
        if ($_SERVER['REMOTE_ADDR'] == '::1') {

            /*- MODERNIZR ON LOCAL  -*/
            //wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array('jquery'), '2.8.3', true);
            //wp_enqueue_script('modernizr');

            /*- BOOTSTRAP ON LOCAL  -*/
            wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
            wp_enqueue_script('bootstrap-bundle');

            /*- JQUERY STICKY ON LOCAL  -*/
            //wp_register_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), '1.0.4', true);
            //wp_enqueue_script('sticky');

            /*- LETTERING  -*/
            //wp_register_script('lettering', get_template_directory_uri() . '/js/jquery.lettering.js', array('jquery'), '0.7.0', true);
            //wp_enqueue_script('lettering');

            /*- IMAGESLOADED ON LOCAL  -*/
            //wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array('jquery'), '4.1.4', true);
            //wp_enqueue_script('imagesloaded');

            /*- ISOTOPE ON LOCAL  -*/
            //wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
            //wp_enqueue_script('isotope');

            /*- MASONRY ON LOCAL  -*/
            //wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '4.2.2', true);
            //wp_enqueue_script('masonry');

            /*- OWL ON LOCAL -*/
            //wp_register_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
            //wp_enqueue_script('owl-js');

            /*- AOS ON LOCAL -*/
            wp_register_script('aos-js', get_template_directory_uri() . '/js/aos.js', array('jquery'), '3.0.0', true);
            wp_enqueue_script('aos-js');

        } else {

            /*- MODERNIZR -*/
            //wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array('jquery'), '2.8.3', true);
            //wp_enqueue_script('modernizr');

            /*- POPPER -*/
            wp_register_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '4.5.2', true);
            wp_enqueue_script('bootstrap-bundle');

            /*- BOOTSTRAP -*/
            wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
            wp_enqueue_script('bootstrap');

            /*- JQUERY STICKY -*/
            //wp_register_script('sticky', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js', array('jquery'), '1.0.4', true);
            //wp_enqueue_script('sticky');

            /*- LETTERING  -*/
            //wp_register_script('lettering', 'https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js', array('jquery'), '0.7.0', true);
            //wp_enqueue_script('lettering');

            /*- IMAGESLOADED -*/
            //wp_register_script('imagesloaded', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array('jquery'), '4.1.4', true);
            //wp_enqueue_script('imagesloaded');

            /*- ISOTOPE -*/
            //wp_register_script('isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
            //wp_enqueue_script('isotope');

            /*- MASONRY -*/
            //wp_register_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), '4.2.2', true);
            //wp_enqueue_script('masonry');

            /*- OWL CAROUSEL -*/
            //wp_register_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);
            //wp_enqueue_script('owl-js');

            /*- AOS -*/
            wp_register_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'), '2.3.4', true);
            wp_enqueue_script('aos-js');

        }

        /*- SWIPER JS -*/
        //wp_register_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], '6.1.2', true);
        //wp_enqueue_script('swiper-js');

        /*- MAPBOX FUNCTIONS -*/
        wp_register_script('mapbox-js', 'https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js', array('jquery'), '1.12.0', true);
        wp_enqueue_script('mapbox-js');

        /*- MAIN FUNCTIONS -*/
        wp_register_script('main-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), $version_remove, true);
        wp_enqueue_script('main-functions');

        if ( is_page( array( 'home', 'inicio', 'contact', 'contacto' ) ) ) {
            /*- SWEETALERT -*/
            wp_register_script( 'sweetalert-js', 'https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js', [], '2.1.2', true );
            wp_enqueue_script('sweetalert-js');

            /*- GOOGLE RECAPTCHA -*/
            wp_register_script('recaptcha-js', 'https://www.google.com/recaptcha/api.js', array('jquery'), '3.0.0', true);
            wp_enqueue_script('recaptcha-js');

            /*- FORM FUNCTIONS -*/
            wp_register_script('form-functions', get_template_directory_uri() . '/js/form-functions.min.js', array('jquery', 'recaptcha-js'), $version_remove, true);
            wp_enqueue_script('form-functions');
        }

        /* LOCALIZE MAIN SHORTCODE SCRIPT */
        wp_localize_script( 'main-functions', 'custom_admin_url', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'marker_url' => get_template_directory_uri() . '/images/marker.png',
            'error_nombre' => __('Error: El nombre no puede estar vacio', 'investjp'),
            'invalid_nombre' => __('Error: El nombre debe ser válido', 'investjp'),
            'error_email' => __('Error: El correo no puede estar vacio', 'investjp'),
            'invalid_email' => __('Error: El correo tiene un formato inválido', 'investjp'),
            'error_phone' => __('Error: El Teléfono no puede estar vacio', 'investjp'),
            'invalid_phone' => __('Error: El Teléfono tiene un formato inválido', 'investjp'),
            'error_message' => __('Error: El Mensaje no puede estar vacio', 'investjp'),
            'success_form' => __("Gracias por su mensaje, en breve serás contactado", 'investjp'),
            'error_form' => __("Error: Hubo un problema inesperado, por favor, intentalo de nuevo", 'investjp'),
            'success_title' => __("Envío exitoso", 'investjp'),
            'error_title' => __("Error en Envío", 'investjp')
        ));

        if ( is_single('post') && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        } else {
            wp_deregister_script( 'comment-reply' );
        }
    }
}

add_action('wp_enqueue_scripts', 'investjp_load_js');
