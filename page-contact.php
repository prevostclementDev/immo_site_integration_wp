<?php

    get_header(); 

    ?>
    
    <section id="contact">
                <h2>Nous contacter</h2>

                <?=
                
                apply_shortcodes('[contact-form-7 id="140" title="contact_form"]')

                ?>

                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85433.78239933948!2d-4.167240623689745!3d47.99814201258121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4810d5972e13aeaf%3A0xd32d85efcaa2cdd0!2s29000%20Quimper!5e0!3m2!1sfr!2sfr!4v1666642377858!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

    </section>
    
    <?php

    get_footer();

?>