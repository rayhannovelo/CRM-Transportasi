<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Daftar Transaksi</title>

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
	            <div class="col-lg-3" style="margin: 0px 10px; text-transform: none;">
	                <button class="btn btn-primary btn-rounded btn-block dim" style="text-transform: none;" type="button" onclick="location.href='<?php echo site_url('transaksi/tambah_transaksi')?>'"><i class="fa fa-plus"></i> Tambah Transaksi</button>
	            </div>
                <div class="col-lg-8">
                    <?php echo $this->session->flashdata('hasil'); ?>
                </div>
	        </div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Daftar Transaksi</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
	                            <div class="col-lg-12">
	                                <div class="table-responsive">
					                    <table class="table table-striped table-bordered table-hover dataTables-example">
					                    <thead>
						                    <tr>
						                        <th>ID Transaksi</th>
                                                <th>Jenis Mobil</th>
						                        <th>Plat Nomor</th>
						                        <th>Lokasi Tujuan</th>
                                                <th>Deskripsi</th>
						                        <th>Tanggal Pengiriman</th>
                                                <th>Tanggal Konfirmasi</th>
                                                <th>Biaya</th>
						                        <th>Status</th>
						                        <th width="150px">Aksi</th>
						                    </tr>
					                    </thead>
					                    <tbody>
					                    	<?php if($daftar_transaksi != NULL) foreach ($daftar_transaksi as $dt) { ?>
						                    <tr>
						                        <td><?php echo $dt['id_transaksi'] ?></td>
                                                <td><?php echo $dt['nama_jenis'] ?></td>
						                        <td><?php echo $dt['id_mobil'] == NULL ? '<span class="badge badge-warning">On Process</span>' : $dt['plat_nomor']; ?></td>
                                                <td><?php echo $dt['lokasi_tujuan'] ?></td>
						                        <td><?php echo $dt['deskripsi'] ?></td>
						                        <td><?php echo $dt['tanggal_pengiriman'] ?></td>
                                                <td><?php echo $dt['tanggal_konfirmasi'] ?></td>
                                                <td><?php echo $dt['id_mobil'] == NULL ? '<span class="badge badge-warning">On Process</span>' : $dt['biaya']; ?></td>
						                        <td>
						                        	<center>
						                            <?php 
                                                        if($dt['status'] == 0){
                                                            echo '<button class="btn btn-warning btn-circle" type="button">X</button>';
                                                        }elseif($dt['status'] == 1){
                                                            echo '<button class="btn btn-info btn-circle" type="button"><i class="fa fa-bus"></i></button>';
                                                        }else{
                                                            echo '<button class="btn btn-primary btn-circle" type="button"><i class="fa fa-check"></i></button>';
                                                        }
                                                    ?>
						                            </center>
						                        </td>
						                        <td>
                                                    <div class="btn-group">
						                        	<button class="btn btn-success dim" onclick="location.href='<?php echo site_url('transaksi/detail_transaksi/'.$dt['id_transaksi'].'/'.$dt['id_jenis_mobil'])?>'" type="button"><i class="fa fa-eye"></i></button>
                            						<button class="btn btn-info dim" onclick="location.href='<?php echo site_url('transaksi/edit_transaksi/'.$dt['id_transaksi'])?>'" type="button" <?php if($dt['status'] == 1) echo 'disabled' ?>><i class="fa fa-paste"></i> </button>
                            						<button class="btn btn-danger dim" onclick="if (confirm('Data transaksi akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('transaksi/hapus_transaksi/'.$dt['id_transaksi'])?>'" type="button" <?php if($dt['status'] == 1) echo 'disabled' ?>><i class="fa fa-trash"></i> </button>
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
