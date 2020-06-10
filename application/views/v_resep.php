
<section class="page-section" id="rekomendasi" style="background: url('<?= base_url()?>/assets/img/bg-login.jpg');background-position: center; background-repeat: no-repeat;background-size: cover;padding-top: 10rem;
  padding-bottom: calc(10rem - 4.5rem);">
            <div class="container" style="background-color: #fff; border-radius: 20px;">
                <h1 class="text-center mt-0 font-weight-bold" style="padding-top: 25px;"><?= $detailResep->nama_resep?></h1>
                <hr class="divider my-4" />
                <div class="row" style="padding: 15px;">
                    <div class="col-8 text-center"><h5><?= $detailResep->deskripsi?></h5></div>
                    <div class="col-4"><img style="width: 300px; border-radius: 15px;" src="<?=base_url('assets/img/'.$detailResep->gambar )?>"></div>
                </div>
                <h2 style="padding-left: 15px;padding-top: 20px;" class="font-weight-bold">Alat & Bahan</h2>
                <hr>
                <div class="row" style="padding: 15px;">
                    <div class="col-8"><h5><?= $detailResep->ingridient?></h5>
                    </div>
                </div>
                <h2 style="padding-left: 15px;padding-top: 20px;" class="font-weight-bold">Petunjuk Pembuatan</h2>
                <hr>
                <div class="row" style="padding: 15px;">
                    <div class="col-12"><h5><?= $detailResep->petunjuk_pembuatan?></h5>
                    </div>
                </div>
                <div class="row " style="padding: 15px;padding-bottom: 50px;">
                    <div class=" col-4">
                        <h6 style="padding-top: 20px;" class="font-weight-bold">Beri Rating Pada Resep Ini</h6>
                        <img style="width: 200px;" src="<?=base_url()?>/assets/img/rating.png"><a class="btn btn-success" href="#">Rate</a>
                    </div>
                </div>
            </div>
        </section>