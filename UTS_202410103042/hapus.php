<?php
include "functions.php";

if(isset($_GET['id'])){

    $query = "DELETE FROM fakultas where id = '$_GET[id]'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Gagal menghapus data...");
    }
    echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
}
?>