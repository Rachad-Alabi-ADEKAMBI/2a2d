<?php $title = "GRU - Inscription";

// $articles

 ob_start(); ?>
    
    <section class='section'>
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-sm-12 col-md-7 mt-4 mx-auto">
                <div class="bg-dark mt-5 border pt-5 p-3 rounded p-sm-5 wow">
                    <form action="api/script.php?action=register" method="POST">
                        <h1 class="mx-auto text-center">Inscription</h1>

                        <div class="row g-3">
                            <!-- Email Input -->
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control"
                                        required name='email' value="<?= $_SESSION['register']['email'] ?? '' ?>" placeholder="Votre email">
                                    <label for="email">Email <span class="red">*</span></label>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" required name='password' id=""
                                        placeholder="Mot de passe">
                                    <label for="password">Mot de passe <span class="red">*</span></label>
                                </div>
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" required name='confirm_password' id=""
                                        placeholder="Confirmez le mot de passe">
                                    <label for="confirm_password">Confirmez le mot de passe <span class="red">*</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row g-3 mt-4">
                            <div class="col-sm-12 col-md-6 mx-auto text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Inscription
                                </button>
                                <br>
                            </div>
                        </div>

                        <!-- Link to Login -->
                        <div class="row g-3 mt-3">
                            <div class="col-sm-12 text-center">
                                <a href="login.php" class="text-decoration-none text-light">
                                    Déjà un compte ? Connectez-vous
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    label {
  color: black;
}
</style>


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