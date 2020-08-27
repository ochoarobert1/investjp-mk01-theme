<?php
/* --------------------------------------------------------------
    1.- CONTACT: MAIN SECTION
-------------------------------------------------------------- */
$cmb_contact_content = new_cmb2_box( array(
    'id'            => $prefix . 'contact_main_metabox',
    'title'         => esc_html__( 'Contacto: Contenido Principal', 'investjp' ),
    'object_types'  => array( 'page' ),
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_contact_content->add_field( array(
    'id'        => $prefix . 'contact_embed_map',
    'name'      => esc_html__( 'Codigo Embed de Google Maps', 'investjp' ),
    'desc'      => esc_html__( 'Inserta el Codigo embed del mapa a incrustar', 'investjp' ),
    'type' => 'textarea_code'
) );


$group_field_id = $cmb_contact_content->add_field( array(
    'id'          => $prefix . 'contact_items_group',
    'type'        => 'group',
    'description' => __( 'Items de Contacto', 'investjp' ),
    'options'     => array(
        'group_title'       => __( 'Item {#}', 'investjp' ),
        'add_button'        => __( 'Agregar otro Item', 'investjp' ),
        'remove_button'     => __( 'Remover Item', 'investjp' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de remover este item?', 'investjp' )
    )
) );

$cmb_contact_content->add_group_field( $group_field_id, array(
    'id'   => 'icon',
    'name'      => esc_html__( 'Icono del Item', 'investjp' ),
    'desc'      => esc_html__( 'Cargar un Icono para esta item', 'investjp' ),
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
    'preview_size' => 'avatar'
) );

$cmb_contact_content->add_group_field( $group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__( 'Descripción del Item', 'investjp' ),
    'desc'      => esc_html__( 'Ingrese una descripción alusiva al Item', 'investjp' ),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
) );


$cmb_contact_content->add_field( array(
    'id'   => $prefix . 'contact_content_bg',
    'name'      => esc_html__( 'Imagen de Fondo', 'investjp' ),
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

$cmb_contact_content->add_field( array(
    'id'   => $prefix . 'contact_content_logo',
    'name'      => esc_html__( 'Imagen de Fondo', 'investjp' ),
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
