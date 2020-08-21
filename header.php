<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//facebook.com" crossorigin />
    <link rel="dns-prefetch" href="//connect.facebook.net" crossorigin />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" crossorigin />
    <link rel="dns-prefetch" href="//google-analytics.com" crossorigin />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#454545" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#454545" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <meta name="author" content="Invest JP Siglo XXI S.L." />
    <meta name="copyright" content="https://investjp.com" />
    <meta name="geo.position" content="40.4302569,-3.6947157" />
    <meta name="ICBM" content="40.4302569,-3.6947157" />
    <meta name="geo.region" content="ES" />
    <meta name="geo.placename" content="Calle Almagro, 30, 28010 Madrid, España" />
    <meta name="DC.title" content="<?php if (is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if ( is_single('post') && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <?php wp_body_open(); ?>
    <div id="fb-root"></div>
    <?php $header_options = get_option('ijp_header_settings'); ?>
    <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row no-gutters">
            <div class="top-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="top-header-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <?php if ($header_options['email_address'] != '') { ?>
                            <a href="mailto:<?php echo $header_options['email_address']; ?>" target="_blank" title="<?php _e('Déjanos un mensaje en nuestra bandeja de entrada', 'investjp'); ?>"><?php echo $header_options['email_address']; ?></a>
                            <?php } ?>
                            <?php if ($header_options['phone_number'] != '') { ?>
                            <a href="tel:<?php echo $header_options['formatted_phone_number']; ?>" target="_blank" title="<?php _e('Llámanos a nuestro Master', 'investjp'); ?>"><?php echo $header_options['phone_number']; ?></a>
                            <?php } ?>
                        </div>
                        <div class="top-header-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="dropdown dropdown-lang">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?php _e('Seleccione el idioma de visualización de la página', 'investjp'); ?>">
                                    <?php _e('Idioma', 'investjp'); ?>
                                    <div class="menu-bars">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a title="<?php _e('Ver el sitio en Español', 'investjp'); ?>" class="dropdown-item" href="<?php echo network_home_url('/'); ?>"><?php _e('Español', 'investjp'); ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a title="<?php _e('Ver el sitio en Ingles', 'investjp'); ?>" class="dropdown-item" href="<?php echo network_home_url('/eng'); ?>"><?php _e('Ingles', 'investjp'); ?></a>
                                </div>
                            </div>
                            <a href="#" title="<?php _e('Haga click aquí para ir a mi cuenta', 'investjp'); ?>"><?php _e('Mi Cuenta', 'investjp'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container p-0">
                    <div class="row no-gutters">
                        <div class="header-navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <nav class="navbar navbar-expand-md" role="navigation">
                                <a class="navbar-brand" href="<?php echo home_url('/');?>" title="<?php echo get_bloginfo('name'); ?>">
                                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                                    <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'logo' ); ?>
                                    <?php if (!empty($image)) { ?>
                                    <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                    <?php } else { ?>
                                    Navbar
                                    <?php } ?>
                                </a>
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'  => 'header_menu',
                                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container'       => 'div',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container_id'    => 'bs-example-navbar-collapse-1',
                                        'menu_class'      => 'navbar-nav ml-auto',
                                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                    ) );
                                    ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
