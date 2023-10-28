<?php
include 'base/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>C. V. Kama Sejahtera | Reparasi AC | Perdagangan Bahan dan Peralatan Bangunan | Perdagangan Alat Tulis dan Hasil Percetakan dan Penerbitan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Jasa Service AC berpengalaman, terjamin, dan terpercaya. Tukang servis, pengecekan, perbaikan, pemasangan, isi freon, dan jasa cuci AC panggilan di Tangerang Selatan. Pesan sekarang, bisa langsung datang!" />
  <meta name="keywords" content="kama sejahtera, cv kama sejahtera, servis ac, tukang ac, reparasi ac, jasa reparasi ac, cleaning ac, jasa cuci ac, cuci ac, jasa cleaning ac, jasa service ac, bahan bangunan, bahan dan peralatan bangunan, pencetakan, alat tulis, penerbitan">
  <meta name="author" content="C. V. Kama Sejahtera" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/custom.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
  <script src="js/loadmore/jquery.min.js" type="text/javascript"></script>
  <script src="loadmore.js"></script> 
  
  <style type="text/css">
    /* Load more */
.load-more{
margin:10px auto;
}

.load-more:hover{
    cursor: pointer;
}
  </style>
</head>

<body>    
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>“Pelayanan Prima Untuk Anda”</strong></li>
              <li>Main office: Tarumanegara No. 19 RT/RW 001/010 Pisangan, Ciputat Tim. , Tangsel, Banten 15419</li>
              <br />
              <li>Call us <i class="icon-phone"></i> (021) 2274 - 1323 | <a href="https://api.whatsapp.com/send?phone=6282111629116"  target="blank">082111629116</a> ( WA )</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <br />
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
            <br />
              <a href="?"><img src="img/logo.png" alt="" class="logo" /></a>
              <h1>AIR CONDITIONER, GENERAL KONTRAKTOR, EVENT ORGANIZER</h1>
            </div>
          </div>
          <div class="span8" style="margin-top: 20px;">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown <?php if(!isset($_GET['page'])){echo "active";} ?>">
                      <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown <?php if($_GET['page'] == 'produkkami'){echo "active";}elseif(($_GET['page'] == 'jasa-reparasi-ac')){echo "active";}elseif(($_GET['page'] == 'perdagangan-bp-bangunan')){echo "active";}elseif(($_GET['page'] == 'perdagangan-alattulis-pencetakan-penerbitan')){echo "active";} else{} ?>">
                      <a href="?page=produkkami">Produk Kami <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="?page=jasa-reparasi-ac">JASA REPARASI ALAT-ALAT ELEKTRONIK KONSUMEN (AC)</a></li>
                        <li><a href="?page=perdagangan-bp-bangunan">PERDAGANGAN BESAR BAHAN DAN PERLENGKAPAN BANGUNAN</a></li>
                        <li><a href="?page=perdagangan-alattulis-pencetakan-penerbitan">PERDAGANGAN BESAR ALAT TULIS DAN HASIL PENCETAKAN DAN PENERBITAN</a></li>
                        <!--
                        <li class="dropdown"><a href="#">Dropdown <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                          </ul>
                        </li>
                        -->
                      </ul>
                    </li>
                    <li class="dropdown <?php if($_GET['page'] == 'tentangkami'){echo "active";}elseif(($_GET['page'] == 'sejarah')){echo "active";}else{} ?>">
                      <a href="?page=tentangkami">Tentang Kami <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="?page=sejarah">Sejarah</a></li>
                        <li><a href="?page=visimisi">Visi dan Misi</a></li>
                        <li><a href="?page=testimonials">Testimonials</a></li>
                      </ul>
                    </li>
                    <li class="<?php if($_GET['page'] == 'kontak'){echo "active";}else{} ?>">
                      <a href="?page=kontak">Hubungi Kami</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    
    <?php
    $sw=isset($_GET['page']) ? $_GET['page'] : null;
    switch ($sw) {
      case 'produkkami':
      	include 'app/page/produkkami.php';
      	break;
      	  case 'jasa-reparasi-ac':
      	  	include 'app/page/jasa_reparasi_ac.php';
      	  	break;
      	  case 'perdagangan-bp-bangunan':
      	  	include 'app/page/perdagangan_bp_bangunan.php';
      	  	break;
      	  case 'perdagangan-alattulis-pencetakan-penerbitan':
      	  	include 'app/page/perdagangan_alattulis_pencetakan_penerbitan.php';
      	  	break;
      case 'tentangkami':
        include 'app/page/tentangkami.php';
        break;
	      case 'sejarah':
	      	include 'app/page/sejarah.php';
	      	break;
        case 'visimisi':
          include 'app/page/visimisi.php';
          break;
        case 'testimonials':
          include 'app/page/testimonials.php';
          break;
      case 'kontak':
        include 'app/page/kontak.php';
        break;
      
      case '404':
        include 'app/page/404.php';
        break;
      
      default:
        include 'app/page/default.php';
        break;
    }
    ?>
    
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">C. V. Kama Sejahtera</h5>
              <ul class="link-list">
                <li><a href="?page=tentangkami">Tentang Kami</a></li>
                <li><a href="?page=produkkami">Produk Kami</a></li>
              </ul>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Bantuan</h5>
              <ul class="link-list">
                <li><a href="?page=kontak#kirim-pesan">Kirim Pesan</a></li>
              </ul>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Hubungi Kami</h5>
              <address>
								<strong>C.V. Kama Sejahtera </strong><br>
								 Tarumanegara No. 19 RT/RW 001/010 Pisangan, Ciputat TImur<br>
								 Tangerang Selatan, Banten 15419
					 		</address>
              <p>
                <i class="icon-phone"></i> (021) 2274 - 1323 | <a  target="blank" href="https://api.whatsapp.com/send?phone=6282111629116" target="_blank">082111629116</a> ( WA )<br>
                <i class="icon-envelope-alt"></i><a href="?page=kontak#kirim-pesan">kamasejahtera@gmail.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; C. V. Kama Sejahtera - All right reserved.</span>
                </p>
                <div class="credits">
                  Designed by Flattern - Khazim STAR
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
