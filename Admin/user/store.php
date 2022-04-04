<?php
if(isset($_POST['tambah'])){
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_buku']))));
    $jenis = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jenis_buku']))));
    $penerbit = htmlentities(htmlspecialchars(strip_tags(trim($_POST['penerbit']))));
    $tahun = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tahun_terbit']))));
    $stok = htmlentities(htmlspecialchars(strip_tags(trim($_POST['stok']))));

    $query = mysqli_query($koneksi, "INSERT INTO buku VALUES(null,'$nama','$jenis','$penerbit','$tahun','$stok')");

    if($query){
        header("Location: index.php?page=Buku");
    }else{
        echo "gagal";
    }
}
?>
