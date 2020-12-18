<div class="row" id="kelas">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <h2>Sidebar Infor</h2>
        <hr>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-12">
        <form id="form-side-bar" class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" id="id-sidebar" value="" name="id-sidebar"/>
                    <label>Pilih Kelas</label>
                    <select name="kelas-tujuan" class="form-control mb-3" id="kelas" required>
                        <option value="">-Pilih Kelas-</option>
                        <?php foreach ($kelas as $value) { ?>
                            <option value="<?php echo $value->id_kelas ?>"><?php echo $value->nama_kelas ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                     <label>Daftar Sidebar</label>
                     <div class="table-responsive">
                         <label>Weekday</label>
                         <table class="table table-hover table-striped">
                             <thead>
                                <tr>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr> 
                             </thead>
                             <tbody>
                                 <?php
                                    foreach($sidebar as $content){
                                        if($content->day_or_end == 0){?>
                                            <tr>
                                                <td><?php echo $content->nama?></td>
                                                <td>
                                                    <a class="btn btn-warning" onclick="return getData('<?php echo $content->id?>')">Edit</a>
                                                    <a class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                    <?php }?>
                                <?php  }
                                 ?>
                             </tbody>
                         </table>
                         
                         <label>Weekday</label>
                         <table class="table table-hover table-striped">
                             <thead>
                                <tr>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr> 
                             </thead>
                             <tbody>
                                 <?php
                                    foreach($sidebar as $content){
                                        if($content->day_or_end == 1){?>
                                            <tr>
                                                <td><?php echo $content->nama?></td>
                                                <td>
                                                    <a class="btn btn-warning" onclick="return getData('<?php echo $content->id?>')">Edit</a>
                                                    <a class="btn btn-danger" href ="<?php echo site_url('delete/delete_sidebar/'. $content->id)?>" onclick="return confirm('Yakin ?')">Hapus</a>
                                                </td>
                                            </tr>
                                    <?php    }
                                    ?>
                                <?php }
                                 ?>
                             </tbody>
                         </table>
                     </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-fluid">
                    <div class="form-group">
                        <label>Untuk Kapan ? (Weekday/Weekend)</label>
                        <select class="form-control" name="the-day" required id="the-day">
                            <option value="">--Silahkan Pilih Satu--</option>
                            <option value="0">Weekdays</option>
                            <option value="1">Weekend</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="text" name="tanggal-mulai" placeholder="bulan/tanggal/tahun" class="form-control datepicker" required id="tanggal-mulai"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="text" name="tanggal-selesai"  placeholder="bulan/tanggal/tahun" class="form-control datepicker" required id="tanggal-selesai"/>
                    </div>
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="text" name="jam" placeholder="misalnya 09.00-13.00 WIB" class="form-control" required id="jam"/>
                    </div>
                    <div class="form-group">
                        <label>Hari</label>
                        <select class="form-control" name="hari" required id="hari">
                            <option value="">--Silahkan Pilih Satu--</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Durasi</label>
                        <input type="text" name="durasi" placeholder="1 Bulan Misalnya" class="form-control" required id="durasi"/>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" value="Ruang Training LKP Unikom Yogyakarta" class="form-control" required id="lokasi"/>
                    </div>
                    <div class="form-group">
                        <label>Peserta Minimal</label>
                        <input type="text" name="peserta" placeholder="Min 3 Orang Misalnya   " class="form-control" required id="peserta"/>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                <button type="button" class="btn btn-primary" id="btn-submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
<script>
    function getData(id){
         $('.theme-loader').css('display', 'block');
        var url = "<?php echo site_url('edit/edit_sidebar/')?>" + id;
        $.ajax({
            url : url,
            type : "GET",
            dataType : "json",
            success: function (data, textStatus, jqXHR) {
                $("#kelas").val(data.id_kelas);
                $("#tanggal-mulai").val(data.mulai);
                $("#tanggal-selesai").val(data.selesai);
                $("#jam").val(data.jam);
                $("#hari").val(data.hari);
                $("#durasi").val(data.durasi);
                $("#lokasi").val(data.tempat);
                $("#peserta").val(data.peserta);
                $("#the-day").val(data.day_or_end);
                $("#id-sidebar").val(data.id);
                 $('.theme-loader').css('display', 'none');
            }
            , error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus + errorThrown);
            }
        })
    }

    $("#btn-submit").click(function () {
        var data = $("#form-side-bar").serialize();
        console.log(data);
        $.ajax({
            data: data,
            type: 'POST',
            url: '<?php echo site_url("dash/add_side_bar_proc") ?>',
            success: function (data, textStatus, jqXHR) {
                swal(textStatus, "Informasi Berhasil Ditambahkan", textStatus);
            }
            , error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus + errorThrown);
            }
        });
    });
</script>