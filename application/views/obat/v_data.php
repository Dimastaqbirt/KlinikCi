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
                            <a href="<?= base_url('obat/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah</a>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex ">
                        <form action="<?= base_url('obat/cari') ;?>" method="post">
                            <div class="input-group mb-3 d-flex mx-5">
                                <input type="text" class="form-control w-26 " autocomplete="off" placeholder="Cari.." name="keyword" aria-label="Cari.." aria-describedby="button-addon2">
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
                                <th>Nama Obat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($obat as $user) { ?>
                                <tr>
                                    <td class="text-center"><?= $no ;?></td>
                                    <td><?= $user['nama_obat'] ;?></td>
                                    <td>
                                    <div class="d-flex gap-1 justify-content-center">
                                        <a href="<?= base_url().'obat/edit/'.$user['id_obat'] ;?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'obat/hapus/'.$user['id_obat'] ; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
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