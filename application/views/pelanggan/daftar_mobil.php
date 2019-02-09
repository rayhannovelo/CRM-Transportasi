<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Transportasi | Daftar Mobil</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet"><link rel='stylesheet prefetch' href='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe.css'>
    <link rel='stylesheet prefetch' href='<?php echo base_url(); ?>assets/js/plugins/photoswipe/default-skin/default-skin.css'>

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
                <li class="active">
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
                            <h5>Daftar Transaksi</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
	                            <div class="col-lg-12">
	                                <div class="table-responsive">
					                    <table class="table table-striped table-bordered table-hover dataTables-example">
					                    <thead>
                                            <tr>
                                                <th>Foto</th>
                                                <th>Merk</th>
                                                <th>Jenis Mobil</th>
                                                <th width="150px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($daftar_mobil != NULL) foreach ($daftar_mobil as $dm) { ?>
                                            <tr>
                                                <td>
                                                    <div class="testis" itemscope itemtype="http://schema.org/ImageGallery">
                                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                        <?php $arr = getimagesize(base_url('assets/img/uploads/'.$dm['foto_mobil'])); ?>
                                                            <a href="<?php echo base_url('assets/img/uploads/'.$dm['foto_mobil']); ?>" itemprop="contentUrl" data-size="<?php echo $arr[0]."x".$arr[1]?>">
                                                                <div class="thumbnail">
                                                                    <img style = "max-height:180px" src="<?php echo base_url('assets/img/uploads/'.$dm['thumbnail_mobil']); ?>" itemprop="thumbnail" alt="<?php echo $dm['nama_jenis']; ?>" />
                                                                </div>
                                                            </a>
                                                            <figcaption itemprop="caption description">
                                                                <center><?php echo $dm['nama_jenis']; ?></center>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </td>
                                                <td><?php echo $dm['merk']; ?></td>
                                                <td><?php echo $dm['nama_jenis']; ?></td>
                                                <td>
						                        	<button class="btn btn-primary dim" onclick="location.href='<?php echo site_url('transaksi/tambah_transaksi_2/'.$dm['id_jenis_mobil'])?>'" type="button"><i class="fa fa-plus"></i> Pesan</button>
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

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe. 
                 It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. 
                    PhotoSwipe keeps only 3 of them in the DOM to save memory.
                    Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader->active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
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

    <!-- Core Photo Swipe JS file -->
    <script src='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe-ui-default.min.js'></script> 
    <script src="<?php echo base_url(); ?>assets/js/plugins/photoswipe/index.js"></script>

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
