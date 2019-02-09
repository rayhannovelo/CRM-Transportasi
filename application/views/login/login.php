<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Login</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown" style="margin-top: 50px; width: 350px">
        <p style="font-size: 40px">Log In</p>
        <div class="ibox-content">
            <?php
                if($this->session->flashdata('sukses')) {
                  echo $this->session->flashdata('sukses');
                }
            ?>
            <form class="m-t" role="form" action="<?php echo site_url('login')?>" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <select name="level" class="form-control">
                        <option value="2">Pelanggan</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Log In</button>
                <button type="button" class="btn btn-info block full-width m-b" data-toggle="modal" data-target="#register">Register</button>
            </form>
            <div class="modal inmodal fade" id="register" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Register Pelanggan</h4>
                        </div>
                        <div class="modal-body">
                            <form class="m-t" role="form" action="<?php echo site_url('login/register')?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Perusahaan" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fax" class="form-control" placeholder="FAX" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
                                </div>
                                <button type="submit" class="btn btn-primary block full-width m-b">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <a href="<?php echo site_url('beranda'); ?>">Copyright PT. Transportasi <small>© 2017</small></a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>

</html>
