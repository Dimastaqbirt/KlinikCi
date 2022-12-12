<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-8 me-2">
                    <div class="me-5">
                    <!-- <a href="<?= base_url('pasien/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah Pasien Baru</a> -->
                    <a href="<?= base_url('kunjungan/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2 ">Tambah Kunjungan Baru</a>
                    <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cetak Laporan
                    </button>
                    </div>
                    </div>
                    <div class="col-lg-3 d-flex mb-3 ">
                        <form action="<?= base_url('kunjungan/cari') ;?>" method="post">
                            <div class="input-group mb-1 d-flex mx-5">
                                <input type="text" class="form-control w-26 " autocomplete="off" placeholder="Cari.." name="keyword" aria-label="Cari.." aria-describedby="button-addon2">
                                <button type="submit" class="btn btn-outline-secondary btn-dark"><i class="fa fa-search text-light"></i></button>
                            </div>
                        </form>
                        </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center" id="tabledata">
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
                                    <td><?= tanggal_indo($user['tgl_rekam_medis']) ;?></td>
                                    <td><?= $user['nama_pasien'] ;?></td>
                                    <td><?= $user['umur'] ;?></td>
                                    <td><?= $user['nama_dokter'] ;?></td>
                                    <td>
                                        <a href="<?= base_url() ;?>kunjungan/rekam/<?= $user['id_rekam_medis'] ;?>" class="btn btn-success btn-sm">Rekam</a>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1 justify-content-center">
                                            <a href="<?= base_url().'kunjungan/edit/'.$user['id_rekam_medis'] ;?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= base_url().'kunjungan/hapus/'.$user['id_rekam_medis'] ; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                                        </div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cetak Laporan Kunjungan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="<?= base_url('laporan/cetaklaporankunjungan')?>" method="post">
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="bulan" class="mb-2">Bulan</label>
                    <select class="form-select" name="bulan">
                        <option value="">Pilih Bulan</option>
                        <?php foreach($bulan as $b):?>
                            <option value="<?= $b["no"]; ?>"><?= $b["nama"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="tahun" class="mb-2">Tahun</label>
                    <select class="form-select" name="tahun" required>
                        <option value="">Pilih Tahun</option>
                        <?php foreach($tahun as $t):?>
                            <option value="<?= $t; ?>"><?= $t; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cetak</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>