<?php 

session_start();

@include("db.php");


$ad = $_POST['id'];
$_SESSION['mensaje'] = 'La tarea se ha creado con éxito.<br> <a href="view_task.php?id=' . $id .'" class="link-popup">Click aquí para ver la tarea creada</a>';
$_SESSION['color'] = 'success';






if(isset($_POST['title']) && isset($_POST['description'])){

   $title = $_POST['title'];
   $description = $_POST['description'];
   $id = $_GET['id'];

   $query = "INSERT INTO tasks(title, description) VALUES ('$title', '$description')";
    
   $result = mysqli_query($conn, $query);

   if($result){
       header("Location: ../index.php?id=$id");
      } else{
         echo "Error al registrar la tarea " . mysqli_error($conn); 
      }

      mysqli_close($conexion);

}
