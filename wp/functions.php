<?php
include_once("widget/widget.php");
include_once("metabox/metabox.php");
include_once("categories/cat.php");

/* FOR GIVE ALL ULR WE NEED FOR MY PROJECT */
class url {
    private $assets;
    private $style;

    public function __construct() {
        $this->assets = get_theme_file_uri("ASSET URL");
        $this->style = get_theme_file_uri("style URL");
    }

    public function get_asset() {
        return $this->assets;
    }

    public function get_style() {
        return $this->style;
    }
}
define('urlFor',new url); // Récupération des urls


/* ########################### */
/* ACTIVER IMAGE MISE EN AVANT */
/* ########################### */
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' ); // On ajoute la fonctionnalité
}
add_action('after_setup_theme', 'mytheme_post_thumbnails'); // On ajoute l'action mytheme_post_thumbnails() dans wp


/* ########################### */
/*   LIMITE TAILLE DE EXCERPT  */
/* ########################### */
function custom_excerpt_length() {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length'); // Modification longueur Excerpt




