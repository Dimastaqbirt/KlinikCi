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
        <h4 class="text-center mb-2"><?= $title ;?></h4>
