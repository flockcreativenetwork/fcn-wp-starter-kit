<?php 

if ( ! function_exists( 'indev_menu' ) ) {
    function indev_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'infromatika_dev' ),
            'footer_menu'  => __( 'Footer Menu', 'infromatika_dev' ),
        ) );
    }
}