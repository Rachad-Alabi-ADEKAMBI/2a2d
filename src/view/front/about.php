<?php $title = "ГРУ - Про";

// $articles

 ob_start(); ?>
    <section class='section mt-5' >
    <h1 class="text-center">
             Про
    </h1>
       

        <!-- About -->
                <div class="container mt-5">
                <div class="row about">
                    <div class="col-sm-12 col-md-6 about__text">
                        <h2>Qui sommes nous ?</h2>
                        <div>
                            <p class="text-left">
                            L'ONG 2A2D est une organisation dévouée à la transformation sociale et au 
                            développement durable, axée sur l'amélioration des conditions de vie des communautés
                             défavorisées. Nous croyons en un avenir où chaque individu a la possibilité de s'épanouir, 
                             indépendamment de son contexte socio-économique. Grâce à des initiatives variées 
                             et une approche collaborative, 2A2D œuvre pour un monde plus juste, plus égalitaire,
                              et plus respectueux de l'environnement. Notre engagement profond et notre volonté de
                               changement sont au cœur de toutes nos actions, visant à bâtir
                            une société où chacun a sa place et peut contribuer positivement au progrès collectif.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 about__image">
                        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Зображення GEU" class="image img-fluid">
                        <div class="about__image__bg"></div>
                    </div>
                </div>
            </div>
        <!-- End About -->

         <!--offers-->
         <div class="container mt-4">
                <div class="row offers">
                <div class="col-sm-12 col-md-6 offers__image">
                    <img src="https://images.unsplash.com/photo-1511258471059-9811f2e09498?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="img-fluid mt-3">
                    <div class="offers__image__bg">
                    </div>
                </div>

                    <div class="col-sm-12 col-md-6 offers__text">
                        <h2>
                             Nos objectifs
                        </h2>

                        <div class="mt-4">
                            <p>
                                <ul>
                                    <li>Éradiquer la pauvreté à travers une entraide aux familles pauvres afin de peur permettre de mener une activité pérenne génératrice de revenus ;</li>
                                    <li>Permettre à tous les enfants d’accéder à une éducation scolaire de qualité et éviter les décrochages en les accompagnant ;</li>
                                    <li> Promouvoir l’égalité des genres afin que les rôles des femmes dans nos sociétés ne soient plus que domestiques ;</li>
                                    <li>Faciliter le recours aux énergies renouvelables ;</li>
                                    <li>Sensibiliser la jeunesse à l’accès à un travail décent ;</li>
                                    <li>Faire des propositions de reformes du système éducatif en mettant au cœur des programmes de formation l’innovation technologique ;</li>
                                    <li>Lutter contre le changement climatique avec des actions contre les causes et les conséquences du réchauffement climatique.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
        <!--offers-->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>