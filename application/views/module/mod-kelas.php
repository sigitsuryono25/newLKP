<div class="pt-3 pb-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary" >
                    <b>Reguler Class</b>
                </h1>
                <div class="container">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <h5 class="text-center "><b>Kelas ini dilaksanakan satu sampai dua kali dalam sepekan selama satu sampai dua bulan pertemuan.</b>
                </h5>
            </div>
        </div>
        <?php
        foreach ($kelas as $value) {


            // $string = strip_tags($value->deskripsi_kelas);
            $string = $value->isi_jenis;
            $string .= '... <a target="_blank" class="badge badge-warning text-center">Read More</a>';
            ?>
            <div class="row">
                <div class="py-2 col-md-12 light-shadow my-2">
                    <div class="row" onclick="window.location.assign('<?= site_url("kelas-$value->id_jenis-$value->routes")?>')">
                        <div class="text-center col-md-2 d-block align-self-center justify-content-center">
                            <img class="img-fluid" src="<?php echo $value->gambar ?>" height="150" width="150" />
                        </div>
                        <div class="col-md-10">
                            <div class="mb-1 text-primary d-none d-md-block">
                                <h5>
                                    <b><?php echo $value->judul ?></b>
                                </h5><small class="text-danger font-weight-bold"><del><?php
                                        echo $value->coret;
                                        ?></del></small>
                                <span class="badge badge-success text-center"><?php
                                    echo $value->harga;
                                    ?></span>
                            </div>
                            <div class = "d-block d-md-none mb-1 mt-1 text-primary text-center">
                                <h5>
                                    <b><?php echo $value->judul ?></b>
                                </h5><small class="text-danger font-weight-bold"><del><?php
                                        echo $value->coret;
                                        ?></del></small>
                                <span class = "badge badge-success text-center"> <?php echo $value->harga; ?></span>
                            </div>
                            <p class = "my-1 text-justify"><?php echo $string; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>