<?php 

if ( ! function_exists( 'page_header' ) ) {
    function get_page_header($title, $sub_title = null){
        include(locate_template('/partials/commons/page-header.php'));
    }
}

