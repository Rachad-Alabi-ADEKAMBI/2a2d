<?php $title = "ong 2A2D - Tableau de bord admin";

// $articles

 ob_start(); ?>
    <section class='section mt-3' id='app' >
            <h1 class="text-center">
            Tableau de bord admin
        </h1>
        
        <!--menu-->
        <div class="row">
            <div class="col-sm-12 mt-1 text-center">
                <div class="menu">
                    <div class="options">
                        <form>
                            <label for="newRadio" class="ml-5">
                                <input type="radio" id="newRadio" name="options" @click="displayNewsletters()">
                                Newsletters
                            </label>
                            <label for="allRadio" class="ml-5">
                                <input type="radio" id="allRadio" name="options" @click="displaySurveys()">
                                Prospects
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end menu-->

        <!--newsletters-->
            <div class="" v-if="showNewsletters">
                <div class="col-sm-12 col-md-8 text-center mx-auto">
                        <h3 class=" text text-secondary">
                        Liste des emails newsletters
                        </h3>
                    <div class="mt-3 table-container">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Date d'inscription</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="detail in details" :key="detail.id">
                                        <td> {{ formatDate(detail.date_of_insertion) }}</td>
                                        <td> {{ detail.email }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!--end newsletters-->

        <!--surveys-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 text-center mx-auto">
                    <h3 class="text text-secondary" v-if="showSurveys">
                        Liste des prospects
                    </h3>
                            <div class="mt-3 table-container" v-if="showSurveys || showFiltered">
                                <div class="table-responsive">
                                    <div class="table-top" >
                                        <div class="search-menu right r-0">
                                            <input type="search" v-model="searchKey" @input="handleInput">
                                            <span class="ml-2 open" v-if="!isSearching">
                                            <i class="bi bi-search"></i>
                                            </span>
                                            <span @click="clearSearch" class="close" v-if="isSearching">
                                            <i class="bi bi-x"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <table class="table table-dark table-striped mt-2"  v-if="showSurveys">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date d'inscription</th>
                                                <th scope="col">Nom complet</th>
                                                <th scope="col">Contact</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="detail in details" :key="detail.id">
                                                <td data-label="Date"> {{ (detail.date_of_insertion) }}</td>
                                                <td data-label="Nom complet"> {{ capitalizeFirstLetter(detail.first_name) }} {{ capitalize(detail.last_name) }} </td>
                                                <td data-label="Contact"> {{ detail.phone }} </td>
                                                <td data-label=""> 
                                                     <button class="btn btn-info" @click="displayUser(detail.id)">
                                                        Détails
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                </div>
            </div>

            <div class="buttons mx-auto text-center" v-if="showSurveys">
                <button class="btn btn-primary">
                    Imprimer
                </button>

                <button class="btn btn-primary">
                    Télécharger en PDF
                </button>
            </div>
        </div>
        <!--end surveys-->

        <!--filtered-->
        <div class="">
            <div class="row" v-if="showFiltered">
                <div class="col-sm-12 col-md-8 text-center mx-auto mt-2">
                    <h3 class="text text-secondary">
                        Résultats de la recherche
                    </h3>
                            <div class="mt-3 table-container" v-if="showFiltered && filteredResults.length > 0">
                                <div class="table-responsive">
                                    <table class="table table-dark table-striped"  v-if="showSurveys">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date d'inscription</th>
                                                <th scope="col">Nom complet</th>
                                                <th scope="col">Contact</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="detail in filteredResults" :key="detail.id">
                                                <td data-label="Date"> {{ (detail.date_of_insertion) }}</td>
                                                <td data-label="Nom complet"> {{ capitalizeFirstLetter(detail.first_name) }} {{ capitalize(detail.last_name) }} </td>
                                                <td data-label="Contact"> {{ detail.phone }} </td>
                                                <td data-label=""> 
                                                     <button class="btn btn-info" @click="displayUser(detail.id)">
                                                        Détails
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <p  v-if="showFiltered && filteredResults.length == 0">
                                Aucun résultat
                            </p>

                </div>
            </div>
        </div>
        <!--end filtered-->

        <!--user-->
        <div class="container" v-if="showUser">
            <div class="row">
                <div class="col-md-8 col-sm-12 mx-auto">
                    <card class="card">
                        <h4 class="text text-center pt-1">
                            Fiche prospect
                        </h4>
                           <ul>
                            <li> Nom et prénoms: <strong>{{ capitalizeFirstLetter(selectedDetail.first_name)}}
                                {{ capitalize(selectedDetail.last_name)}}</strong>
                            </li>
                            <li>Date de naissance: <strong>{{selectedDetail.birth_date}}</strong> </li>
                            <li>Sexe: <strong>{{ selectedDetail.sex }}</strong></li>
                            <li> Numéro de téléphone: <strong>{{selectedDetail.phone}}</strong> </li>
                            <li>Arrondissement: <strong>{{ selectedDetail.area }}</strong> </li>

                            <hr>

                            <li>
                                Catégorie socio-professionnelle: <strong>{{selectedDetail.category}}</strong>
                            </li>
                            <li>Statut: <strong>{{selectedDetail.status}}</strong></li>
                            <li>Nombre de personnes au foyer: <strong>{{selectedDetail.household_size}}</strong></li>
                            <li>Les légumes font-ils partie de votre alimentation de base ?: <strong>{{selectedDetail.vegetables_in_diet }}</strong></li>
                            <li v-if="selectedDetail.vegetable_list != ''">Liste des légumes: <strong>{{ selectedDetail.vegetable_list }}</strong></li>


                           </ul>

                           <br>
                           <div class="buttons mx-auto text-center" v-if="showUser">
                            <button class="btn btn-primary">
                                Imprimer fiche
                            </button>

                            <button class="btn btn-primary">
                                Télécharger fiche en PDF
                            </button>
                        </div>
                    </card>
                </div>
            </div>
        </div>
        <!--end user-->


    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
        new Vue({
            el: '#app',
            data: {
                showNewsletters: false,
            showSurveys: false,
            showUser: false,
            showFiltered: false,
            details: [],
            currentPage: 1,
            itemsPerPage: 2,
            searchKey: '',
            isSearching: false,
            selectedDetail: null,
            },
            mounted() {
                this.displaySurveys();
            },
            computed: {
                totalPages() {
                return Math.ceil(this.details.length / this.itemsPerPage);
                },
                paginatedData() {
                    const start = (this.currentPage - 1) * this.itemsPerPage;
                    const end = start + this.itemsPerPage;
                    return this.details.slice(start, end);
                },
                filteredResults() {
                    if (!this.searchKey) {
                    return [];
                    }
                    return this.details.filter(detail =>
                    detail.first_name.toLowerCase().includes(this.searchKey.toLowerCase()) ||
                    detail.last_name.toLowerCase().includes(this.searchKey.toLowerCase())
                    );
                }
            },
            watch: {
            searchKey(newVal) {
                if (newVal === '') {
                this.showSurveys = true;
                this.showFiltered = false;
                } else {
                this.showSurveys = false;
                this.showFiltered = true;
                }
            }
            },
            methods: {
                displayNewsletters() {
                    this.showNewsletters = true;
                    this.showSurveys = false;
                    this.showUser = false;
                    axios.get('api/script.php?action=newsletters')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                        });
                },
                displaySurveys() {
                    this.showNewsletters = false;
                    this.showSurveys = true;
                    this.showUser = false;
                    axios.get('api/script.php?action=surveys')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                        });
                },
                displayUser(id){
                    this.selectedDetail = this.details.find(detail => detail.id === id);
                    this.showNewsletters = false;
                    this.showSurveys = false;
                    this.showUser = true;
                },
                 formatDate(date) {
                    const [year, month, day] = date.split('-');
                    return `${day}-${month}-${year}`;
                },
                handleInput() {
                this.isSearching = this.searchKey.length > 0;
                },
                clearSearch() {
                this.searchKey = '';
                this.isSearching = false;
                this.showAll = true;
                this.showFiltered = false;
                 },
                capitalize(string) {
                return string.toUpperCase();
                },
                capitalizeFirstLetter(string) {
                    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
                },
                previousPage() {
                if (this.currentPage > 1) {
                    this.currentPage--;
                }
                },
                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                    }
                },
                gotoPage(page) {
                    this.currentPage = page;
                },
            },
        });
</script>