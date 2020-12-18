<div class="container">
    <div class="row">
        <div class="col-md-8 col-12 col-sm-12 p-4">
            <h4 class="text-primary font-weight-bold"><?= $detail->judul ?></h4>
            <img align="left" src="<?= URL_LAUWBA. 'foto_berita/'. $detail->gambar ?>" width="300" height="300"/>
            <?= $detail->isi_jenis ?>
        </div>
        <div class="col-md-4 col-12 col-sm-12">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-primary text-uppercase font-weight-bold py-3">Trainer</h4>
        </div>
        <div class="col-md-6 text-center">
            <div class="avatar d-flex justify-content-center">
               <!--<a href="#"><img class="lazyload" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/afb8cb36197347.5713616457ee5.gif" data-src="./foto_banner/trainer_Hardiansah_abu_faruq_Lauwba_Techno_Indonesia.jpg" alt=""></a>-->
                <div style="width: 177px; height: 223px; background: url(https://www.lauwba.com/foto_banner/trainer_Hardiansah_abu_faruq_Lauwba_Techno_Indonesia.jpg); background-position: center; background-size: cover"></div>
            </div>
            <div class="comment_right clearfix  text-center">
                <div class="comment_info">
                    <a href="#">Hardiansah, M.Kom.</a>
                </div>
                <p class="text-center">President Director</p>            
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="avatar d-flex justify-content-center">
               <!--<a href="#"><img class="lazyload" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/afb8cb36197347.5713616457ee5.gif" data-src="http://www.lauwba.com/foto_banner/Febriani_riwis_sari_s_kom_trainer_lauwba_copy.jpg" alt=""></a>-->
                <div style="width: 177px; height: 223px; background: url(https://www.lauwba.com/foto_banner/Febriani_riwis_sari_s_kom_trainer_lauwba_copy.jpg); background-position: center; background-size: cover"></div>
            </div>
            <div class="comment_right clearfix  text-center">
                <div class="comment_info">
                    <a href="#">Kuntadi, SP</a>
                </div>
                <p class="text-center">CS &amp;&nbsp;dministration</p>
            </div>
        </div>
        <!-- End Comments -->
    </div>
</div>
<script>
$(document).ready(function(){
   $(".col-md-8.col-12.col-sm-12.p-4>p").addClass("text-justify");
});

</script>

<?php $this->load->view('module/mod-galeri') ?>
<?php $this->load->view('module/mod-testimoni') ?>
<?php $this->load->view('module/mod-kelas') ?>
<?php $this->load->view('module/mod-kelas-lain') ?>
<?php $this->load->view('module/mod-portofolio') ?>
