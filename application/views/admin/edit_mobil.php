<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Edit Mobil</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote-bs3.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/jasny/jasny-bootstrap.min.css')?>" rel="stylesheet">

    <style type="text/css">
        .note-editor{
            border: 1px solid #e5e6e7;
            min-height: 200px;
        }
    </style>

</head>

<body class="skin-1">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/avatar.png')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_transaksi')?>"><i class="fa fa-list-alt"></i> <span class="nav-label">Daftar Transaksi</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_pelanggan')?>"><i class="fa fa-users"></i> <span class="nav-label">Daftar Pelanggan</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('daftar_mobil')?>"><i class="fa fa-car"></i> <span class="nav-label">Daftar Mobil</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_kritik_saran')?>"><i class="fa fa-pencil-square"></i> <span class="nav-label">Kritik/Saran</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_faq')?>"><i class="fa fa-question-circle"></i> <span class="nav-label">FAQ</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out"></i> <span class="nav-label">Log out</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('username') ?></span>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout')?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Form Edit Mobil</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if($mobil != NULL) foreach ($mobil as $m) { ?>
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('daftar_mobil/edit_mobil_form'); ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_mobil" value="<?php echo $m['id_mobil']; ?>">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Pilih Jenis Mobil :</label>
                                            <div class="col-lg-9">
                                                <select name="id_jenis_mobil" class="form-control">
                                                <?php if($daftar_jenis_mobil != NULL) foreach($daftar_jenis_mobil as $djm) { ?>
                                                    <option value="<?php echo $djm['id_jenis_mobil'] ?>" <?php echo $m['id_jenis_mobil'] == $djm['id_jenis_mobil'] ? 'selected' : ''; ?>><?php echo $djm['nama_jenis'] ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Plat Nomor :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="plat_nomor" placeholder="Plat Nomor" class="form-control" value="<?php echo $m['plat_nomor']; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Merk :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="merk" placeholder="Merk Mobil" class="form-control" value="<?php echo $m['merk']; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Warna :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="warna" placeholder="Warna Mobil" class="form-control" value="<?php echo $m['warna']; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Tahun Pembuatan :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tahun_pembuatan" placeholder="Tahun Pembuatan" class="form-control" value="<?php echo $m['tahun_pembuatan']; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-lg-2 control-label">Foto :</label>
                                        <div class="col-lg-9">
                                            <div class="fileinput fileinput-new col-sm-9" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                  <img src="<?php echo base_url('assets/img/uploads/'.$m['foto_mobil'])?>" alt="Image 1">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                </div>
                                                <div>
                                                  <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Foto</span>
                                                    <span class="fileinput-exists">Ganti</span>
                                                    <input type="hidden" value="<?php echo $m['foto_mobil'] ?>" name="foto_mobil">
                                                    <input type="hidden" value="<?php echo $m['thumbnail_mobil'] ?>" name="thumbnail_mobil">
                                                    <input type="file" name="foto_mobil_baru" accept="image/*">
                                                  </span>
                                                  <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-4">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="footer">
            <div class="pull-right">
                <strong>{elapsed_time} seconds</strong>
            </div>
            <div>
                <strong>Copyright</strong> PT. Transportasi &copy; 2017
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jasny/jasny-bootstrap.min.js')?>" rel="stylesheet"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>

    <!-- SUMMERNOTE -->
    <script src="<?php echo base_url('assets/js/plugins/summernote/summernote.min.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ]
            });
        });

    </script>
</body>
</html>
