<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Tambah Kritik Saran</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/summernote/summernote-bs3.css')?>" rel="stylesheet">

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
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="<?php echo base_url('assets/img/profile_small.jpg')?>"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama_pelanggan') ?></strong>
                             </span></span> </a>
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
                <li>
                    <a href="<?php echo site_url('transaksi')?>"><i class="fa fa-list-alt"></i> <span class="nav-label">Transaksi</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_mobil')?>"><i class="fa fa-car"></i> <span class="nav-label">Daftar Mobil</span></a>
                </li>
                <li class="active">
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
                            <h5>Form Kritik Saran</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
	                            <div class="col-lg-12">
	                                <form class="form-horizontal" role="form" action="<?php echo site_url('kritik_saran/tambah_kritik_saran_form')?>" method="post" onsubmit="return confirm('Data Kritik Saran akan dikirim. Apakah Anda yakin?');">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Judul :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="judul" placeholder="Judul Kritik Saran" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Isi :</label>
                                        <div class="col-lg-9">
                                            <textarea type="text" id="summernote" name="isi" class="form-control"></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-8 col-lg-4">
                                            <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                            <button class="btn btn-w-m btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </form>
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
