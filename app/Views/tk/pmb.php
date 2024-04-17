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
          <div class="card mb-4 shadow-lg">
            <div class="card-header pb-0">
              <h6>Data PMB</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align: center">No</th>
                      <th style="text-align: center">Nama</th>
                      <th style="text-align: center">Jenis Kelamin</th>
                      <th style="text-align: center">Tanggal Lahir</th>
                      <th style="text-align: center">Alamat</th>
                      <th style="text-align: center">Agama</th>
                      <th style="text-algin: center">Kelas</th>
                      <th style="text-align: center">Tahun Ajaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($tk as $key => $row) { ?>
                      <tr>
                        <td style="text-align: center">
                          <?php echo $key + 1; ?>
                        </td>
                        <td style="text-align: center"><?php echo $row['nama'];?></td>
                        <td style="text-align: center"><?php echo $row['jenis_kelamin'];?></td>
                        <td style="text-align: center"><?php echo $row['tanggal_lahir']; ?></td>
                        <td style="text-align: center"><?php echo $row['alamat']; ?></td>
                        <td style="text-align: center"><?php echo $row['agama']; ?></td>
                        <td style="text-align: center"><?php echo $row['kelas'];?></td>
                        <td style="text-align: center"><?php echo $row['tahun_ajaran']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
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
