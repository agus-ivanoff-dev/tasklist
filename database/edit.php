<<<<<<< HEAD
<?php include('db.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $fetch = "SELECT * FROM tasks WHERE id = $id;";
    echo $fetch;
    $results = mysqli_query($conn, $fetch);
    $row = mysqli_fetch_assoc($results);
    $title = $row['title'];
    $description = $row['description'];
    $createdAt = $row['created_at'];
    
  

    $query = "UPDATE `tasks` SET `title` = '$title', `description` = '$description', `created_at` = current_timestamp(), WHERE `id` = $id";

    $results = mysqli_query($conn, $query);

    if(!$results){
        die("Query Failed");
    }else{
        $_SESSION['mensaje'] = 'La tarea se ha editado con éxito.<br>';
    }

    
}

header("Location: ../edit_task.php");

?>

=======
<?php include('db.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $fetch = "SELECT * FROM tasks WHERE id = $id;";
    echo $fetch;
    $results = mysqli_query($conn, $fetch);
    $row = mysqli_fetch_assoc($results);
    $title = $row['title'];
    $description = $row['description'];
    $createdAt = $row['created_at'];
    
  

    $query = "UPDATE `tasks` SET `title` = '$title', `description` = '$description', `created_at` = current_timestamp(), WHERE `id` = $id";

    $results = mysqli_query($conn, $query);

    if(!$results){
        die("Query Failed");
    }else{
        $_SESSION['mensaje'] = 'La tarea se ha editado con éxito.<br>';
    }

    
}

header("Location: ../edit_task.php");

?>

>>>>>>> 91c7fd6b50c15a731426f11df5d7ccf283eafa6a
