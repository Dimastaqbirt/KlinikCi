<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning btn-sm  ms-auto float-end">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('kunjungan/insert') ;?>" method="POST">
                    <div class="form-group mb-2">
                        <label for="dokter">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Pasien</label>
                        <select name="pasien" class="form-control" id="" required>
                            <option value="">-> Pilih <-</option>
                                <?php foreach($pasien as $p) {?>
                                    <option value="<?= $p['id_pasien'] ;?>"><?= $p['nama_pasien'] ;?></option>
                                <?php } ;?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="dokter">Dokter Yang Menangani</label>
                        <select name="dokter" class="form-control" id="" required>
                            <option value="">-> Pilih <-</option>
                                <?php foreach($dokter as $d) {?>
                                    <option value="<?= $d['id_dokter'] ;?>"><?= $d['nama_dokter'] ;?></option>
                                <?php } ;?>
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