<?php $title = "2A2D - Notre équipe";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container">
            <h1 class="text-center mt-1 pt-3">
                Notre équipe
            </h1>

            <p class="text-center">
            Chez 2A2D, notre équipe est le pilier de notre mission. 
            Composée de professionnels passionnés et diversifiés, nous partageons une 
            vision commune : améliorer les conditions de vie des communautés. 
            Unis par notre engagement, nous travaillons ensemble pour créer un impact positif 
            et durable.
            </p>


            <div class="row g-0 gx-5 align-items-end team mt-2">
                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/presidente.jpg" alt="Equipe de l'ong 2A2D">
                </div>
                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/vice_presidente.jpg" alt="Equipe de l'ong 2A2D">
                </div>

                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/tresorier.jpg" alt="Equipe de l'ong 2A2D">
                </div>
            </div>

            <row class="g-0 gx-5 align-items-end team mt-2">
            <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/charge_de_ressources.jpg" alt="Equipe de l'ong 2A2D">
                </div>
                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/secretaire.jpg" alt="Equipe de l'ong 2A2D">
                </div>

                <div class="col-sm-12 col-md-4 team__member">
                    <img src="public/images/charge_de_programmes.jpg" alt="Equipe de l'ong 2A2D">
                </div>
            </row>

        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>