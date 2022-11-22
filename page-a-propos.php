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

    <section id="statistique">

        <ul class="stats_list">

            <li><p><span>+100</span>Clients satisfaits</p></li>
            <li><p><span>+50</span>Biens en ventes</p></li>
            <li><p><span>+20</span>Programmes neufs</p></li>

        </ul>

        </section>

        <section id="vos_avis">

        <h2>Vos avis</h2>

        <div class="all_avis">
            
            <div class="avis"></div>
            <div class="avis"></div>
            <div class="avis"></div>

        </div>

    </section>

    <section id="bottom_page_call_to_action">

        <div class="title_superpose">

            <h2>
                BESOIN DE PLUS D’INFORMATION ?
            </h2>

            <p>
                BESOIN DE PLUS D’INFORMATION ?
            </p>

        </div>

        <a href="">PRENDRE CONTACT AVEC NOUS</a>

    </section>
    
    <?php

    get_footer();

?>