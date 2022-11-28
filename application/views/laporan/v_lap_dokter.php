
        <table class="table table-bordered table-sm mb-2 mt-3 text-center">
            <tr class="">
                <th widht="80px">No.</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
            </tr>
            <?php  
            $no=1;
            foreach($dokter as $r) {
            ?>
                <tr>
                    <td><?= $no ;?></td>
                    <td><?= $r['nama_dokter'] ;?></td>
                    <td><?= $r['spesialis'] ;?></td>
                </tr>
            <?php $no++; } ;?>
            </table>
                <br>