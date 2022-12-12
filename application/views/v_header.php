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
    <link rel="stylesheet" href="<?= base_url('assets/css/style10.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        .bg-custom {
            background-image: url("<?= base_url('assets/images/doctor-with-stethoscope-hands-hospital-background.jpg');?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-custom-terbalik {
            background-image: url("<?= base_url('assets/images/background.jpg');?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-custom-rumahSakit {
            background-image: url("<?= base_url('assets/images/rumahsakit.jpg');?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-custom-ruangan {
            background-image: url("<?= base_url('assets/images/ruangan.jpg');?>");
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
        #team {
        background-image: linear-gradient(rgb(17, 24, 39), rgb(75, 85, 99));
      }
      @font-face {
        font-family: "LUPINES demo";
        src: url("<?= base_url('assests/font/LUPINES.ttf');?>");
      }
        

    </style>
</head>
<body class="">

<section id="nav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru-banget">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ;?>">
                <img class="img-fluid mx-3 navbar-brand  d-flex align-items-center" src="<?= base_url('assets/images/logoklinik.png');?>"  width="50px" alt="foto">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
            <li class="nav-item me-3 ">
                <a class="nav-link active" href="<?= base_url() ;?>">Home</a>
            </li>
            <li class="nav-item me-3 ">
                <a class="nav-link active" href="<?= base_url('kunjungan') ;?>">Kunjungan/Rekam medis</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Master Data
            </a>    
            <ul class="dropdown-menu active">
                <li><a class="dropdown-item" href="<?= base_url('users') ;?>">Data User</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dokter') ;?>">Data Dokter</a></li>
                <li><a class="dropdown-item" href="<?= base_url('pasien') ;?>">Data Pasien</a></li>
                <li><a class="dropdown-item" href="<?= base_url('obat') ;?>">Data Obat</a></li>
            </ul>
            </li>

            <!-- <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Laporan
            </a>    
            <ul class="dropdown-menu me-3 active">
                <li><a class="dropdown-item" href="<?= base_url('laporan/data_dokter') ;?>">Data Dokter</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?= base_url('laporan/data_pasien') ;?>">Data Pasien</a></li>
                <li><a class="dropdown-item" href="<?= base_url('laporan/data_kunjungan') ;?>">Data Kunjungan</a></li>
            </ul>
            </li> -->
                
        </ul>

        <ul class="navbar-nav ms-auto">
                <li class="nav-item ms-auto">
                <a href="#" class="text-white text-decoration-none me-2">
                    <?= $this->session->userdata('username');?>
                </a>
                <a href="<?= base_url('dashboard/logout') ;?>" class=" btn btn-success btn-sm text-white">Log Out</a>
                
            </li>
        </ul>
        </div>
    </div>
    </nav>
</section>


