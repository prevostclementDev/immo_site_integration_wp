<?php
/*
Template Name: Template single bien
Template Post Type: sell,loc
*/

    get_header(); 

    ?>

    
    <section id="text_accroch_fullWidht">

        <div class="title_superpose">

            <h2>
                Description du bien
            </h2>

            <p>
                Description du bien
            </p>

        </div>

        <p class="text_basic">
            <?= $value_bien['desc_sell'] ?>
        </p>

    </section>

    <section id="carousel_first_view">

        <div class="carousel_image">
            <?php
            
                foreach ($value_bien['imgArray'] as $img) {

                    ?>
                        <img src="<?= $img ?>" alt="">
                    <?php

                }

            ?>
        </div>

        <img src="<?= get_template_directory_uri(); ?>/assets/production/img/arrow.png" alt="" class="change__mage_carousel">

        <div class="filter_bg"></div>

        <div class="info_bien">

            <ul>

                <li><span class="data"><?= $value_bien['nb_bath'] ?></span><img src="<?= get_template_directory_uri(); ?>/assets/production/img/bxs_bath.png" alt=""></li>
                <li><span class="data"><?= $value_bien['nb_bedroom'] ?></span><img src="<?= get_template_directory_uri(); ?>/assets/production/img/ic_outline-bed.png" alt=""></li>
                <li><span class="data"><?= $value_bien['surface'] ?> <span class="data_info">m2</span> </span><img src="<?= get_template_directory_uri(); ?>/assets/production/img/bx_area.png" alt=""></li>

            </ul>

        </div>

    </section>

    <section id="photo_view">

        <section class="img right">

            <div class="contains_all">

                <div class="content"><p>1. <?= $value_bien['prestige_1']['title'] ?></p></div>
                <div class="img_content"><img src="<?= $value_bien['prestige_1']['img'] ?>" alt=""></div>

            </div>

        </section>

        <section class="img left">

            <div class="contains_all">

                <div class="content"><p>2. <?= $value_bien['prestige_2']['title'] ?></p></div>
                <div class="img_content"><img src="<?= $value_bien['prestige_2']['img'] ?>" alt=""></div>

            </div>

        </section>

    </section>

    <?php
    
    if ( isset($_POST['reservation']) ) {

        $display = true;
        $returnMsg = '';

        $nom = $_POST['nom'];
        $date = $_POST['date'];
        $email = $_POST['email'];

        $stringCondition = is_string($nom) && is_string($date) && is_string($email);
        $LenghtCondition = strlen($nom) > 0 && strlen($date) > 0 && strlen($email) > 0;

        if ( $stringCondition && $LenghtCondition ) {

            $option = unserialize(get_option('reservation'));

            if ( $option == false ) {

                $option = [];

            }
            
            $newData = array(
                'nom' => $nom,
                'date' => $date,
                'email' => $email,
                'post_id' => $this_page_id,
            );

            if ( !in_array($newData,$option) ) {

                array_push($option, $newData);
                update_option('reservation', serialize($option));
                $returnMsg = 'Réservation effectuée, vous aller recevoir un email de confirmation dans les prochains jours';

            } else {

                $display = false;

            }

        } else {

            $returnMsg = 'Entrer des données valides';

        }

    }
    
    ?>
    
    <div id="pop_up_reservation" class="<?php if( isset($display) && $display ) { echo 'active'; } ?>">

        <form action="" method="post">
            
            <h2>Réservation</h2>

            <label for="">
                <p>Votre nom :</p>
                <input type="text" name="nom" id="nom">
            </label>

            <label for="">
                <p>Date :</p>
                <input type="date" name="date" id="email">
            </label>

            <label for="">
                <p>Email :</p>
                <input type="email" name="email" id="email">
            </label>

            <p><?php if( isset($returnMsg) ) { echo $returnMsg; } ?></p>

            <div class="btn"><p class="closePopUp">fermer</p><input type="submit" value="Reserver" name="reservation"></div>
            
        </form>

    </div>

    <script src="<?= get_template_directory_uri();?>/assets/production/js/carousel-min.js"></script>

    <?php

    get_footer();

?>