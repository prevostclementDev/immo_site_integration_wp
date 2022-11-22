<?php
    
    function register_my_menus() {
        register_nav_menus(
          array(
            'menu_header' => __( 'Header Menu' ),
           )
         );
    }

    function add_custom_css() {

        wp_enqueue_style( 'style_immo', get_template_directory_uri() . '/assets/production/style/style-min.css' );

    }

    add_action( 'wp_enqueue_scripts', 'add_custom_css' );
    add_action( 'init', 'register_my_menus' );
    	
    add_filter( 'show_admin_bar', '__return_true' );