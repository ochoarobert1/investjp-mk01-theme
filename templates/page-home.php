<?php
/**
* Template Name: Pagina de Inicio
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
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_hero_banner_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <?php /* HOME: HERO SECTION */ ?>
        <section id="top" class="home-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-image: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row row-hero align-items-start">
                    <div data-aos="fade" data-aos-delay="250" class="home-hero-content col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div data-aos="fade" data-aos-delay="350" class="home-hero-logo col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_hero_banner_logo_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'large', false); ?>
                        <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                    <div class="hero-view-more" data-aos="fade" data-aos-delay="300">
                        <h4><?php _e('Explorar', 'investjp'); ?></h4>
                        <div></div>
                    </div>
                </div>
            </div>
        </section>
        <?php /* HOME: DESCANSO SECTION */ ?>
        <section class="home-descanso-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300">
            <div class="container">
                <div class="row row-hero align-items-start">
                    <div class="home-descanso-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_home_descanso_desc', true)); ?>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ijp_home_descanso_button_url', true)); ?>" class="btn btn-md btn-main-button"><?php echo  get_post_meta(get_the_ID(), 'ijp_home_descanso_button_title', true); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_hero_services_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <?php /* HOME: SERVICIOS SECTION */ ?>
        <section class="home-servicios-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300" style="background-image: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="home-servicios-content col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="media">
                            <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_hero_services_logo_id', true); ?>
                            <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'thumbnail', false); ?>
                            <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="align-self-center img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                            <div class="media-body">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_home_services_desc', true)); ?>
                            </div>
                        </div>
                    </div>
                    <div class="home-servicios-image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_hero_services_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'large', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                </div>
            </div>
        </section>
        <?php /* HOME: BENEFITS SECTION */ ?>
        <section class="home-benefits-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="home-benefits-icon col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_home_benefits_icon_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'thumbnail', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                    <div class="home-benefits-content col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_home_benefits_title', true)); ?>
                    </div>
                    <div class="home-benefits-content col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_home_benefits_desc', true)); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php /* HOME: GALLERY SECTION */ ?>
        <section class="home-gallery-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="home-gallery-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Galería', 'investjp'); ?></h2>
                        <?php $gallery_list = get_post_meta(get_the_ID(), 'ijp_home_gallery_list', true); ?>
                        <?php if (!empty($gallery_list)) : ?>
                        <div class="card-columns">
                            <?php $i = 1; ?>
                            <?php foreach ($gallery_list as $key => $value) { ?>
                            <?php $size = ($i == 3) ? 'special_large' : 'medium'; ?>
                            <?php $bg_banner = wp_get_attachment_image_src($key, $size, false); ?>
                            <?php $delay = 150 * $i; ?>
                            <div class="card" data-aos="fade" data-aos-delay="<?php echo $delay; ?>">
                                <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="card-img-top" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                            </div>
                            <?php $i++; } ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_home_contact_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <?php /* HOME: CONTACT SECTION */ ?>
        <section class="home-contact-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300" style="background-image: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="home-contact-content col-xl-10 offset-xl-2 col-lg-10 offset-lg-2 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="home-contact-item-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_home_contact_title', true)); ?>
                            </div>
                            <div class="home-contact-item-content col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_home_contact_desc', true)); ?>
                            </div>
                            <div class="home-contact-item-content col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                <?php echo get_template_part('templates/template-contact-form'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>