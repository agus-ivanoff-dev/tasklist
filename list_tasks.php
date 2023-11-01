<?php include('layouts/header.php') ?>

<div class="container mt-5 p-4">
    <?php
    if (mysqli_num_rows($results) > 0) {
        echo '<table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th>Creado el</th>
                        <th>Acciones</th>
                    </tr>
                </thead>';

        while ($row = mysqli_fetch_assoc($results)) {
            echo ' <tr> <td>' .  $row['id'] . '</td>';
            echo ' <td>' .  $row['title'] . '</td>';
            echo ' <td>' .  $row['created_at'] . '</td>';
            echo ' <td> 
                        <a href="database/edit.php?id=' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i> </a> &nbsp; &nbsp; &nbsp;
                        <a href="database/delete.php?id=' . $row['id'] .'"><i class="fa-solid fa-trash"></i> </a> &nbsp; &nbsp; &nbsp;
                        <a href="view_task.php?id=' . $row['id'] .'"><i class="fa-solid fa-eye"></i></a>
                    </td> 
                    </tr>';
        }
        echo '</table>';
    } else {
        // Mostrar un mensaje o contenido alternativo cuando no hay registros
        echo "No se encontraron registros en la tabla." . '<div class="container d-flex justify-content-center">
        <button type="button" class="btn btn-success p-3 mt-5"><a href="index.php" class="text-white">Agregar Tarea </a></button>
    </div>' ;
    }
    ?>
</div>

<?php include('layouts/header.php') ?>

<div class="container mt-5 p-4">
    <?php
    if (mysqli_num_rows($results) > 0) {
        echo '<table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th>Creado el</th>
                        <th>Acciones</th>
                    </tr>
                </thead>';

        while ($row = mysqli_fetch_assoc($results)) {
            echo ' <tr> <td>' .  $row['id'] . '</td>';
            echo ' <td>' .  $row['title'] . '</td>';
            echo ' <td>' .  $row['created_at'] . '</td>';
            echo ' <td> 
                        <a href="database/edit.php?id=' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i> </a> &nbsp; &nbsp; &nbsp;
                        <a href="database/delete.php?id=' . $row['id'] .'"><i class="fa-solid fa-trash"></i> </a> &nbsp; &nbsp; &nbsp;
                        <a href="view_task.php?id=' . $row['id'] .'"><i class="fa-solid fa-eye"></i></a>
                    </td> 
                    </tr>';
        }
        echo '</table>';
    } else {
        // Mostrar un mensaje o contenido alternativo cuando no hay registros
        echo "No se encontraron registros en la tabla." . '<div class="container d-flex justify-content-center">
        <button type="button" class="btn btn-success p-3 mt-5"><a href="index.php" class="text-white">Agregar Tarea </a></button>
    </div>' ;
    }
    ?>
</div>

<?php include('layouts/footer.php') ?>