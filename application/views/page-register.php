<?php $this->load->view('headfoot/navbar') ?>

<div class="container">
    <div class="text-light pt-2">
        <div class="row">
            <div class="col-md-12 ">
                <div class="newTitle1 d-none d-md-block pb-4">
                    <h2 class="text-center text-uppercase text-primary font-weight-bold" id="titleborder"><span>Form Pendaftaran Kursus/Training</span></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 d-block justify-content-center">
            <img class="img-fluid w-100" src="https://www.lauwba.com/411/assets/images/pendaftaran-training-android-web.jpg" />
            <b>Catt : </b><br>
            <li>Bagi yang membutuhkan <b><i>Surat Penawaran</b></i> secara otomatis akan dikirimkan oleh sistem via email setelah mengisi Form Registrasi/pendaftaran </li> 
            <li>Silahkan memilih kelas <b><i>In House Training </b></i>  jika pesertanya lebih dari 1 orang agar bisa mendapatkan harga yang lebih murah serta bisa request tempat serta jadwal pelaksanaannya</li>
            <li>Penjelasan masing-masing jenis <b>Kelas</b> akan muncul setelah Anda Klik/pilih</b>
            <li>Setelah mengisi form Pendaftaran, secara otomatis invoice serta nomor rekening akan muncul dan terkirim via email Anda </li>

        </div>
        <div class="col-md-7">
            <br>
            <form class="formDaftar">
                <input type="hidden" value="LKP UNIKOM" name="from"/>
                <div class="form-group my-1">
                    <label for="nama-lengkap">Nama Lengkap<span class="text-danger">*</span></label>
                    <input type="text" name="nama-lengkap" id="nama-lengkap" class="form-control" placeholder="" required>
                </div>
                <div class="form-group my-1">
                    <label for="email">Email Anda<span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                    <small>Diperlukan untuk mengirimkan invoice ke email anda</small>
                </div>
                <div class="form-group my-1">
                    <label for="nomor-hape">Nomor Hape (WhatsApp)<span class="text-danger">*</span></label>
                    <input type="tel" name="nomor-hape" id="nomor-hape" class="form-control phone" placeholder="contoh 82221777206" required>
                    <small class="text-danger">Tanpa 62 dan tanpa angka 0 didepan</small>
                </div>
                <div class="form-group my-1">
                    <label for="nama-instansi">Nama Perusahaan/Instansi<span class="text-primary"> (Opsional)</span></label>
                    <input type="text" name="nama-instansi" id="nama-instansi" class="form-control" placeholder="">
                </div>
                <div class="form-group my-1">
                    <label for="jabatan">Jabatan<span class="text-primary"> (Opsional)</span></label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="">
                </div>
                <div class="form-group my-1">
                    <label for="jabatan">Pilihan Kelas <span class="text-danger">*</span></label><br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pilihan-kelas" data-toggle="popover" value="private-offline" title="Private Class Offline "data-content="Bisa Request Jadwal Sesuai Kebutuhan" data-placement="top" required>Private Class Offline
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pilihan-kelas" data-toggle="popover" value="private-online" title="Private Class Online "data-content="Training Bisa Dari Rumah Aja" data-placement="top" required>Private Class Online
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input disable-dulu" data-kelas='regular-class' id="regular-class" name="pilihan-kelas" data-toggle="popover" value="reg" title="Reguler Class" data-content="Mengikuti Jadwal yang Tersedia" data-placement="top" required>Reguler Class
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pilihan-kelas"  data-toggle="popover" value="in-house" title="In House Training" data-content="Jadwal dan Tempat pelaksanaan berdasarkan permintaan instansi/klien" data-placement="top" required>In House Training
                        </label>
                    </div> 
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pilihan-kelas"  data-toggle="popover" value="inkubator" title="Inkubator" data-content="Kelas inkubator adalah kelas yang pelaksanaanya selama 3 bulan full day dengan dibimbing dari nol didalam membuat project sampai selesai. Tujuan dari kelas ini adalah untuk melahirkan pelaku startup baru dan programmer yang siap memasuki dunia kerja." data-placement="top" required>Inkubator
                        </label>
                    </div>
                </div>


                <!--inkubator class-->
                <div class="inkubator d-none d-md-none">
                    <small><b>Incubator Class</b> Kelas inkubator adalah kelas yang pelaksanaanya selama 1 sampai 3 bulan full day dengan dibimbing dari nol didalam membuat project sampai selesai. Tujuan dari kelas ini adalah untuk melahirkan pelaku startup baru dan programmer yang siap memasuki dunia kerja. </small>
                    <hr>
                    <div class="form-group my-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Durasi Pelaksanaan (bulan)</label>
                                    <select name="durasi-kelas-inkubator" class="form-control inkubator-input" required>
                                        <option value="">--Silahkan Pilih--</option>
                                        <option value="1">1 Bulan</option>
                                        <option value="2" selected>2 Bulan</option>
                                        <option value="3">3 Bulan</option>
                                        <option value="4">4 Bulan</option>
                                        <option value="5">5 Bulan</option>
                                        <option value="6">6 Bulan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-1">
                        <label for="training">Training yang pilih<span class="text-danger">*</span> </label>
                        <select name="training-inkubator"  class="form-control  inkubator-input text-capitalize">
                            <option value="">--Silahkan Pilih--</option>
                            <?php foreach ($training as $train) { ?>
                                <option value="<?php echo $train->id_jenis ?>" class="text-capitalize"><?php echo $train->judul ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!--Inkubator-->


                <!--in house training-->
                <div class="in-house d-none d-md-none">
                    <small><b>Inhouse</b> Jadwal dan Tempat pelaksanaan berdasarkan permintaan instansi/klien</small>
                    <hr>
                    <div class="form-group in-house my-1">
                        <label for="kota">Kota Pelaksanaan<span class="text-danger">*</span></label>
                        <textarea class="form-control  in-house-input" row=6 name="kota-in-house"></textarea>
                    </div>
                    <div class="form-group in-house">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <label>Tanggal Mulai <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control  in-house-input" name="tanggal-mulai-in-house" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <label>Tanggal Selesai <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control  in-house-input" name="tanggal-selesai-in-house" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-1">
                        <label for="training">Training yang pilih<span class="text-danger">*</span> </label>
                        <select name="training-in-house"  class="form-control  in-house-input  text-capitalize">
                            <option value="">--Silahkan Pilih--</option>
                            <?php foreach ($training as $train) { ?>
                                <option value="<?php echo $train->id_jenis ?>" class="text-capitalize"><?php echo $train->judul ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group in-house my-1">
                        <label for="jumlah-peserta">Jumlah Peserta</span></label>

                        <select class="form-control  in-house-input" name="jumlah-peserta">
                            <option value="">--Silahkan Pilih--</option>
                            <?php for ($i = 1; $i <= 50; $i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?> Peserta</option>
                            <?php } ?>
                        </select>
                        <small>
                            <span class="font-weight-bold">Ket:</span><br>
                            1-2 orang Rp. 4,9Jt/Peserta<br>
                            3-4 orang Rp. 3,9Jt/Peserta<br>
                            5-9 orang Rp. 3,2Jt/Peserta<br>
                            10-15 orang Rp. 2,1Jt/Peserta<br>
                            15 orang atau lebih Rp. 1,3Jt/Peserta
                        </small>
                    </div>
                </div>
                <!--in house training-->

                <!--private class-->
                <div class="private-offline d-none d-md-none">
                    <small><b>Private Offline</b> Pelaksanaan di kantor kami di Yogyakarta & Tangerang Bisa Request Jadwal Sesuai Kebutuhannya </small>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <label>Tanggal Mulai <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control private-input-offline" name="tanggal-mulai-private-offline" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  my-1">
                        <label for="kota">Pilih Kota Pelaksanaan Private<b><i>(Pilihan kota bebas untuk online Class)</b></i><span class="text-danger">*</span></label>
                        <select name="kota-private-offline"  class="form-control  private-input-offline">
                            <option value="">--Silahkan Pilih--</option>
                            <option value="yogyakarta">Yogyakarta</option>
                            <option value="tangerang">Tangerang</option>
                        </select>
                    </div>
                    <div class="form-group my-1">
                        <label for="training">Training yang pilih<span class="text-danger">*</span> </label>
                        <select name="training-private-offline"  class="form-control  private-input-offline text-capitalize">
                            <option value="">--Silahkan Pilih--</option>
                            <?php foreach ($training as $train) { ?>
                                <option value="<?php echo $train->id_jenis ?>" class="text-capitalize"><?php echo $train->judul ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!--Private-->

                <!--private class online-->
                <div class="private-online  d-none d-md-none">
                    <small><b>Private Online Class</b> Training From Home | Belajar Jarak Jauh Dengan Bimbingan Trainer Live Session via Video Call & Remote Control | Bisa Request Jadwal Sesuai Kebutuhannya | </small>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <label>Tanggal Mulai <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control private-input-online" name="tanggal-mulai-private-online" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-1">
                        <label for="training">Training yang pilih<span class="text-danger">*</span> </label>
                        <select name="training-private-online"  class="form-control  private-input-online text-capitalize">
                            <option value="">--Silahkan Pilih--</option>
                            <?php foreach ($training as $train) { ?>
                                <option value="<?php echo $train->id_jenis ?>" class="text-capitalize"><?php echo $train->judul ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!--Private-->

                <div class="reguler d-none d-md-none">
                    <small><b><i>Mengikuti silabus serta jadwal yang tersedia(klik menu jadwal), </b></i> untuk wilayah yang diterapkan PSBB Pelaksanaan kembali diadakan setelah kondisi sudah memungkinkan dari COVID19 jadi bisa memilih <b><i>PRIVATE CLASS ONLINE diatas khususnya yang dari luar Jogja</b></i></small>
                    <hr>
                    <div class="form-group reguler  my-1">
                        <label for="kota">Pilih Kota Pelaksanaan<span class="text-danger">*</span></label>
                        <select name="kota"  class="form-control reguler-input" required>
                            <option value="">--Silahkan Pilih--</option>
                            <?php foreach ($kota as $kot) { ?>
                                <option value="<?php echo $kot->daerah ?>"><?php echo $kot->daerah ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group my-1">
                        <label for="training">Training yang pilih<span class="text-danger">*</span> </label>
                        <select name="training"  class="form-control reguler-input  text-capitalize" required>
                            <option value="">--Silahkan Pilih--</option>
                            <?php foreach ($training as $train) { ?>
                                <option value="<?php echo $train->id_jenis ?>" class="text-capitalize"><?php echo $train->judul ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group  reguler my-1 ">
                        <label for="jadwal">Jadwal yang dipilih<span class="text-danger">*</span></label>
                        <select name="jadwal" id="jadwal" class="form-control reguler-input" required>
                            <option value="">--Silahkan Pilih--</option>
                        </select>
                    </div>

                </div>
                <div class="card my-2 voucher-container d-none">
                    <div class="card-body shadow-sm bg-warning">
                        <div class="form-group my-1">
                            <label class="font-weight-bold">Punya Voucher? </label>
                            <div class="input-group">
                                <input type="text" class="form-control text-uppercase font-weight-bold" name="voucher" placeholder="masukin kode voucher disini"/>
                                <div class="input-group-append">
                                    <a class="btn btn-success text-white check-voucher">Proses</a>
                                </div>
                            </div>
                            <p class="msg font-weight-bold mt-2"></p>
                        </div>
                    </div>
                </div>

                <div class="form-group d-none d-md-none harga my-1">
                    <label for="harga">Kontribusi<span class="text-danger">*</span></label>
                    <br>
                    <h4 class="biaya-text h3"></h4>
                    <input type="hidden" readonly class="form-control-plaintext" name="harga" required>
                </div>
                <div class="form-group my-1">
                    <label for="tahu-darimana">Mengetahui Lauwba Techno Indonesia dari mana<span class="text-danger">*</span> </label>
                    <textarea name="tahu-darimana" id="tahu-darimana" cols="30" class="form-control" required></textarea>
                </div>
                <div class="form-group my-1">
                    <label for="motivasi">Motivasi Mengikuti Training</label>
                    <textarea name="motivasi" id="motivasi" cols="30" class="form-control"></textarea>
                </div>
                <div class="form-group my-1">
                    <label for="keterangan">Keterangan Tambahan</label>
                    <textarea name="keterangan" id="keterangan" cols="30" class="form-control"></textarea>
                </div>
                <div class="form-group text-center my-1">
                    <input type="submit" value="Simpan" class="btn btn-primary mt-4" name="simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var kotaJogja = 0;
    var idJenis = -1;
    var kotaSelected = -1;
    var biaya = 0;
    var data = "reg"
    var pilkel = "reg";
    $("[name='kota']").change(function () {
        kotaSelected = $(this).val();
        if (kotaSelected == "Yogyakarta") {
            kotaJogja = 0;
            console.log(kotaJogja);
        } else {
            kotaJogja = 1;
            console.log(kotaJogja);
        }
    });
    $("[name='pilihan-kelas']").click(function () {
        $(".harga").removeClass("d-block d-md-block").addClass("d-none d-md-none");
        data = $(this).val();
        pilkel = $(this).val();
        showVoucher(false);
        if (data == "reg") {
            $(".reguler").addClass("d-md-block d-block").removeClass('d-md-none d-none');
            $(".private-offline").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-online").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".in-house").addClass("d-md-none d-none").removeClass('d-md-block d-block');

            $(".reguler-input").prop('required', true);
            $(".private-input-offline").prop('required', false);
            $(".in-house-input").prop('required', false);
            $(".private-input-online").prop('required', false);

            $(".private-input-offline").val("");
            $(".in-house-input").val("");

        } else if (data == "private-offline") {
            $(".reguler").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-offline").addClass("d-md-block d-block").removeClass('d-md-none d-none');
            $(".private-online").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".in-house").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".inkubator").addClass("d-md-none d-none").removeClass('d-md-block d-block');

            $(".reguler-input").val("");
            $(".in-house-input").val("");

            $(".reguler-input").prop('required', false);
            $(".private-input-offline").prop('required', true);
            $(".in-house-input").prop('required', false);
            $(".private-input-online").prop('required', false);
            $(".inkubator-input").prop('required', false);
        } else if (data == "private-online") {
            $(".reguler").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-offline").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-online").addClass("d-md-block d-block").removeClass('d-md-none d-none');
            $(".in-house").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".inkubator").addClass("d-md-none d-none").removeClass('d-md-block d-block');

            $(".reguler-input").val("");
            $(".in-house-input").val("");

            $(".reguler-input").prop('required', false);
            $(".private-input-offline").prop('required', false);
            $(".private-input-online").prop('required', true);
            $(".in-house-input").prop('required', false);
            $(".inkubator-input").prop('required', false);

        } else if (data == "in-house") {
            $(".reguler").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-offline").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-online").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".in-house").addClass("d-md-block d-block").removeClass('d-md-none d-none');
            $(".inkubator").addClass("d-md-none d-none").removeClass('d-md-block d-block');

            $(".reguler-input").prop('required', false);
            $(".private-input-offline").prop('required', false);
            $(".in-house-input").prop('required', true);
            $(".private-input-online").prop('required', false);
            $(".inkubator-input").prop('required', false);

            $(".reguler-input").val("");
            $(".private-input-offline").val("");
        } else if (data == "inkubator") {
            $(".reguler").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-offline").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".private-online").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".in-house").addClass("d-md-none d-none").removeClass('d-md-block d-block');
            $(".inkubator").addClass("d-md-block d-block").removeClass('d-md-none d-none');

            $(".reguler-input").prop('required', false);
            $(".private-input-offline").prop('required', false);
            $(".in-house-input").prop('required', false);
            $(".private-input-online").prop('required', false);
            $(".inkubator-input").prop('required', true);

            $(".reguler-input").val("");
            $(".private-input-offline").val("");
        }
    });

    $("[name='jumlah-peserta']").change(function () {
        var selected = $(this).val();
        var harga = 0;
        if (selected >= 1 && selected <= 2) {
            harga = 4900000;
        } else if (selected >= 3 && selected <= 4) {
            harga = 3900000;
        } else if (selected >= 5 && selected <= 9) {
            harga = 3200000;
        } else if (selected >= 10 && selected <= 15) {
            harga = 2100000;
        } else if (selected > 15) {
            harga = 1300000;
        }
        showVoucher(true);
        biaya = harga * selected;
        $(".harga").removeClass("d-none d-md-none").addClass("d-block d-md-block");
        $("[name='harga']").val(biaya);
        $(".biaya-text").html("");
        // $(".biaya-text").addClass("badge badge-success text-center");
        $(".biaya-text").append("<span class='biaya-formatted h3 badge badge-success text-center'>" + convertToRupiah(biaya) + "</span>")
        // $(".biaya-text").html("<span class='h3'>" + convertToRupiah(biaya) + "</span>");

    });

    $("[name='training']").change(function () {
        idJenis = $(this).val();
        var url = "<?php echo URL_LAUWBA . 'welcome/jadwal/' ?>" + kotaSelected;
        console.log(url);
        $.ajax({
            url: url,
            type: "GET",
            success: function (d, t, jq) {
                $("[name='jadwal']").html(d);
            },
            error: function (j, t, e) {

                console.log(JSON.stringify(j));
            }
        });
    });

    $("[name='jadwal']").change(function () {
        var url = "<?php echo URL_LAUWBA . 'welcome/biaya_luar_kota/' ?>" + idJenis + "/" + kotaJogja;
        $(".harga").css("background-image", "<?php echo base_url('assets/img/loader.gif') ?>");
        console.log(url);
        $.ajax({
            url: url,
            type: "GET",
            dataType: 'json',
            success: function (d, t, q) {
                biaya = d.biaya_clear;
                $(".harga").removeClass("d-none d-md-none").addClass("d-block d-md-block");
                $("[name='harga']").val(d.biaya_clear);
                $(".biaya-text").html(d.biaya_text);
                $(".harga").css("background-image", "none");
            },
            error: function (j, t, e) {

            }
        });
    });

    //kota selected private
    var kotaPrivate = 0;
    $("[name='training-private-offline']").change(function () {
        showLoading()
        var data = $(this).val();
        var url = "<?php echo URL_LAUWBA . 'welcome/biaya_private/' ?>" + data;
        $.ajax({
            url: url,
            type: "GET",
            dataType: 'json',
            success: function (d, t, q) {
                biaya = d.biaya_clear;
                $(".harga").removeClass("d-none d-md-none").addClass("d-block d-md-block");
                $("[name='harga']").val(d.biaya_clear);
                $(".biaya-text").html(d.biaya_text);
                $(".harga").css("background-image", "none");
                stopLoading();
                showVoucher(true);

            },
            error: function (j, t, e) {

            }
        });
    });

    $("[name='training-private-online']").change(function () {
        showLoading()
        var data = $(this).val();
        var url = "<?php echo URL_LAUWBA . 'welcome/biaya_private_online/' ?>" + data;
        $.ajax({
            url: url,
            type: "GET",
            dataType: 'json',
            success: function (d, t, q) {
                biaya = d.biaya_clear;
                $(".harga").removeClass("d-none d-md-none").addClass("d-block d-md-block");
                $("[name='harga']").val(d.biaya_clear);
                $(".biaya-text").html(d.biaya_text);
                $(".harga").css("background-image", "none");
                stopLoading();
                showVoucher(true);
            },
            error: function (j, t, e) {

            }
        });
    });

    $('[name="durasi-kelas-inkubator"]').on('change', function () {
        $('[name="training-inkubator"]').val("");
        $(".harga").removeClass("d-block d-md-block").addClass("d-none d-md-none");
        $("[name='harga']").val("");
    });

    $('[name="training-inkubator"]').change(function () {
        showLoading()
        var data = $(this).val();
        var durasi = $('[name="durasi-kelas-inkubator"]').val();
        var url = "<?php echo URL_LAUWBA . 'welcome/biaya_incubator/' ?>" + data + "/" + durasi;
        $.ajax({
            url: url,
            type: "GET",
            dataType: 'json',
            success: function (d, t, q) {
                biaya = d.total_clear;
                $(".harga").removeClass("d-none d-md-none").addClass("d-block d-md-block");
                $("[name='harga']").val(d.total_clear);
                $(".biaya-text").html(d.biaya_text);
                $(".harga").css("background-image", "none");
                stopLoading();
                showVoucher(true);
            },
            error: function (j, t, e) {

            }
        });
    });

    $(".formDaftar").submit(function (e) {
        e.preventDefault();
        var action = "<?php echo URL_LAUWBA . 'welcome/proses_pendaftaran' ?>"
        var data = $(this).serialize();
        var confi = confirm("Apakah data yang dimasukkan sudah benar ?");
        var telpon = $("#nomor-hape").val();
        if (confi) {
            $("#loading-modal").modal('show');
            $.ajax({
                url: action,
                data: data,
                type: 'POST',
                dataType: 'json',
                success: function (d, t, j) {
                    $("#loading-modal").modal('hide');
                    var error = d.error;
                    var nextid = d.nextid;
                    if (error == 200) {
                        alert("Pendaftaran Berhasil. Klik OK Untuk Membuka halaman Invoice. Invoice juga telah dikirimkan ke email anda");
                        //   $(".nominal").html($("[name='harga']").val());
                        //   $("#modal-transfer").modal('show');
                        window.location.assign("<?php echo site_url('invoices/') ?>" + nextid);
                    } else {
                        alert("Terjadi Kesalahan. Jika masih berlanjut, silahkan hubungi CS");
                    }
                    console.log(JSON.stringify(j));
                },
                error: function (j, d, e) {
                    $("#loading-modal").modal('hide');
                    alert(d);
                    console.log(JSON.stringify(j));
                }
            });
        }
    });

    $(".check-voucher").on("click", function () {
        showLoading()
        let voucher = $('[name="voucher"]').val();
        let datas = {
            'voucher': voucher
        };

        let url = "<?php echo URL_LAUWBA . 'welcome/diskon' ?>";
        $.post(url, datas, function (d) {
            let potongan = d.potongan;
            if (pilkel == "inkubator") {
                $('.total-formatted').html(convertToRupiah(biaya - potongan));
                $('[name="harga"]').val(biaya - potongan)
            } else {
                $('.biaya-formatted').html(convertToRupiah(biaya - potongan));
                $('[name="harga"]').val(biaya - potongan)
            }
            if (potongan != "0" || potongan != 0) {
                $(".msg").html(d.message)
                $(".msg").addClass("text-success").removeClass("text-danger");
                $(".hemat").html(". Anda Hemat " + convertToRupiah(potongan));
            } else {
                $(".msg").html(d.message)
                $(".msg").addClass("text-danger").removeClass("text-success");
                $('[name="harga"]').val(biaya);
                $('.biaya-formatted').html(convertToRupiah(biaya));
                $('.total-formatted').html(convertToRupiah(biaya));
                $(".hemat").html("");
            }
            stopLoading();
        }, 'JSON')
    });

    function showVoucher(isShow = false) {
        if (isShow) {
            $(".voucher-container").addClass("d-block").removeClass("d-none");
        } else {
            $(".voucher-container").addClass("d-none").removeClass("d-block");
        }
        $('[name="voucher"]').val("");
        $(".msg").html("");
    }

    function convertToRupiah(angka)
    {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++)
            if (i % 3 == 0)
                rupiah += angkarev.substr(i, 3) + '.';
        return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }

</script>
<!-- Modal -->
<div class="modal fade" id="loading-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered border-0">
        <div class="modal-content bg-transparent border-0">

            <!-- Modal body -->
            <div class="modal-body text-center">
                <div class="d-flex justify-content-center mb-3">
                    <img src="https://lauwba.com/assets/img/loader-spinner.gif" class="img-fluid"/>
                </div>
                <h3><span class="badge badge-success">Silahkan tunggu<br><br>Sedang Mengirimkan Invoice</span></h3>
            </div>

        </div>
    </div>
</div>
<?php $this->load->view('headfoot/footer') ?>