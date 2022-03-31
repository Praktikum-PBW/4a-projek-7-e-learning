<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Categori</h4>
            <a href="index.php?page=kategori_create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name of Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                    $no = 1;
                    foreach($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['kategori'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=kategori_edit&id=<?= $data['id_kategori']?>" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                            <a href="index.php?page=kategori_delete&id=<?= $data['id_kategori'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
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