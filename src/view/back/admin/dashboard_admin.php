<?php $title = "ong 2A2D - Tableau de bord admin";

// $articles

 ob_start(); ?>
    <section class='section mt-5 pt-2' id='app' >
            <h1 class="text-center">
            Tableau de bord admin
        </h1>
        
        <!--menu-->
        <div class="row">
            <div class="col-sm-12 mt-1 text-center">
                <div class="menu">
                    <button class="btn btn-primary m-2" @click="displayNewsletters()">
                        Newsletters
                    </button>

                    <button class="btn btn-primary m-2" @click="displaySurveys()">
                         Prospects
                    </button>
                </div>
            </div>
        </div>
        <!--end menu-->

        <!--newsletters-->
            <div class="" v-if="showNewsletters">
            <div class="col-sm-12 col-md-8 text-center mx-auto">
                        <h2 class="">
                        Liste des emails newsletters
                        </h2>
                    <div class="mt-3 table-container">
                        <div class="table-responsive">
                            <table class="table table-dark">
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
        <div class="" v-if="showSurveys">
            <div class="col-sm-12 col-md-8 text-center mx-auto">
                <h2 class="">
                    Liste des prospects
                </h2>
                        <div class="mt-3 table-container">
                        <div class="table-search">
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
                            <div class="table-responsive">
                                <table class="table table-dark">
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

            </div>
            <div class="col-12 text-center" >
                <nav aria-label="Page navigation mx-auto">
                    <ul class="pagination">
                    <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                        <a class="page-link" href="#" @click.prevent="previousPage">Précédent</a>
                    </li>
                    <li class="page-item" v-for="page in totalPages" :key="page" :class="{ 'active': page === currentPage }">
                        <a class="page-link" href="#" @click.prevent="gotoPage(page)">{{ page }}</a>
                    </li>
                    <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                        <a class="page-link" href="#" @click.prevent="nextPage">Suivant</a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end surveys-->

        <!--filtered-->
        <div class="" v-if="showFiltered">
            <div class="col-sm-12 col-md-8 text-center mx-auto">
                <h2 class="">
                   Resultats de la recherche
                </h2>
                        <div class="mt-3 table-container" v-if="filteredResults > 0">
                            <div class="table-responsive">
                                <table class="table table-dark">
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
                                            <td data-label="Nom complet"> {{ detail.first_name }} {{ detail.last_name }} </td>
                                            <td data-label="Contact"> {{ detail.phone }} </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p v-if="filteredResults == 0">
                            Aucun résultat pour cette recherche
                        </p>

            </div>
        </div>
        <!--filtered-->

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
                this.showAll = true;
                this.showFiltered = false;
                } else {
                this.showAll = false;
                this.showFiltered = true;
                }
            }
            },
            methods: {
                displayNewsletters() {
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
                displayUser(){
                    this.showNewsletters = false;
                    this.showSurveys = false;
                    this.showUser = true;
                },
                 formatDate(date) {
                    const [year, month, day] = date.split('-');
                    return `${day}-${month}-${year}`;
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
                handleInput() {
                    this.isSearching = this.searchKey.length > 0;
                },
                clearSearch() {
                    this.searchKey = '';
                    this.isSearching = false;
                    this.showSurveys = true;
                    this.showNewsletters = false;
                    this.showFiltered = false;
                },
           },
        });
</script>