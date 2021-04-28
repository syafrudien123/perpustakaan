<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Data Master Siswa
        </div>

        <div class="card-body">
            <a href="<?= base_url('siswa/tambah') ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered example" id="example">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Nomor Siswa</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_siswa as $key => $val) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $val['nama_siswa'] ?></td>
                            <td><?= $val['nomer_siswa'] ?></td>
                            <td><a href="" class="btn btn-success btn-small">Update</a>
                                <a href="" class="btn btn-danger btn-small">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>