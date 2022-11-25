<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('pasien'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('pasien/update') ;?>" method="POST">
                    <input type="hidden" name="id_pasien" value="<?= $u['id_pasien'] ;?>">
                    <div class="form-group mb-2">
                        <label for="nama_pasien" class="mb-2">nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control" value="<?= $u['nama_pasien'] ;?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis_kelamin" class="mb-2">Jenis Kelamin</label>
                        <select type="text" name="jenis_kelamin" class="form-control mb-2" value="<?= $u['jenis_kelamin'] ;?>">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="umur" class="mb-2">Umur</label>
                        <input type="number" min="0" name="umur" class="form-control mb-2" value="<?= $u['umur'] ;?>">
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>