<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/




// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'Ciudadela' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'Ciudadela' ),
		'menu_name'             => __( 'Banners', 'Ciudadela' ),
		'name_admin_bar'        => __( 'Banners', 'Ciudadela' ),
		'archives'              => __( 'Archivo', 'Ciudadela' ),
		'attributes'            => __( 'Atributos', 'Ciudadela' ),
		'parent_item_colon'     => __( 'Artículo principal', 'Ciudadela' ),
		'all_items'             => __( 'Todos los artículos', 'Ciudadela' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'Ciudadela' ),
		'add_new'               => __( 'Añadir nuevo', 'Ciudadela' ),
		'new_item'              => __( 'Nuevo artículo', 'Ciudadela' ),
		'edit_item'             => __( 'Editar elemento', 'Ciudadela' ),
		'update_item'           => __( 'Actualizar artículo', 'Ciudadela' ),
		'view_item'             => __( 'Ver ítem', 'Ciudadela' ),
		'view_items'            => __( 'Ver artículos', 'Ciudadela' ),
		'search_items'          => __( 'Buscar artículo', 'Ciudadela' ),
		'not_found'             => __( 'Extraviado', 'Ciudadela' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'Ciudadela' ),
		'featured_image'        => __( 'Foto principal', 'Ciudadela' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'Ciudadela' ),
		'remove_featured_image' => __( 'Remove featured image', 'Ciudadela' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'Ciudadela' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'Ciudadela' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'Ciudadela' ),
		'items_list'            => __( 'Lista de artículos', 'Ciudadela' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'Ciudadela' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'Ciudadela' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'Ciudadela' ),
		'description'           => __( 'Post Type Description', 'Ciudadela' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


// Register Custom Banner Home
function Propiedades() {

	$labels = array(
		'name'                  => _x( 'Propiedades ', 'Post Type General Name', 'Ciudadela' ),
		'singular_name'         => _x( 'Propiedades', 'Post Type Singular Name', 'Ciudadela' ),
		'menu_name'             => __( 'Propiedades', 'Ciudadela' ),
		'name_admin_bar'        => __( 'Propiedades', 'Ciudadela' ),
		'archives'              => __( 'Archivo', 'Ciudadela' ),
		'attributes'            => __( 'Atributos', 'Ciudadela' ),
		'parent_item_colon'     => __( 'Artículo principal', 'Ciudadela' ),
		'all_items'             => __( 'Todos los artículos', 'Ciudadela' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'Ciudadela' ),
		'add_new'               => __( 'Añadir nuevo', 'Ciudadela' ),
		'new_item'              => __( 'Nuevo artículo', 'Ciudadela' ),
		'edit_item'             => __( 'Editar elemento', 'Ciudadela' ),
		'update_item'           => __( 'Actualizar artículo', 'Ciudadela' ),
		'view_item'             => __( 'Ver ítem', 'Ciudadela' ),
		'view_items'            => __( 'Ver artículos', 'Ciudadela' ),
		'search_items'          => __( 'Buscar artículo', 'Ciudadela' ),
		'not_found'             => __( 'Extraviado', 'Ciudadela' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'Ciudadela' ),
		'featured_image'        => __( 'Foto principal', 'Ciudadela' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'Ciudadela' ),
		'remove_featured_image' => __( 'Remove featured image', 'Ciudadela' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'Ciudadela' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'Ciudadela' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'Ciudadela' ),
		'items_list'            => __( 'Lista de artículos', 'Ciudadela' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'Ciudadela' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'Ciudadela' ),
	);
	$args = array(
		'label'                 => __( 'Propiedades', 'Ciudadela' ),
		'description'           => __( 'Post Type Description', 'Ciudadela' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Propiedades', $args );

}
add_action( 'init', 'Propiedades', 0 );

