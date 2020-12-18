<div class="mt-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-pills nav-justified">
                    <li class="nav-item">
                        <h1 class="text-center text-uppercase text-primary" >
                            <b>Pilihan kelas lainnya</b>
                        </h1>
                    </li>
                </ul>
                <div class="tab-content mt-2">
                    <div class="tab-pane fade show active" id="regular" role="tabpanel">
                        <div class="row mt-3">
                            <?php
                            foreach ($kelas_lain as $value) {
                                $string = strip_tags($value->isi_jenis);
                                $string .= '... <span class="badge badge-info text-center">Read More</span>';
                                ?>
                                <div class="col-md-4 pb-2 col-sm-12 col-12 btn-menu" onclick="window.open('<?php echo site_url('page/kat/' . $value->judul_seo) ?>')">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-12 col-sm-12">
                                                <div class="card">
                                                    <div class="div-center-crop" style="--url: url('<?= $value->gambar ?>'); --height: 150px;"></div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><b><?php echo $value->nama_kategori ?></b></h5>
                                                        <p class="card-text text-justify"><?php echo $string ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>