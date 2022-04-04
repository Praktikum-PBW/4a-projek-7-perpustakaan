<?php
if(isset($_POST['edit'])){
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_buku']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_buku']))));
    $jenis= htmlentities(htmlspecialchars(strip_tags(trim($_POST['jenis_buku']))));
    $penerbit = htmlentities(htmlspecialchars(strip_tags(trim($_POST['penerbit']))));
    $tahun = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tahun_terbit']))));
    $stok = htmlentities(htmlspecialchars(strip_tags(trim($_POST['stok']))));

    $query = mysqli_query($koneksi, "UPDATE buku SET nama_buku='$nama', jenis_buku='$jenis', penerbit='$penerbit', tahun_terbit='$tahun',stok='$stok' WHERE id_buku='$id'");

    if($query){
        header("Location: index.php?page=Buku");
    }else{
        echo "gagal";
    }
}
?>