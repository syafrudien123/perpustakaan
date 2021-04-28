<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Data Master Penerbit
        </div>

        <div class="card-body">
            <a href="<?= base_url('penerbit/tambah') ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered example" id="example">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Penerbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_penerbit as $key => $val) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $val['nama_penerbit'] ?></td>
                            <td><a href="<?= base_url('penerbit/ubah/' . $val['id_penerbit']) ?>" class="btn btn-success btn-small">Update</a>
                                <a href="<?= base_url('penerbit/hapus/' . $val['id_penerbit']) ?>" onclick="return confirm('yakin menghapus data?')" class="btn btn-danger btn-small">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>