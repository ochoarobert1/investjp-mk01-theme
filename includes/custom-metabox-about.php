<?php
/* --------------------------------------------------------------
    1.- ABOUT: HERO SECTION
-------------------------------------------------------------- */
$cmb_about_content = new_cmb2_box( array(
    'id'            => $prefix . 'about_content_metabox',
    'title'         => esc_html__( 'About: Contenido Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_about_content->add_field( array(
    'id'   => $prefix . 'about_content_bg',
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

$cmb_about_content->add_field( array(
    'id'        => $prefix . 'about_content_second_desc',
    'name'      => esc_html__( 'Segundo Parrafo', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_about_content->add_field( array(
    'id'            => $prefix . 'about_content_logo_list',
    'name'          => esc_html__('Logos', 'investjp'),
    'desc'          => esc_html__('Cargue o seleccione las imágenes para incluirlas en la Galería de la Localización', 'investjp'),
    'type'          => 'file_list',
    'query_args'    => array( 'type' => 'image' ),
    'text' => array(
        'add_upload_files_text'     => esc_html__( 'Cargar Imágenes', 'investjp' ),
        'remove_image_text'         => esc_html__( 'Remove Imágenes', 'investjp' ),
        'file_text'                 => esc_html__( 'Imagen', 'investjp' ),
        'file_download_text'        => esc_html__( 'Descargar', 'investjp' ),
        'remove_text'               => esc_html__( 'Remover', 'investjp' ),
    ),
    'preview_size'  => 'thumbnail'
) );

/* --------------------------------------------------------------
    2.- ABOUT: TITLE SECTION
-------------------------------------------------------------- */
$cmb_about_title = new_cmb2_box( array(
    'id'            => $prefix . 'about_title_metabox',
    'title'         => esc_html__( 'About: Seccion Titulo', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_about_title->add_field( array(
    'id'   => $prefix . 'about_title_bg',
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

$cmb_about_title->add_field( array(
    'id'        => $prefix . 'about_title_desc',
    'name'      => esc_html__( 'Titulo de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

/* --------------------------------------------------------------
    3.- ABOUT: VALUES SECTION
-------------------------------------------------------------- */
$cmb_about_values = new_cmb2_box( array(
    'id'            => $prefix . 'about_value_metabox',
    'title'         => esc_html__( 'About: Sección de Valores', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$group_field_id = $cmb_about_values->add_field( array(
    'id'          => $prefix . 'benefits_items_group',
    'type'        => 'group',
    'description' => __( 'Valores de la Empresa', 'investjp' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'investjp' ),
        'add_button'        => __( 'Agregar otro Item', 'investjp' ),
        'remove_button'     => __( 'Remover Item', 'investjp' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este item?', 'investjp' )
    )
) );

$cmb_about_values->add_group_field( $group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__( 'Titulo de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'text'
) );

$cmb_about_values->add_group_field( $group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__( 'Descripción de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_about_values->add_group_field( $group_field_id, array(
    'id'   => 'image',
    'name'      => esc_html__( 'Imagen del Item', 'investjp' ),
    'desc'      => esc_html__( 'Cargar una imagen para esta item', 'investjp' ),
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
    4.- ABOUT: DESCANSO SECTION
-------------------------------------------------------------- */
$cmb_about_descanso = new_cmb2_box( array(
    'id'            => $prefix . 'about_descanso_metabox',
    'title'         => esc_html__( 'About: Seccion de Descanso', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_about_descanso->add_field( array(
    'id'   => $prefix . 'about_descanso_bg',
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

$cmb_about_descanso->add_field( array(
    'id'        => $prefix . 'about_descanso_desc',
    'name'      => esc_html__( 'Titulo de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );


/* --------------------------------------------------------------
    5.- ABOUT: GALLERY SECTION
-------------------------------------------------------------- */
$cmb_about_gallery = new_cmb2_box( array(
    'id'            => $prefix . 'about_gallery_metabox',
    'title'         => esc_html__( 'Sección: Galería de Activos', 'investjp' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-about.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'closed'        => false, // true to keep the metabox closed by default
) );

$cmb_about_gallery->add_field( array(
    'id'            => $prefix . 'about_gallery_list',
    'name'          => esc_html__('Galería', 'investjp'),
    'desc'          => esc_html__('Cargue o seleccione las imágenes para incluirlas en la Galería de la Localización', 'investjp'),
    'type'          => 'file_list',
    'query_args'    => array( 'type' => 'image' ),
    'text' => array(
        'add_upload_files_text'     => esc_html__( 'Cargar Imágenes', 'investjp' ),
        'remove_image_text'         => esc_html__( 'Remove Imágenes', 'investjp' ),
        'file_text'                 => esc_html__( 'Imagen', 'investjp' ),
        'file_download_text'        => esc_html__( 'Descargar', 'investjp' ),
        'remove_text'               => esc_html__( 'Remover', 'investjp' ),
    ),
    'preview_size'  => 'thumbnail'
) );
