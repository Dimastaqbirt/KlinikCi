<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('dokter'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('dokter/update') ;?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_dokter" value="<?= $u['id_dokter'] ;?>">
                    <div class="form-group mb-2">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" value="<?= $u['nama_dokter'] ;?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" name="spesialis" class="form-control" value="<?= $u['spesialis'] ;?>">
                    </div>
                    <div class="form-group mb-3">
                            <label for="foto" class="mb-1">Foto</label>
                            <input type="file" class="form-control" name="foto" id="foto" value="<?= $u['foto'] ;?>">
                            <small class="text-danger"><?= form_error('foto');?></small>
                        </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>