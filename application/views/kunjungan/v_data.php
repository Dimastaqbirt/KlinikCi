<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('pasien/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah Pasien Baru</a>
                <a href="<?= base_url('kunjungan/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah Kunjungan Baru</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="biru-muda">
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Dokter</th>
                                <th>Rekam Medis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($kunjungan as $user) { ?>
                                <tr>
                                    <td class="text-center"><?= $no ;?></td>
                                    <td><?= $user['tgl_berobat'] ;?></td>
                                    <td><?= $user['nama_pasien'] ;?></td>
                                    <td><?= $user['umur'] ;?></td>
                                    <td><?= $user['nama_dokter'] ;?></td>
                                    <td>
                                        <a href="<?= base_url() ;?>kunjungan/rekam/<?= $user['id_berobat'] ;?>" class="btn btn-success btn-sm">Rekam</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url().'kunjungan/edit/'.$user['id_berobat'] ;?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'kunjungan/hapus/'.$user['id_berobat'] ; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>