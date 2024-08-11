<?php 
$title = "Ong 2A2D - Projet";
ob_start(); 
?>

<section class='section'>
    <!-- Blog -->
    <div class="container mt-5 pt-3 blog" id="app">
        <div v-if="projectDetails" >
            <h1 class="text-center ">{{ projectDetails.name }}</h1>
            <img :src="getImg(projectDetails.image1)" alt="ong 2a2d" class="img-fluid mt-3">
            <p class="text-center mt-3">{{ projectDetails.description }}</p>
            <img :src="getImg(projectDetails.image2)" v-if="projectDetails.image2" alt="ong 2a2d" class="img-fluid mt-3">
        </div>
        <hr>

        <a href="index.php?action=projectsPage" class="btn btn-primary">
            Tous les projets
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
            {id: 1, name: "Potager bio et biogaz au service de l'environnement", description: "Ce projet vise à promouvoir l'agriculture durable et la production de biogaz en utilisant des techniques respectueuses de l'environnement. Nous mettons en place des potagers bio pour améliorer l'autosuffisance alimentaire et réduire les déchets organiques.", image1: "biogaz1.jpg", image2: "biogaz2.jpg"},
            {id: 2, name: "Don de sacs d'ordinateur vide à 9 nouveaux bacheliers", description: "Ce projet a pour objectif de soutenir les nouveaux bacheliers en leur fournissant des sacs d'ordinateur pour faciliter leur accès aux outils numériques nécessaires pour leurs études. Une contribution significative à leur réussite académique et professionnelle.", image1: "hero1.jpg", image2: "logo_big.jpg"},
            {id: 3, name: "Don de Maillots de football", description: "Don de maillots à l'équipe de football de Avotrou", image1: "maillots.jpg", image2: "logo_big.jpg"}
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
