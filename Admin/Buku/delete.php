<?php
if (isset($_GET['id_buku'])){
    $id = $_GET['id_buku'];

    $query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");

    if($query){
        header("Location: index.php?page=Buku");
    }else{
        echo "gagal";
    }
}
?>