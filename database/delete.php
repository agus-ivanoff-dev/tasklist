<<<<<<< HEAD
<?php
session_start();
$_SESSION['mensaje'] = 'La tarea se ha eliminado con éxito';
$_SESSION['color'] = 'danger';



@include_once("db.php");

$id = $_GET['id'];

$query = "DELETE FROM tasks WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: ../list_tasks.php");
} else {
    echo "Error al eliminar la tarea " . mysqli_error($conn);
}

mysqli_close($conn);
=======
<?php
session_start();
$_SESSION['mensaje'] = 'La tarea se ha eliminado con éxito';
$_SESSION['color'] = 'danger';



@include_once("db.php");

$id = $_GET['id'];

$query = "DELETE FROM tasks WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: ../list_tasks.php");
} else {
    echo "Error al eliminar la tarea " . mysqli_error($conn);
}

mysqli_close($conn);
>>>>>>> 91c7fd6b50c15a731426f11df5d7ccf283eafa6a
