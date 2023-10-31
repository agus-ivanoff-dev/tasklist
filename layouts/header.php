<?php
session_start();
include('database/db.php')
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de tareas</title>
    <link rel="icon" type="image/png" href="assets/images/todo-logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark text-white d-flex w-100">
        <div class="container-fluid row nav-row d-flex justify-content-around">
            <div class="col-4 nav-row-left d-flex">
                <div>
                    <a href="index.php"><img class="img-fluid p-2" src="assets/images/favicon.png" alt="Bootstrap"></a>
                </div>
                <div>
                    <a href="index.php" class="text-white">
                        <h4 class="p-3">Lista de Tareas</h4>
                    </a>
                </div>
            </div>

            <div class="col-md-4 nav-row-right d-flex justify-content-start">
                <ul class="nav nav-underline">
                    <li class="nav-item p-2">
                        <a class="nav-link text-white" href="index.php">Agregar Tarea</a>

                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-white" aria-current="page" href="list_tasks.php">Ver todas las tareas</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-white" href="#">Link</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>