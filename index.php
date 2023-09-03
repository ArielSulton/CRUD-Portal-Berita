<?php
include "conn.php";
$query = mysqli_query($conn, "SELECT * FROM berita");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PENS News Portal</title>
</head>

<body>

<section>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" style="font-weight: bold; font-style: italic;" href="#">PENS NEWS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#breaking">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</section>

<section class="home">
    <div class="mask-container">
        <main class="content">
            <h1 class="text-primary">&nbsp; PENS NEWS &nbsp;</h1>
            <br>
            <h2>Politeknik Elektronika <span> Negeri Surabaya</span></h2><br> 
            
        </main>
    </div>
</section>

<br>
<br>
<br>

<?php
    foreach ($query as $key) {
?>
<section class="container" id="breaking">
    <div class="card border-info mt-5 mb-5 mx-auto" style="width: 70%;">
        <img src="<?php echo 'uploads/'.$key['gambar']; ?>" class="card-img-top" alt="<?php echo $key['judul']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $key['judul']; ?></h5>
            <p class="card-text"><?php echo $key['konten']; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo date("d-m-Y"); ?></small></p>
        </div>
    </div>
</section>
<?php } ?>


<br>
<br>
<br>

<section class="container" id="breaking">
    <div class="card border-info mt-5 mb-5 mx-auto" style="width: 70%;">
        <img src="img/hut.jpeg" class="card-img-top" alt="HUT RI KE-78">
        <div class="card-body">
            <h5 class="card-title">HUT RI KE-78</h5>
            <p class="card-text">PENS meriahkan HUT RI KE-78 dengan jalan sehat di hari Minggu kemarin.</p>
            <p class="card-text"><small class="text-body-secondary">Kamis, 17 Agustus 2023</small></p>
        </div>
    </div>
</section>

<br>
<br>
<br>

<section class="container" id="breaking">
    <div class="card border-info mt-5 mb-5 mx-auto" style="width: 70%;">
        <img src="img/kri2023.jpg" class="card-img-top" alt="HUT RI KE-78">
        <div class="card-body">
            <h5 class="card-title">KRI 2023</h5>
            <p class="card-text">PENS memenangkan KRI 2023 di Universitas Semarang kemarin.</p>
            <p class="card-text"><small class="text-body-secondary">Rabu, 28 Juni 2023</small></p>
        </div>
    </div>
</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>