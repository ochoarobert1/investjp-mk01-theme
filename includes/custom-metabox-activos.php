<?php
/* --------------------------------------------------------------
    1.- ACTIVOS: HERO TITLE SECTION
-------------------------------------------------------------- */
$cmb_activos_content = new_cmb2_box( array(
    'id'            => $prefix . 'activos_hero_metabox',
    'title'         => esc_html__( 'Activos: Contenido Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-activos.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_activos_content->add_field( array(
    'id'   => $prefix . 'activos_hero_bg',
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

$cmb_activos_content->add_field( array(
    'id'   => $prefix . 'activos_hero_icon',
    'name'      => esc_html__( 'Icono del Hero', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un icono para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Icono', 'investjp' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
) );

$cmb_activos_content->add_field( array(
    'id'        => $prefix . 'activos_hero_desc',
    'name'      => esc_html__( 'Segundo Titulo', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'text'
) );

/* --------------------------------------------------------------
    2.- ACTIVOS: BACKGROUND SECTION
-------------------------------------------------------------- */
$cmb_activos_content = new_cmb2_box( array(
    'id'            => $prefix . 'activos_items_metabox',
    'title'         => esc_html__( 'Activos: Taxonomias', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-activos.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_activos_content->add_field( array(
    'id'   => $prefix . 'activos_items_bg',
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

$group_field_id = $cmb_activos_content->add_field( array(
    'id'          => $prefix . 'activos_logos_group',
    'type'        => 'group',
    'name'          => esc_html__('Logos', 'investjp'),
    'desc'          => esc_html__('Cargue o seleccione los logos para incluirlos en esta sección', 'investjp'),
    'options'     => array(
        'group_title'       => __( 'Logo {#}', 'investjp' ),
        'add_button'        => __( 'Agregar otro Logo', 'investjp' ),
        'remove_button'     => __( 'Remover Logo', 'investjp' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este Logo?', 'investjp' )
    )
) );

$cmb_activos_content->add_group_field( $group_field_id, array(
    'id'   => 'logo',
    'name'      => esc_html__( 'Logo', 'investjp' ),
    'desc'      => esc_html__( 'Cargar el Logo', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Logo', 'investjp' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
) );

$cmb_activos_content->add_group_field( $group_field_id, array(
    'id'        => 'url',
    'name'      => esc_html__( 'URL del Logo', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una URL descriptiva al logo', 'investjp' ),
    'type' => 'text_url'
) );


/* --------------------------------------------------------------
    1.- ACTIVOS: HERO TITLE SECTION
-------------------------------------------------------------- */
$cmb_activos_posttype = new_cmb2_box( array(
    'id'            => $prefix . 'activos_coordinates_metabox',
    'title'         => esc_html__( 'Activos: Coordenadas', 'investjp' ),
    'object_types'  => array( 'activos' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_activos_posttype->add_field( array(
    'id'        => $prefix . 'activos_hero_desc',
    'name'      => esc_html__( 'Coordenadas (Lat / Long)', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese las coordenadas separadas por comas', 'investjp' ),
    'type' => 'text'
) );
