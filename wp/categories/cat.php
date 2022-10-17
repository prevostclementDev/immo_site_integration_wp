<?php

/* ########################### */
/*       NEW CONTENT TYPE      */
/* ########################### */
function wpm_custom_post_type() {

	$args_type = array(
		'labels'              => array(
            'name'                => _x( 'nuisibles', 'Post Type General Name'),
            'singular_name'       => _x( 'nuisible', 'Post Type Singular Name'),
    
            'menu_name'           => __( 'Les nuisibles'),
    
            'all_items'           => __( 'Tout les nuisibles'),
            'view_item'           => __( 'Voir les nuisibles'),
            'add_new_item'        => __( 'Ajouter un nuisible'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer le nuisible'),
            'update_item'         => __( 'Modifier le nuisible'),
            'search_items'        => __( 'Rechercher un nuisible'),
            'not_found'           => __( 'Non trouvée'),
            'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
        ),
        "hierarchical" => false,
        'description'         => 'Tous les nuisibles',
		'public'              => true,
        'menu_position'       => 4,
        'menu_icon'          => "dashicons-buddicons-replies",
        'supports' => ['title','editor','thumbnail','page-attributes','revisions'],
	);
	$args_cat = array(
        "hierarchical" => true,
        "label" => "Types nuisibles",
        'public'=> true,
        "singular_label" => "type nuisible",
    );

	register_post_type( 'nuisibles', $args_type );
    register_taxonomy("categorie_nuisibles", array("nuisibles"), $args_cat);
}
add_action( 'init', 'wpm_custom_post_type'); // Nouveau type de contenu