<?php get_header(); ?>
<?php ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/template-banner'); ?>
        <?php if (get_locale() == 'es_ES') { $page_path = 'activos-inmobiliarios'; } else { $page_path = 'real-estate-assets'; } ?>
        <?php $page_activos = get_page_by_path($page_path); ?>
        <?php $bg_banner_id = get_post_meta($page_activos->ID, 'ijp_activos_hero_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="activos-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-image: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="activos-hero-content col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="media media-center">
                            <?php $bg_banner_id = get_post_meta($page_activos->ID, 'ijp_activos_hero_icon_id', true); ?>
                            <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'medium', false); ?>
                            <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $page_activos->ID, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($page_activos->ID, '_wp_attachment_image_alt', true ); ?>" class="align-self-center" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                            <div class="media-body">
                                <h2><?php echo apply_filters('the_content', get_post_meta($page_activos->ID, 'ijp_activos_hero_desc', true)); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                </div>
            </div>
        </section>
        <div id="explore" class="home-newmap-container tax-map-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="home-newmap-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="embed-responsive embed-responsive-11by9">
                            <div id='map' style='width: 100%; height: 450px;'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<?php $header_options = get_option('ijp_header_settings'); ?>
<div class="modal modal-cards fade" id="specialModal" data-keyboard="false" tabindex="-1" aria-labelledby="specialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="logo" class="img-fluid img-modal-logo" />
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <h3><?php _e('Para más información comuníquese con nosotros a través de:', 'investjp')?></h3>
                            <div class="row">
                                <div class="modal-info col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <a href="tel:<?php echo $header_options['formatted_phone_number']; ?>" target="_blank" title="<?php _e('Llámanos a nuestro Master', 'investjp'); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="logo" class="img-fluid" />
                                        <?php if ($header_options['phone_number'] != '') { ?>
                                        <?php echo $header_options['phone_number']; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="modal-info col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <a href="mailto:<?php echo $header_options['email_address']; ?>" target="_blank" title="<?php _e('Déjanos un mensaje en nuestra bandeja de entrada', 'investjp'); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="logo" class="img-fluid" />
                                        <?php if ($header_options['email_address'] != '') { ?>
                                        <?php echo $header_options['email_address']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
