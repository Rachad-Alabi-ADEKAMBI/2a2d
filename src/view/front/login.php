<?php $title = "Ong 2a2d - Connexion";

// $articles

ob_start(); ?>
<section class='section'>
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-sm-12 col-md-7 mt-4 mx-auto">
                <div class="bg-dark mt-5 border pt-5 p-3 rounded p-sm-5 wow">
                    <form action="api/script.php?action=login" method="POST">
                        <h1 class="mx-auto text-center">Connexion</h1>

                        <div class="row g-3">
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control"
                                        required name='email' value="<?= $_SESSION['login']['email'] ?>" placeholder="">
                                    <label for="name">Identifiant <span class="red">*</span></label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" required name='password' id=""
                                        placeholder="">

                                    <label for="password">Mot de passe <span class="red">*</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mt-4">
                            <div class="col-sm-12 col-md-6 mx-auto text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Connexion
                                </button> <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    label {
        color: black;
    }
</style>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>