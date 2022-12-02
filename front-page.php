<?php

    get_header(); 

    $accroche_data = get_field('accroche',$this_page_id);
    $statistiques = get_field('statistiques',$this_page_id);

    ?>
    
    <section id="nos_bien_de_luxe">

        <div class="leftPart">

            <img src="<?= $accroche_data['image_accroche']['url'] ?>" alt="" class="presentationImage">
            <div class="filter_bg"></div>

        </div>

        <div class="rightPart">

            <div class="title_superpose">

                <h2>
                    <?= $accroche_data['titre_accroche'] ?>
                </h2>

                <p>
                    <?= $accroche_data['titre_accroche'] ?>
                </p>

            </div>


            <p>

                <?= $accroche_data['texte_daccroche'] ?>

            </p>

            <a href="<?= get_permalink($accroche_data['lien_de_page']->ID) ?>" class="button"><?= $accroche_data['texte_du_lien'] ?></a>

        </div>

    </section>

    <?php dynamic_sidebar( 'statistiques' ); ?>

    <section id="lasted_bien">

        <?php 

            $biens = new WP_Query(array(
                'post_type' => 'sell',
                'posts_per_page' => 3,
            ));

            if ( $biens->have_posts() ) {

                while ( $biens->have_posts() ) {

                    $biens->the_post();
                    $bien = unserialize(get_post_meta(get_the_ID(),'_info_sell',true));

                    ?>
                    <a href="<?= get_the_permalink(get_the_ID()) ?>" class="last_bien">
                        <img src="<?= $bien['prestige_1']['img']?>" alt="" class="img_mane_bien">
                        <div class="filter_bg"></div>

                        <div class="content_bien">

                            <h3><?= $bien['name_sell'] ?></h3>

                        </div>

                    </a>
                    <?php

                }

            }
            
            wp_reset_postdata();

            if ( $biens->found_posts < 3 ) {

                $locs = new WP_Query(array(
                    'post_type' => 'loc',
                    'posts_per_page' => 3 - $biens->found_posts,
                ));
    
                if ( $locs->have_posts() ) {
    
                    while ( $locs->have_posts() ) {
    
                        $locs->the_post();
                        $loc = unserialize(get_post_meta(get_the_ID(),'_info_sell',true));

                        ?>
                        <a href="<?= get_the_permalink(get_the_ID()) ?>" class="last_bien">
                            <img src="<?= $loc['prestige_1']['img']?>" alt="" class="img_mane_bien">
                            <div class="filter_bg"></div>
    
                            <div class="content_bien">
    
                                <h3><?= $loc['name_sell'] ?></h3>
    
                            </div>
    
                        </a>
                        <?php
    
                    }
    
                }

                wp_reset_postdata();

            }

        ?>

    </section>

    <?php

    get_footer();

?>
