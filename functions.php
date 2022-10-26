<?php
    
    function register_my_menus() {
        register_nav_menus(
          array(
            'menu_header' => __( 'Header Menu' ),
           )
         );
    }

    add_action( 'init', 'register_my_menus' );
