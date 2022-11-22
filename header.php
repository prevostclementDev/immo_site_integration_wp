<?php

    global $this_page_id;

    $this_page_id = $post->ID;

    if ( is_front_page() ) {

        $this_page_id = 38;

    }

    $page_type = get_post_type();

    if ( $page_type == "sell" || $page_type == "loc" ) {

        global $value_bien;
        $value_bien = unserialize(get_post_meta($this_page_id,'_info_sell',true));

    }

    wp_head();

?>
    <body>
    
        <main>

            <nav id="navigation">

                <section id="nav_content">

                    <?php wp_nav_menu( 
                        array( 
                            'theme_location' => 'menu_header',
                            'link_before' => '<p class="p_nav">',
                            'link_after' => '</p>',
                        )); 
                    ?>
    
                    <div class="closeNavigation">
                        <img src="<?= get_template_directory_uri();?>/assets/production/img/close-nav.png" alt="">
                    </div>
                    
                </section>

            </nav>

            <?php
            
            $size_header = get_field( "taille_du_header" , $this_page_id );
            $color_logo = get_field( "couleur_du_logo" , $this_page_id );

            $size_header = "notFull_height_header";

            if ( !$size_header and $page_type != "sell" and $page_type != "loc" ) {

                $size_header = "full_height_header";

            }

            if ( !$color_logo ) {

                $color_logo = "";

            }
            
            ?>
            
            <header id="header" class="<?= $size_header." ".$color_logo?>">

                <?php 

                $image_header_link = get_template_directory_uri()."/assets/production/img/pexels-alex-staudinger-1732414.jpg";
                $image_header = get_field('image_du_header', $this_page_id);
                
                if ( $image_header ) {

                    $image_header_link = $image_header["url"];

                } else if ( $page_type == "sell" || $page_type == "loc" ) {

                    $image_header_link = $value_bien['prestige_1']['img'];

                }

                ?>
            
                <img src="<?=  $image_header_link ?>" alt="//R" class="header_bg">
                <div class="filter_bg"></div>
    
                <section class="header_content">
    
                    <div class="header_top">
    
                        <a class="header_name" href="<?= get_home_url(); ?>">EDMON.IMMO</a>
    
                        <div class="header_burger">
    
                            <div class="header_burger_bull"></div>
                            <div class="header_burger_bull"></div>
                            <div class="header_burger_bull"></div>
    
                        </div>
    
                    </div>
    
                    <div class="header_middle">
    
                        <h1>
    
                            <?php

                            $title = get_field('titre_de_la_page', $this_page_id);
                            
                            if ( $page_type == "sell" || $page_type == "loc" ) {

                                $title = $value_bien['name_sell'];

                            } else if ( $page_type == "sell" ) {

                                $title = "";

                            }

                            echo $title;

                            ?>
    
                        </h1>
    
                    </div>
    
                    <div class="header_bottom">
    
                        <?php
                        
                        

                        if ( get_field('bandeau_blanc',$this_page_id) ) {

                            ?>
                            
                            <div class="content_bottom">
    
                                <ul class="coordonnate">

                                    <li>
                                        <p>41 rue Jobin
                                            13003 Marseille</p>
                                    </li>

                                    
                                    <li>
                                        <p>contact@EDMON.immo.com</p>
                                    </li>

                                    <li>
                                        <p>+33687591234</p>
                                    </li>

                                </ul>

                            </div>
                            
                            <?php

                        } else if ( $page_type == "sell" || $page_type == "loc" ) {

                            ?>
                            <div class="content_bottom adresse">
    
                                <h2><?php if( $value_bien['address_sell'] == false ) { echo "Pas d'adresse"; } else { echo $value_bien['address_sell'];}  ?></h2>

                            </div>
                            <?php

                        }

                        ?>
    
                    </div>
    
                </section>
    
            </header>

            <?php
            
            ?>