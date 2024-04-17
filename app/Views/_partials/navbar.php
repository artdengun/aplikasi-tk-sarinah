<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0"> TK Sarinah</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user cursor-pointer"></i> <em></em> | 
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('nama_user'); ?> <?php if (session()->get('level') == 1) {
                                                                                                                        echo '';
                                                                                                                    } elseif (session()->get('level') == 2) {
                                                                                                                        echo '';
                                                                                                                    } else {
                                                                                                                        echo 'Guest';
                                                                                                                    } ?></span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <a class="btn btn-primary" href="<?php echo base_url('logout'); ?>">Logout</a>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>