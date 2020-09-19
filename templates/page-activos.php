<?php
/**
* Template Name: Pagina Activos Inmobiliarios
*
* @package investjp
* @subpackage investjp-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/template-banner'); ?>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_activos_hero_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="activos-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-image: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="activos-hero-content col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="media media-center">
                            <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_activos_hero_icon_id', true); ?>
                            <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'medium', false); ?>
                            <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="align-self-center" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                            <div class="media-body">
                                <h2><?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_activos_hero_desc', true)); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                </div>
            </div>
        </section>
        <section class="activos-taxonomy-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="activos-taxonomy-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="container">
                            <div class="row">
                                <?php $arr_terms = get_terms(array('taxonomy' => 'tipos-activos', 'hide_empty' => false, 'order' => 'DESC', 'orderby' => 'term_order', 'parent' => 0)); ?>
                                <?php if (!empty($arr_terms)) : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($arr_terms as $item) { ?>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <?php $key = get_term_meta($item->term_id, 'ijp_term_image_id', true); ?>
                                    <?php $bg_banner = wp_get_attachment_image_src($key, 'special_large_cat', false); ?>
                                    <?php $delay = 50 * $i; ?>
                                    <div class="special-card" data-aos="fade" data-aos-delay="<?php echo $delay; ?>">
                                        <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="custom-gallery-img img-fluid" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                                        <a href="<?php echo get_term_link($item); ?>" class="card-wrapper">
                                            <h2><?php echo $item->name; ?></h2>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="activos-logos-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="activos-logos-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3><?php _e('Nos puedes encontrar en:', 'investjp'); ?></h3>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <?php $gallery_list = get_post_meta(get_the_ID(), 'ijp_activos_logos_group', true); ?>
                            <?php if (!empty($gallery_list)) : ?>
                            <?php foreach ($gallery_list as $item) { ?>
                            <?php $bg_banner = wp_get_attachment_image_src($item['logo_id'], 'full', false); ?>
                            <div class="activos-logos-item col-xl col-lg col-md col-sm-12 col-12">
                                <a href="<?php echo $item['url']; ?>" title="<?php _e('Haga click aqui para ir al website', 'investjp'); ?>" target="_blank">
                                    <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="img-fluid" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                                </a>
                            </div>
                            <?php } ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
<!-- Modal -->
<?php $header_options = get_option('ijp_header_settings'); ?>
<div class="modal modal-cards fade" id="specialModal" data-keyboard="false" tabindex="-1" aria-labelledby="specialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
