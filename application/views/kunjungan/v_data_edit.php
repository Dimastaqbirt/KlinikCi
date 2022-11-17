<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('kunjungan/update') ;?>" method="POST">
                <input type="hidden" name="id_berobat" value="<?= $u['id_berobat'] ;?>">
                    <div class="form-group mb-2">
                        <label for="tgl">Tanggal Berobat</label>
                        <input type="date" id="tgl" name="tgl_berobat" class="form-control" value="<?= $u['tgl_berobat'] ;?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="pasien">Nama Pasien</label>
                        <select name="nama_pasien" id="pasien" class="form-control mb-2">
                            <?php foreach($pasien as $p) :
                                if($p['id_pasien']==$u['id_pasien']) {
                                    $aktif = 'selected';
                                } else {
                                    $aktif = '';
                                }
                                ;?>
                                <option value="<?= $p['id_pasien'] ;?>"<?= $aktif ;?>><?= $p['nama_pasien'] ;?></option>
                                <?php  endforeach;?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nama Dokter</label>
                        <select name="nama_dokter" id="dokter" class="form-control mb-2">
                            <?php foreach($dokter as $p) :
                                if($p['id_dokter']==$u['id_dokter']) {
                                    $aktif = 'selected';
                                } else {
                                    $aktif = '';
                                }
                                ;?>
                                <option value="<?= $p['id_dokter'] ;?>"<?= $aktif ;?>><?= $p['nama_dokter'] ;?></option>
                                <?php  endforeach;?>
                            </select>
                    </div>
                            <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>