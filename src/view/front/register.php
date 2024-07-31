<?php $title = "GRU - Inscription";

// $articles

 ob_start(); ?>
    <section class='section' id='app' >
        <h1 class="text-center">
            Devenir client
        </h1>

        <!--upload files-->
        <div class="col-sm-12 col-md-7 mt-4 mx-auto">
                <div class="bg-white border rounded wow p-3">
                    <form action="api/script.php?action=register" method="POST" 
                                    enctype='multipart/form-data'>
                                        <span class="ml-0" >
                                            <i class="fa fa-times me-3 text-blue"></i>
                                        </span>

                                        <h1 class="mx-auto text-center">Devenir client</h1>

                                        <h2 class="mt-3">
                                            Données personnelles
                                        </h2>
                                       <div class="row g-3">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='first_name' 
                                                    placeholder="Nom">
                                                    <label for="first_name">Prénoms<span class="red">*</span> </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='last_name' placeholder="last_name">
                                                    <label for="last_name">Nom:<span class="red">*</span> </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='email' 
                                                    placeholder="Email">
                                                    <label for="email">Email:<span class="red">*</span> </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='nif'
                                                    placeholder="nif">
                                                    <label for="nif">NIF:<span class="red">*</span> </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='phone'
                                                    placeholder="nif">
                                                    <label for="nif">Numéro de téléphone:<span class="red">*</span> </label>
                                                </div>
                                            </div>
                                       </div>

                                       <hr>

                                       <h2>
                                         Installation d'approvisionnement en gaz
                                       </h2>

                                       <div class="row g-3">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='eic'
                                                    placeholder="eic">
                                                    <label for="eic">Code EIC:<span class="red">*</span> </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='eic'
                                                    placeholder="eic">
                                                    <label for="eic">Opérateur de chronométrage:<span class="red">*</span> </label>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6 mt-2">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" required name='eic'
                                                    placeholder="eic">
                                                    <label for="eic">Opérateur de chronométrage:<span class="red">*</span> </label>
                                                </div>
                                            </div>
                                       </div>
                                        
                                       <div class="row g-3 mt-4">
                                            <div class="col-sm-12 col-md-4 mx-auto text-center">
                                                <button class="btn btn-success w-100 py-3 mb-3" type="submit">Inscription</button>
                                            </div>
                                        </div>
                                      
                                   </div>

                                    
                    </form>
                </div>
        </div>
        <!--end upload-->

    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
        new Vue({
            el: '#app',
            data: {
                showDocs: true,
                showNewDoc: false,
                showUsers: false,
                detailss: [],
                currentPage: 1,
                itemsPerPage: 5,
            },
            mounted() {
                this.displayAll();
            },
            computed: {
                    totalPages() {
                            return Math.ceil(this.details.length / this.itemsPerPage);
                            },
                    paginatedData() {
                            const start = (this.currentPage - 1) * this.itemsPerPage;
                            const end = start + this.itemsPerPage;
                            return this.details.slice(start, end);
                            }
            },
            methods: {
                displayAll() {
                    this.showDocs = false;
                    this.showNewDoc = false;
                    this.showUsers = false;
                    axios.get('api/script.php?action=allDocs')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                            this.showAll = true;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                },
                displayUsers() {
                    this.showAll = false;
                    this.showNeeds = false;
                    axios.get('api/script.php?action=users')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                            this.showUsers = true;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch user data.');
                        });
                },
                displayNeeds() {
                    this.showAll = false;
                    this.showUsers = false;
                    axios.get('api/script.php?action=needs')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                            this.showNeeds = true;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch needs data.');
                        });
                },
                format(num) {
                    return new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                },
                formatDate(da) {
                    const [datePart, timePart] = da.split(' ');
                    const [year, month, day] = datePart.split('-');
                    return `${day}-${month}-${year}`;
                },
                getImgUrl(pic) {
                    return "public/img/" + pic;
                },
                pauseUser(id){
                        window.location.replace('./api/script.php?action=pauseUser&id='+id);
                },
                deleteUser(id){
                        window.location.replace('./api/script.php?action=deleteUser&id='+id);
                },
                authorizeUser(id){
                        window.location.replace('./api/script.php?action=authorizeUser&id='+id);
                },
                stop(id){
                        window.location.replace('./api/script.php?action=stop&id='+id);
                },
                publish(id){
                        window.location.replace('./api/script.php?action=publish&id='+id);
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
            }
        });
</script>