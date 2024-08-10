<?php $title = "2A2D - Notre équipe";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container">
            <h1 class="text-center mt-5 pt-3">
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

            <row class="g-0 gx-5 align-items-end team mt-2">
            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>BADOU Berlissee</span> <br>
                <strong class="text-yellow">
                    Chargée de ressources humaines
                </strong>
                <p>
                    Carte No: 2023006
                </p>


                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://plus.unsplash.com/premium_photo-1661589856899-6dd0871f9db6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>BONOU Sylvie</span> <br>
                <strong class="text-yellow">
                    Sécrétaire <br> adjointe
                </strong>
                <p>
                Carte No: 2023005
                </p>

                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://plus.unsplash.com/premium_photo-1689977968861-9c91dbb16049?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>OGOUVIDE T. Ghislain Roméo </span> <br>
                <strong class="text-yellow">
                    Chargé programmes de projets
                </strong>
                <p>
                Carte No: 2023004
                </p>

                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </row>

        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>