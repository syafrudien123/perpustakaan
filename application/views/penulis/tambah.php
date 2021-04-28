<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Data Penulis
        </div>

        <div class="card-body">
            <a href="<?= base_url('penulis') ?>" class="btn btn-warning mb-3">Tampil Data</a>
            <form method="POST" action="<?= base_url('penulis/simpan') ?>">
                <div class="form-group">
                    <label for="penerbit">Nama Penulis</label>
                    <input type="text" class="form-control" name="nama_penulis" id="penulis" autocomplete="off">
                    <!-- <small id=" penerbitHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>
</div>