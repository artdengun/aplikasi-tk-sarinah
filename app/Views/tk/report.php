<?php echo view('_partials/head'); ?>
<body class="g-sidenav-show  bg-gray-100">
  <?php echo view('_partials/sidenav'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php echo view('_partials/navbar'); ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4 shadow-lg">
            <div class="card-header pb-0">
              <h6>Reporting After Process Algorithm  C45</h6>
              <p>DecisionTree menentukan klasifikasi dalam menentukan kelas A dan B berdasarkan standar umur, <br> Jika Umur Kurang  dari 5 Th maka kelas A Dan jika umur
                Lebih  dari 5th maka kelas B.</p>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align: center">No</th>
                      <th style="text-align: center">Nama</th>
                      <th style="text-align: center">Umur</th>
                      <th style="text-align: center">Kelas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($hasil as $key => $row) { ?>
                      <tr>
                        <td style="text-align: center">
                          <?php echo $key + 1; ?>
                        </td>
                        <td style="text-align: center">
                          <?php echo $row['nama']; ?>
                        </td>
                        <td style="text-align: center">
                          <?php echo $row['umur']; ?>
                        </td>
                        <td style="text-align: center">
                          <?php echo $row['kelas']; ?>
                        </td>
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
