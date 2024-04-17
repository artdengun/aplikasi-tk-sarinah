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
              <h6>Data Siswa TK Sarinah</h6>
            </div>
            <a href="<?php echo base_url('tk/create'); ?>" class="btn btn-primary float-right"><i class="nav-icon fas fa-plus-square"></i> Tamba Data Baru</a>
            <div class="card-body px-0 pt-0 pb-2">
            <?php if (!empty(session()->getFlashdata('success'))) { ?><div id="successAlert" class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div><?php } ?>
            <?php if (!empty(session()->getFlashdata('info'))) { ?><div id="infoAlert" class="alert alert-info"><?php echo session()->getFlashdata('info'); ?></div><?php } ?>
            <?php if (!empty(session()->getFlashdata('warning'))) { ?><div id="warningAlert" class="alert alert-warning"><?php echo session()->getFlashdata('warning'); ?></div><?php } ?>
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
                      <th style="text-align: center">Kelas</th>
                      <th style="text-align: center">Tahun Ajaran</th>
                      <?php if (session()->get('level') == 1 || session()->get('level') == 2) { ?>
                        <th>Actions</th>
                      <?php } ?>
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
                        <?php if (session()->get('level') == 1 || session()->get('level') == 2) { ?>
                          <td style="text-align: center">
                            <div class="btn-group">
                              <a href="<?php echo base_url('tk/edit/' . $row['id']); ?>" class="btn btn-sm btn-success">
                                <i class="fa fa-edit"></i>
                              </a>
                              <a href="#" class="btn btn-sm btn-danger delete-btn"
                                data-toggle="modal"
                                data-target="#deleteConfirmationModal"
                                data-id="<?php echo $row['id']; ?>">
                                <i class="fa fa-trash-alt"></i>
                              </a>
                            </div>
                          </td>
                        <?php } ?>
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

  <div id="deleteConfirmationModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus Data Siswa ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a id="deleteLink" href="#" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>


<script>

function hideFlashMessages() {
    var successAlert = document.getElementById('successAlert');
    var infoAlert = document.getElementById('infoAlert');
    var warningAlert = document.getElementById('warningAlert');
    if (successAlert) {setTimeout(function () {successAlert.style.display = 'none';}, 3000);}
    if (infoAlert) {setTimeout(function () {infoAlert.style.display = 'none';}, 3000);}
    if (warningAlert) {setTimeout(function () {warningAlert.style.display = 'none';}, 3000);}
  }

    // Event listener untuk tombol delete
    var deleteButtons = document.querySelectorAll(".delete-btn");
    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var id = button.getAttribute("data-id");
            var deleteLink = document.getElementById("deleteLink");
            deleteLink.href = "<?php echo base_url('tk/delete/'); ?>" + id;
        });
    });
    window.onload = function () {
    hideFlashMessages();
    removeNewApplicantClass();
  };
</script>

  <?php echo view('_partials/script'); ?>
</body>

</html>
