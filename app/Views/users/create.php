<?php echo view('_partials/head'); ?>

<body class="g-sidenav-show  bg-gray-100">
  <?php echo view('_partials/sidenav'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php echo view('_partials/navbar'); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data User TK Sarinah </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                      $inputs = session()->getFlashdata('inputs');
                      $errors = session()->getFlashdata('errors');
                      if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                          Whoops! Ada kesalahan saat input data, yaitu:
                          <ul>
                            <?php foreach ($errors as $error) : ?>
                              <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                          </ul>
                        </div>
                      <?php } ?>
                      <?php echo form_open_multipart('users/store'); ?>
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <?php
                                echo form_label('Nama  User');
                                $nullCheckedNama = $inputs['nama_user'] ?? '';
                                $nama = [
                                  'type'  => 'text',
                                  'name'  => 'nama_user',
                                  'id'    => 'nama_user',
                                  'value' => $nullCheckedNama,
                                  'class' => 'form-control',
                                ];
                                echo form_input($nama);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Username');
                                $nullCheckedJenisKelamin = $inputs['username'] ?? '';
                                $jenis_kelamin = [
                                  'type'  => 'text',
                                  'name'  => 'username',
                                  'id'    => 'username',
                                  'value' => $nullCheckedJenisKelamin,
                                  'class' => 'form-control',
                                ];
                                echo form_input($jenis_kelamin);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Password');
                                $nullCheckedTempatTanggalLahir = $inputs['password'] ?? '';
                                $tempat_tanggal_lahir = [
                                  'type'  => 'text',
                                  'name'  => 'password',
                                  'id'    => 'password',
                                  'value' =>  $nullCheckedTempatTanggalLahir,
                                  'class' => 'form-control',
                                ];
                                echo form_input($tempat_tanggal_lahir);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Level');
                                $nullCheckedLevel = $inputs['level'] ?? '';
                                $level = [
                                  'type'  => 'text',
                                  'name'  => 'level',
                                  'id'    => 'level',
                                  'value' =>  $nullCheckedLevel,
                                  'class' => 'form-control',
                                ];
                                echo form_input($level);
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                                  <div class="row">
                                  <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-save"></i> Simpan</button>
                                  </div>
                                  <div class="row">
                                  <a href="<?php echo base_url('users'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
                                  </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<script>
function hideFlashMessages() {
    var successAlert = document.getElementById('successAlert');
    var infoAlert = document.getElementById('infoAlert');
    var warningAlert = document.getElementById('warningAlert');

    if (successAlert) {
      setTimeout(function () {
        successAlert.style.display = 'none';
      }, 3000); 
    }

    if (infoAlert) {
      setTimeout(function () {
        infoAlert.style.display = 'none';
      }, 3000); 
    }

    if (warningAlert) {
      setTimeout(function () {
        warningAlert.style.display = 'none';
      }, 3000);
    }
  }
    window.onload = function () {
    hideFlashMessages();
  };

</script>

  <?php echo view('_partials/script'); ?>
</body>

</html>