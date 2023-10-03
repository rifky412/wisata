<?php 
$conn = mysqli_connect("localhost","root","","db_wisata");
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>