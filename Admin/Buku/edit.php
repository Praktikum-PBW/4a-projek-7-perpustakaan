<?php
if(isset($_GET['id_buku'])){
    $id = $_GET['id_buku'];

    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 1){
    ?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Data Buku</h4>
        <form action="index.php?page=Buku_update" method="post">
            <input type="hidden" name="id_buku" value="<?= $id ?>">
            <div class="mb-2">
                <label for="nama_buku" class="form-label">Nama</label>
            </div>
            <input type="text" name="nama_buku" id="nama_buku" class="form-control" placeholder="Masukkan Nama Buku"
                value="<?= $data['nama_buku']?>">
            <div class="mb-2">
                <label for="jenis_buku" class="form-label">Jenis Buku</label>
            </div>
            <input type="text" name="jenis_buku" id="jenis_buku" class="form-control" placeholder="Masukkan Jenis Buku"
                value="<?= $data['jenis_buku']?>">
            <div class="mb-2">
                <label for="penerbit" class="form-label">Penerbit</label>
            </div>
            <input type="tel" name="penerbit" id="penerbit" class="form-control" placeholder="Masukkan Penerbit"
                value="<?= $data['penerbit']?>">
            <div class="mb-2">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            </div>
            <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit"
                value="<?= $data['tahun_terbit']?>">
            <div class="mb-2">
                <label for="stok" class="form-label">Stok</label>
            </div>
            <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan Stok"
                value="<?= $data['stok']?>"><br>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location: index.php?page=Buku");    
    }
}else{
    header("Location:index.php?page=Buku");
}
?>