<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('pasien/tambah') ;?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="biru-muda">
                            <tr>
                                <th>No.</th>
                                <th>Nama Pasien</th>
                                <th>L/P</th>
                                <th>UMUR</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pasien as $user) { ?>
                                <tr>
                                    <td class="text-center"><?= $no ;?></td>
                                    <td><?= $user['nama_pasien'] ;?></td>
                                    <td><?= $user['jenis_kelamin'] ;
                                    if($user['jenis_kelamin'] == 'P'){
                                        echo "erempuan";
                                    } else {
                                        echo "aki-Laki";
                                    }
                                    ?></td>
                                    <td><?= $user['umur'] ;?></td>
                                    <td>
                                        <a href="<?= base_url().'pasien/edit/'.$user['id_pasien'] ;?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'pasien/hapus/'.$user['id_pasien'] ; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
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