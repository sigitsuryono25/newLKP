<div class=" mt-3 pt-3" style="background: #FFF">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary" >
                    <b>News & Blog</b>
                </h1>
                <div class="container">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    Berita seputar teknologi informasi serta tips dan trik
                </p>
            </div>
        </div>
        <?php
        if (sizeof($berita) > 0) {
            foreach ($berita as $value) {
                $string = strip_tags($value->konten);
                if (strlen($string) > 150) {

                    // truncate string
                    $stringCut = substr($string, 0, 150);
                    $endPoint = strrpos($stringCut, ' ');

                    //if the string doesn't contain any space then it will cut without word basis.
                    $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    $string .= '... <a class="badge badge-info text-center" href="#' . $value->id . '">Read More</a>';
                }
                ?>
                <div class="row">
                    <div class="py-2 col-md-12 light-shadow">
                        <div class="row">
                            <div class="text-center col-md-2">
                                <img src="<?php
                                if ($value->side_image == "") {
                                    echo URL_GAMBAR_DEFAULT;
                                } else {
                                    echo URL_GAMBAR_NEWS . $value->side_image;
                                }
                                ?>" width="150" />
                            </div>
                            <div class="col-md-10">
                                <div class="mb-1 text-primary d-none d-md-block">
                                    <h5>
                                        <b><?php echo $value->judul_berita ?></b>
                                    </h5>
                                </div>
                                <div class=" d-block d-md-none mb-1 text-primary text-center">
                                    <h5>
                                        <b><?php echo $value->judul_berita ?></b>
                                    </h5>
                                </div>
                                <p class="my-1 mx-auto"><?php echo $string ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="row">
                <div class="py-2 col-md-12 light-shadow text-center">
                    <h3>Belum ada berita</h3>
                </div>
            </div>
        <?php }
        ?> 
    </div>
</div>