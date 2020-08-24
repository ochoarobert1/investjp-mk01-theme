<?php
/**
* Template Name: Página Servicios
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
        <div class="main-services-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="main-services-image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-12 order-sm-12 order-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_services_content_bg_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                    <div class="main-services-content col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xl-12 order-lg-12 order-md-1 order-sm-1 order-1">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_service_hero_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <div class="services-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: #010717 url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="services-hero-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="services-hero-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_service_hero_title', true)); ?>
                            </div>
                        </div>
                        <div class="row">
                            <?php $array_services = get_post_meta(get_the_ID(), 'ijp_service_hero_group', true); ?>
                            <?php if (!empty($array_services)) : ?>
                            <?php foreach ($array_services as $item) { ?>
                            <div class="service-hero-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="service-hero-item-wrapper">
                                    <div class="media">
                                        <?php $bg_banner = wp_get_attachment_image_src($item['image_id'], 'avatar', false); ?>
                                        <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="align-self-center" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                        <div class="media-body">
                                            <?php echo apply_filters('the_content', $item['desc']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_service_second_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <div class="services-description-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="services-description-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Nuestros Servicios', 'investjp'); ?></h2>
                    </div>
                    <div class="services-description-image col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_service_second_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                    <div class="services-description-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-sprite.png" alt="" class="align-self-center" />
                            <div class="media-body">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_service_second_desc', true)); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-service-items justify-content-center align-items center">
                    <?php $array_services = get_post_meta(get_the_ID(), 'ijp_service_items_group', true); ?>
                    <?php if (!empty($array_services)) : ?>
                    <?php foreach ($array_services as $item) { ?>
                    <div class="services-group-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="services-group-image">
                            <?php $bg_banner = wp_get_attachment_image_src($item['icon_id'], 'avatar', false); ?>
                            <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                        </div>
                        <h3><?php echo $item['title']; ?></h3>
                    </div>
                    <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
