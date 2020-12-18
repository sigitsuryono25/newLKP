<div class=" mt-3 py-3 text-center" style="background: #FFF">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary" >
                    <b>Testimoni</b>
                </h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php foreach ($testimoni as $value) { ?>
                <div class="col-md-4 p-4">
                    <img class="img-fluid d-block rounded-circle mx-auto" style="height:130px;width:130px;" src="<?php echo $value->foto ?>">
                    <p class="my-4">
                        <i><?php echo $value->testimoni ?></i>
                    </p>
                    <p><b><?php echo $value->nama_pemberi ?></b></p>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>