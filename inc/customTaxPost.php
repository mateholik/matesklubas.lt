<?php
// Our custom post type function
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
// Hooking up our function to theme setup
add_action( 'init', 'videosPostType' );

// add categories to custom post type
add_action( 'init', 'catsToVideo' );
function catsToVideo() {
    register_taxonomy_for_object_type( 'category', 'videos' );
}



add_image_size( 'home-news', 318, 212, true );