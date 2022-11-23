<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('kunjungan/insert') ;?>" method="POST">
                    <div class="form-group mb-2">
                        <label for="tgl">Tanggal Berobat</label>
                        <input type="date" id="tgl" name="tgl_rekam_medis" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="pasien">Nama Pasien</label>
                        <select name="nama_pasien" id="pasien" class="form-control mb-2">
                            <option value="">->pilih<-</option>
                            <?php foreach($pasien as $p) {;?>
                                <option value="<?= $p['id_pasien'] ;?>"><?= $p['nama_pasien'] ;?></option>
                            <?php  };?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Nama Dokter</label>
                        <select name="nama_dokter" id="dokter" class="form-control mb-2">
                            <option value="">->pilih<-</option>
                            <?php foreach($dokter as $d) {;?>
                                <option value="<?= $d['id_dokter'] ;?>"><?= $d['nama_dokter'] ;?></option>
                            <?php  };?>
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