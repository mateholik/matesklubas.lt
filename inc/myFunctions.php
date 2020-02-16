<?php
//for sidebar and footer menu
function getSubCategories($id, $where){
    $args = array(
        'taxonomy' => 'product_cat',
        'child_of'      => $id, //put here the id of parent term, which chldren you want to get
        'hide_empty' => false,
    );
    $list = get_terms( $args );

    if($where === 'footer') {
        foreach($list as $item) {
            echo  '<a href="'. get_term_link($item->slug, 'product_cat') .'">'. $item->name .'</a>';
        }
    } else {
        foreach($list as $item) {
            echo  '<li><a href="'. get_term_link($item->slug, 'product_cat') .'">'. $item->name .'   <span>(' . $item->count  . ')</span></a></li>';
        }
    }
}

function categoryLink($catId) {
    $category_link = get_category_link( $catId );
    echo esc_url( $category_link );
}

//for product page
function productCustomTags($postID, $taxName, $pavadinimas){
    $terms_list = wp_get_post_terms($postID, $taxName);
    if(empty($terms_list)) return;

    $output = $pavadinimas . ': ';
    $i = 0;
    foreach($terms_list as $term){
        $i++;
        if($i>1){
            $output .= ', ';
        }
        $output .= '<a href=" ' . get_term_link($term) . ' "> ' . $term->name .'</a>';
    }
    echo $output . '<br>';
}

