<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "todo_list";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

    $query = "SELECT * FROM tasks";

    $results = mysqli_query($conn, $query);

?>
