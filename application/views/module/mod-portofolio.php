<div class="bg-light text-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary" >
                    <b>Project Portofolio</b>
                </h1>
                <div class="container">
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($portofolio as $value) { ?>
                <div class="px-2 mb-3 col-md-4 col-12 col-sm-12 btn-menu">
                    <div class="wrapper-block">
                        <div class="highslide-gallery">
                            <div class="hover text-center p-1">
                                <p style="color: #FFF; font-size: 12px"><?php echo $value->jdl_gallery ?></p>
                            </div>
                            <a href="<?php echo $value->gbr_gallery ?>" class="highslide text-center" onclick="return hs.expand(this)">
                                <img style="height: 200px; width: 100%" src="<?php echo $value->gbr_gallery ?>" class="img-thumbnail" alt="Highslide JS" title="Click to enlarge" 
                                     />
                            </a>
                            <div class="highslide-caption">
                                <?php echo $value->keterangan ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>