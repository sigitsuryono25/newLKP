<div class="pt-3 pb-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase text-primary" >
                    <b>Online Course</b>
                </h1>
                <div class="container">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center align-content-center">
                <p>Online Course merupakan kelas non tatap muka dengan jadwal sesuai dengan perjanjian</p>
                <h4>Daftar Sekarang. Gunakan Akun Google</h4>
                <div class="g-signin2 d-flex align-content-center justify-content-center" data-onsuccess="onSignIn"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 align-content-center">
               <form id="reg-form" style="display: none">
                    <div class="form-group">
                       <label>Email</label>
                       <input type="email" name="email" class="form-control" readonly id="email-google" required/>
                    </div><br>
                    <div class="form-group">
                       <label>Password</label>
                       <input type="password" name="passwords" class="form-control" required/>
                    </div><br>
                   <div class="form-group">
                       <label>Nama Lengkap</label>
                       <input type="text" name="nama-lengkap" class="form-control text-uppercase" required/>
                    </div><br>
                   <div class="form-group">
                       <label>Nomor Telepon</label>
                       <input type="text" name="nomor-telepon" class="form-control" required/>
                    </div><br>
                   <div class="form-group">
                       <label>Alamat</label>
                       <textarea class='form-control text-uppercase' name="alamat" required></textarea>
                    </div><br>
                    
                    <input type="submit" value="Daftar" class="btn btn-danger" />
               </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('module/mod-kelas')?>

<?php $this->load->view('module/mod-testimoni')?>
<?php $this->load->view('module/mod-galeri')?>
<?php $this->load->view('module/mod-portofolio')?>
<?php $this->load->view('module/mod-news')?>
<?php $this->load->view('module/mod-lokasi')?>
<?php $this->load->view('module/mod-client')?>
<script>
    $("#reg-form").submit(function (event) {
        event.preventDefault();
        var url = "<?php echo site_url('welcome/register')?>";
        var data = $('#reg-form').serialize();
        $.ajax({
            url : url,
            data : data,
            type: 'POST',
            success: function(j, t, e){
                alert(j + " " + t);
            },
            error : function(j, t, e){
                 alert(j + " " + t + " {" + e + "}");
            }
        });
        
    });
    $(".highslide").click(function () {
        $(".highslide-credits").css("display", "none");
    });
    
    function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();
        if(profile.getId() != null){
          $("#email-google").val(profile.getEmail());
          $("#reg-form").css("display", "inline");
          $("#reg-form").css("transition", "0.3s");
        } 
    }
</script>