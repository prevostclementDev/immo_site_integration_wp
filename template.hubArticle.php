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

                $title = get_the_title($page->ID);

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

<?php

    get_template_part( 'templates_parts/bottom_cta' , 'botom_cta' , array(
        'title' => 'Découvrir nos biens à l\'achats ?',
        'link' => get_site_url().'/contact/',
        'link_text' => 'Nos biens',
    ));

    get_footer();

?>