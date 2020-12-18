<div class="container-fluid px-4 m-0 mt-3 mb-4 text-justify">
    <div class="row">
        <div class="col-md-8 col-12 col-sm-12">
            <?php foreach ($detail as $value) { ?>
                <!--<h4 class="text-center"><?php // echo $value->nama_kategori ?></h4><br/>-->
                <p class="text-justify"><?php echo $value->deskripsi ?></p>
            <?php }
            ?>
        </div>
        <div class="col-md-4 col-12 col-sm-12 ">
            <div class="container light-shadow p-3">
                <?php
                if ($sidebar->content == "") {
                    echo "<h4>Tidak ada Informasi Tambahan</h4>";
                } else {
                    echo $sidebar->content;
                }
                ?>
            </div>
        </div>
    </div>
</div>
