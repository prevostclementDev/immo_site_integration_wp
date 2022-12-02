<?php
    /*
    Template Name: Template list d'article
    Template Post Type: page
    */    

    get_header(); 

    $type_article = get_field('article_type');

    if ( $type_article ) {

        $slug = $type_article[0]->slug;

    } else {

        $slug = "";

    }

?>

    <section id="list_bien">

        <div class="container_bien">

        <?php 

            $articles = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'category_name' => $slug,
            ));

            if ( $articles->have_posts() ) {

                while ( $articles->have_posts() ) {

                    $articles->the_post();

                    $image_article = get_field('image_du_header', get_the_ID());
                
                    if ( $image_article ) {
    
                        $image_article_link = $image_article["url"];
    
                    } else {
    
                        $image_article_link = get_template_directory_uri()."/assets/production/img/pexels-alex-staudinger-1732414.jpg";
    
                    }

                    ?>

                    <a href="<?= get_page_uri(get_the_ID()) ?>" class="bien type_article">

                        <img src="<?= $image_article_link  ?>" alt="" class="background_img">
                        <div class="filter_bg"></div>

                        <div class="content">

                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>

                        </div>

                    </a>

                    <?php

                }

            } else {

                echo "<h2> Aucun articles :/</h2>";

            }

            wp_reset_postdata();

        ?>

        </div>

    </section>

<?php

    get_footer();

?>