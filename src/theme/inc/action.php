<?php

// Register Menu
add_action( 'after_setup_theme', 'indev_menu', 0 );

// Filter Post & Case Study
add_action( 'pre_get_posts', 'get_case_studies', 0);
function get_case_studies($query){
    if( is_admin() || !$query->is_main_query() )
        return;

    if( is_post_type_archive('case_study') ){
        $query->set( 'posts_per_page', 90 );
        $query->set( 'orderby', 'date' );
        $query->set( 'post_status', 'publish');
        $query->set( 'post_type', 'case_study');
    } elseif (is_front_page()){
        
    }
}


