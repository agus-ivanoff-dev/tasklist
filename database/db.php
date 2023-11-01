<<<<<<< HEAD
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
=======
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
>>>>>>> 91c7fd6b50c15a731426f11df5d7ccf283eafa6a
