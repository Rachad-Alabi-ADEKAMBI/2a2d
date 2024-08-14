<?php 
$title = "Ong 2A2D - Projet";
ob_start(); 
?>

<section class='section'>
    <!-- Blog -->
    <div class="container mt-2 pt-3 blog" id="app">
        <div v-if="projectDetails" >
            <h1 class="text-center ">{{ projectDetails.name }}</h1>
            <div class="row text-center">
                <div class="col sm-12 col-md-8 mx-auto">
                    <img :src="getImg(projectDetails.image1)"  alt="ong 2a2d" class="img-fluid mt-3 mx-auto">
                </div>
            </div>
            <p class="text-center mt-3">{{ projectDetails.description }}</p>
            <div class="row">
                <div class="col sm-12 col-md-6">
                    <img :src="getImg(projectDetails.image2)"  alt="ong 2a2d" class="img-fluid mt-3">
                </div>
                <div class="col sm-12 col-md-6">
                    <img :src="getImg(projectDetails.image3)"  alt="ong 2a2d" class="img-fluid mt-3">
                </div>
            </div>

               <div class="mt-3" v-if="projectDetails.id == 1">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mx-auto">
                        <p>
                        Etes vous interessé par cette innovation ? Si oui, vous pouvez remplir le formulaire
                        d'enquete en cliquant sur le bouton ci-dessous.
                    </p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mx-auto">
                    Remplir le formulaire
                </a>
               </div>
        </div>
        <hr>

        <a href="index.php?action=projectsPage" class="">
            Voir tous tous les projets
        </a>
    </div>
    <!-- End Blog -->
</section>

<?php 
$content = ob_get_clean(); 
require './src/view/layout.php'; 
?>

<script>
new Vue({
    el: '#app',
    data: {
        id: <?php echo ($_GET['id']); ?>,
        details: [
            {id: 1, name: "Potager bio et biogaz au service de l'environnement", description: "Ce projet vise à promouvoir l'agriculture durable et la production de biogaz en utilisant des techniques respectueuses de l'environnement. Nous mettons en place des potagers bio et des digesteurs pour biogaz pour améliorer l'autosuffisance alimentaire et réduire les déchets organiques.", image1: "biogaz3.png", image2: "biogaz1.jpg", image3: "biogaz2.jpg", image4: "logo.jpg"},
            {id: 2, name: "Don de sacs d'ordinateur vide à 9 nouveaux bacheliers", description: "Ce projet a pour objectif de soutenir les nouveaux bacheliers en leur fournissant des sacs d'ordinateur pour faciliter leur accès aux outils numériques nécessaires pour leurs études. Une contribution significative à leur réussite académique et professionnelle.", image1: "hero1.jpg", image2: "hero2.jpg", image3: "logo.jpg", image4: "logo.jpg"},
            {id: 3, name: "Don de Maillots de football", description: " L'ONG 2A2D est fière d'avoir soutenu l'équipe de football d'Avotrou en leur offrant de nouveaux maillots. Ce don s'inscrit dans notre engagement à promouvoir le développement local à travers le sport, un vecteur essentiel d'unité et de progrès pour notre communauté.", image1: "maillots.jpg", image2: "logo.jpg", image3: "logo.jpg", image4: "logo.jpg"}
        ]
    },
    computed: {
        projectDetails() {
            if (this.id <= 0 || this.id > 3) {
    alert('Page introuvable, veuillez vérifier cette adresse');
    window.history.back();
    return; // Ensure no further code runs if the ID is invalid
}

return this.details.find(detail => detail.id === this.id);
        }
    },
    methods: {
        getImg(image) {
            return `./public/images/${image}`;
        }
    }
});
</script>

<style>
    a{
        text-decoration: underline;
        font-weight: bold;
        color: #56A866; 
    }
</style>
