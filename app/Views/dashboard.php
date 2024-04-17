<?php echo view('_partials/head'); ?>

<body class="g-sidenav-show  bg-gray-100">
<?php echo view('_partials/sidenav'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php echo view('_partials/navbar'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100 text-justify">
                    <p class="mb-1 pt-2 text-bold">TK SARINAH </p>
                    <h5 class="font-weight-bolder">SIAP  (Sholeh, Intelek, Amanah, dan Percaya diri) </h5>
                    <p class="mb-5"> Play Group Sarinah yang resmi dibuka pada tanggal 27 Juli 1987 menawarkan program yang menarik untuk menambah wawasan pengetahuan, menambah kosa kata (melatih komunikasi), melatih konsentrasi dan motorik serta membimbing anak untuk bersosialisasi dengan teman sebaya dan orang dewasa. Program-program tersebut akan disampaikan dengan multi metode dan dikemas dalam nuansa nasionalisme religius.</b></p>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-lg h-100">
                    <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="tk_sarinah.jpeg" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('tk.jpeg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Pengenalan Sekolah TK Sarinah</h5>
                <p class="text-white">Kegiatan pengenalan TK Sarinah pada calon siswa/i dan menanamkan semangat SIAP (Sholeh, Intelek, Amanah, dan Percaya diri) </p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
<?php echo view('_partials/script');  ?>
</body>

</html>