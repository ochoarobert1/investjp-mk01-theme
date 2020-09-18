<?php if (is_tax()) { ?>
<?php $bg_banner_id = get_term_meta(get_queried_object_id(), 'ijp_term_image_id', true); ?>
<?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'banner_img', false); ?>
<?php $title = single_term_title( "", false ); ?>
<?php } else { ?>
<?php $bg_banner_id = get_post_thumbnail_id(get_the_ID()); ?>
<?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
<?php $title = get_the_title(); ?>
<?php } ?>
<div class="main-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
    <div class="main-banner-wrapper">
        <h1><?php echo $title; ?></h1>
    </div>
</div>
