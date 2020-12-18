<?php //print_r($sidebar)?>
<div class="row" id="kelas">
    <div class="col-md-6 col-12 col-sm-12"><h2><?php
            if (empty($title)) {
                echo "Tambah Kelas";
            } else {
                echo $title;
            }
            ?></h2>
    </div>
    <div class="col-md-6 col-sm-12 text-right text-white">
        <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_sidebar/!#sidebar')?>"><span class="fa fa-list"></span> Daftar Sidebar Informasi</a>
    </div>
    <hr>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12 col-12">
        <form id="form-side-bar" class="row">
            <div class="col-md-12">
                <label>Pilih Kelas</label>
                <select name="kelas-tujuan" class="form-control mb-3">
                    <option value="">-Pilih Kelas-</option>
                    <?php foreach ($kelas as $value) { ?>
                        <option value="<?php echo $value->id_kelas ?>" <?php echo ($sidebar->id_kelas == $value->id_kelas ? 'selected' : '') ?>><?php echo $value->nama_kelas ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-12">
                <label>Informasi</label>
                <?php echo form_textarea(array("name" => "konten", 'id' => 'konten', 'value' => $sidebar->content)) ?><br>
                <script>
                    var editor = CKEDITOR.replace('konten', {
                        removeButtons: 'Save,Print,Source,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                        filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    });
                    CKFinder.setupCKEditor(editor, '../../assets/ckfinder/');
                </script>
            </div>
        </form>
        <div class="col-md-12 col-sm-12 col-lg-12 col-12">
            <button type="button" class="btn btn-primary" id="btn-submit">Simpan</button>
        </div>
    </div>
</div>
<script>
    $("#btn-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = $("#form-side-bar").serialize();
        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_side_bar') === -1) {
            url = '<?php echo site_url("dash/add_side_bar_proc") ?>';
            pesan = "Penambahan Sidebar Infor Berhasil";
        } else {
            url = '<?php echo site_url("dash/add_side_bar_proc") ?>';
            pesan = "Sidebar Infor Berhasil Diupdate";
        }
        console.log(url + "?" + data);
        $.ajax({
            data: data,
            type: 'POST',
            url: url,
            success: function (j, t, e) {
                if (j == 0) {
                    swal(pesan, '', 'success');
                } else {

                }
            },
            error: function (j, t, e) {
                swal(t + "{ " + e + " }", '', 'error');
            }
        });
    });
</script>