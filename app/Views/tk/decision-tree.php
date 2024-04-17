<?php echo view('_partials/head'); ?>
<body class="g-sidenav-show  bg-gray-100">
<?php echo view('_partials/sidenav'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php echo view('_partials/navbar'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Reporting Algoritm C 45 </h5>
                <p class="text-white">Penentuan Kelas A dan B berdasarkan Klasifikasi Umur</p>
              </div>
            </div><br>
            <div class="row">
              <a href="<?php echo base_url('tk/decision-tree/result/algoritm45/penentuan-kelas'); ?>" class="btn btn-primary btn-blocked"><i  class="fas fa-paper-plane"></i> Process Generate Algoritma </a>
              </div>
          </div>
        </div>
      </div>
  </main>
  <!--   Core JS Files   -->
<?php echo view('_partials/script');  ?>
</body>

</html>
