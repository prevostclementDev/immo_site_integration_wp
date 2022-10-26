<?php
/*
Template Name: Template Hub d'article
Template Post Type: page
*/    

get_header(); 

    $pages_articles = get_field('liste_darticle');

?>

    <section id="hub_content">

        <?php 
        
        foreach ( $pages_articles as $page ) {

            $image_header_page = get_field('image_du_header', $page->ID);
                
            if ( $image_header_page ) {

                $image_header_link_page = $image_header_page["url"];

            } else {

                $image_header_link_page = $image_header_link;

            }

            
            $title = get_field('titre_de_la_page', $page->ID);
                            
            if ( !$title ) {

                $title = "";

            }

            ?>

            <a href="<?= get_page_uri($page->ID) ?>" class="hub">
                <img src="<?= $image_header_link_page ?>" alt="" class="background_image">
                <div class="filter_bg"></div>
                <div class="content">
                    <h2><?= $title ?></h2>
                </div>
            </a>

            <?php

        }

        ?>



    </section>

    <section id="bottom_page_call_to_action">

        <div class="title_superpose">

            <h2>
                DECOUVRIR NOS BIENS à l’ACHAT ?
            </h2>

            <p>
                DECOUVRIR NOS BIENS à l’ACHAT ?
            </p>

        </div>

        <a href="">NOS BIENS EN VENTE</a>

    </section>

<?php

    get_footer();

?>