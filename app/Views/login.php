<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <meta name="author" content="">

    <title>Tk Sarinah - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('tk_sarinah.jpeg '); ?>" type="image/x-icon">

    <!-- Custom styles for this template-->
    <link href="pmb/login/index.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">
        <div class="logo">
            <img src="tk_sarinah.jpeg" alt="">
        </div>
        <div class="text-center mt-12 name">
            Login ...
        </div> <br>
        <div class="card">
        <?php if (!empty(session()->getFlashdata('sukses'))) { ?><div class="alert alert-success"><?php echo session()->getFlashdata('sukses'); ?></div><?php } ?>
        <?php if (!empty(session()->getFlashdata('haruslogin'))) { ?><div class="alert alert-info"><?php echo session()->getFlashdata('haruslogin'); ?></div><?php } ?>
        <?php if (!empty(session()->getFlashdata('gagal'))) { ?><div class="alert alert-warning"><?php echo session()->getFlashdata('gagal'); ?></div><?php } ?>
        <?php echo form_open('authentication'); ?>
        </div><br>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <input type="password" name="password" id="password" placeholder="Password">
            </div><br>
            <button  type="submit" class="btn mt-3">Login</button>
        </form>
        <?php echo form_close(); ?>

    </div>
</body>

</html>