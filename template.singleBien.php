<?php
/*
Template Name: Template single bien
Template Post Type: page
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed residamus, inquit, si placet. Duo Reges: constructio interrete. Sed tamen intellego quid velit. Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Beatum, inquit. Idque testamento cavebit is, qui nobis quasi oraculum ediderit nihil post mortem ad nos pertinere? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Ut enim consuetudo loquitur, id solum dicitur honestum, quod est populari fama gloriosum. Scientiam pollicentur, quam non erat mirum sapientiae cupido patria esse cariorem. Et harum quidem rerum facilis est et expedita distinctio. 
        </p>

    </section>

    <section id="carousel_first_view">

        <div class="carousel_image">
            <img src="./assets/production/img/pexels-pixabay-534151.jpg" alt="">
            <img src="./assets/production/img/pexels-chris-goodwin-32870.jpg" alt="">
            <img src="./assets/production/img/pexels-expect-best-323780.jpg" alt="">
        </div>

        <img src="./assets/production/img/arrow.png" alt="" class="change__mage_carousel">

        <div class="filter_bg"></div>

        <div class="info_bien">

            <ul>

                <li><span class="data">2</span><img src="./assets/production/img/bxs_bath.png" alt=""></li>
                <li><span class="data">5</span><img src="./assets/production/img/ic_outline-bed.png" alt=""></li>
                <li><span class="data">100 <span class="data_info">m2</span> </span><img src="./assets/production/img/bx_area.png" alt=""></li>

            </ul>

        </div>

    </section>

    <section id="photo_view">

        <section class="img right">

            <div class="contains_all">

                <div class="content"><p>1. VUE DE MER</p></div>
                <div class="img_content"><img src="./assets/production/img/pexels-ben-mack-6775268.jpg" alt=""></div>

            </div>

        </section>

        <section class="img left">

            <div class="contains_all">

                <div class="content"><p>2. SALON INTERIEUR</p></div>
                <div class="img_content"><img src="./assets/production/img/pexels-vecislavas-popa-1571463.jpg" alt=""></div>

            </div>

        </section>

    </section>
    
    <div id="pop_up_reservation">

        <form action="" method="post">
            
            <h2>Reservation</h2>

            <label for="">
                <p>Nom :</p>
                <input type="text" name="nom" id="nom">
            </label>

            <label for="">
                <p>Prénom :</p>
                <input type="text" name="pnom" id="pnom">
            </label>

            <label for="">
                <p>Email :</p>
                <input type="email" name="email" id="email">
            </label>

            <div class="btn"><p class="closePopUp">fermer</p><input type="submit" value="Reserver"></div>
            
        </form>

    </div>

    <?php

    get_footer();

?>