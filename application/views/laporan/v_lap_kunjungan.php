<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <title><?= $title ;?></title>
    <style>
        body{font-family: "Times New Roman", Times, serif;}
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td{
            border: 1px solid #000;
        }
        .bg-custom-logo {
            background-image: url("<?= base_url('assets/images/doctor-with-stethoscope-hands-hospital-background.jpg');?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <img class="img-fluid d-flex float-end" src="<?= base_url('assets/images/logoklinik.png');?>" width="70px" alt="foto">
        <h3 class="mb-0 mt-4">KLINIK Djava Medika</h3>   
        <small>Jl. Sutisna Senjaya No.1001, Empangsari, Kec. Tawang, Kab. Tasikmalaya, Jawa Barat 46112</small>
        <div class="row mt-4">
            
            <hr>
        </div>
        <h4 class="text-center mb-2"><?= $title.' '.strtoupper($waktu) ;?> </h4>

        <table class="table table-bordered table-sm mb-2 mt-3 ">
            <tr class="text-center">
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
            foreach($cetak as $r){
            ?>
                <tr class="">
                    <td class="text-center"><?= $no ;?></td>
                    <td><?= tanggal_indo($r['tgl_rekam_medis']) ;?></td>
                    <?php $pasien = $this->db->get_where("pasien", ['id_pasien' => $r['id_pasien']])->row_array();?>
                    <td><?= $pasien["nama_pasien"];?></td>
                    <td><?php echo $pasien['jenis_kelamin'] ;
                    if ($pasien['jenis_kelamin']=="P"){
                        echo "erempuan";
                    }else {
                        echo "aki-Laki";
                    }?></td>
                    <td><?= $pasien['umur'] ;?></td>
                    <td><?= $r['keluhan'] ;?></td>
                    <td><?= $r['hasil_diagnosa'] ;?></td>
                    <td><?= $r['penatalaksanaan'] ;?></td>
                </tr>
            <?php $no++; } ;?>
            </table>
            <br>
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <table widht="100%" class="mt-3">
                        <tr>
                            <td></td>
                            <td>
                                <small>
                                    Tasikmalaya, <?= tanggal_indo(date('Y-m-d')) ;?>
                                    <br>
                                    Administrator,
                                </small>
                                <p>
                                    <img class="img-fluid d-flex float-end me-5 mt-3 mb-2" src="<?= base_url('assets/images/tandatangan.png');?>" width="120px" alt="foto">
                                    <br>
                                    <br>
                                    
                                    <b>Jason A.Md.RMIK</b>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

    </div>





<script>
    window.print();
</script>
<script scr="<?= base_url();?>assets/js/bootstrap.bundle.min.js"></script>
<script scr="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>