<div class="row">
    <div class="col-md-12">
        <h4>Tambah Data Buku</h4>
        <form action="index.php?page=Buku_store" method="post">         
            <div class="mt-3">
                <label for="nama_buku" class="form-label">Nama</label>
            <input type="text" name="nama_buku" id="nama_buku" class="form-control" placeholder="Masukkan Nama Buku">
</div>
            <div class="mt-2">
                <label for="jenis_buku" class="form-label">Jenis Buku</label>
            <input type="text" name="jenis_buku" id="jenis_buku" class="form-control" placeholder="Masukkan Jenis Buku">
</div>
            <div class="mt-2">
                <label for="penerbit" class="form-label">Penerbit</label>
            <input type="tel" name="penerbit" id="penerbit" class="form-control" placeholder="Masukkan Penerbit">
</div>
            <div class="mt-2">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="tel" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit">
</div>
            <div class="mt-2">
                <label for="stok" class="form-label">Stok</label>
            <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukan Stok">
</div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary mt-2">
        </form>
    </div>
</div>