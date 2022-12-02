<?php
/*
Template Name: Template liste de bien
Template Post Type: page
*/

    get_header(); 

    $type_list = get_field('type_list_bien', $this_page_id);

    ?>
    
    <section id="list_bien">

        <div class="container_bien">

        <?php 

            $biens = new WP_Query(array(
                'post_type' => $type_list,
                'posts_per_page' => -1,
            ));

            if ( $biens->have_posts() ) {

                while ( $biens->have_posts() ) {

                    $biens->the_post();

                    $val = unserialize(get_post_meta(get_the_ID(),'_info_sell',true));

                    ?>

                    <a href="<?= the_permalink() ?>" class="bien">

                        <img src="<?= $val['prestige_1']['img'] ?>" alt="" class="background_img">
                        <div class="filter_bg"></div>

                        <div class="content">

                            <h2><?= $val['name_sell'] ?></h2>
                            <p>
                                <?= the_excerpt()?>
                            </p>

                        </div>

                    </a>

                    <?php

                }

            } else {

                echo "<h2> Aucun bien :/</h2>";

            }

            wp_reset_postdata();

        ?>

        </div>

    </section>
    
    <?php

    get_template_part( 'templates_parts/bottom_cta' , 'botom_cta' , array(
        'title' => 'Découvrir nos biens à l\'achats ?',
        'link' => get_site_url().'/contact/',
        'link_text' => 'Nos biens',
    ));

    get_footer();

?>