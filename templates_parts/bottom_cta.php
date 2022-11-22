<section id="bottom_page_call_to_action">

    <div class="title_superpose">

        <h2>
            <?= $args['title'] ?>
        </h2>

        <p>
        <?= $args['title'] ?>
        </p>

    </div>

    <?php 
    
        if ( isset($args['id_btn']) ) {

            ?>
            <a data_bien="<?= $args['id_bien'] ?>" id="<?= $args['id_btn'] ?>"><?= $args['link_text'] ?></a>
            <?php


        } else {

            ?>
            <a href="<?= $args['link'] ?>"><?= $args['link_text'] ?></a>
            <?php

        }

    ?>

</section>