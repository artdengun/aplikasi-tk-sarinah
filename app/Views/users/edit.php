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
              <h6 class="m-0 font-weight-bold text-primary text-left">Form Edit Users TK Sarinah</h6>
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
                      <div class="card">
                        <?php echo form_open_multipart('users/update/' . $users['id']); ?>
                        <div class="card-body">
                          <?php echo form_hidden('id', $users['id']); ?>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <?php echo form_label('Nama User', 'nama_user'); ?>
                                <?php echo form_input('nama_user',$users['nama_user'], ['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Username', 'username'); ?>
                                <?php echo form_input('username',$users['username'], ['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Password', 'password'); ?>
                                <?php echo form_input('password',$users['password'], ['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Level', 'level'); ?>
                                <?php echo form_input('level',$users['level'], ['class' => 'form-control']);?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                        <button type="submit" class="btn btn-primary float-right"> <i class="nav-icon fas fa-save"></i> Update Data</button>
                        </div><br>
                        <div class="row">
                          <a href="<?php echo base_url('users'); ?>" class="btn btn-outline-info"> <i class="nav-icon fas fa-backward"></i> Back</a>

                        </div>
                      </div>
                      <?php echo form_close(); ?>
                    </div>
                  </div>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php echo view('_partials/script'); ?>
</body>

</html>