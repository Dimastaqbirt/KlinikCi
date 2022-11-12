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
                                <td><?= $data['nama_pasien'] ;?></td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>:</td>
                                <td><?= $data['umur'] ;?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $data['jenis_kelamin']  ;
                                if($data['jenis_kelamin'] == 'P'){
                                    echo "erempuan";
                                } else {
                                    echo "ali-Laki";
                                }?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card border-info">   
                    <div class="card-header bg-info text-white">
                        Riwayat Data Berobat
                    </div>
                    <div class="card-body">
                        Data Riwayat Berobat
                    </div>
                </div>
            </div>

            <div class="col-md-6 py-4">
            <div class="card border-danger  mb-3 ">   
                    <div class="card-header bg-danger text-white">
                        Catatan (Rekam Medis)
                    </div>
                    <div class="card-body">
                        data pasien
                    </div>
                </div>

                <div class="card border-success">   
                    <div class="card-header bg-success text-white">
                        Resep Obat
                    </div>
                    <div class="card-body">
                        Data Resep Obat
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>