<div class="py-3 px-4 mb-4 text-center text-white bg-primary" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75));	background-position: center center;	background-size: cover;	background-repeat: repeat;	box-shadow: 0px 0px 4px  black, 0px 0px 4px  black;">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12">
                <h1 class="mb-3">Our team</h1>
                <h4>Kami mengedepankan pelayanan dan kualitas dalam memberikan solusi atas kebutuhan IT anda.</h4>
            </div>
        </div>
        <div class="row px-3">
            <?php foreach ($team as $value) { ?>
                <div class="col-lg-6 col-md-6 pb-4 pt-2"> 
                <img class="img-fluid d-block rounded-circle mx-auto" style="height:125px;width:125px;" src="<?php echo $value->gambar ?>" alt="<?php $value->gambar ?>">
                    <h4 class="mt-2"> <b><?php echo $value->nama ?></b> </h4>
                    <p class="mb-0"><?php echo $value->tentang ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>