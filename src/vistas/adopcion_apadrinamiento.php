<style>
        .barra_navegacion {
            
            background-color: rgba(var(--bs-back-primary)) !important;
            position:absolute;
            width:20%;
            height: 448px;
        }

        .carta_fundaciones {
            background-color: rgba(var(--bs-back-primary)) !important;
        }
    </style>

    <section>
        <div class="barra_navegacion">

        </div>
    </section>

    <!-- Cartas de fundaciones -->
    <section class="adopcion">
        <div class="titulo">Adopcion y Apadrinamiento</div>
        <hr>
        <div>
            <div class="card carta_fundaciones" style="width: 18rem; position:relative; left:300px;">
            <img src="public/img/perritos1.jpg" class="card-img-top" alt="..." style="border-radius: 100%;
            width: 200px;
            height: 150px;
            position: relative;
            left: 35px;
            top: 15px;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn bg-secondary-plantilla" >Go somewhere</a>
            </div>
        </div>
        </div>
    </section>

    <script src="public/js/fundaciones.js"></script>
    <script>
        $(document).ready(fundaciones);
    </script>
