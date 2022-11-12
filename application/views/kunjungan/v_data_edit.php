<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('kunjungan/update') ;?>" method="POST">
                    <input type="hidden" name="id" value="<?= $u['id_berobat'] ;?>">
                    <div class="form-group mb-2">
                        <label for="dokter">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" class="form-control" value="<?= $u['tgl_berobat'] ;?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Pasien</label>
                        <select name="pasien" class="form-control" id="" required>
                                <?php 
                                foreach($pasien as $p) {
                                if($p['id_pasien']== $u['id_berobat']){
                                    $aktif = "selected";
                                } else {
                                    $aktif = "";

                                }
                                ?>
                                    <option value="<?= $p['id_pasien'] ;?>" <?= $aktif ;?>>
                                        <?= $p['nama_pasien'] ;?>
                                    </option>

                                <?php } ;?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="dokter">Dokter Yang Menangani</label>
                        <select name="dokter" class="form-control" id="" required>
                        <?php 
                                foreach($dokter as $p) {
                                if($p['id_dokter']== $u['id_berobat']){
                                    $aktif = "selected";
                                } else {
                                    $aktif = "";

                                }
                                ?>
                                    <option value="<?= $p['id_dokter'] ;?>" <?= $aktif ;?>>
                                        <?= $p['nama_dokter'] ;?>
                                    </option>

                                <?php } ;?>
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>