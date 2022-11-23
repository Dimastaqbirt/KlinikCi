<section class="konten mt-2">
    <div class="container-fluid py-4">
        <a href="<?= base_url('kunjungan') ;?>" class="btn btn-warning btn-sm mt-2">Kembali</a>
        <div class="row">
            <div class="col-md-6 py-4">
                <div class="card border-biru-banget mb-3 ">   
                    <div class="card-header bg-primary text-white">
                        Biodata Pasien
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <th>Nama Pasien</th>
                                <td>:</td>
                                <td><?= $d['nama_pasien'] ;?></td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>:</td>
                                <td><?= $d['umur'] ;?></td>

                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $d['jenis_kelamin'] ;
                                if ($d['jenis_kelamin']== 'P') {
                                    echo 'erempuan';
                                } else {
                                    echo 'ali-Laki';

                                }
                                ?></td>


                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card border-info">   
                    <div class="card-header bg-info text-white">
                        Riwayat Data rekam_medis
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tgl. rekam_medis</th>
                                    <th>Keluhan</th>
                                    <th>Diagnosa</th>
                                    <th>Penatalaksanaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                $no=1;
                                foreach ($riwayat as $r) :
                                ;?>
                                <tr>
                                    <td>
                                        <?= $no ;?>
                                    </td>
                                    <td>
                                        <?= $r['tgl_rekam_medis'] ;?>
                                    </td>
                                    <td>
                                    <?= $r['keluhan'] ;?>
                                    </td>
                                    <td>
                                    <?= $r['hasil_diagnosa'] ;?>
                                    </td>
                                    <td>
                                    <?= $r['penatalaksanaan'] ;?>
                                    </td>
                                </tr>
                                <?php  $no; endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 py-4">
            <div class="card border-danger  mb-3 ">   
                    <div class="card-header bg-danger text-white">
                        Catatan (Rekam Medis)
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('kunjungan/insert_rm') ;?>" method="post" class="form-group">
                        <input name="id" id="" class="btn btn-primary" type="hidden" value="<?= $d['id_rekam_medis'] ;?>">
                        <div class="form-group mb-1" >
                            <label for="keluhan" class="form-group">Keluhan</label>
                            <textarea name="keluhan" id="keluhan"class="form-group d-flex" cols="65" rows="0"><?= $r['keluhan'] ;?></textarea required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Diagnosa Dokter</label>
                            <textarea name="diagnosa" class="form-group d-flex" cols="65" value="<?= $r['hasil_diagnosa'] ;?>"><?= $d['hasil_diagnosa'] ;?></textarea required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Penatalaksanaan</label>
                            <select name="penatalaksanaan" required class="form-group d-flex" >
                            <?php if($d['id_rekam_medis']==$r['id_rekam_medis']){
                                $aktif ='selected';
                            } else {
                                $aktif = '';
                            };?>
                                <option value="Rawat Jalan" <?= $aktif ;?>>Rawat Jalan</option>
                                <option value="Rawat Inap" <?= $aktif ;?>>Rawat Inap</option>
                                <option value="Rujuk" <?= $aktif ;?>>Rujuk</option>
                                <option value="Lainya" <?= $aktif ;?>>Lainya</option>
                            </select >
                        </div>
                        <div class="form-group mb-1">
                            <label for="">keterangan</label>
                            <textarea name="keterangan" class="form-group d-flex" cols="65" ></textarea required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>

                <div class="card border-success">   
                    <div class="card-header bg-success text-white">
                        Resep Obat
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('kunjungan/insert_resep');?>" method="post">
                        <input name="id" id="" class="btn btn-primary" type="hidden" value="<?= $d['id_rekam_medis'] ;?>">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select name="obat" id="" class="form-control">
                                            <?php foreach($obat as $p) {;?>
                                                <option value="<?= $p['id_obat'] ;?>"><?= $p['nama_obat'] ;?></option>
                                            <?php  };?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <button class="btn btn-success" type="submit">+</button>
                                    </div>
                            </div>
                        </form>

                        <HR>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Obat</th>
                                    <th class="btn text-dark" > # </th>
                                </tr>
                            </thead>
                            <TBody>
                                <?php $no=1; foreach($resep as $o) { ;?>
                                <tr>
                                    <td>
                                        <?= $no ;?>
                                    </td>
                                    <td>
                                        <?= $o['nama_obat'] ;?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url().'kunjungan/hapus_resep/'.$o['id_resep'].'/'.$o['id_rekam_medis'] ;?>" value="" class="btn btn-sm text-danger">
                                        x
                                        </a>
                                    </td>
                                </tr>
                                <?php $no++ ;} ?>
                            </TBody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>