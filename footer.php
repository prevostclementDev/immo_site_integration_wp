    
    <?php

    $bottomCta = get_field('bouton_bas_de_page');
    $title = get_field('titre_du_call_to_action');
    $txt_link = get_field('texte_du_bouton');

    $url_link = get_permalink(get_field('lien_du_bouton')->ID);

    $page_type = get_post_type();

    if ( $page_type == "sell" || $page_type == "loc" ) {

        get_template_part( 'templates_parts/bottom_cta' , 'botom_cta' , array(
            'title' => 'voulez vous reserver une visite ?',
            'link' => '',
            'link_text' => 'RESERVER',
            'id_btn' => 'reservations',
            'id_bien' => $post->ID,
        ));

        echo '<script src="'.get_template_directory_uri().'/assets/production/js/reservation_pop_up-min.js"></script>';

    } else if ( $bottomCta === true && !is_front_page() ) {

        get_template_part( 'templates_parts/bottom_cta' , 'botom_cta' , array(
            'title' => $title,
            'link' => $url_link,
            'link_text' => $txt_link,
        ));

    }
    
    ?>

    <footer id="footer">

        <section class="mane_content">

            <nav>

            <?php wp_nav_menu( 
                        array( 
                            'theme_location' => 'footer_menu',
                            'link_before' => '<p class="p_nav">',
                            'link_after' => '</p>',
                        )); 
                    ?>

            </nav>

            <a href="" class="cta_content">Nous contacter</a>

        </section>

        <section class="bottom_bandeau">

            <p> Design and développement by <span>Prévost Clément</span> </p>

        </section>

    </footer>
    
    </main>

    <script src="<?= get_template_directory_uri();?>/assets/production/js/main-min.js"></script>

    <?php wp_footer(); ?>