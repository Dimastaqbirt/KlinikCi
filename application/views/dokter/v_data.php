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
                        <a href="<?= base_url('dokter/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah</a>
                        <a href="<?= base_url('laporan/data_dokter') ;?>" class="btn btn-primary btn-sm text-light ms-auto mb-2">Cetak Laporan</a>

                    </div>
                    <div class="me-5 mb-1">
                    </div>
                    </div>
                    <div class="col-lg-3 d-flex ">
                        <form action="<?= base_url('dokter/cari') ;?>" method="post">
                            <div class="input-group mb-3 d-flex mx-5">
                                <input type="text" class="form-control w-26 " placeholder="Cari.." name="keyword" aria-label="Cari.." aria-describedby="button-addon2">
                                <button type="submit" class="btn btn-outline-secondary btn-dark"><i class="fa fa-search text-light"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="biru-muda">
                            <tr>
                                <th>No.</th>
                                <th>Nama Dokter</th>
                                <th>Spesialis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($dokter as $user) { ?>
                                <tr>
                                    <td class="text-center"><?= $no ;?></td>
                                    <td><?= $user['nama_dokter'] ;?></td>
                                    <td><?= $user['spesialis'] ;?></td>
                                    <td>
                                        <a href="<?= base_url().'dokter/edit/'.$user['id_dokter'] ;?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'dokter/hapus/'.$user['id_dokter'] ; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
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


<div class="container py-5 ">
    <div class="row mb-4">
        <?php $no=1; foreach($dokter as $user) { ?>
        <div class="col-sm-3 mb-2">
            <div class="card shadow">
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-12 text-center mb-2">
                            <img src="<?php echo base_url();?><?php echo $user['foto']; ?>" class="img-fluid rounded" alt="foto"
                            width="auto" height="auto">
                        </div>
                        <div class="col-md-12 text-center">
                            <h3><?= $user['nama_dokter'] ;?></h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php $no++; } ?>
    </div>
</div>



