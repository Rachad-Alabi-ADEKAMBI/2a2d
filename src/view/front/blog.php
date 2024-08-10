<?php $title = "ГРУ - Блог";

// $articles

 ob_start(); ?>
    <section class='section' >
         <!-- Blog -->
         <div class="container mt-5 blog" id="blog">
            <h2 class="text-center">
                Новини
            </h2>
            <p class="text-center">
                Ми регулярно публікуємо новини щодо діяльності сектору, <br>
                а також для ефективного управління вашою енергією.
            </p>
            <div class="row blog__items mt-3">
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="blog__items__item">
                        <h3>
                            Еволюція енергетичних ринків в Україні
                        </h3>
                        <p class="text-left mt-4">
                        Україна швидко розвивається у своєму енергетичному 
                        секторі, під впливом значних економічних та політичних 
                        змін. Останні роки країна активно прагне диверсифікувати свої джерела енергії та модернізувати застарілу інфраструктуру,
                         щоб забезпечити стабільне енергетичне майбутнє.
                        </p>
                        <a href="index.php?action=blogPage" 
                                class="btn btn-primary mx-auto mt-4">
                            Дивіться блог
                        </a>
                        <div class="date">
                            04 <br>
                            червня
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="blog__items__item">
                        <h3>
                            Важливість енергоефективності в домогосподарствах
                        </h3>
                        <p class="text-left">
                            У світі, що стикається з ростучими енергетичними викликами, кожен крок важливий для зменшення нашого вуглецевого сліду. Ця стаття розгляне, як прості коригування в наших щоденних звичках можуть призвести до значних економій енергії...
                        </p>
                        <a href="index.php?action=blogPage" class="btn btn-primary mx-auto">
                            Дивіться блог
                        </a>
                        <div class="date">
                            04 <br>
                            липня
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="contact"></div>
        </div>
        <!-- End Blog -->
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>