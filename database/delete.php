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
