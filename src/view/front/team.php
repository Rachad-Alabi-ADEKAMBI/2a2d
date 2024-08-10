<?php $title = "2A2D - Notre équipe";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container">
            <h1 class="text-center mt-5 pt-3">
                Notre équipe
            </h1>

            <p class="text-center">
            Chez 2A2D, notre équipe est au cœur de notre succès. Composée de passionnés engagés, 
            chaque membre apporte une expertise unique et un enthousiasme sincère pour le développement
             durable et la justice sociale. Nous sommes un groupe diversifié, uni par une vision commune : créer un impact positif et durable dans les communautés que nous servons. Notre force réside dans notre collaboration et notre détermination collective à relever les défis, à innover et à inspirer le changement.
             Ensemble, nous travaillons avec conviction pour construire un avenir meilleur pour tous.    
            </p>


            <div class="row g-0 gx-5 align-items-end team mt-2">
            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>HOWATANNOU Florence</span> <br>
                <strong class="text-yellow">
                    Présidente
                </strong>
                <p>
                    Carte No: 2023001
                </p>


                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://plus.unsplash.com/premium_photo-1661589856899-6dd0871f9db6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>TOPLONOU Isabelle</span> <br>
                <strong class="text-yellow">
                    Vice-présidente
                </strong>
                <p>
                Carte No: 2023002
                </p>

                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://plus.unsplash.com/premium_photo-1689977968861-9c91dbb16049?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>PEDRO A. Bricea</span> <br>
                <strong class="text-yellow">
                    Trésorier général
                </strong>
                <p>
                Carte No: 2023007
                </p>

                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>