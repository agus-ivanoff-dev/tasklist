<?php include('layouts/header.php'); ?>


<div class="container mt-5">
    <div class="row d-flex justify-content-center">

        <div class="col-sm-12 col-md-6 p-4 border">

            <h3 class="text-center mt-3">LISTA DE TAREAS</h3>


            <form action="database/save.php" method="POST" class="">

                <div class="form-floating mt-5 mb-5">
                    <input type="text" class="form-control" name="title" id="floatingInput" placeholder="titulo" required autofocus>
                    <label for="floatingInput">Ingresar nombre de la tarea</label>
                </div>

                <div class="form-floating mb-5">
                    <textarea class="" placeholder="Ingresar descripcion de la tarea" name="description" id="floatingTextarea" required></textarea>
                    <label for="floatingTextarea"></label>
                </div>
                <div class="mb-5 p-2">
                    <label for="formFile" class="form-label"><h6>* Adjuntar archivo (.png / .jpg / .jpeg / .zip / .rar)</h6></label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="container d-flex justify-content-center">
                    <button type="submit" class="btn btn-success p-3">Agregar Tarea</button>
                </div>

            </form>

        </div>

        <div class="col-sm-12 col-md-5 border p-4">
            <?php
            if (isset($_SESSION['mensaje'])) {
                echo  '<br><br> 
                    <div class="alert alert-' . $_SESSION['color'] . ' alert-dismissible alert-popup fade show" role="alert"><strong>' . $_SESSION['mensaje'] .
                    '</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';

                session_unset();
            };

            ?>
        </div>


    </div> <!-- end row -->

</div>

<?php include('layouts/footer.php') ?>