
        <table class="table table-bordered table-sm mb-2 mt-3 text-center">
            <tr class="">
                <th widht="80px">No.</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
            </tr>
            <?php  
            $no=1;
            foreach($pasien as $r) {
            ?>
                <tr>
                    <td><?= $no ;?></td>
                    <td><?= $r['nama_pasien'] ;?></td>
                    <td><?php echo $r['jenis_kelamin'] ;
                    if ($r['jenis_kelamin']=="P"){
                        echo "erempuan";
                    }else {
                        echo "aki-Laki";
                    }?></td>
                    <td><?= $r['umur'] ;?></td>
                </tr>
            <?php $no++; } ;?>
            </table>
                <br>