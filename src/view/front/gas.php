<?php $title = "ГЕУ - Газ";

// $articles

 ob_start(); ?>
    <section class='section p-3 text-center mt-5 pt-2' id='app' >
            <h1 class="text-center">
                Природний газ
            </h1>

        <p class="text-center">
            У рамках постачання природного газу, ГЕУ «Газо-електропостачання» <br>
            пропонує послуги 
            з постачання на всій території України.
        </p>

        
        <h2 class="text-center">
            Чому обирають нас?
        </h2>

        <ul>
            <li class="mt-3">
                Найкраще співвідношення ціни та якості
            </li>

            <li class="mt-3">
                Ми виконуємо всі наші зобов'язання
            </li>

            <li class="mt-3">
                Індивідуальна пропозиція відповідно до ваших потреб і прозоре ціноутворення
            </li>

            <li class="mt-3">
                Якісне обслуговування після продажу
            </li>
        </ul>

        <!--infoormations pour les consommateur-->
        <h2 class="mt-4">
                Інформація для споживачів
        </h2>

        <div class="documents">
        <div class="row documents__list">
                <div class="col-sm-12 col-md-6 documents__list__item mt-3" 
                      v-for="detail in details" :key="detail.id"  v-if="detail.subcategory=='infos'" 
                         @click='goToFile(detail.file)'>
                    <i class="bi bi-file-earmark"></i>
                    <h3>
                        {{ truncateWord(detail.name) }}
                    </h3>

                    <div class="doc">
                        {{ truncatePdf(detail.file) }}
                    </div>
                </div>
            </div>
        </div>


         <!--règlements (regulation in database)-->
         <h2 class="mt-5">
                
                Положення
        </h2>

        <div class="documents">
            <div class="row documents__list">
                <div class="col-sm-12 col-md-6 documents__list__item mt-3" 
                      v-for="detail in details" :key="detail.id"  v-if="detail.subcategory=='regulations'" 
                         @click='goToFile(detail.file)'>
                    <i class="bi bi-file-earmark"></i>
                    <h3>
                        {{ truncateWord(detail.name) }}
                    </h3>

                    <div class="doc">
                        {{ truncatePdf(detail.file) }}
                    </div>
                </div>
            </div>
        </div>


         <!--Rapports (reports in database)-->
         <h2 class="mt-5">
            Звіти
        </h2>

        <div class="documents">
            <div class="row documents__list">
                <div class="col-sm-12 col-md-6 documents__list__item -3" 
                      v-for="detail in details" :key="detail.id"  v-if="detail.subcategory=='reports'" 
                         @click='goToFile(detail.file)'>
                    <i class="bi bi-file-earmark"></i>
                    <h3>
                        {{ truncateWord(detail.name) }}
                    </h3>

                    <div class="doc">
                        {{ truncatePdf(detail.file) }}
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
    new Vue({
        el: '#app',
        data: {
            details: []
        },
        mounted() {
            this.displayAll();
        },
        methods: {
            displayAll() {
                axios.get('api/script.php?action=gasDocs')
                    .then((response) => {
                        console.log(response.data);
                        this.details = response.data;
                    })
                    .catch((error) => {
                        console.error(error);
                        alert('Failed to fetch data');
                    });
            },
            goToFile(file) {
                // Your logic to navigate to the file or do something with the file id
                window.location.replace("public/documents/"+ file);
            },
            truncateWord(word) {
                        if (word.length > 15) {
                        return word.substring(0, 20) + '...';
                        }
                        return word;
            },
            truncatePdf(pdf) {
                        if (pdf.length > 15) {
                        return pdf.substring(0, 20) + '...pdf';
                        }
                        return pdf;
            },
        }
    });
</script>