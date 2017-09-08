<?php


// Register Class Post Type
function teleki_custom_post_types() {


  // Teachers
  $labels = array(
    'name'                  => _x( 'Képzések', 'Képzések', 'teleki' ),
    'singular_name'         => _x( 'Képzés', 'Képzés', 'teleki' ),
    'singular_name_lowercase' =>  __('képzés','teleki'),
    'menu_name'             => __( 'Képzések', 'teleki' ),
    'name_admin_bar'        => __( 'Képzés', 'teleki' ),
    'archives'              => __( 'Képzések archívuma', 'teleki' ),
    'parent_item_colon'     => __( 'Szülő képzés:', 'teleki' ),
    'all_items'             => __( 'Képzések', 'teleki' ),
    'add_new_item'          => __( 'Új képzés felvétele', 'teleki' ),
    'add_new'               => __( 'Új képzés', 'teleki' ),
    'new_item'              => __( 'Új képzés', 'teleki' ),
    'edit_item'             => __( 'Képzés szerkesztése', 'teleki' ),
    'update_item'           => __( 'Képzés frissítése', 'teleki' ),
    'view_item'             => __( 'Képzés megtekintése', 'teleki' ),
    'search_items'          => __( 'Képzés keresése', 'teleki' ),
    'not_found'             => __( 'Not found', 'teleki' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'teleki' ),
    'featured_image'        => __( 'Képzés Photo', 'teleki' ),
    'set_featured_image'    => __( 'Set Képzés photo', 'teleki' ),
    'remove_featured_image' => __( 'Remove Képzés photo', 'teleki' ),
    'use_featured_image'    => __( 'Use as Képzés photo', 'teleki' ),
    'insert_into_item'      => __( 'Insert into Képzés', 'teleki' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Képzés', 'teleki' ),
    'items_list'            => __( 'Képzések listája', 'teleki' ),
    'items_list_navigation' => __( 'Képzések list navigation', 'teleki' ),
    'filter_items_list'     => __( 'Képzések szűrése', 'teleki' ),
  );
  $args = array(
    'label'                 => __( 'Képzés', 'teleki' ),
    'description'           => __( 'Képzés leírása', 'teleki' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'page-attributes', 'excerpt'),
    //'taxonomies'            => array('walktag', 'topic'),
    'rewrite'               => array('slug' => __('kepzes','teleki')),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    //'show_in_menu'          => 'edit.php?post_type=event',
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );

  register_post_type( 'kepzes', $args );

}
add_action( 'init', 'teleki_custom_post_types', 0 );



function teleki_taxonomies() {
    // Topic Taxonomy
    $labels = array(
        'name'                    => _x( 'Munkarend', 'Munkarend', 'teleki' ),
        'singular_name'            => _x( 'Munkarend', 'Munkarend', 'teleki' ),
        'search_items'            => __( 'Search Munkarend', 'teleki' ),
        'popular_items'            => __( 'Popular Munkarend', 'teleki' ),
        'all_items'                => __( 'All Munkarend', 'teleki' ),
        'parent_item'            => __( 'Parent Munkarend', 'teleki' ),
        'parent_item_colon'        => __( 'Parent Munkarend', 'teleki' ),
        'edit_item'                => __( 'Edit Munkarend', 'teleki' ),
        'update_item'            => __( 'Update Munkarend', 'teleki' ),
        'add_new_item'            => __( 'Add New Munkarend', 'teleki' ),
        'new_item_name'            => __( 'New Munkarend Name', 'teleki' ),
        'add_or_remove_items'    => __( 'Add or remove Munkarend', 'teleki' ),
        'choose_from_most_used'    => __( 'Choose from most used teleki', 'teleki' ),
        'menu_name'                => __( 'Munkarendek', 'teleki' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'show_tagcloud'     => false,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    );

    register_taxonomy( 'munkarend', array( 'kepzes' ), $args );
}

add_action( 'init', 'teleki_taxonomies' );
