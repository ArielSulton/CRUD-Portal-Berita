<?php
include "conn.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM berita WHERE idberita = $id");
    header('location:admin.php');
}
?>