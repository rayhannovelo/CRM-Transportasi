<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Detail Transaksi</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
</head>

<body class="skin-1">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/profile_small.jpg')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama_pelanggan') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li>
                    <a href="<?php echo site_url('profil')?>"><i class="fa fa-user"></i> <span class="nav-label">Profil</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('transaksi')?>"><i class="fa fa-list-alt"></i> <span class="nav-label">Transaksi</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_mobil')?>"><i class="fa fa-car"></i> <span class="nav-label">Daftar Mobil</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('kritik_saran')?>"><i class="fa fa-pencil-square"></i> <span class="nav-label">Kritik/Saran</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('faq')?>"><i class="fa fa-question-circle"></i> <span class="nav-label">FAQ</span></a>
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
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('nama_pelanggan') ?></span>
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
                            <h5>Detail Transaksi</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if($transaksi != NULL) foreach($transaksi as $t) { ?>
                                    <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Pilih Jenis Mobil :</label>
                                        <div class="col-lg-9">
                                            <p class="form-control-static"><?php echo $t['nama_jenis'] ?></p>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Lokasi Tujuan :</label>
                                        <div class="col-lg-9">
                                            <p class="form-control-static"><?php echo $t['lokasi_tujuan']; ?></p>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Tanggal Kirim :</label>
                                        <div class="col-lg-9">
                                            <p class="form-control-static"><?php echo $t['tanggal_pengiriman']; ?></p>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Deskripsi :</label>
                                        <div class="col-lg-9 form-control-static">
                                            <?php echo $t['deskripsi']; ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Daftar Barang :</label>
                                        <div class="col-lg-9">
                                            <table id="myTable" class="table table-striped table-bordered table-hover" >
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Kode Barang</th>
                                                    <th style="text-align: center;">Keterangan</th>
                                                    <th style="text-align: center;">Kuantitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($daftar_barang != NULL) foreach($daftar_barang as $db) { ?>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="nama_barang[]" placeholder="Nama Barang" class="form-control" value="<?php echo $db['nama_barang']; ?>" disabled>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="keterangan[]" placeholder="Keterangan Barang" class="form-control" value="<?php echo $db['keterangan']; ?>" disabled>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="kuantitas[]" placeholder="Kuantitas" class="form-control" value="<?php echo $db['kuantitas']; ?>" disabled>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Plat Nomor :</label>
                                        <div class="col-lg-9">
                                            <p class="form-control-static"><?php echo $t['id_mobil'] == NULL ? '<span class="badge badge-warning">On Process</span>' : $t['plat_nomor']; ?></p>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Biaya Pengiriman :</label>
                                        <div class="col-lg-9">
                                            <p class="form-control-static"><?php echo $t['id_mobil'] == NULL ? '<span class="badge badge-warning">On Process</span>' : $t['biaya']; ?></p>
                                        </div>
                                    </div>
                                <div>
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

            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: 'yyyy-mm-dd'
            });

            var barang = 1;
            $(document).on("click",'button#tambah_barang',function(){
                barang += 1;
                $('#myTable').append(
                    '<tr id="barang'+barang+'">'+
                        '<td>'+
                            '<input type="text" name="nama_barang[]" placeholder="Nama Barang" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="keterangan[]" placeholder="Keterangan Barang" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="number" name="kuantitas[]" placeholder="Kuantitas" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<center><button type="button" id="'+barang+'" class="btn btn-s btn-danger btn_remove"><i class="fa fa-trash"></i></button></center>'+
                        '</td>'+
                    '</tr>'
                );
            });

            $(document).on('click', '.btn_remove', function(){  
                var button_id = $(this).attr("id");   
                $('#barang'+button_id+'').remove();  
            });
        });

    </script>
</body>
</html>
