
        <table class="table table-bordered table-sm mb-2 mt-3 text-center">
            <tr class="">
                <th widht="80px">No.</th>
                <th>Tanggal Kunjungan</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Penatalaksanaan</th>
            </tr>
            <?php  
            $no=1;
            foreach($kunjungan as $r) {
            ?>
                <tr>
                    <td><?= $no ;?></td>
                    <td><?= $r['tgl_rekam_medis'] ;?></td>
                    <td><?= $r['nama_pasien'] ;?></td>
                    <td><?php echo $r['jenis_kelamin'] ;
                    if ($r['jenis_kelamin']=="P"){
                        echo "erempuan";
                    }else {
                        echo "aki-Laki";
                    }?></td>
                    <td><?= $r['umur'] ;?></td>
                    <td><?= $r['keluhan'] ;?></td>
                    <td><?= $r['hasil_diagnosa'] ;?></td>
                    <td><?= $r['penatalaksanaan'] ;?></td>
                </tr>
            <?php $no++; } ;?>
            </table>
                <br>