<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('users/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="biru-muda">
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($users as $user) { ?>
                                <tr>
                                    <td class="text-center"><?= $no ;?></td>
                                    <td><?= $user['username'] ;?></td>
                                    <td><?= $user['nama_lengkap'] ;?></td>
                                    <td>
                                    <div class="d-flex gap-1 justify-content-center">
                                    
                                        <a href="<?= base_url().'users/edit/'.$user['id'] ;?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'users/hapus/'.$user['id'] ; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
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