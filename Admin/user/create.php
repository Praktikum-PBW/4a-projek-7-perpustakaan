<div class="row">
    <div class="col-md-12">
        <h4>Tambah Data User</h4>
        <form action="index.php?page=user_store" method="post">
            <div class="mt-3">
                <label for="nama_user" class="form-label">Nama User</label>
            <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Masukkan Nama User">
</div>
            <div class="mt-2">
                <label for="jk_user" class="form-label">Jenis Kelamin</label>
            <input type="text" name="jk_user" id="jk_user" class="form-control" placeholder="Masukkan Jenis kelamin">
</div>
            <div class="mt-2">
                <label for="no_telp" class="form-label">No Telepon</label>
            <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telp">
</div>
            <div class="mt-2">
                <label for="alamat_user" class="form-label">Alamat</label>
            <input type="tel" name="alamat_user" id="alamat_user" class="form-control" placeholder="Masukkan Alamat">
</div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary mt-2">
        </form>
    </div>
</div>