<?php $title = "GEU - Кар'єра";

// $articles

 ob_start(); ?>
    <section class='section' >
       <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                   <h1 class="text-center mt-2 pt-5">
                   Приєднуйтесь до нашої команди
                   </h1>

                   <p class="text-justify">
                        Ми шукаємо професіоналів та динамічних особистостей для приєднання до нашої команди. Ми цінуємо тих, хто прагне розвиватися, працювати з наполегливістю для досягнення амбіційних цілей. У GEU ми створюємо сім'ю, де цінуються ініціативність, ентузіазм, відданість, порядність та прогрес. Ми пропонуємо роботу в професійній і дружній команді, обіцяємо цікаві проекти. Комфорт і соціальне забезпечення наших співробітників є нашими пріоритетами.
                    </p>


                        <a href="index.php?action=home#contact" class="btn btn-primary mx-auto">
                        Надішліть нам повідомлення
                        </a>
                </div>
            </div>
       </div>  
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>