<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Daftar Kritik Saran</title>

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
                    <div class="dropdown profile-element">
                    	<span><img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/avatar.png')?>" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username') ?></strong>
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
                    <a href="<?php echo site_url('daftar_transaksi')?>"><i class="fa fa-list-alt"></i> <span class="nav-label">Daftar Transaksi</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_pelanggan')?>"><i class="fa fa-users"></i> <span class="nav-label">Daftar Pelanggan</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_mobil')?>"><i class="fa fa-car"></i> <span class="nav-label">Daftar Mobil</span></a>
                </li>
                <li class="active">
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
                    <?php echo $this->session->flashdata('hasil'); ?>
                </div>
	        </div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Kritik Saran</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
	                            <div class="col-lg-12">
	                                <div class="table-responsive">
					                    <table class="table table-striped table-bordered table-hover dataTables-example">
					                    <thead>
						                    <tr>
						                        <th>ID Kritik Saran</th>
                                                <th>Judul</th>
						                        <th>Isi</th>
						                        <th>Waktu Kritik Saran</th>
						                        <th width="150px">Aksi</th>
						                    </tr>
					                    </thead>
					                    <tbody>
					                    	<?php if($daftar_kritik_saran != NULL) foreach ($daftar_kritik_saran as $dks) { ?>
						                    <tr>
						                        <td><?php echo $dks['id_kritik_saran']; ?></td>
                                                <td><?php echo $dks['judul']; ?></td>
						                        <td><?php echo $dks['isi']; ?></td>
                                                <td><?php echo $dks['waktu_kritik_saran']; ?></td>
						                        <td>
                                                    <div class="btn-group">
						                        	<button class="btn btn-primary dim" onclick="location.href='<?php echo site_url('daftar_kritik_saran/respon_kritik_saran/'.$dks['id_kritik_saran'])?>'" type="button"><i class="fa fa-wechat"></i></button>
                                                    <button class="btn btn-danger dim" onclick="if (confirm('Data kritik saran akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('daftar_kritik_saran/hapus_kritik_saran/'.$dks['id_kritik_saran'])?>'" type="button"><i class="fa fa-trash"></i> </button>
                                                    </div>
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

	<!-- Custom and plugin javascript -->
	<script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>

	<!-- Page-Level Scripts -->
	<script>
	    $(document).ready(function(){
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
	    });
	</script>
</body>
</html>
