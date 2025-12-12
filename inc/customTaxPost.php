<?php
// Register "videos" post type
function videosPostType() {
    register_post_type(
        'videos',
        array(
            'labels' => array(
                'name'          => __( 'Video Postai', 'matesklubas' ),
                'singular_name' => __( 'Video Postas', 'matesklubas' ),
            ),
            'supports'     => array( 'title', 'editor', 'thumbnail', 'comments' ),
            'taxonomies'   => array( 'post_tag' ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array( 'slug' => 'video' ),
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'videosPostType' );

// Add categories to Video post type
function catsToVideo() {
    register_taxonomy_for_object_type( 'category', 'videos' );
}
add_action( 'init', 'catsToVideo' );

// Register custom product taxonomies (WordPress/WooCommerce best practices)
function mk_register_product_taxonomies() {
    // Use the exact original taxonomy names in admin UI
    $taxes = array(
        array(
            'slug'    => 'salis',
            'label'   => 'Kilmės šalis',
            'rewrite' => 'kilmes-salis',
        ),
        array(
            'slug'    => 'sudetis',
            'label'   => 'Sudėtis',
            'rewrite' => 'sudetis',
        ),
        array(
            'slug'    => 'skonio_intensyvumas',
            'label'   => 'Skonio intensyvumas',
            'rewrite' => 'skonio-intensyvumas',
        ),
        array(
            'slug'    => 'kiekis',
            'label'   => 'Kiekis',
            'rewrite' => 'kiekis',
        ),
        array(
            'slug'    => 'paruosimo_budas',
            'label'   => 'Paruosimo budas',
            'rewrite' => 'paruosimo-budas',
        ),
        array(
            'slug'    => 'turis',
            'label'   => 'Tūris',
            'rewrite' => 'turis',
        ),
        array(
            'slug'    => 'aukstis',
            'label'   => 'Aukštis',
            'rewrite' => 'aukstis',
        ),
        array(
            'slug'    => 'skersmuo',
            'label'   => 'Skersmuo',
            'rewrite' => 'skersmuo',
        ),
        array(
            'slug'    => 'medziaga',
            'label'   => 'Medžiaga',
            'rewrite' => 'medziaga',
        ),
        array(
            'slug'    => 'stilius',
            'label'   => 'Stilius',
            'rewrite' => 'stilius',
        ),
        array(
            'slug'    => 'ilgis',
            'label'   => 'ilgis',
            'rewrite' => 'ilgis',
        ),
        array(
            'slug'    => 'filtras',
            'label'   => 'filtras',
            'rewrite' => 'filtras',
        ),
    );

    foreach ( $taxes as $t ) {
        $labels = array(
            'name'          => $t['label'],
            'singular_name' => $t['label'],
            'menu_name'     => $t['label'],
        );

        $args = array(
            'hierarchical'          => false,
            'labels'                => $labels,
            'public'                => true,
            'show_ui'               => true,
            'show_admin_column'     => false,
            'show_in_nav_menus'     => true,
            'show_tagcloud'         => true,
            'show_in_rest'          => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => $t['rewrite'] ),
        );

        register_taxonomy( $t['slug'], array( 'product' ), $args );
    }
}

// Run after WooCommerce registers the 'product' post type
add_action( 'init', 'mk_register_product_taxonomies', 11 );

// thumb size for homepage news
add_image_size( 'home-news', 445, 297, true );
