<?php $this->load->view('headfoot/navbar') ?>
<div class="py-2 text-white bg-primary-young">
    <div class="container">
        <div class="row d-flex align-self-center justify-content-center text-left">
            <div class="col-md-8 col-8 text-md-left text-center align-self-center my-8">
                <h1 class="d-none d-md-block">LKP UNIKOM YOGYAKARTA</h1>
                <h2 class="d-block d-md-none">LKP UNIKOM YOGYAKARTA</h2>
                <p class="lead"> Let's Learn Together</p>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=6289666881159&text=*LKP UNIKOM Yogyakarta*%0ANama:%20%0AAsal%20Instansi/kampus:%20%0APilihan%20Kelas:%20%0A" class="btn mx-1 btn-danger my-2">Daftar</a>
                <label> </label>
                <a target="_blank" href="<?php echo site_url('course/!#course') ?>" class="btn btn-success mx-1">View courses</a>
            </div>

            <div class="col-md-4 my-4 col-12 text-md-right text-center align-items-end align-self-center justify-content-center d-flex flex-column">
                <?php //print_r($kat_kelas)?>
                <div class="row my-4">
                    <?php foreach ($kat_kelas as $value) { ?>
                        <div class="col-6 col-md-4 my-6 align-items-end align-self-center justify-content-center d-flex flex-column btn-menu" style="margin-top:15px;margin-right:-15px;">
                            <a target="_blank" href="<?php echo site_url('page/kat/' . $value->judul_seo) ?>">
                                <img id="icon-menu" class="img-fluid mx-auto d-block zoom" src="<?php echo base_url('assets/img/' . $value->foto) ?>"> 
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('module/mod-banner-2')?>
<?php $this->load->view('module/mod-kelas')?>
<?php $this->load->view('module/mod-kelas-lain')?>
<?php $this->load->view('module/mod-testimoni')?>
<?php $this->load->view('module/mod-galeri')?>
<?php $this->load->view('module/mod-portofolio')?>
<?php $this->load->view('module/mod-news')?>
<?php $this->load->view('module/mod-lokasi')?>
<?php $this->load->view('module/mod-client')?>
<script>
    $(document).ready(function () {

    });
    $(".highslide").click(function () {
        $(".highslide-credits").css("display", "none");
    });
</script>