<?php
/* --------------------------------------------------------------
    1.- TERMS: IMAGE TERM
-------------------------------------------------------------- */
$cmb_terms_content = new_cmb2_box( array(
    'id'            => $prefix . 'terms_metabox',
    'title'         => esc_html__( 'Tipos de Activo: Contenido Principal', 'investjp' ),
    'object_types'  => array( 'term' ),
    'taxonomies'       => array( 'tipos-activos' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
) );

$cmb_terms_content->add_field( array(
    'id'   => $prefix . 'term_image',
    'name'      => esc_html__( 'Imagen de Categoria', 'investjp' ),
    'desc'      => esc_html__( 'Cargar una Imagen para esta Categoria', 'investjp' ),
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
    'preview_size' => 'thumbnail'
) );

