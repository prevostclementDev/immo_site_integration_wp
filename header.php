<?php

    $this_page_id = $post->ID;

    if ( is_front_page() ) {

        $this_page_id = 38;

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/production/style/style-min.css">
    <title>Projet</title>
</head>
    <body>
        
        <main>

            <nav id="navigation">

                <section id="nav_content">

                    <ul class="list_link_nav">

                        <li>
                            <a href="">
                                <p class="p_nav">
                                    <span class="front_text"><span class="openAnimate">Nos biens à la ventes.</span></span>
                                    <span class="back_text"><span class="openAnimate">Nos biens à la ventes</span></span>
                                </p>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <p class="p_nav">
                                    <span class="front_text"><span class="openAnimate">NOS BIENS à la LOCATIONS.</span></span>
                                    <span class="back_text"><span class="openAnimate">NOS BIENS à la LOCATIONS</span></span>
                                </p>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <p class="p_nav">
                                    <span class="front_text"><span class="openAnimate">nos actualités</span></span>
                                    <span class="back_text"><span class="openAnimate">nos actualités</span></span>
                                </p>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <p class="p_nav">
                                    <span class="front_text"><span class="openAnimate">à propos</span></span>
                                    <span class="back_text"><span class="openAnimate">à propos</span></span>
                                </p>
                            </a>
                        </li>
    
                    </ul>
    
                    <div class="closeNavigation">
                        <img src="<?= get_template_directory_uri();?>/assets/production/img/close-nav.png" alt="">
                    </div>
                    
                </section>

            </nav>

            <?php
            
            $size_header = get_field( "taille_du_header" , $this_page_id );
            $color_logo = get_field( "couleur_du_logo" , $this_page_id );

            if ( !$size_header ) {

                $size_header = "full_height_header";

            }

            if ( !$color_logo ) {

                $color_logo = "";

            }
            
            ?>
            
            <header id="header" class="<?= $size_header." ".$color_logo?>">

                <?php 
                
                $image_header = get_field('image_du_header', $this_page_id);
                
                if ( $image_header ) {

                    $image_header_link = $image_header["url"];

                } else {

                    $image_header_link = get_template_directory_uri()."/assets/production/img/pexels-alex-staudinger-1732414.jpg";

                }

                ?>
            
                <img src="<?=  $image_header_link ?>" alt="//R" class="header_bg">
                <div class="filter_bg"></div>
    
                <section class="header_content">
    
                    <div class="header_top">
    
                        <a class="header_name" href="index.html">EDMON.IMMO</a>
    
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
                            
                            if ( !$title ) {

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

                        } 

                        ?>
    
                    </div>
    
                </section>
    
            </header>

            <?php
            
            ?>