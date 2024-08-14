<?php $title = "2A2D - A-propos";

// $articles

 ob_start(); ?>
    <section class='section mt-1 pt-3' >
    <h1 class="text-center">
             A-propos
    </h1>

      <!-- About -->
      <div class="container " id='about'>
            <div class="row about">
                <div class="col-sm-12 col-md-6 about__image  animate__animated animate__backInLeft animate__delay-1s">
                    <img src="public/images/hero2.jpg" alt="ong 2A2D" class="image img-fluid">
                    <div class="about__image__bg"></div>
                </div>
                <div class="col-sm-12 col-md-6 about__text  animate__animated animate__backInRight animate__delay-1s pt-4">
                    <h2>Qui sommmes nous ?</h2>
                    <div>
                        <p class="text-left">
                        L'ONG 2A2D est une organisation dévouée à la transformation sociale et au développement durable, 
                        axée sur l'amélioration des conditions de vie des communautés défavorisées. Nous croyons en un avenir
                         où chaque individu a la possibilité de s'épanouir, indépendamment de son contexte socio-économique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->
       

         <!-- About -->
         <div class="container mt-3" id='about'>
            <div class="row about">
                <div class="col-sm-12 col-md-6 about__text  animate__animated animate__backInLeft animate__delay-1s">
                    <h2>Un peu d'histoire</h2>
                    <div>
                        <p class="text-left">
                        Notre militantisme pour des projets d'intérêt général ne date pas d'aujourd'hui. 

                        Afin d'apporter un impact plus positif au bien être de toute et de tous, nous avons décidé en Décembre 2022 de nous constituer en une Organisation Non Gouvernementale. 

                        Nous militons pour un monde plus juste et équitable par tous et pour tous à travers l'atteinte de Objectifs du Développement Durable (ODD)
                                                </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 about__image  animate__animated animate__backInRight animate__delay-1s">
                    <img src="public/images/logo_big.jpg" alt="ong 2A2D" class="image img-fluid">
                    <div class="about__image__bg"></div>
                </div>
            </div>
        </div>
        <!-- End About -->

         <!--offers-->
         <div class="container mt-4">
                <div class="row offers">
                    <div class="col-sm-12 col-md-12 offers__text">
                        <h2 class="text-center">
                             Objectifs spécifiques
                        </h2>

                        <div class="mt-4">
                                <ul>
                                    <li> <i class="fas fa-check mr-2"></i> Éradiquer la pauvreté à travers une entraide aux familles pauvres afin de peur permettre de mener une activité pérenne génératrice de revenus ;</li>
                                    <li><i class="fas fa-check mr-2"></i> Permettre à tous les enfants d’accéder à une éducation scolaire de qualité et éviter les décrochages en les accompagnant ;</li>
                                    <li> <i class="fas fa-check mr-2"></i> Promouvoir l’égalité des genres afin que les rôles des femmes dans nos sociétés ne soient plus que domestiques ;</li>
                                    <li><i class="fas fa-check mr-2"></i> Faciliter le recours aux énergies renouvelables ;</li>
                                    <li><i class="fas fa-check mr-2"></i> Sensibiliser la jeunesse à l’accès à un travail décent ;</li>
                                    <li> <i class="fas fa-check mr-2"></i> Faire des propositions de reformes du système éducatif en mettant au cœur des programmes de formation l’innovation technologique ;</li>
                                    <li><i class="fas fa-check mr-2"></i> Lutter contre le changement climatique avec des actions contre les causes et les conséquences du réchauffement climatique.</li>
                                </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-12 col-md-6 offers__image  animate__animated animate__backInLeft animate__delay-1s">
                    <img src="public/images/logo.jpg" alt="ong 2a2d" class="img-fluid mt-3">
                </div>

                <div class="col-sm-12 col-md-6 offers__image  animate__animated animate__backInRight animate__delay-1s">
                    <img src="public/images/hero1.jpg" alt="ong 2a2d" class="img-fluid mt-3">
                </div>

                </div>
        </div>
        <!--offers-->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>