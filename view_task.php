<?php
include('database/db.php');
include('layouts/header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
    $createdAt = $row['created_at'];
}

?>

<div class="container p-4">

    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h4>Nombre de la tarea:</h4>
                    <p>&nbsp;<?php echo $title; ?> </p>
                </div>
                <div class="col-md-3 p-1">
                    <p>Creado el: <?php echo $createdAt; ?></p>
                </div>
                <div class="col-md-1 p-1">
                    <p>ID: <?php echo $id; ?></p>
                </div>
            </div>

        </div>

        <div class="card-body">
            <h5 class="card-title">Descripcion de la tarea: </h5><br>
            <p class="card-text p-4"><?php echo $description; ?></p><br>

            <div class="container d-flex justify-content-around p-1">
                <a href="database/edit.php?id=<?php echo $id ?>" class="btn btn-success">Editar tarea</a>
                <a href="index.php" class="btn btn-primary">Ir al inicio</a>
            </div>

        </div>

    </div>


</div>

<?php
include('database/db.php');
include('layouts/header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
    $createdAt = $row['created_at'];
}

?>

<div class="container p-4">

    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h4>Nombre de la tarea:</h4>
                    <p>&nbsp;<?php echo $title; ?> </p>
                </div>
                <div class="col-md-3 p-1">
                    <p>Creado el: <?php echo $createdAt; ?></p>
                </div>
                <div class="col-md-1 p-1">
                    <p>ID: <?php echo $id; ?></p>
                </div>
            </div>

        </div>

        <div class="card-body">
            <h5 class="card-title">Descripcion de la tarea: </h5><br>
            <p class="card-text p-4"><?php echo $description; ?></p><br>

            <div class="container d-flex justify-content-around p-1">
                <a href="database/edit.php?id=<?php echo $id ?>" class="btn btn-success">Editar tarea</a>
                <a href="index.php" class="btn btn-primary">Ir al inicio</a>
            </div>

        </div>

    </div>


</div>

<?php include('layouts/footer.php'); ?>