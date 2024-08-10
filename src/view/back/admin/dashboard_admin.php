<?php $title = "GRU - панель адміністратора";

// $articles

 ob_start(); ?>
    <section class='section mt-5 pt-2' id='app' >
            <h1 class="text-center">
            Інформаційна панель адміністратора
        </h1>
        
        <!--menu-->
        <div class="row">
            <div class="col-sm-12 mt-1 text-center">
                <div class="menu">
                    <button class="btn btn-primary m-2" @click="displayNewDoc()">
                        <i class="bi bi-plus-circle"></i> Додати файли
                    </button>
        
                    <button class="btn btn-primary m-2" @click="displayDocs()">
                        <i class="bi bi-file-earmark"></i> Файли
                    </button>
        
                    <button class="btn btn-primary m-2" @click="displayUsers()">
                        <i class="bi bi-people"></i> <i class="bi bi-users"></i> Користувачі
                    </button>
                </div>
            </div>
        </div>
        <!--end menu-->
        

            <!--upload files-->
                <div class="col-sm-12 col-md-7 mt-4 mx-auto" v-if="showNewDoc">
                    <div class="bg-dark border p-3 rounded wow">
                        <form action="api/script.php?action=newDoc" method="POST" enctype='multipart/form-data'>
                            <span class="ml-0" @click="displayAll()">
                                <i class="bi bi-x-circle-fill close text-primary"></i>
                            </span>

                            <h1 class="mx-auto text-center">Додавання PDF файлів</h1>
                            <div class="row g-3">
                                <p class="text-center">
                                    Не потрібно вибирати підкатегорію, якщо файл є<br>
                                    простим документом (не для газу чи електрики),<br>
                                    приймаються лише PDF файли
                                </p>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" required name='name' placeholder="Ім'я">
                                        <label for="name" class="text-black"> Ім'я:<span class="red">*</span> </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" required name='description' placeholder="Опис">
                                        <label for="description" class="text-black">Опис:<span class="red">*</span> </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="category" name="category"  required>
                                            <option value="docs">Документи</option>
                                            <option value="gas">Газ</option>
                                            <option value="electricity">Електрика</option>
                                        </select>
                                        <label for="category">Категорія <span class="red">*</span></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="subcategory" name="subcategory" >
                                            <option >Підкатегорія</option>
                                            <option value="infos">Інфор мація</option>
                                            <option value="regulations">Регламенти</option>
                                            <option value="reports">Звіти</option>
                                        </select>
                                        <label for="subcategory">Підкатегорія</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" accept="application/pdf" name='file' id="file" required>
                                        <label for="file">Файл <span class="red">*</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-4">
                                <div class="col-sm-12 col-md-4 mx-auto text-center">
                                    <button class="btn btn-success w-100 py-3 mb-3" type="submit">Додати</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <!--end upload-->

        <!--documents-->
                <div class="col-sm-12 col-md-8 text-center mx-auto" v-if="showDocs">
                        <h2 class="mt-2">
                        Всі документи
                        </h2>
                    <div class="mt-3 table-container">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Categorie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for='detail in details' :key='detail.id'>
                                        <td> {{ truncateWord(detail.name) }}</td>
                                        <td> {{ detail.category }} </td>
                                        <td>
                                            <i class="bi bi-trash" @click='deleteDoc(detail.id)'></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
        <!--end documents-->

        <!--show users-->
            <div class="col-12 mt-4" v-if="showUsers">
            <h2 class="mt-3 text-center">
            клієнтів
            </h2>
                <p class="text-center mt-3">
                    На даний момент немає зареєстрованих клієнтів.
                </p>
            </div>
        <!--end users-->


    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
        new Vue({
            el: '#app',
            data: {
                showDocs: false,
                showNewDoc: false,
                showUsers: false,
                details: [],
            },
            mounted() {
                this.displayDocs();
            },
            methods: {
                displayDocs() {
                    this.showDocs = true;
                    this.showNewDoc = false;
                    this.showUsers = false;
                    axios.get('api/script.php?action=allDocs')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                },
                displayNewDoc() {
                    this.showDocs = false;
                    this.showNewDoc = true;
                    this.showUsers = false
                },
                displayUsers() {
                    this.showDocs = false;
                    this.showNewDoc = false;
                    this.showUsers = true;
                },
                deleteDoc(id){
                        window.location.replace('./api/script.php?action=deleteDoc&id='+id);
                },
                    truncateWord(word) {
                        if (word.length > 15) {
                        return word.substring(0, 25) + '...';
                        }
                        return word;
                    },
           }
        });
</script>