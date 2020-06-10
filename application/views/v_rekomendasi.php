
<section class="page-section" id="rekomendasi" style="background: url('<?= base_url()?>/assets/img/bg-login.jpg');background-position: center; background-repeat: no-repeat;background-size: cover;padding-top: 10rem;
  padding-bottom: calc(10rem - 4.5rem);">
            <div class="container">
                <h2 class="text-center mt-0 font-weight-bold" style="color: #fff;">Rekomendasi untuk anda</h2>
                <hr class="divider my-4" />
                <div class="row justify-content-center">
                    <?php
                    foreach ($data_resep as $key):
                        
                    
                    ?>
                        <div class="col-sm text-center" style="align-items: center;">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" style="width: 286px;height: 180px; border-radius: 15px;" src="<?=base_url('/assets/img/'.$key->gambar)?>">
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
            </div>
        </section>