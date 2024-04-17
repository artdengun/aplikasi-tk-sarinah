<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TK SARINAH </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('pmb/assets/favicon.ico'); ?>" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('pmb/css/styles.css'); ?>" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo base_url('/'); ?>"><span class="fw-bolder text-primary">PMB TK SARINAH</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/pendaftaran'); ?>">Pendaftaran PMB</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php  echo base_url('/login'); ?>">Login Admin</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">FORM PENDAFTARAN SISWA BARU</h1>
                            <p class="lead fw-normal text-muted mb-0"></p>
                        </div>
                        <div class="table-responsive">
                        <?php
                        if (!empty(session()->getFlashdata('success'))) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php } ?>

                        <?php if (!empty(session()->getFlashdata('info'))) { ?>
                            <div class="alert alert-info">
                                <?php echo session()->getFlashdata('info'); ?>
                            </div>
                        <?php } ?>

                        <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                            <div class="alert alert-warning">
                                <?php echo session()->getFlashdata('warning'); ?>
                            </div>
                        <?php } ?>
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
                              <?php echo form_open_multipart('/pendaftaran/store'); ?>
                              <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <?php
                                        echo form_label('Nama');
                                        $nullCheckedNama = $inputs['nama'] ?? '';
                                        $nama = [
                                          'type'  => 'text',
                                          'name'  => 'nama',
                                          'id'    => 'nama',
                                          'value' => $nullCheckedNama,
                                          'class' => 'form-control',
                                        ];
                                        echo form_input($nama);
                                        ?>
                                      </div>
                                      <div class="form-group">
                                          <?php
                                          echo form_label('Jenis Kelamin');
                                          $nullCheckedJenisKelamin = $inputs['jenis_kelamin'] ?? '';
                                          $options = array(
                                              '' => '-- Pilih Jenis Kelamin --', // Pilihan default
                                              'Pria' => 'Pria',
                                              'Wanita' => 'Wanita'
                                          );
                                          echo form_dropdown('jenis_kelamin', $options, $nullCheckedJenisKelamin, 'class="form-control"');
                                          ?>
                                      </div>

                                      <div class="form-group">
                                        <?php
                                        echo form_label('Tanggal Lahir');
                                        $nullCheckedTempatTanggalLahir = $inputs['tanggal_lahir'] ?? '';
                                        $tempat_tanggal_lahir = [
                                          'type'  => 'date',
                                          'name'  => 'tanggal_lahir',
                                          'id'    => 'tanggal_lahir',
                                          'value' =>  $nullCheckedTempatTanggalLahir,
                                          'class' => 'form-control',
                                        ];
                                        echo form_input($tempat_tanggal_lahir);
                                        ?>
                                      </div>
                                      <div class="form-group">
                                        <?php
                                        echo form_label('Alamat');
                                        $nullCheckedAlamat = $inputs['alamat'] ?? '';
                                        $alamat = [
                                          'type'  => 'text',
                                          'name'  => 'alamat',
                                          'id'    => 'alamat',
                                          'value' => $nullCheckedAlamat,
                                          'class' => 'form-control',
                                        ];
                                        echo form_input($alamat);
                                        ?>
                                      </div>
                                      <div class="form-group">
                                          <?php
                                          echo form_label('Agama');
                                          $nullCheckedAgama = $inputs['agama'] ?? '';
                                          $optionsAgama = array(
                                              '' => '-- Pilih Agama --', // Pilihan default
                                              'Islam' => 'Islam',
                                              'Kristen' => 'Kristen',
                                              'Hindu' => 'Hindu',
                                              'Budha' => 'Budha',
                                              'Konghucu' => 'Konghucu'
                                          );
                                          echo form_dropdown('agama', $optionsAgama, $nullCheckedAgama, 'class="form-control"');
                                          ?>
                                      </div>
                                      <div class="form-group">
                                          <?php
                                          echo form_label('Tahun Ajaran');
                                          $nullCheckedTahunAjaran = $inputs['tahun_ajaran'] ?? '';
                                          $optionsTahunAjaran = array(
                                              '' => '-- Pilih Tahun Ajaran --', // Pilihan default
                                              '2022 - 2023' => '2022 - 2023',
                                              '2023 - 2024' => '2023 - 2024',
                                              '2024 - 2025' => '2024 - 2025',
                                              '2025 - 2026' => '2025 - 2026',
                                              '2026 - 2027' => '2026 - 2027'
                                          );
                                          echo form_dropdown('tahun_ajaran', $optionsTahunAjaran, $nullCheckedTahunAjaran, 'class="form-control"');
                                          ?>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                          <div class="row">
                                          <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-save"></i> Simpan</button>
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
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; TK SARINAH 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('pmb/js/scripts.js'); ?>"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
