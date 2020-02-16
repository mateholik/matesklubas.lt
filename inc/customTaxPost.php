<?php
//add video post type
function videosPostType() {
    register_post_type( 'videos',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Video Postai' ),
                'singular_name' => __( 'Video Postas' )
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('post_tag'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'video'),
        )
    );
}
add_action( 'init', 'videosPostType' );
// add categories video post type
add_action( 'init', 'catsToVideo' );
function catsToVideo() {
    register_taxonomy_for_object_type( 'category', 'videos' );
}


function customTax() {
    $labels = array(
        'name' => 'Kilmės šalis', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink šalį, lopas',
        'menu_name' => 'Kilmės šalis'
    );
    register_taxonomy('salis','product',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'kilmes-salis' )
    ));

    $labels2 = array(
        'name' => 'Sudėtis', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Sudeciu variantai',
        'menu_name' => 'Sudėtis'
    );
    register_taxonomy('sudetis','product',array(
        'hierarchical' => false,
        'labels' => $labels2,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'sudetis' )
    ));

    $labels3 = array(
        'name' => ' Skonio intensyvumas', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink skonio intensyvuma',
        'menu_name' => 'Skonio intensyvumas'
    );
    register_taxonomy('skonio_intensyvumas','product',array(
        'hierarchical' => false,
        'labels' => $labels3,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'skonio-intensyvumas' )
    ));

    $labels4 = array(
        'name' => 'Kiekis', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink kieki',
        'menu_name' => 'Kiekis'
    );
    register_taxonomy('kiekis','product',array(
        'hierarchical' => false,
        'labels' => $labels4,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'kiekis' )
    ));

    $labels5 = array(
        'name' => 'Rekomenduojamas paruošimo būdas', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink paruosimo buda',
        'menu_name' => 'Paruosimo budas'
    );
    register_taxonomy('paruosimo_budas','product',array(
        'hierarchical' => false,
        'labels' => $labels5,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'paruosimo-budas' )
    ));
}
add_action( 'init', 'customTax', 0 );


//thumb size for homepage news
add_image_size( 'home-news', 318, 212, true );