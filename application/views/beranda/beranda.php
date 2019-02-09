<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRM | Beranda</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

    <style type="text/css">
        .widget a:hover {color: black; background: grey; }
    </style>

</head>
<body id="page-top" class="landing-page">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: white">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('beranda'); ?>">CRM</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top" style="color: #676a6c">Beranda</a></li>
                        <li><a class="page-scroll" href="#profil" style="color: #676a6c">Profil</a></li>
                        <li><a class="page-scroll" href="#visimisi" style="color: #676a6c">Visi Misi</a></li>
                        <li><a class="page-scroll" href="#kontak" style="color: #676a6c">Kontak</a></li>
                        <li><a class="page-scroll" href="<?php echo site_url('login'); ?>" style="color: #676a6c"><i class="fa fa-sign-in"></i>Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol> -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption" style="color: white;">
                    <br><br>
                    <h1 style="color: white"><center>Selamat Datang</center></h1>
                    <p style="font-size: 28px">Di PT. Transportasi</p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>

        </div>
        <!--
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank" style="color: #676a6c">
                    <h1>We create meaningful <br/> interfaces that inspire.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            Set background for slide in css 
            <div class="header-back two"></div>
        </div>
        -->
    </div>
    <!--
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    -->
</div>


<section id="profil" class="container services" style="padding-top: 0px">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Profil PT. Transportasi<br/></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <br>
            <p style="font-size: 18px">PT. Transportasi merupakan perusahaan yang bergerak di bidang pembangunan, pengangkutan darat, perbengkelan, percetakan, perdagangan, perindustrian, pertambangan, pertanian dan jasa. Perusahaan ini berdomisili di Kota Palembang Provinsi Sumatera Selatan.</p> 
            <p style="font-size: 18px">Perusahaan ini didirikan oleh Ibu Elfi Rahmi dan Bapak Acep Haris Jauhari pada tahun 2009. Saat ini perusahaan ini fokus mengembangkan usaha pada bidang freight forwarder. Cakupan pelayanan jasa yang telah diberikan oleh PT. Transportasi tidak hanya skala Nasional tapi juga telah melayani perusahaan-perusahaan skala Internasional.</p>
        </div>
    </div>
</section>

<section id="visimisi" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Visi Misi Perusahaan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <br>
                <h1>Visi</h1>
                <p style="font-size: 18px; color: #676a6c">“Menjadi perusahaan pilihan utama pelanggan dengan kualitas pelayanan terbaik”</p> 
                <br>
                <h1>Misi</h1>
                <ol style="font-size: 18px">
                    <li>Memberikan pelayanan yang efektif dan efisien</li>
                    <li>Menjaga dan meningkatkan loyalitas pelanggan </li>
                    <li>Memperluas jejaring usaha dan relasi</li>
                    <li>Membangun karakter tenaga kerja yang profesional</li>
                </ol>
            </div>
        </div>
    </div>

</section>

<section id="kontak" class="container services" style="padding-top: 0px">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Kontak<br/></h1><br>
        </div>
    </div>
    <div class="row">
        <div class="row m-b-lg">
            <div class="col-lg-12" style="text-align: center;">
                <address>
                    <strong><span class="navy">PT. Transportasi</span></strong><br/>
                    Jalan Purwasari Raya, Lorong Purwasari 4, <br>
                    RT 52 RW 10 Kelurahan Bukit Sangkal, <br>
                    Kecamatan Kalidoni, Palembang<br><br>
                    Telepon : (0711) 82459<br>
                    E-mail : wsbjpt@gmail.com
                </address>
            </div>
        </div>
    </div>
</section>

<section id="" class="gray-section" style="margin-top: 0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <strong>Copyright PT. Transportasi <small>© 2018</small></strong>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/plugins/wow/wow.min.js')?>"></script>

<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
