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
                      <?php echo form_open_multipart('tk/store'); ?>
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
                                $agama = [
                                  'type'  => 'text',
                                  'name'  => 'agama',
                                  'id'    => 'agama',
                                  'value' => $nullCheckedAgama,
                                  'class' => 'form-control',
                                ];
                                echo form_input($agama);
                                ?>
                              </div>
                              <div class="form-group">
                                <?php
                                echo form_label('Tahun Ajaran');
                                $nullCheckedTahunAjaran = $inputs['tahun_ajaran'] ?? '';
                                $tahun_ajaran = [
                                  'type'  => 'text',
                                  'name'  => 'tahun_ajaran',
                                  'id'    => 'tahun_ajaran',
                                  'value' =>  $nullCheckedTahunAjaran,
                                  'class' => 'form-control',
                                ];
                                echo form_input($tahun_ajaran);
                                ?>
                              </div>
                              <!-- <div class="form-group">
                                <?php
                                echo form_label('Kelas');
                                $nullCheckedKelas = $inputs['kelas'] ?? '';
                                $kelas = [
                                  'type'  => 'text',
                                  'name'  => 'kelas',
                                  'id'    => 'kelas',
                                  'value' =>  $nullCheckedKelas,
                                  'class' => 'form-control',
                                ];
                                echo form_input($kelas);
                                ?>
                              </div> -->
                            </div>
                          </div>
                          <div class="card-footer">
                                  <div class="row">
                                  <button type="submit" class="btn btn-primary float-right"><i class="nav-icon fas fa-save"></i> Simpan</button>
                                  </div>
                                  <div class="row">
                                  <a href="<?php echo base_url('tk'); ?>" class="btn btn-outline-info float-left"> <i class="nav-icon fas fa-backward"></i> Back</a>
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
  <?php
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    echo "<script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data telah berhasil disimpan.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>";
}
?>
<?php echo view('_partials/script'); ?>
</body>

</html>
