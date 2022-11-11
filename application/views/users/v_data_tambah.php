<section class="konten mt-2">
    <div class="container-fluid mt-2">
        <div class="card border-biru-banget">
            <div class="card-header bg-biru-hitam text-light">
                <?= $title ;?>
            </div>
            <div class="card-body">
                <a href="<?= base_url('users'); ?>" class="btn btn-success btn-sm text-light ms-auto mb-2">Kembali</a>
                <form action="<?= base_url('users/insert') ;?>" method="POST">
                    <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>