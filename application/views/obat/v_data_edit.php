<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('obat'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('obat/update') ;?>" method="POST">
                    <input type="hidden" name="id_obat" value="<?= $u['id_obat'] ;?>">
                    <div class="form-group mb-2">
                        <label for="nama_obat" class="mb-2">nama obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="<?= $u['nama_obat'] ;?>">
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>