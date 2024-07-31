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
                        <h2>Хто ми?</h2>
                        <div>
                            <p class="text-left">
                                GEU (Gas & Electricity Supply) базується в Україні та спеціалізується на реалізації проектів в енергетичній промисловості України. Компанія поєднує в собі великий досвід управління, глибоке розуміння місцевого ринку та визнану експертизу в енергетичному секторі.
                            </p>
                            <a href="index.php?action=aboutPage"
                            class="btn btn-primary mx-auto">
                                Дізнатися більше
                            </a>
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
                             Наша Візія
                        </h2>

                        <div class="mt-4">
                            <P>
                            У GEU (Газ та Електропостачання) наша візія — змінити енергетичний ландшафт України, пропонуючи інноваційні та стійкі рішення. Ми прагнемо відповісти на сучасні енергетичні виклики, диверсифікуючи наші джерела енергії та модернізуючи інфраструктуру для більш безпечного та екологічного енергетичного майбутнього. З повною відданістю інноваціям та стійкості, ми прагнемо стати незаперечним лідером у постачанні надійної та відповідальної енергії по всій території України.


                            </P>
                        </div>
                    </div>
                </div>
        </div>
        <!--offers-->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>