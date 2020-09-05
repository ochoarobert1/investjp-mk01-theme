<?php
/**
* Template Name: Pagina Contacto
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
        <div class="contact-items-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row row-contact-items align-items-start">
                    <?php $about_values_group = get_post_meta(get_the_ID(), 'ijp_contact_items_group', true); ?>
                    <?php if (!empty($about_values_group)) : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($about_values_group as $item) { ?>
                    <?php $delay = 150 * $i; ?>
                    <article class="contact-item col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" data-aos="fadeDown" data-aos-delay="<?php echo $delay; ?>">
                        <div class="contact-item-wrapper">
                            <?php $bg_banner = wp_get_attachment_image_src($item['icon_id'], 'small_avatar', false); ?>
                            <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="img-fluid" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                            <div class="contact-item-info">
                                <?php echo apply_filters('the_content', $item['desc']); ?>
                            </div>
                        </div>
                    </article>
                    <?php $i++; } ?>
                    <?php endif; ?>
                    <article class="contact-item col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" data-aos="fadeDown" data-aos-delay="<?php echo $delay; ?>">
                        <div class="contact-item-wrapper">
                            <?php $social_options = get_option('ijp_social_settings'); ?>
                            <div class="contact-item-info">
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
                                <p class="text-center">LinkedIn</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="contact-map-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="embed-responsive custom-embed-responsive">
                <?php echo get_post_meta(get_the_ID(), 'ijp_contact_embed_map', true); ?>
            </div>
        </div>

        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_contact_content_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <?php /* HOME: CONTACT SECTION */ ?>
        <section class="home-contact-container contact-page-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300" style="background-image: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="home-contact-content contact-page-form col-xl-8 offset-xl-4 col-lg-8 offset-lg-4 col-md-12 col-sm-12 col-12">
                        <?php echo get_template_part('templates/template-contact-form'); ?>
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_contact_content_logo_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="img-fluid" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
