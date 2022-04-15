<?php
require_once("backend.php");
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script defer src="assets/js/all.js?v=2"></script>
    <script src="/js/ajax.js"></script>
    <link href="assets/css/all.css?v=1" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>BACK-END</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm p-3 mb-5">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse order-2" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lesson.php"><i class="fab fa-hackerrank"></i> Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rank.php"><i class="fab fa-hackerrank"></i> Rank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php"><i class="fab fa-hackerrank"></i> Upload image</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usermanager.php"><i class="fab fa-hackerrank"></i> User Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skillmanager.php"><i class="fab fa-hackerrank"></i> Skill Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="__blank" href="../phpmyadmin"><i class="fab fa-hackerrank"></i> Phpmyadmin</a>
                    </li>
                </ul>
            </div>
    </nav>