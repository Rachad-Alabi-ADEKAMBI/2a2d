<?php $title = "Ong 2A2D - Projets";

// $articles

 ob_start(); ?>
    <section class='section' >
         <!-- Blog -->
         <div class="container mt-5 blog" id="blog">
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
            <div class="row blog__items mt-3">
                <div class="col-sm-12 col-md-6 mx-auto text-center">
                    <div class="blog__items__item mx-auto text-center">
                        <h3>
                            Potager bio et biogaz au service de l'environnement (Août 2024 - Août 2025)
                        </h3>
                        <p class="text-left mt-4">
                            Ce projet vise à promouvoir l'agriculture durable et la production de biogaz en utilisant des techniques respectueuses de l'environnement. Nous mettons en place des potagers bio pour améliorer l'autosuffisance alimentaire et réduire les déchets organiques.
                        </p>
                        <a href="index.php?action=project/1" class="btn btn-primary mx-auto mt-4">
                            En savoir plus
                        </a>
                        <div class="date text-center pt-4">
                            <i class="bi bi-leaf"></i>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h3>Projets passées</h3>
            <div class="row blog__items mt-3">
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="blog__items__item">
                        <h3>
                            Potager bio et biogaz au service de l'environnement (Août 2024 - Août 2025)
                        </h3>
                        <p class="text-left mt-4">
                            Ce projet vise à promouvoir l'agriculture durable et la production de biogaz en utilisant des techniques respectueuses de l'environnement. Nous mettons en place des potagers bio pour améliorer l'autosuffisance alimentaire et réduire les déchets organiques.
                        </p>
                        <a href="index.php?action=project/1" class="btn btn-primary mx-auto mt-4">
                            En savoir plus
                        </a>
                        <div class="date text-center pt-4">
                            <i class="bi bi-leaf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="blog__items__item">
                        <h3>
                            Don de sacs d'ordinateur vide à 9 nouveaux bacheliers (Septembre 2023)
                        </h3>
                        <p class="text-left">
                            Ce projet a pour objectif de soutenir les nouveaux bacheliers en 
                            leur fournissant des sacs d'ordinateur pour faciliter leur accès 
                            aux outils numériques nécessaires pour leurs études. 
                            Une contribution significative à leur réussite académique et professionnelle.
                        </p>
                        <a href="index.php?action=project/2" class="btn btn-primary mx-auto">
                            En savoir plus
                        </a>
                        <div class="date pt-4">
                            <i class="bi bi-bag-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>