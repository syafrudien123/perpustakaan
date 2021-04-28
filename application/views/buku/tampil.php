<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Data Master Penerbit
        </div>

        <div class="card-body">
            <a href="<?= base_url('buku/tambah') ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered example" id="example">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_buku as $key => $val) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $val['nama_buku'] ?></td>
                            <td><?= $val['kode_buku'] ?></td>
                            <td><?= $val['nama_penulis'] ?></td>
                            <td><?= $val['nama_penerbit'] ?></td>
                            <td><?= $val['nama_kategori'] ?></td>
                            <td><?= $val['stok'] ?></td>
                            <td><a href="<?= base_url('buku/ubah/' . $val['id_buku']) ?>" class="btn btn-success btn-small">Update</a>
                                <a href="<?= base_url('buku/hapus/' . $val['id_buku']) ?>" onclick="return confirm('yakin menghapus data?')" class="btn btn-danger btn-small">Delete</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>