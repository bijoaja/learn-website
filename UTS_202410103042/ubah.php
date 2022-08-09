<h3> EDIT DATA </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130"> Fakultas :</td>
            <td>
                <input type="text" name="nama_fakultas">
            </td>
        </tr>
        <tr>
            <td width="130"> Jumlah Animo :</td>
            <td>
                <input type="text" name="animo">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="simpan" name="proses">
            </td>
        </tr>
    </table>
</form>

<?php
include "functions.php";

if(isset($_POST['proses'])){
    $nama_fakultas = $_POST['nama_fakultas'];
    $animo = $_POST['animo'];

    $query = "UPDATE fakultas SET fakultas_name = '$nama_fakultas', animo = '$animo' WHERE id = '$_GET[id]'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Gagal menyimpan perubahan...");
    }
    echo "<script>alert('Data berhasil disimpan!');window.location='index.php';</script>";
}


?>