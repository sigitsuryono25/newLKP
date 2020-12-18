<div class="container">
    <div class="row text-center mt-4">
         <div class="col-md-12 col-12 col-sm-12">
             <h3> Informasi Dasar</h3>
              <hr>
         </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-12 mb-1" >
            <img class="img-fluid d-block rounded-circle mx-auto align-content-center justify-content-center align-self-center" style="height:200px;width:200px;" 
            src="http://lkp-unikom.com/admin411/assets/uploads/trainer/sigit_suryono_s_kom_m_kom_trainer_lauwba.jpg" alt="default">
        </div>
        <div class="col-md-8 col-sm-12 col-12 table-responsive mt-1">
            <table class="table table-stripped">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td class="text-capitalize"><?php echo $data->nama?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $data->email?></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><?php echo $data->nomor_telepon?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $data->alamat?></td>
                </tr>
                <tr>
                    <td>Terdaftar Pada</td>
                    <td>:</td>
                    <td><?php echo date_format(date_create($data->register_on), 'd-M-Y H:i:s')?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="my-2 mx-4 mb-4">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs nav-pills nav-justified">
            <li class="nav-item">
              <a href="" class="active nav-link" data-toggle="tab" data-target="#regular">Materi</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="tab" data-target="#private">Online Course</a>
            </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="regular" role="tabpanel">
                <p class="">Tab pane two. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="tab-pane fade" id="private" role="tabpanel">
              <p class="">Tab pane two. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>