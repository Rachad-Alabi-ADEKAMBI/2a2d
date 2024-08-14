<?php $title = "ONG 2A2D - Formulaire d'enquete";

// $articles

 ob_start(); ?>
    <section class='section' >
        <div class="container">
        <div class="row g-0 gx-5 align-items-end">
                    <div class="col-sm-12 col-md-10 mt-4 mx-auto" >
                        <div class="bg-dark mt-5 border pt-5 p-3 rounded p-sm-5 wow">
                            <h1>
                                Formulaire d'enquete
                            </h1>
                        <form class="row g-3 pt-2">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="text-white">Nom</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Prénom</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="email" placeholder="Prénom">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="text-white">Votre date de naissance</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="name" placeholder="Votre date de naissance">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Votre sexe</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <select name="" id="" class="form-control">
                                            <option value="">Veuillez sélectionner</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="text-white">Numéro de téléphone</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="name" placeholder="Votre nom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Arrondissement</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="email" placeholder="Votre prénom">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="text-white">Catégorie socio-professionnelle</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <select name="" id="">
                                            <option value="">Veuillez sélectionner</option>
                                            <option value="AGriculteur"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Votre sexe</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <select name="" id="" class="form-control">
                                            <option value="">Veuillez sélectionner</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                             <div class="col-12 mt-2">
                    <label for="subject">Objet</label> <span class="red">*</span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="subject" placeholder="Objet">
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                    <label for="message">Message</label> <span class="red">*</span>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Your message" id="message" 
                            style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </div>
                </form>
                        </div>
                    </div>
        </div>
        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
new Vue({
    el: '#app',
    data: {
        id: <?php echo ($_GET['id']); ?>,
        details: '',
    },
    computed: {

    },
    methods: {
        getImg(image) {
            return `./public/images/${image}`;
        },

    }
});
</script>

<style>
    .form-control{
        color: black;
    }
</style>