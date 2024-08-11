<?php $title = "GRU - панель адміністратора";

// $articles

 ob_start(); ?>
    <section class='section mt-5 pt-2' id='app' >
            <h1 class="text-center">
            Tableau de bord admin
        </h1>
        
        <!--menu
        <div class="row">
            <div class="col-sm-12 mt-1 text-center">
                <div class="menu">
        
                    <button class="btn btn-primary m-2" @click="displayUsers()">
                        <i class="bi bi-people"></i> <i class="bi bi-users"></i> Користувачі
                    </button>
                </div>
            </div>
        </div>
        end menu-->
        


        <!--documents-->
                <div class="col-sm-12 col-md-8 text-center mx-auto" v-if="showDocs">
                        <h2 class="mt-2">
                        Liste des emails newsletters
                        </h2>
                    <div class="mt-3 table-container">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Date d'inscription</th>
                                        <th scope="col">Emails</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for='detail in details' :key='detail.id'>
                                        <td> {{ detail.date_of_insertion }}</td>
                                        <td> {{ detail.email }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
        <!--end documents-->


    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
        new Vue({
            el: '#app',
            data: {
                showAll: false,
                details: []
            },
            mounted() {
                this.displayEmails();
            },
            methods: {
                displayEmail() {
                    this.showAll = true;
                    axios.get('api/script.php?action=allEmails')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                }
           }
        });
</script>