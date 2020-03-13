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
    //mate
    $labels = array(
        'name' => 'Matė, Kalabasai, Bombiles. Kilmės šalis', 'taxonomy general name',
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
        'name' => 'Matė. Sudėtis', 'taxonomy general name',
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
        'name' => 'Matė. Skonio intensyvumas', 'taxonomy general name',
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
        'name' => 'Matė. Kiekis', 'taxonomy general name',
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
        'name' => 'Matė. Rekomenduojamas paruošimo būdas', 'taxonomy general name',
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
    //mate end

    //kalabasai
    $labels6 = array(
        'name' => 'Kalabasai. Tūris', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink turi',
        'menu_name' => 'Tūris'
    );
    register_taxonomy('turis','product',array(
        'hierarchical' => false,
        'labels' => $labels6,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'turis' )
    ));

    $labels7 = array(
        'name' => 'Kalabasai. Aukštis', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink auksti',
        'menu_name' => 'Aukštis'
    );
    register_taxonomy('aukstis','product',array(
        'hierarchical' => false,
        'labels' => $labels7,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'aukstis' )
    ));

    $labels8 = array(
        'name' => 'Kalabasai. Skersmuo', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink skersmeni',
        'menu_name' => 'Skersmuo'
    );
    register_taxonomy('skersmuo','product',array(
        'hierarchical' => false,
        'labels' => $labels8,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'skersmuo' )
    ));

    $labels9 = array(
        'name' => 'Bombiles, Kalabasai. Medžiaga', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink medziaga',
        'menu_name' => 'Medžiaga'
    );
    register_taxonomy('medziaga','product',array(
        'hierarchical' => false,
        'labels' => $labels9,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'medziaga' )
    ));


    $labels10 = array(
        'name' => 'Bombiles. Stilius', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink stiliu',
        'menu_name' => 'Stilius'
    );
    register_taxonomy('stilius','product',array(
        'hierarchical' => false,
        'labels' => $labels10,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'stilius' )
    ));

    $labels11 = array(
        'name' => 'Bombiles. Ilgis', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink ilgi',
        'menu_name' => 'ilgis'
    );
    register_taxonomy('ilgis','product',array(
        'hierarchical' => false,
        'labels' => $labels11,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'ilgis' )
    ));

    $labels12 = array(
        'name' => 'Bombiles. Filtras', 'taxonomy general name',
        'parent_item' => null,
        'parent_item_colon' => null,
        'choose_from_most_used' => 'Pasirink filtra',
        'menu_name' => 'filtras'
    );
    register_taxonomy('filtras','product',array(
        'hierarchical' => false,
        'labels' => $labels12,
        'show_ui' => true,
        'show_admin_column' => false,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'filtras' )
    ));
}
add_action( 'init', 'customTax', 0 );


//thumb size for homepage news
add_image_size( 'home-news', 445, 297, true );