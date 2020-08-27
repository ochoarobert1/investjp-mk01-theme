<?php
/* --------------------------------------------------------------
    1.- HOME: HERO SECTION
-------------------------------------------------------------- */
$cmb_home_hero = new_cmb2_box( array(
    'id'            => $prefix . 'home_hero_metabox',
    'title'         => esc_html__( 'Home: Hero Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_home_hero->add_field( array(
    'id'   => $prefix . 'hero_banner_bg',
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

$cmb_home_hero->add_field( array(
    'id'   => $prefix . 'hero_banner_logo',
    'name'      => esc_html__( 'Logo del Hero', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un logo para esta sección', 'investjp' ),
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

/* --------------------------------------------------------------
    2.- HOME: DESCANSO SECTION
-------------------------------------------------------------- */
$cmb_home_descanso = new_cmb2_box( array(
    'id'            => $prefix . 'home_descanso_metabox',
    'title'         => esc_html__( 'Home: Descanso luego del Hero Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
) );

$cmb_home_descanso->add_field( array(
    'id'        => $prefix . 'home_descanso_desc',
    'name'      => esc_html__( 'Descripción del Descanso', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_home_descanso->add_field( array(
    'id'        => $prefix . 'home_descanso_button_title',
    'name'      => esc_html__( 'Titulo del Boton', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese un texto descriptivo para el Botón', 'investjp' ),
    'type'      => 'text'
) );

$cmb_home_descanso->add_field( array(
    'id'        => $prefix . 'home_descanso_button_url',
    'name'      => esc_html__( 'Link URL del Boton', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese un URL de acción para el Botón', 'investjp' ),
    'type'      => 'text_url'
) );

/* --------------------------------------------------------------
    3.- HOME: SERVICES SECTION
-------------------------------------------------------------- */
$cmb_home_services = new_cmb2_box( array(
    'id'            => $prefix . 'home_services_metabox',
    'title'         => esc_html__( 'Home: Sección de Servicios', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_home_services->add_field( array(
    'id'   => $prefix . 'hero_services_bg',
    'name'      => esc_html__( 'Imagen de Fondo de la Sección', 'investjp' ),
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

$cmb_home_services->add_field( array(
    'id'   => $prefix . 'hero_services_image',
    'name'      => esc_html__( 'Imagen Descriptiva de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Cargar una Imagen Descriptiva de la Sección', 'investjp' ),
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

$cmb_home_services->add_field( array(
    'id'   => $prefix . 'hero_services_logo',
    'name'      => esc_html__( 'Imagen Logo de la Descripción', 'investjp' ),
    'desc'      => esc_html__( 'Cargar una Imagen Descriptiva de la Sección', 'investjp' ),
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

$cmb_home_services->add_field( array(
    'id'        => $prefix . 'home_services_desc',
    'name'      => esc_html__( 'Descripción de la sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

/* --------------------------------------------------------------
    4.- HOME: BENEFITS SECTION
-------------------------------------------------------------- */
$cmb_home_benefits = new_cmb2_box( array(
    'id'            => $prefix . 'home_benefits_metabox',
    'title'         => esc_html__( 'Home: Sección de Beneficios', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_home_benefits->add_field( array(
    'id'   => $prefix . 'home_benefits_icon',
    'name'      => esc_html__( 'Ícono de Fondo de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un fondo para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar ícono de Fondo', 'investjp' ),
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

$cmb_home_benefits->add_field( array(
    'id'        => $prefix . 'home_benefits_title',
    'name'      => esc_html__( 'Título de la sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese un título alusivo a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_home_benefits->add_field( array(
    'id'        => $prefix . 'home_benefits_desc',
    'name'      => esc_html__( 'Descripción de la sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

/* --------------------------------------------------------------
    5.- HOME: GALLERY SECTION
-------------------------------------------------------------- */
$cmb_home_gallery = new_cmb2_box( array(
    'id'            => $prefix . 'home_gallery_metabox',
    'title'         => esc_html__( 'Sección: Galería', 'investjp' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'closed'        => false, // true to keep the metabox closed by default
) );

$cmb_home_gallery->add_field( array(
    'id'            => $prefix . 'home_gallery_list',
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

/* --------------------------------------------------------------
    6.- HOME: CONTACT SECTION
-------------------------------------------------------------- */
$cmb_home_contact = new_cmb2_box( array(
    'id'            => $prefix . 'home_contact_metabox',
    'title'         => esc_html__( 'Home: Sección de Beneficios', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_home_contact->add_field( array(
    'id'   => $prefix . 'home_contact_bg',
    'name'      => esc_html__( 'Imagen de Fondo de la Sección', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un fondo para esta sección', 'investjp' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar imagen de Fondo', 'investjp' ),
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

$cmb_home_contact->add_field( array(
    'id'        => $prefix . 'home_contact_title',
    'name'      => esc_html__( 'Título de la sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese un título alusivo a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );

$cmb_home_contact->add_field( array(
    'id'        => $prefix . 'home_contact_desc',
    'name'      => esc_html__( 'Descripción de la sección', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva a la sección', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );
