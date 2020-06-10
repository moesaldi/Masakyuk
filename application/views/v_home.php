<!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 style="font-family: 'montserrat'" class="text-white font-weight-bold"><?= $nama ?></h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p style="font-family: 'montserrat'" class="text-white font-weight-light mb-5">Masakyuk membantu anda memasak makanan yang <br>mudah untuk anda lakukan</p>
                        <a style="font-family: 'montserrat'" class="see-more js-scroll-trigger" href="#about">See More<br><i class="fas fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text-white font-weight-bold">We've got what you need!</h1>
                        <hr class="divider light my-4" />
                        <p style="font-family: 'montserrat'" class="text-white">Kami telah menyiapkan banyak resep untuk anda yang mudah untuk dipraktik kan.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#rekomendasi">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rekomendasi-->
        <section class="page-section" id="rekomendasi">
            <div class="container">
                <h2 class="text-center mt-0 font-weight-bold">Rekomendasi untuk anda</h2>
                <hr class="divider my-4" />
                <div class="row justify-content-center">
                    <?php
                    foreach ($data_resep as $key):
                        
                    
                    ?>
                        <div class="col-sm text-center" style="align-items: center;">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" style="width: 286px;height: 180px;" src="<?=base_url('/assets/img/'.$key->gambar)?>">
                              <div class="card-body">
                                <h5 class="card-title font-weight-bold"><?= $key->nama_resep ?></h5>
                                <p class="card-text"><?= $key->deskripsi_singkat ?></p>
                                <a href="<?=base_url('index.php/resep/lihatResep/'.$key->id_resep)?>" class="btn success">Lihat Resep</a>
                              </div>
                            </div>
                        </div>
                    <?php
                    endforeach
                    ?>
                </div>
                <div class="row justify-content-center">
                    <div class=" text-center">
                        <a class="btn success" style="margin-top: 50px" href="<?=base_url()?>index.php/home/rekomendasi">Lihat menu lainnya</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- vegetarian-->
        <section class="page-section" id="vegetarian">
            <div class="container">
                <h2 class="text-center mt-0 font-weight-bold">Menu Vegetarian</h2>
                <hr class="divider my-4" />
                <div class="row" style="align-items: center;">
                    <?php
                    foreach ($data_vegetarian as $key):
                        
                    
                    ?>
                        <div class="col-sm text-center" style="align-items: center;">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" style="width: 286px;height: 180px;" src="<?=base_url('/assets/img/'.$key->gambar)?>">
                              <div class="card-body">
                                <h5 class="card-title font-weight-bold"><?= $key->nama_resep ?></h5>
                                <p class="card-text"><?= $key->deskripsi_singkat ?></p>
                                <a href="<?=base_url('index.php/resep/lihatResep/'.$key->id_resep)?>" class="btn success">Lihat Resep</a>
                              </div>
                            </div>
                        </div>
                    <?php
                    endforeach
                    ?>
                </div>
                <div class="row justify-content-center">
                    <div class=" text-center">
                        <a class="btn success" style="margin-top: 50px" href="<?=base_url()?>/index.php/home/vegetarian">Lihat menu lainnya</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- non-vegetarian-->
        <section class="page-section" id="non-vegetarian">
            <div class="container">
                <h2 class="text-center mt-0 font-weight-bold">Menu Non Vegetarian</h2>
                <hr class="divider my-4" />
                <div class="row" style="align-items: center;">
                    <?php
                    foreach ($data_nonvegetarian as $key):
                        
                    
                    ?>
                        <div class="col-sm text-center" style="align-items: center;">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" style="width: 286px;height: 180px;" src="<?=base_url('/assets/img/'.$key->gambar)?>">
                              <div class="card-body">
                                <h5 class="card-title font-weight-bold"><?= $key->nama_resep ?></h5>
                                <p class="card-text"><?= $key->deskripsi_singkat ?></p>
                                <a href="<?=base_url('index.php/resep/lihatResep/'.$key->id_resep)?>" class="btn success">Lihat Resep</a>
                              </div>
                            </div>
                        </div>
                    <?php
                    endforeach
                    ?>
                </div>
                <div class="row justify-content-center">
                    <div class=" text-center">
                        <a class="btn success" style="margin-top: 50px" href="<?=base_url()?>/index.php/home/nonvegetarian">Lihat menu lainnya</a>
                    </div>
                </div>
            </div>
        </section>

        