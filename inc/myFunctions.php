<?php
//for sidebar and footer menu
function getSubCategories($id, $where){
    $args = array(
        'taxonomy' => 'product_cat',
        'child_of'      => $id, //put here the id of parent term, which chldren you want to get
        'hide_empty' => false,
    );
    $list = get_terms( $args );

  

       // Get the current category being viewed
       $current_term_id = get_queried_object_id();

       if ($where === 'footer') {
           foreach ($list as $item) {
            if ($item->count > 0) { 
                $active_class = ($item->term_id == $current_term_id) ? 'active-item' : '';
                echo '<a href="' . get_term_link($item->slug, 'product_cat') . '" class="' . $active_class . '">' . $item->name . '</a>';
            }
            
           }
       } else {
           foreach ($list as $item) {
            if ($item->count > 0) { 
                $active_class = ($item->term_id == $current_term_id) ? 'active-item' : '';
                echo '<li><a href="' . get_term_link($item->slug, 'product_cat') . '" class="' . $active_class . '">' . $item->name . ' <span>(' . $item->count . ')</span></a></li>';
            }
             
           }
       }
       
}

function categoryLink($catId) {
    $category_link = get_category_link( $catId );
    echo esc_url( $category_link );
}

//for product page
function productCustomTags($postID, $taxName, $pavadinimas){
    if ( ! taxonomy_exists( $taxName ) ) {
        return;
    }

    $terms_list = wp_get_post_terms( $postID, $taxName, array(
        'orderby'                 => 'name',
        'order'                   => 'ASC',
        'update_term_meta_cache'  => false,
    ) );

    if ( is_wp_error( $terms_list ) || empty( $terms_list ) ) {
        return;
    }

    $output = '<span class="tagged_as">' . esc_html( $pavadinimas ) . ': ';
    $i = 0;

    foreach ( $terms_list as $term ) {
        if ( ! isset( $term->term_id ) ) {
            continue;
        }

        $link = get_term_link( (int) $term->term_id, $taxName );
        if ( is_wp_error( $link ) ) {
            continue;
        }

        if ( $i++ > 0 ) {
            $output .= ', ';
        }

        $output .= '<a href="' . esc_url( $link ) . '">' . esc_html( $term->name ) . '</a>';
    }

    $output .= '</span>';
    echo $output;
}

// Optimized: render all custom product taxonomies with a single query
function productAllCustomTags( $postID ) {
    $map = array(
        'salis'                => 'Kilmės šalis',
        'sudetis'              => 'Sudėtis',
        'skonio_intensyvumas'  => 'Skonio intensyvumas',
        'kiekis'               => 'Kiekis',
        'paruosimo_budas'      => 'Rekomenduojamas paruošimo būdas',
        'turis'                => 'Tūris',
        'aukstis'              => 'Aukštis',
        'skersmuo'             => 'Skersmuo',
        'medziaga'             => 'Medžiaga',
        'stilius'              => 'Stilius',
        'ilgis'                => 'Ilgis',
        'filtras'              => 'Filtras',
    );

    // Filter out any not-registered taxonomies to avoid WP_Errors
    $taxes = array_values( array_filter( array_keys( $map ), 'taxonomy_exists' ) );
    if ( empty( $taxes ) ) {
        return;
    }

    $terms = wp_get_object_terms( $postID, $taxes, array(
        'orderby'                => 'name',
        'order'                  => 'ASC',
        'update_term_meta_cache' => false,
    ) );

    if ( is_wp_error( $terms ) || empty( $terms ) ) {
        return;
    }

    // Group terms by taxonomy
    $by_tax = array();
    foreach ( $terms as $term ) {
        if ( empty( $term->taxonomy ) ) continue;
        $by_tax[ $term->taxonomy ][] = $term;
    }

    // Output in a stable order
    foreach ( $map as $tax => $label ) {
        if ( empty( $by_tax[ $tax ] ) ) continue;

        $output = '<span class="tagged_as">' . esc_html( $label ) . ': ';
        $i = 0;
        foreach ( $by_tax[ $tax ] as $term ) {
            if ( $i++ > 0 ) $output .= ', ';
            $link = get_term_link( (int) $term->term_id, $tax );
            if ( is_wp_error( $link ) ) {
                $output .= esc_html( $term->name );
            } else {
                $output .= '<a href="' . esc_url( $link ) . '">' . esc_html( $term->name ) . '</a>';
            }
        }
        $output .= '</span>';
        echo $output;
    }
}
