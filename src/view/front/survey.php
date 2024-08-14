<?php $title = "ONG 2A2D - Formulaire  enquete";

// $articles

 ob_start(); ?>
 <section class='section'>
        <div class="container" id="app">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-sm-12 col-md-10 mt-4 mx-auto">
                    <div class="bg-dark mt-5 border pt-5 p-3 rounded p-sm-5">
                        <h1>Formulaire d'enquête</h1>

                        <div class="row g-3 pt-2" @submit.prevent="submit">
                            <!-- Step 1 -->
                            <div v-if="showStep1">
                                <h2>Informations générales</h2>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="text-white">Nom</label> 
                                        <span class="text-danger">*</span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"
                                            v-model="formData.last_name" placeholder="Nom" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="first_name">Prénom</label> 
                                        <span class="text-danger">*</span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="first_name" 
                                            v-model="formData.first_name" placeholder="Prénom" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="birth_date" class="text-white">Votre date de naissance</label> 
                                        <span class="text-danger">*</span>
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="birth_date" 
                                            v-model="formData.birth_date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sex">Votre sexe</label> 
                                        <span class="text-danger">*</span>
                                        <div class="form-floating">
                                            <select class="form-control" id="sex" v-model="formData.sex" required>
                                                <option value="" disabled>Veuillez sélectionner</option>
                                                <option value="M">Masculin</option>
                                                <option value="F">Féminin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-3" @click="displayStep2">Suivant</button>
                            </div>
                        </div>

                            <!-- Step 2 -->
                            <div v-if="showStep2">
                                <h2>Step N°1 : POTAGER BIO</h2>
                                    <p>
                                        Ce formulaire a pour but de recenser des foyers pour bénéficier d’un projet de revalorisation de leurs déchets domestiques...
                                    </p>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="category" class="text-white">Catégorie socio-professionnelle</label> 
                                            <div class="form-floating">
                                                <select class="form-control" id="category" v-model="formData.category" required>
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Agriculteur">Agriculteur</option>
                                                    <option value="Artisan">Artisan</option>
                                                    <option value="Commerçant">Commerçant</option>
                                                    <option value="Chef d’entreprise">Chef d’entreprise</option>
                                                    <option value="Demandeur d’emploi">Demandeur d’emploi</option>
                                                    <option value="Employé">Employé</option>
                                                    <option value="Homme ou femme au foyer">Homme ou femme au foyer</option>
                                                    <option value="Retraité">Retraité</option>
                                                    <option value="Sans emploi">Sans emploi</option>
                                                    <option value="Autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status">Êtes-vous locataire ou propriétaire ?</label> 
                                            <div class="form-floating">
                                                <select class="form-control" id="status" v-model="formData.status" required>
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Locataire">Locataire</option>
                                                    <option value="Propriétaire">Propriétaire</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="household_size">Combien de personnes constituent votre foyer ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="household_size" v-model="formData.household_size">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Entre 1 et 2 personnes">Entre 1 et 2 personnes</option>
                                                    <option value="Entre 3 et 4 personnes">Entre 3 et 4 personnes</option>
                                                    <option value="Plus de 5 personnes">Plus de 5 personnes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="vegetables_in_diet">Les légumes font-ils partie de votre alimentation de base ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="vegetables_in_diet" v-model="formData.vegetables_in_diet">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Non">Non</option>
                                                    <option value="Oui">Oui</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="formData.vegetables_in_diet === 'Oui'">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <label for="vegetable_list">Si oui, lesquels (5 principaux) ?</label>
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="vegetable_list" v-model="formData.vegetable_list" placeholder="Ex : Carottes, Pommes de terre, etc.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="land_space">Disposez-vous d’un espace vide en pleine terre aménageable en potager ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="land_space" v-model="formData.land_space">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Non">Non</option>
                                                    <option value="Oui">Oui</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" v-if="formData.land_space === 'Non'">
                                            <label for="alternative_space">Si non, avez-vous des espaces où vous pourrez entreposer des sacs potagers pour une culture verticale ?</label>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="alternative_space" v-model="formData.alternative_space" placeholder="Détails sur les espaces disponibles">
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="formData.land_space === 'Oui'">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="space_size">Si oui, quelle est la surface en m² dont vous disposez ?</label>
                                                    <div class="form-floating">
                                                        <select class="form-control" id="space_size" v-model="formData.space_size">
                                                            <option value="" disabled>Veuillez sélectionner</option>
                                                            <option value="de 1 à 4 m²">de 1 à 4 m²</option>
                                                            <option value="de 4 à 6 m²">de 4 à 6 m²</option>
                                                            <option value="de 6 à 8 m²">de 6 à 8 m²</option>
                                                            <option value="plus de 8 m²">plus de 8 m²</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="space_observation">Observation (espace nu ou cimenté) :</label>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="space_observation" v-model="formData.space_observation" placeholder="Description de espace">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="nutritional_importance">Connaissent-ils l’importance nutritionnelle des légumes dans un régime alimentaire ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="nutritional_importance" v-model="formData.nutritional_importance">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="interested_in_production">Seriez-vous intéressé(e) pour produire des fruits et légumes frais pour votre consommation ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="interested_in_production" v-model="formData.interested_in_production">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Oui je suis intéressé">Oui je suis intéressé</option>
                                                    <option value="Oui mais je vais y réfléchir">Oui mais je vais y réfléchir</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="interested_in_installation">Seriez-vous intéressé(e) par une installation d’un potager biologique sur cet espace vide ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="interested_in_installation" v-model="formData.interested_in_installation">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Oui c’est possible">Oui c’est possible</option>
                                                    <option value="Oui mais c’est à voir">Oui mais c’est à voir</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="available_time">Avez-vous du temps libre pour vous occuper d’un potager ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="available_time" v-model="formData.available_time">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="waste_management">Comment gérez-vous vos déchets organiques domestiques ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="waste_management" v-model="formData.waste_management">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Je fais du tri sélectif et je les déverse à la poubelle">Je fais du tri sélectif et je les déverse à la poubelle</option>
                                                    <option value="Je les déverse dans les poubelles sans trier">Je les déverse dans les poubelles sans trier</option>
                                                    <option value="Je les déverse pour nourrir les animaux ou dans la nature">Je les déverse pour nourrir les animaux ou dans la nature</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gardener_experience">Diriez-vous que vous êtes</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="gardener_experience" v-model="formData.gardener_experience">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Jardinier ou maraicher débutant">Jardinier ou maraicher débutant</option>
                                                    <option value="Jardinier ou maraicher ayant une petite expérience">Jardinier ou maraicher ayant une petite expérience</option>
                                                    <option value="Jardinier ou maraicher confirmé">Jardinier ou maraicher confirmé</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="gardening_tools">Disposez-vous d’un outillage en matière d’entretien de potager ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="gardening_tools" v-model="formData.gardening_tools">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Non">Non</option>
                                                    <option value="Oui">Oui</option>
                                                </select>
                                            </div>
                                            <div v-if="formData.gardening_tools === 'Oui'">
                                                <label for="tools_list">Si oui, lesquels ?</label>
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="tools_list" v-model="formData.tools_list" placeholder="Ex : Fourche, Binette, etc.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="weekly_hours">Par semaine, de combien d’heures disposez-vous pour jardiner ?</label>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="weekly_hours" v-model="formData.weekly_hours" placeholder="Nombre d’heures par semaine">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="objectives">Quels peuvent être vos objectifs ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="objectives" v-model="formData.objectives">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Arriver à une auto-suffisance en matière de légumes.">Arriver à une auto-suffisance en matière de légumes.</option>
                                                    <option value="Avoir le plaisir de récolter quelques légumes de saison.">Avoir le plaisir de récolter quelques légumes de saison.</option>
                                                    <option value="Voir ce que ça donne.">Voir ce que ça donne.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="composting">Connaissez-vous le compostage ?</label>
                                            <div class="form-floating">
                                                <select class="form-control" id="composting" v-model="formData.composting">
                                                    <option value="" disabled>Veuillez sélectionner</option>
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                    <option value="J’en ai une idée vague">J’en ai une idée vague</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="buttons mt-3">
                                        <button class="btn btn-tertiary" type="button" @click="displayStep1">Précédent</button>
                                        <button class="btn btn-primary" type="button" @click="displayStep3">Suivant</button>
                                    </div>
                                </div>


                                          <!-- Step 3 -->
