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

    require_once 'widgets/statistiqueWidget.php';

    function register_widgets() {

        register_widget('w_statistique');

        register_sidebar([
            'id'=>'w_statistique',
            'name'=>'statistiques'
        ]);

    }

    /* ADD CSS CUSTOM */
    add_action( 'wp_enqueue_scripts', 'add_custom_css' );
    /* ADD MENU NAV */
    add_action( 'init', 'register_my_menus' );
    /* ADD ADMIN BAR */
    add_filter( 'show_admin_bar', '__return_true' );
    /* REGISTER WIDGETS */
    add_action('widgets_init','register_widgets');