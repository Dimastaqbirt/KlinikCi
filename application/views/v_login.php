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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .bg-custom {
            background-image: url("<?= base_url('assets/images/doctor-with-stethoscope-hands-hospital-background.jpg');?>") ;?>
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-lg-6 bg-primary">
            <div class="row d-flex align-items-center vh-100 justify-content-center">
                <div class="col-lg-7 mx-auto">
                    <h1 class="text-center text-light">Halaman Login</h1>
                    <form action="<?= base_url('auth/login_aksi')  ;?>" method="post">
                        <div class="form-group mb-3" >
                            <label class="mb-1 d-flex text-light" for="fname">Username</label>
                            <input type="text" class="form-control" id="fname" name="username" placeholder="username..">
                            <small class="text-warning mt-2"><?= form_error('username') ;?></small>
                            
                        </div>
                        <div class="form-group mb-3" >
                            <label for="lname" class="mb-1 d-flex text-light">Password</label>
                            <input type="password"  class="form-control" id="lname" name="password" placeholder="password..">
                            <small class="text-warning  mt-2"><?= form_error('password') ;?></small>

                        </div>
                        <div class="d-flex justify-content-center">
                            <input class="btn btn-info text-light" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 bg-custom d-none d-lg-block">
        </div>
    </div>
</div>