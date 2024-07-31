<?php $title = "Команда ГРУ";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container">
            <h1 class="text-center mt-5 pt-3">
                Наша команда
            </h1>

            <p class="text-center">
                Наша команда складається з досвідчених фахівців з великим досвідом та широким спектром компетенцій.
                Їхнім основним завданням є забезпечення вашої повної задоволеності, відповідаючи всім вашим потребам і очікуванням.
            </p>


            <div class="row g-0 gx-5 align-items-end team mt-2">
            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>Джон Доу</span> <br>
                <strong class="text-yellow">
                    Заступник директора
                </strong>
                <p>
                    Він має понад 35 років досвіду в енергетичній галузі: в СНД, Африці, Азії, Південній Америці, Центральній і Північній Європі. Це дозволяє йому бути експертом з кваліфікаціями міжнародного топ-менеджера.
                </p>


                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-telegram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://plus.unsplash.com/premium_photo-1661589856899-6dd0871f9db6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>Джейн Сміт</span> <br>
                <strong class="text-yellow">
                    Директор з операцій
                </strong>
                <p>
                    З понад 20-річним міжнародним досвідом, Джейн керувала операціями на кількох континентах, 
                    маючи міцні знання в управлінні операціями та стратегічному управлінні в енергетичній галузі.
                </p>

                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-telegram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 team__member">
                <img src="https://plus.unsplash.com/premium_photo-1689977968861-9c91dbb16049?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <span>Олександр Іванов</span> <br>
                <strong class="text-yellow">
                    Технологічний директор
                </strong>
                <p>
                    Олександр має глибокі знання в енергетичній технології, з кар'єрою, спрямованою на інновації 
                    та покращення енергетичної інфраструктури. Він захоплений впровадженням новітніх технологій 
                    для.
                </p>

                <div class="links text-center">
                    <a href=""><i class="bi bi-envelope"></i></a>
                    <a href=""><i class="bi bi-telegram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>