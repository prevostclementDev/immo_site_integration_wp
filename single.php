<?php
    
    get_header();

?>

    <section id="article">

        <div class="title_superpose">

            <h2>
                <?= the_title() ?>
            </h2>

            <p>
                <?= the_title() ?>
            </p>

        </div>

        <div class="text">

            <p>

                <?= the_content() ?>

            </p>

        </div>

    </section>

    <section id="view_more_article">

        <div class="title_superpose">

            <h2>
                Voir plus d'articles
            </h2>

            <p>
                Voir plus d'articles
            </p>

        </div>

        <div class="articles_view">

        <?php 

            $biens = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            ));

            if ( $biens->have_posts() ) {

                while ( $biens->have_posts() ) {

                    $biens->the_post();

                    $image_header = get_field('image_du_header', get_the_ID());

                    ?>
                    
                    <a href="" class="bien type_article">

                        <img src="<?= $image_header['url'] ?>" alt="" class="background_img">
                        <div class="filter_bg"></div>

                        <div class="content">

                            <h2><?= the_title() ?></h2>
                            <p>
                                <?= the_excerpt() ?>
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

    <section id="bottom_page_call_to_action">

        <div class="title_superpose">

            <h2>
                VOUS INSCRIRE à LA NEWSLETTER
            </h2>

            <p>
                VOUS INSCRIRE à LA NEWSLETTER
            </p>

        </div>

        <div class="newsletter">

            <form action="">

                <label for="email">
                    <p>Votre email :</p>
                    <input type="email" name="email" id="email">
                    <input type="submit" value="Envoyer">
                </label>

            </form>

        </div>

    </section>

<?php

    get_footer();

?>