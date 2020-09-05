<?php
function investjp_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Activos', 'Post Type General Name', 'investjp' ),
        'singular_name'         => _x( 'Activo', 'Post Type Singular Name', 'investjp' ),
        'menu_name'             => __( 'Activos', 'investjp' ),
        'name_admin_bar'        => __( 'Activos', 'investjp' ),
        'archives'              => __( 'Archivo de Activos', 'investjp' ),
        'attributes'            => __( 'Atributos de Activo', 'investjp' ),
        'parent_item_colon'     => __( 'Activo Padre:', 'investjp' ),
        'all_items'             => __( 'Todos los Activos', 'investjp' ),
        'add_new_item'          => __( 'Agregar Nuevo Activo', 'investjp' ),
        'add_new'               => __( 'Agregar Nuevo', 'investjp' ),
        'new_item'              => __( 'Nuevo Activo', 'investjp' ),
        'edit_item'             => __( 'Editar Activo', 'investjp' ),
        'update_item'           => __( 'Actualizar Activo', 'investjp' ),
        'view_item'             => __( 'Ver Activo', 'investjp' ),
        'view_items'            => __( 'Ver Activos', 'investjp' ),
        'search_items'          => __( 'Buscar Activo', 'investjp' ),
        'not_found'             => __( 'No hay resultados', 'investjp' ),
        'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'investjp' ),
        'featured_image'        => __( 'Imagen Destacada', 'investjp' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'investjp' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'investjp' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'investjp' ),
        'insert_into_item'      => __( 'Insertar en Activo', 'investjp' ),
        'uploaded_to_this_item' => __( 'Cargado a este Activo', 'investjp' ),
        'items_list'            => __( 'Listado de Activos', 'investjp' ),
        'items_list_navigation' => __( 'Navegación del Listado de Activos', 'investjp' ),
        'filter_items_list'     => __( 'Filtro del Listado de Activos', 'investjp' ),
    );
    $args = array(
        'label'                 => __( 'Activo', 'investjp' ),
        'description'           => __( 'Activos Inmobiliarios', 'investjp' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'tipos-activos' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-building',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'activos', $args );

}
add_action( 'init', 'investjp_custom_post_type', 0 );

// Register Custom Taxonomy
function investjp_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Tipos de Activos', 'Taxonomy General Name', 'investjp' ),
        'singular_name'              => _x( 'Tipo de Activo', 'Taxonomy Singular Name', 'investjp' ),
        'menu_name'                  => __( 'Tipos de Activo', 'investjp' ),
        'all_items'                  => __( 'Todos los Tipos', 'investjp' ),
        'parent_item'                => __( 'Tipo Padre', 'investjp' ),
        'parent_item_colon'          => __( 'Tipo Padre:', 'investjp' ),
        'new_item_name'              => __( 'Nuevo Tipo de Activo', 'investjp' ),
        'add_new_item'               => __( 'Agregar Tipo de Activo', 'investjp' ),
        'edit_item'                  => __( 'Editar Tipo de Activo', 'investjp' ),
        'update_item'                => __( 'Actualizar Tipo de Activo', 'investjp' ),
        'view_item'                  => __( 'Ver Tipo de Activo', 'investjp' ),
        'separate_items_with_commas' => __( 'Separar tipos por comas', 'investjp' ),
        'add_or_remove_items'        => __( 'Agregar o remover tipos', 'investjp' ),
        'choose_from_most_used'      => __( 'Escoger de los más usados', 'investjp' ),
        'popular_items'              => __( 'Tipos Populares', 'investjp' ),
        'search_items'               => __( 'Buscar Tipos', 'investjp' ),
        'not_found'                  => __( 'No hay resultados', 'investjp' ),
        'no_terms'                   => __( 'No hay Tipos', 'investjp' ),
        'items_list'                 => __( 'Listado de Tipo', 'investjp' ),
        'items_list_navigation'      => __( 'Navegación del Listado de Tipo', 'investjp' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'tipos-activos', array( 'activos' ), $args );

}
add_action( 'init', 'investjp_taxonomy', 0 );

function add_thumbnail_columns($columns) {
    $columns['ijp_term_image'] = __('Imagen', 'investjp');
    // Enable the single line of code below if you want the Thumbnail at the end.
    //    return $columns;

    // Code below will make the Thumbnail in the front.
    // Code start
    $new = array();
    foreach($columns as $key => $value) {
        if ($key=='name') // Put the Thumbnail column before the Name column
            $new['ijp_term_image'] = 'Thumbnail';
        $new[$key] = $value;
    }
    return $new;
    // Code end
}
add_filter('manage_edit-tipos-activos_columns', 'add_thumbnail_columns');

/**
 * Output ACF thumbnail content in Linen Category custom taxonomy columns
 */
function thumbnail_columns_content($content, $column_name, $term_id) {
    if ('ijp_term_image' == $column_name) {
        $term = get_term($term_id);
        $image_id = get_term_meta( $term->term_id, 'ijp_term_image_id', true );
        $image = wp_get_attachment_image_src( $image_id, 'avatar' );
        if ($image != '') {
            $content = '<img src="'.$image[0].'" width="'.$image[1].'" height="'.$image[2].'" />';
        }
    }
    return $content;
}
add_filter('manage_tipos-activos_custom_column' , 'thumbnail_columns_content' , 10 , 3);
