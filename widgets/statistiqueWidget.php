<?php

class w_statistique extends WP_Widget {
    public function __construct() {
        parent::__construct('w_statistique','statistiques');
    }

    public function form($instance){
        ?>
            <p>
                <label for="<?= $this->get_field_id('clients_statisfaits') ?>">Nombre de clients statisfaits</label>
                <input value='<?php if(isset($instance['clients_statisfaits'])){ echo $instance['clients_statisfaits'];} ?>' type="number" id="<?= $this->get_field_name('clients_statisfaits') ?>" name="<?= $this->get_field_name('clients_statisfaits') ?>">
            </p>
            <p>
                <label for="<?= $this->get_field_id('biens_en_vents') ?>">Nombre de biens en ventes</label>
                <input value='<?php if(isset($instance['biens_en_vents'])){ echo $instance['biens_en_vents'];} ?>' type="number" id="<?= $this->get_field_name('biens_en_vents') ?>" name="<?= $this->get_field_name('biens_en_vents') ?>">
            </p>
            <p>
                <label for="<?= $this->get_field_id('programmes_neufs') ?>">Nombre de programmes neufs</label>
                <input value='<?php if(isset($instance['programmes_neufs'])){ echo $instance['programmes_neufs'];} ?>' type="number" id="<?= $this->get_field_name('programmes_neufs') ?>" name="<?= $this->get_field_name('programmes_neufs') ?>">
            </p>
        <?php
    }

    public function update($newInstance, $oldInstance){
        return $newInstance;
    }

    public function widget($args,$instance){
        ?>

        <section id="statistique">

            <ul class="stats_list">

                <li><p><span>+<?= $instance['clients_statisfaits'] ?></span>Clients satisfaits</p></li>
                <li><p><span>+<?= $instance['biens_en_vents'] ?></span>Biens en ventes</p></li>
                <li><p><span>+<?= $instance['programmes_neufs'] ?></span>Programmes neufs</p></li>

            </ul>

        </section>

        <?php
    }
}