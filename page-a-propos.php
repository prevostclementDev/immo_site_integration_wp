<?php

    get_header(); 

    $introduction = get_field('texte_dintroduction',$this_page_id);
    $equipe = get_field('equipe',$this_page_id);
    
    ?>
    
    <section id="text_accroch_fullWidht">

        <div class="title_superpose">

            <h2>
                Notre agence
            </h2>

            <p>
                notre agence
            </p>

        </div>

        <p class="text_basic">   
                <?= $introduction ?>
        </p>

    </section>

    <section id="your_teams">

        <div class="title_superpose">

            <h2>
                Notre équipe
            </h2>

            <p>
                Notre équipe
            </p>

        </div>

        <div class="container_team">

            <?php
            
                foreach($equipe as $member) {

                    ?>
                    
                    <div class="member">

                        <img src="<?= $member['portrait']['url'] ?>" alt="" class="member_img">
                        <h3><?= $member['nom'] ?></h3>
                        <p><?= $member['metier'] ?></p>

                    </div>
                    
                    <?php

                }

            ?>

        </div>

    </section>

    <?php dynamic_sidebar( 'statistiques' ); ?>

<!--     <section id="vos_avis">

        <h2>Vos avis</h2>

        <div class="all_avis">
            
            <div class="avis"></div>
            <div class="avis"></div>
            <div class="avis"></div>

        </div>

    </section> -->
    
    <?php

    get_template_part( 'templates_parts/bottom_cta' , 'botom_cta' , array(
        'title' => 'BESOIN DE PLUS D’INFORMATION ?',
        'link' => get_site_url().'/contact/',
        'link_text' => 'PRENDRE CONTACT AVEC NOUS',
    ));

    get_footer();

?>