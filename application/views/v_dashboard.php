
<div class="container-fluid bg-custom-rumahSakit vh-100">
    <div class="container py-5">
        <div class="row mt-5">
          <section>
            <div class="row">
              <div class="col-lg-3 mb-3">
                <div class="card shadow border-0">
                  <div class="card-body bg-white ">
                    <div class="row">
                      <div class="col-3">
                        <h1 class='mt-3'>
                        <i class="bi bi-briefcase text-success"></i>
                        </h1>
                      </div>
                      <div class="col-9">
                        <h4>Admin</h4>
                        <h4 class="mt-2 ">
                          <?= $pengguna; ?> 
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <h1 class='mt-3'>
                          <i class="fa-sharp fa-solid fa-stethoscope text-primary"></i>
                        </h1>
                      </div>
                      <div class="col-9">
                        <h4>
                        dokter
                        </h4>
                        <h4>
                          <?= $dokter; ?> 
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <h1 class='mt-3'>
                          <i class="fa-sharp fa-solid fa-users-between-lines"></i>
                        </h1>
                      </div>
                      <div class="col-9 ">
                        <h4>
                        Pasien
                        </h4>
                        <h4>
                          <?= $pasien; ?> 
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-3">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                          <h1 class='mt-3'>
                            <i class="bi bi-person-vcard text-danger"></i>
                          </h1>
                      </div>
                      <div class="col-9">
                        <h4>kunjungan</h4>
                        <h4>
                          <?= $rekam_medis; ?> 
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
            <div class="col-lg-6">
                <h1 class="display-4 mt-5">Selamat Datang!</h1>
                <p class="lead">Di Aplikasi Pengelolaan Rekam Medis Klinik</p>
                <hr class="my-4">
                <p class="lead">
                <a class="btn btn-primary btn-lg" href="<?= base_url('kunjungan') ;?>" role="button">Kunjungan/Rekam medis</a>
                <a class="btn btn-primary btn-lg" href="<?= base_url('pasien') ;?>" role="button">PASIEN BARU</a>
                </p>
            </div>
        </div>
    </div>
</div>






<section id="team">
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row-md-10">
                <div class="col-mb-6 text-center ">
                    <h1 class="fw-bold text-white fw-bold" ><strong>KELOMPOK 6</strong></h1>
                </div>
                <p class=" justify-content-center text-center py-3 mb-5 text-light">Web Pengelolaan Rekam medis dengan contoh studi kasus pada klinik djava medika
                    dibuat untuk memenuhi tugas mata kuliah WEB PROGRAMING III semester 3. Masukan dan kritikan akan sangat berguna untuk keberlangsungan masa pembelajaran ini.
                    <br>
                    [Senin,05 Desember 2022]
                </p>
                    <h3 class="fw-bold text-warning fw-bold text-center" style="font-family: LUPINES demo, Lemon milk light;
                    font-size: 45px;"><strong>OUR TEAM</strong></h3>
        </div>
            <div class="row justify-content-center">
                <div class=" col-lg-3 mb-3 ">
                    <div class="card border-light d-flex content-align-center">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <img src="<?= base_url('assets/images/fotkel/dimas1-removebg-preview.png') ;?>" class="img img-fluid rounded mb-3 "alt="FOTO">
                            <h4 class="card-title mb-0"><b>Dimas Taqbir R</b></h4>
                            <hr class="mb-1 mt-0">
                            <p class="card-text mt-0">NIM : 12210750</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 mb-3">
                    <div class="card border-light">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <img src="<?= base_url('assets/images/fotkel/wida.jpeg') ;?>" class="img img-fluid rounded mb-3 "alt="FOTO">
                            <h4 class="card-title mb-0"><b>Wida Aryanti</b></h4>
                            <hr class="mb-1 mt-0">
                            <p class="card-text mt-0">NIM : 12210630</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 mb-3">
                    <div class="card border-light">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <img src="<?= base_url('assets/images/fotkel/rina.jpeg') ;?>" class="img img-fluid rounded mb-3 "alt="FOTO">
                            <h4 class="card-title mb-0"><b>Rina Fitri Rusli</b></h4>
                            <hr class="mb-1 mt-0">
                            <p class="card-text mt-0">NIM : 12210042</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-3">
                    <div class="card border-light">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <img src="<?= base_url('assets/images/fotkel/thomas.jpeg') ;?>" class="img img-fluid rounded mb-3 "alt="FOTO">
                            <h5 class="card-title mb-0"><b>Thomas Aninditya W</b></h5>
                            <hr class="mb-1 mt-0">
                            <p class="card-text mt-0">NIM : 1221088</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-light">
                        <img class="card-img-top d-flex mx-auto justify-content-center " width='1020px' src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <img src="<?= base_url('assets/images/fotkel/euis.jpeg') ;?>" class="img img-fluid rounded mb-3 "alt="FOTO">
                            <h4 class="card-title mb-0"><b>Euis A’fiyah N</b></h4>
                            <hr class="mb-1 mt-0">
                            <p class="card-text mt-0">NIM : 12210796</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

    <!-- footer -->
    <footer class="py-5 bg-dark" >
      <section id="kontak">
      <div class="container py-5" >
        <div class="row mb-3">
          <div class="col" >
            <h2 class="fw-bold text-warning " style="font-family: LUPINES demo, Lemon milk light; ">KELOMPOK ENAM</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-3 text-light" >
            <h5 class="mb-3">
              Contact Us
            </h5>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram me-2" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg> @djavamedika.id </p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg> 0882118336979</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check me-2" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
            </svg> djavamedika@gmail.com</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill me-2" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg> Jl. Sutisna Senjaya 82</p>
            <p>Tasikmalaya, Jawa Barat, Indonesia 46114 </p>
            
            
          
            
          </div>
          <div class="col-lg-4 mb-3 text-light" >
            <h5 class="mb-3">
              Link
            </h5>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-1 list">
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
            </ul>
          </div>
          <div class="col-lg-4 mb-3 text-light" >
            <h5 class="mb-3">
              Media Partner
            </h5>
            <p>Rumah Sakit Indonesia</p>
            <p>Sehatkan Indonesia</p>
            <p>@explore tasik</p>
            <p>www.Freepik.com</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <hr>
            <p class="text-light">
              &copy; Copyright <?= date('Y')?>. <span class="fw-bold text-warning text-center" style="font-family: LUPINES demo, Lemon milk light; ">KELOMPOK ENAM</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    </footer>
    <!-- akhir footer -->

