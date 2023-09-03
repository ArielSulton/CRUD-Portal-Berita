<?php
include "conn.php";
session_start();
$query = mysqli_query($conn, "SELECT * FROM berita");
if(!isset($_SESSION["username"])){
    header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>

<body>

<section>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" style="font-weight: bold; font-style: italic;" href="#">PENS NEWS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
</section>

<br>
<br>
<br>

<section id="table">
    <div class="container">
        <br>
        <h1 class="text-primary" style="font-style: italic; font-weight: bold; text-align: center;">ADMIN PANEL</h1>
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4 text-center">
                <br>
                <a href="add-berita.php"><button class="btn btn-primary">INPUT YOUR NEWS</button></a>
                <br>
            </div>
        </div>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th style="text-align:center;">Judul</th>
                <th style="text-align:center;">Konten</th>
                <th style="text-align:center;">Gambar</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($query as $key) {
            ?>
            <tr>
                <td style="text-align:center;"><?= $key['judul'] ?></td>
                <td style="text-align:center;"><?= $key['konten'] ?></td>
                <td style="text-align:center;"><?= "<img src='uploads/".$key['gambar']."'style='width:200px; height:100px;'>" ?><td>
                <td><a href="delete.php?id=<?= $key['idberita'] ?> "class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this news?')">delete</a>
                <a href="update.php?id=<?= $key['idberita'] ?>" class="btn btn-primary">update</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>    <a href="logout.php"><button type="submit" class="btn btn-primary text-align: center;">LOGOUT</button></a>
    </div>
</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>