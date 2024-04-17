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
              <h6 class="m-0 font-weight-bold text-primary text-left">Form Tambah Data Tk Sarinah </h6>
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
                        <?php echo form_open_multipart('tk/update/' . $tk['id']); ?>
                        <div class="card-body">
                          <?php echo form_hidden('id', $tk['id']); ?>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <?php echo form_label('Nama', 'nama'); ?>
                                <?php echo form_input('nama',$tk['nama'],['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Jenis Kelamin', 'jenis_kelamin'); ?>
                                <?php echo form_input('jenis_kelamin',$tk['jenis_kelamin'],['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                  <?php echo form_label('Tanggal Lahir', 'tanggal_lahir'); ?>
                                  <?php echo form_input('tanggal_lahir', $tk['tanggal_lahir'], ['class' => 'form-control', 'type' => 'date']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Alamat', 'alamat'); ?>
                                <?php echo form_input('alamat',$tk['alamat'],['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Agama', 'agama'); ?>
                                <?php echo form_input('agama',$tk['agama'],['class' => 'form-control']);?>
                              </div>
                              <div class="form-group">
                                <?php echo form_label('Tahun Ajaran', 'tahun_ajaran'); ?>
                                <?php echo form_input('tahun_ajaran',$tk['tahun_ajaran'],['class' => 'form-control']);?>
                              </div>
                              <!-- <div class="form-group">
                                <?php echo form_label('Kelas', 'kelas'); ?>
                                <?php echo form_input('kelas',$tk['kelas'] ?? '',['class' => 'form-control']);?>
                              </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="<?php echo base_url('tk'); ?>" class="btn btn-outline-info"> <i class="nav-icon fas fa-backward"></i> Back</a>
                        <button type="submit" class="btn btn-primary float-right"> <i class="nav-icon fas fa-save"></i> Update Data</button>
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
