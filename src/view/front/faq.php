<?php $title = "GRU- FAQ"; ?>

<?php ob_start(); ?>

    <div class="" id="app">

            <div class="container">
                <div class="row">
                    <div class="col-12 text text-center">
                        <h1 class="mt-4">
                            FAQ
                        </h1> 
                        <div class="faq">
                                  <div v-for="(item, index) in faqItems" :key="index">
                            <button @click="toggle(index)" class="accordion-header">
                                {{ item.question }}
                            </button>
                            <div v-if="activeIndex === index" class="accordion-content">
                                {{ item.answer }}
                            </div>
                            </div>
                        </div>

                        <p class="text text-center mt-4">
                            Vous n'avez pas trouvé de réponses ci dessus ? <br>
                            <a href="index.php?action=contactPage">Envoyez-nous un message</a>
                        </p> 

                    </div>
                </div>
            </div>
    </div>

<?php $content = ob_get_clean(); ?>
           
<?php require './src/view/layout.php'; ?>

<script>
    new Vue({
      el: '#app',
      data() {
        return {
          activeIndex: null,
          faqItems: [
            { question: 'Comment publier une annonce sur Immobilier Bénin ?', answer: 'Inscrivez-vous, connectez-vous, puis cliquez sur "Publier une annonce" et remplissez le formulaire.' },
            { question: 'Est-ce que la publication d\'annonces est gratuite ?', answer: 'Oui, la publication d\'annonces basiques est gratuite.' },
            { question: 'Comment puis-je modifier mon annonce ?', answer: "Connectez-vous à votre compte, allez dans 'Mes annonces', puis cliquez sur 'Modifier' sur la ligne de l'annonce concerné." },
            { question: "Combien de temps mon annonce reste-t-elle en ligne ?", answer: "Votre annonce reste en ligne jusqu'à suppression de votre part." },
            { question: 'Puis-je ajouter des photos à mon annonce ?', answer: 'Oui, vous pouvez ajouter jusqu\'à 9 photos par annonce.' },
            { question: "Comment contacter un vendeur ?", answer: "Vous pouvez appelez le numéro fourni dans l'annonce." },
            { question: "Immobilier Bénin offre-t-il des services de mise en avant ?", answer: "Oui, nous proposons des options pour mettre en avant vos annonces et votre profil, allez dans 'Mon compte' depuis votre tableau de bord et cochez l'option de mise en avant." }
          ]
        };
      },
      methods: {
        toggle(index) {
          this.activeIndex = this.activeIndex === index ? null : index;
        }
      }
    });
  </script>

</body>

<style>
    img{
        width: 80%;
        height: auto;
        margin: 15px auto;
    }

    li{
        list-style: none;
        
    }
    
    .accordion-header {
      background-color: #eee;
      cursor: pointer;
      padding: 10px;
      border: none;
      outline: none;
      width: 100%;
      text-align: left;
      transition: background-color 0.2s ease;
      margin-bottom: 5px;
      color: #8755F1;
    }

    .accordion-header:hover {
      background-color: #ccc;
    }

    .accordion-content {
      padding: 10px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
