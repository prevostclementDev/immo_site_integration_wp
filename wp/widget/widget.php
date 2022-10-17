<?php


/* ZONE DE WIDGET */
function register_MyWidgets() {
    register_sidebar([
        'id'=>'id_zone',
        'name'=>'name_zone'
    ]);
}
add_action('widgets_init','register_MyWidgets'); // ZONE DE WIDGET

// TO ADD IN HTML CODE : dynamic_sidebar( 'widget_name' );