<div v-if="showStep3">
    <h3>Step No2 : Production de Biogaz</h3>
    <p>Le second volet du projet consiste à aider les ménages intéressés à assurer leur autosuffisance en biogaz pour leur besoin domestique. En fonction de la quantité de déchets organiques produits par les ménages, on pourra déterminer la faisabilité et l’exécution du projet. Certains ménages qui le souhaitent pourront produire leur gaz ou l’acheter directement à la coopérative.</p>
    
    <div class="row g-3">
        <div class="col-md-6">
            <label for="cooking_fuel">Par quel moyen faites-vous du feu pour cuisiner ?</label> 
            <div class="form-floating">
                <select class="form-control" id="cooking_fuel" v-model="formData.cooking_fuel" required>
                    <option value="" disabled>Veuillez sélectionner</option>
                    <option value="Feu de bois ou charbon de bois">Feu de bois ou charbon de bois</option>
                    <option value="Gaz">Gaz</option>
                    <option value="Pétrole">Pétrole</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label for="cooking_frequency">Quelle est votre fréquence en termes de cuisine ?</label> 
            <div class="form-floating">
                <select class="form-control" id="cooking_frequency" v-model="formData.cooking_frequency" required>
                    <option value="" disabled>Veuillez sélectionner</option>
                    <option value="Une fois par jour">Une fois par jour</option>
                    <option value="Deux fois par jour">Deux fois par jour</option>
                    <option value="Tous les 2 jours">Tous les 2 jours</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="monthly_budget">Quel est votre budget mensuel pour votre feu de cuisine ?</label> 
            <div class="form-floating">
                <select class="form-control" id="monthly_budget" v-model="formData.monthly_budget" required>
                    <option value="" disabled>Veuillez sélectionner</option>
                    <option value="Entre 5000 Fcfa et 8000 Fcfa">Entre 5000 Fcfa et 8000 Fcfa</option>
                    <option value="Entre 8000 Fcfa et 15000 Fcfa">Entre 8000 Fcfa et 15000 Fcfa</option>
                    <option value="Plus de 15000 Fcfa">Plus de 15000 Fcfa</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label for="biogas_pack_interest">Seriez-vous susceptible d’acheter le pack complet pour produire votre propre gaz à un prix subventionné ?</label> 
            <div class="form-floating">
                <select class="form-control" id="biogas_pack_interest" v-model="formData.biogas_pack_interest" required>
                    <option value="" disabled>Veuillez sélectionner</option>
                    <option value="Non">Non</option>
                    <option value="Oui">Oui</option>
                </select>
            </div>
        </div>
    </div>

    <div class="buttons mt-3">
        <button class="btn btn-tertiary" type="button" @click="displayStep2">Précédent</button>
        <button class="btn btn-primary" type="submit">Soumettre</button>
    </div>
</div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

 <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data() {
              return {
                showStep1: true,
                showStep2: false,
                showStep3: false,
                formData: {
                  last_name: '',
                  first_name: '',
                  birth_date: '',
                  sex: '',
                  category: '',
                  status: '',
                  household_size: '',
                  vegetables_in_diet: '',
                  vegetable_list: '',
                  land_space: '',
                  alternative_space: '',
                  space_size: '',
                  space_observation: '',
                  nutritional_importance: '',
                  interested_in_production: '',
                  interested_in_installation: '',
                  available_time: '',
                  waste_management: '',
                  gardener_experience: '',
                  gardening_tools: '',
                  tools_list: '',
                  weekly_hours: '',
                  objectives: '',
                  composting: '',
                  cooking_fuel: '',
                  cooking_frequency: '',
                  monthly_budget: '', 
                  biogas_pack_interest: ''


                }
              };
            },
            methods: {
              displayStep2() {
                this.showStep1 = false;
                this.showStep2 = true;
              },
              displayStep1() {
                this.showStep1 = true;
                this.showStep2 = false;
              },
              displayStep3() {
                this.showStep2 = false;
                this.showStep3 = true;
              },
              submit() {
                // Handle form submission
                console.log(this.formData);
              }
            }
          });
          
    </script>