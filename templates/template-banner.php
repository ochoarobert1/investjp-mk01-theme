<?php $bg_banner_id = get_post_thumbnail_id(get_the_ID()); ?>
<?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
<div class="main-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <img itemprop="logo" content="<?php echo $bg_banner[0];?>" src="<?php echo $bg_banner[0];?>" title="<?php echo get_post_meta( $bg_banner_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
    <div class="main-banner-wrapper">
        <?php the_title('<h1>', '</h1>'); ?>
    </div>
</div>
