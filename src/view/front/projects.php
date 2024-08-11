<?php $title = "Ong 2A2D - Projets";

// $articles

 ob_start(); ?>
    <section class='section' >
         <!-- Blog -->
         <div class="container mt-5 pt-2 blog" id="blog">
            <h2 class="text-center">
                Nos projets
            </h2>
            <p class="text-center">
            Les projets de 2A2D reflètent notre engagement à transformer les communautés et
             à promouvoir un développement durable. Chaque initiative est conçue pour répondre
              aux besoins spécifiques des populations vulnérables, qu'il s'agisse d'éducation,
               de lutte contre la pauvreté ou de protection de l'environnement.
            </p>

            <hr>
            <h3>Projets phare</h3>
            <div class="row blog__items mt-3 text-center">
                <div class="col-sm-12 col-md-6 mb-3 text-center">
                    <div class="blog__items__item mx-auto text-center">
                        <img src="public/images/biogaz2.jpg" alt="ong 2a2d">
                        <h4>
                            Potager bio et biogaz au service de l'environnement 
                        </h4>
                        <p class="text-left mt-4">
                            Ce projet vise à promouvoir l'agriculture durable et la production de biogaz en utilisant des techniques respectueuses de l'environnement. Nous mettons en place des potagers bio pour améliorer l'autosuffisance alimentaire et réduire les déchets organiques.
                        </p>
                        <a href="index.php?action=projectPage&id=1" class="btn btn-primary mx-auto mt-4">
                            En savoir plus
                        </a>
                        <div class="date text-center pt-1">
                            <i class="bi bi-calendar"></i> <br>
                            <p>
                            Août 2024 <br> - <br> Août 2025
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h3>Projets antérieurs</h3>
            <div class="row blog__items mt-3">
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="blog__items__item">
                        <img src="public/images/maillots.jpg" alt="ong 2a2d">
                        <h4>
                        Don de Maillots de football
                        </h4>
                        <p class="text-left mt-4">
                        L'ONG 2A2D est fière d'avoir soutenu l'équipe de football d'Avotrou en leur
                         offrant de nouveaux maillots. Ce don s'inscrit dans notre engagement à
                          promouvoir le développement local à travers le sport, un vecteur 
                          essentiel d'unité et de progrès pour notre communauté.
                        </p>
                        <a href="index.php?action=projectPage&id=3" class="btn btn-primary mx-auto mt-4">
                            En savoir plus
                        </a>
                        <div class="date text-center pt-1">
                            <i class="bi bi-calendar"></i> 
                            <p>
                            Août 2023 <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="blog__items__item">
                    <img src="public/images/logo_big.jpg" alt="ong 2a2d">
                        <h4>
                            Don de sacs d'ordinateur vide à 9 nouveaux bacheliers
                        </h4>
                        <p class="text-left">
                            Ce projet a pour objectif de soutenir les nouveaux 
                            bacheliers en leur fournissant des sacs d'ordinateur 
                            pour faciliter leur accès aux outils numériques 
                            nécessaires pour leurs études. <br>
                            Une contribution significative à leur réussite académique et professionnelle.
                        </p> <br>
                        <a href="index.php?action=projectPage&id=2" class="btn btn-primary mx-auto">
                            En savoir plus
                        </a>
                        <div class="date pt-1">
                            <i class="bi bi-calendar"></i> <br>
                            <p>Sep 2023 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>