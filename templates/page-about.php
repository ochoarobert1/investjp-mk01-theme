<?php
/**
* Template Name: Pagina Quienes Somos
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
        <section class="about-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="about-main-content col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="about-main-group-images col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12  align-self-start">
                        <div class="about-main-group-wrapper">
                            <?php $gallery_list = get_post_meta(get_the_ID(), 'ijp_about_content_logos_group', true); ?>
                            <?php if (!empty($gallery_list)) : ?>
                            <?php foreach ($gallery_list as $item) { ?>
                            <?php $bg_banner = wp_get_attachment_image_src($item['logo_id'], 'full', false); ?>
                            <a href="<?php echo $item['url']; ?>" title="<?php _e('Haga click aqui para ir al website', 'investjp'); ?>" target="_blank">
                                <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="img-fluid" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                            </a>
                            <?php } ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-second-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="about-main-image col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_about_content_bg_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </div>
                    <div class="about-main-content col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 order-xl-12 order-lg-12 order-md-1 order-sm-1 order-1">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_about_content_second_desc', true)); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_about_title_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="about-title-separator col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: #3B515E url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="about-main-content col-xl-5 offset-xl-7 col-lg-5 offset-lg-7 col-md-6 offset-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_about_title_desc', true)); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-values-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php $about_values_group = get_post_meta(get_the_ID(), 'ijp_benefits_items_group', true); ?>
                    <?php $i = 1; ?>
                    <?php if (!empty($about_values_group)) : ?>
                    <?php foreach ($about_values_group as $item) { ?>

                    <?php $number = ($i%2 == 0) ? 'even' : 'odd'; ?>
                    <?php $order1 = ($i%2 == 0) ? 'order-xl-1 order-lg-1 order-md-1' : 'order-xl-12 order-lg-12 order-md-12'; ?>
                    <?php $order2 = ($i%2 == 0) ? 'order-xl-12 order-lg-12 order-md-12' : 'order-xl-1 order-lg-1 order-md-1'; ?>

                    <div class="about-values-item <?php echo $number; ?> col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="about-values-item-image col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 <?php echo $order1; ?> order-sm-12 order-12">
                                <?php $bg_banner = wp_get_attachment_image_src($item['image_id'], 'large', false); ?>
                                <img src="<?php echo $bg_banner[0]; ?>" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" class="img-fluid" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" />
                            </div>
                            <div class="about-values-item-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 <?php echo $order2; ?> order-sm-1 order-1">
                                <div class="about-values-title">
                                    <h2><img src="<?php echo get_template_directory_uri(); ?>/images/icon-sprite.png" alt=""><?php echo $item['title']; ?></h2>
                                </div>
                                <?php echo apply_filters('the_content', $item['desc']); ?>
                            </div>
                        </div>
                    </div>
                    <?php $i++; } ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_about_descanso_bg_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="about-descanso-separator col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="about-descanso-content col-xl-7 offset-xl-5 col-lg-7 offset-lg-5 col-md-8 offset-md-4 col-sm-12 col-12">
                        <div class="media">
                            <?php $bg_banner_id = get_post_meta(get_the_ID(), 'ijp_about_descanso_icon_id', true); ?>
                            <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'thumbnail', false); ?>
                            <img itemprop="image" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="align-self-center img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                            <div class="media-body">
                                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'ijp_about_descanso_desc', true)); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php /* ABOUT: GALLERY SECTION */ ?>
        <section class="home-gallery-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade" data-aos-delay="300">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="home-gallery-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('CARTERA DE ACTIVOS', 'investjp'); ?></h2>
                        <?php $gallery_list = get_post_meta(get_the_ID(), 'ijp_about_gallery_list', true); ?>
                        <?php if (!empty($gallery_list)) : ?>
                        <div class="card-columns">
                            <?php $i = 1; ?>
                            <?php foreach ($gallery_list as $key => $value) { ?>
                            <?php $size = ($i == 3) ? 'special_large' : 'special_medium'; ?>
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
    </div>
</main>
<?php get_footer(); ?>
