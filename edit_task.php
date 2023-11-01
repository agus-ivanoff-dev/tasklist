<?php include('database/db.php'); ?>
<?php include('layouts/header.php'); ?>
<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * FROM tasks WHERE id= $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
    $createdAt = $row['created_at'];
}


?>

<div class="container p-4">


    <form action="edit.php?id=<?php echo $id ?>" method="post">

        <div class="card">

            <div class="card-header">
                <div class="row">

                    <div class="col-md-8">
                        <div class="form-group">
                            <h4 class="">Nombre de la tarea:</h4>
                            <input class="form-control p-1" type="text" name="title" value="<?php echo $title; ?>" autofocus required>
                        </div>
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
                <div class="form-group">
                    <h5 class="card-title">Descripcion de la tarea:  <pre></pre></h5><br>
                    <textarea class="form-control p-1" name="description" rows="5" required><?php  '<pre>' . $description . '</pre>';?></textarea>
                </div>
<br>

                <div class="container d-flex justify-content-around p-1">
                    <a href="edit.php?id=<?php echo $id?>"><input type="submit" name="editar_tarea" class="btn btn-success btn-block" value="Editar tarea"></a>
                    <a href="index.php" class="btn btn-primary">Ir al inicio</a>
                </div>

            </div>

        </div>
    </form>


</div>

<?php include('layouts/footer.php'); ?>