<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Data Master Siswa
        </div>

        <div class="card-body">
            <a href="<?= base_url('siswa') ?>" class="btn btn-warning mb-3">Tampil Data</a>
            <form method="POST" action="<?= base_url('siswa/simpan') ?>">
                <div class="form-group">
                    <label for="siswa">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" id="siswa" autocomplete="off">

                </div>
                <div class="form-group">
                    <label for="nomer">Nomer Siswa</label>
                    <input type="text" class="form-control" name="nomer_siswa" id="nomer" autocomplete="off">

                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>
</div>