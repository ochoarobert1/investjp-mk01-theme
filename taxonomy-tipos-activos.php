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

<?php get_footer(); ?>
