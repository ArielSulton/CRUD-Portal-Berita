<?php
include "conn.php";
if (isset($_POST['username'])) {
    
$username = $_POST['username'];
$password = $_POST['password'];
$insert = mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password')");


header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PENS NEWS FORM</title>
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

<section class = "form">
    <form action="" method="post">
        <button type="submit"w href="index.php">Back</button>
        <br><br>
        <h2> USERNAME </h2>
        <input type="text" name="username" id="username">
        <h2> PASSWORD </h2>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit">kirim</button>
    </form>
</section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>