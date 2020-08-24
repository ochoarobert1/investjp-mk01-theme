<?php
/* --------------------------------------------------------------
    1.- SERVICE: HERO SECTION
-------------------------------------------------------------- */
$cmb_services_content = new_cmb2_box( array(
    'id'            => $prefix . 'services_content_metabox',
    'title'         => esc_html__( 'Servicios: Contenido Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_services_content->add_field( array(
    'id'   => $prefix . 'services_content_bg',
    'name'      => esc_html__( 'Imagen de Fondo del Hero', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un fondo para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Fondo', 'investjp' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

/* --------------------------------------------------------------
    2.- SERVICE: HERO SECTION
-------------------------------------------------------------- */
$cmb_service_hero = new_cmb2_box( array(
    'id'            => $prefix . 'service_hero_metabox',
    'title'         => esc_html__( 'About: Seccion Control Economico', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_service_hero->add_field( array(
    'id'   => $prefix . 'service_hero_bg',
    'name'      => esc_html__( 'Imagen de Fondo del Hero', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un fondo para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Fondo', 'investjp' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_service_hero->add_field( array(
    'id'        => $prefix . 'service_hero_title',
    'name'      => esc_html__( 'Titulo de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$group_field_id = $cmb_service_hero->add_field( array(
    'id'          => $prefix . 'service_hero_group',
    'type'        => 'group',
    'description' => __( 'Items del Hero de Servicios', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Item', 'xsl' ),
        'remove_button'     => __( 'Remover Item', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este item?', 'xsl' )
    )
) );

$cmb_service_hero->add_group_field( $group_field_id, array(
    'id'   => 'image',
    'name'      => esc_html__( 'Imagen del Item', 'holpack' ),
    'desc'      => esc_html__( 'Cargar una imagen para esta item', 'holpack' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen', 'holpack' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_service_hero->add_group_field( $group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__( 'Descripción de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

/* --------------------------------------------------------------
    3.- SERVICE: SERVICES SECTION
-------------------------------------------------------------- */
$cmb_service_second = new_cmb2_box( array(
    'id'            => $prefix . 'service_second_metabox',
    'title'         => esc_html__( 'Servicios: Nuestros Servicios', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_service_second->add_field( array(
    'id'   => $prefix . 'service_second_bg',
    'name'      => esc_html__( 'Imagen de Fondo del Hero', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un fondo para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Fondo', 'investjp' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

$cmb_service_second->add_field( array(
    'id'        => $prefix . 'service_second_desc',
    'name'      => esc_html__( 'Segundo Parrafo', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_service_second->add_field( array(
    'id'   => $prefix . 'service_second_image',
    'name'      => esc_html__( 'Imagen de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Cargar una imagen para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen', 'investjp' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );


/* --------------------------------------------------------------
    4.- SERVICE: SERVICE ITEM SECTION
-------------------------------------------------------------- */
$cmb_service_items = new_cmb2_box( array(
    'id'            => $prefix . 'service_item_metabox',
    'title'         => esc_html__( 'Servicios: Sección de Items', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-services.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$group_field_id = $cmb_service_items->add_field( array(
    'id'          => $prefix . 'service_items_group',
    'type'        => 'group',
    'description' => __( 'Valores de la Empresa', 'xsl' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'xsl' ),
        'add_button'        => __( 'Agregar otro Item', 'xsl' ),
        'remove_button'     => __( 'Remover Item', 'xsl' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este item?', 'xsl' )
    )
) );

$cmb_service_items->add_group_field( $group_field_id, array(
    'id'   => 'icon',
    'name'      => esc_html__( 'Imagen del Item', 'holpack' ),
    'desc'      => esc_html__( 'Cargar una imagen para esta item', 'holpack' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen', 'holpack' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'avatar'
) );

$cmb_service_items->add_group_field( $group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__( 'Titulo del Item', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva al Item', 'investjp' ),
    'type' => 'text'
) );
