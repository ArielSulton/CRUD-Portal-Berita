<?php
include "conn.php";
session_start();
$queries = mysqli_query($conn, "SELECT * FROM berita");
if(!isset($_SESSION["username"])){
    header("location:login.php");
    }

if (isset($_GET['id'])) {
    $id = $_GET['id'];
if (isset($_POST['judul']))

{    
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    if (isset($_FILES['gambar'])) {
        $gambar = $_FILES['gambar']['name'];
        $tempFileName = $_FILES['gambar']['tmp_name'];
        $targetDirectory = 'uploads/';
        $targetPath = $targetDirectory . $gambar;

        if (move_uploaded_file($tempFileName, $targetPath)) {
            $insert = mysqli_query($conn, "UPDATE berita SET judul = '$judul', konten = '$konten', gambar = '$gambar' WHERE idberita = $id");
            header("location:admin.php");
        } else {
            echo "Terjadi kesalahan teknis!";
        }
    }
}

$query = mysqli_query($conn, "SELECT * FROM berita WHERE idberita = $id");
$assoc = mysqli_fetch_assoc($query);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PENS NEWS FORM</title>
</head>

<body class="bg-secondary">

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

<section class="p-3 mb-2 text-white">
    <main class="content">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <a href="admin.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
                <h2 class="text-center" style="font-weight: bold;">FORM BERITA</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul" name="judul"  value="<?= $assoc['judul'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">Konten Berita</label>
                        <input type="text" class="form-control" id="konten" name="konten" value="<?= $assoc['konten'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Terkait</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" value="<?= $assoc['gambar'] ?>">
                        <br>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>