<?php 
    require_once '../include/koneksi.php';
    $sql = "DELETE FROM Kategori WHERE id='".$_GET['id']."'";
    $query = mysqli_query($conn, $sql);
    if($query) {
        header('Location: kategori.php');
    }
?>