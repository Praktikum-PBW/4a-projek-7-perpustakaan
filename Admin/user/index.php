<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data User </h3>
            <a href="index.php?page=user_create" class="btn btn-primary">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Id User</th>
                        <th>Nama User</th>
                        <th>Jenis Kelamin</th>
                        <th>No_telp</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT *FROM user');
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_user']?></td>
                        <td><?= $data['jk_user']?></td>
                        <td><?= $data['no_telp']?></td>
                        <td><?= $data['alamat_user']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=Buku_edit&id_buku=<?= $data['id_buku']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="index.php?page=Buku_delete&id_buku=<?= $data['id_buku']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>