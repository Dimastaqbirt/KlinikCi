<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .bg-custom {
            background-image: url("<?= base_url('assets/images/doctor-with-stethoscope-hands-hospital-background.jpg');?>") ;?>
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-biru {
            background-color: #063970;
        }
        .bg-biru-banget {
            background-color: #183153;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .biru-muda{
            background-color: #9ca2fa;
        }
        .bg-biru-hitam{
            background-color: #212a46;
        }

    </style>
</head>
<body>

<section id="nav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru-banget">
    <div class="container">
        <a class="navbar-brand me-4" href="#">KLINIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-4">
            <li class="nav-item me-4 ">
                <a class="nav-link" href="<?= base_url('kunjungan') ;?>">Kunjungan/Berobat</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Master Data
            </a>    
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="<?= base_url('users') ;?>">Data User</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dokter') ;?>">Data Dokter</a></li>
                <li><a class="dropdown-item" href="<?= base_url('pasien') ;?>">Data Pasien</a></li>
                <li><a class="dropdown-item" href="<?= base_url('obat') ;?>">Data Obat</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Laporan
            </a>    
            <ul class="dropdown-menu me-4">
                <li><a class="dropdown-item" href="<?= base_url('laporan/data_dokter') ;?>">Data Dokter</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?= base_url('laporan/data_pasien') ;?>">Data Pasien</a></li>
                <li><a class="dropdown-item" href="<?= base_url('laporan/data_kunjungan') ;?>">Data Kunjungan</a></li>
            </ul>
            </li>
                
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item ms-auto">
                <a href="<?= base_url('auth/logout') ;?>" class="nav-link btn btn-success fw-light text-white">Log Out</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</section>


