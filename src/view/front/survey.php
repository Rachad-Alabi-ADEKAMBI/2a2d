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
                            //step 1 of the 
                            <div class="container" v-if="showVolet1"></div>

                            <hr>
                                //part2 of the multi step  from question 1 to 15
                                all the files are not required but if they fill a single input of 
                                this step they have to fill all of them before going to the next step (biogaz)
                                <h3>Volet N°1 : POTAGER BIO
                                </h3>

                                <p>
                                Ce formulaire a pour but de recenser des foyers pour bénéficier d’un projet de revalorisation de leurs
                                 déchets domestiques. Ce volet du projet a pour but de permettre aux
                                  foyers bénéficiaires de revaloriser leurs déchets domestiques en engrais biologique pour
                                   fertiliser leur potager. <br>

                                   <span>Vous pouvez passer au volet no 2 en cliquant directement sur le bouton
                                    <strong>Suivant</strong> pour accéder directement au volet Potager si vous 
                                    n'etes pas interessé par le volet potager.
                                   </span>
                                </p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="text-white">Catégorie socio-professionnelle</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <select name="" id="" class="form-control">
                                            <option value="">Veuillez sélectionner</option>
                                            <option value="Agriculteur">Agriculteur</option>
                                            <option value="Artisan">Artisan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Votre sexe</label> <span class="red">*</span>
                                    <div class="form-floating">
                                        <select name="" id="" class="form-control" v-model="sex">
                                            <option value="">Veuillez sélectionner</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            //part 2 of the form from question 16 to 19
                            <h3>
                               Volet No2 Production  de biogaz
                            </h3>


                             <div class="col-12 mt-2">
                    <label for="subject">Objet</label> <span class="red">*</span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="subject" placeholder="Objet">
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">
                           Soumettre
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
        FormData: {
        first_name: '',
        last_name: '',

        
        }
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