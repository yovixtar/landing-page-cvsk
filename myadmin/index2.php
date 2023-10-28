<?php
session_start();
	include "base/koneksi.php";
	$base_url="http://cvks.star/";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page | C. V. Kama Sejahtera</title>
	<link rel="stylesheet" type="text/css" href="assets/my.css">
	<link rel="stylesheet" type="text/css" href="assets/w3.css">
	<link rel="Shortcut Icon" href="../ico/favicon.png" type="image/x-icon" />
	
	<script src='assets/jquery.min.js'></script>
	<script src='assets/tinymce/tinymce.min.js'></script>
	<script src='assets/tinymce/init-tinymce.js'></script>
  	<style type="text/css">
  		.name-admin {
  			float: right;
  			margin-right: 20px;
  			border-bottom: 2px solid #3385ff;
  		}
  		.gotoweb{
  			color: #ff3333;
  		}
  		.gotoweb:hover{
  			color:#3399ff;
  		}
  	</style>
</head>
<body>
<div class="name-admin">
	<?php
	if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
		?>
		<script type="text/javascript">
			alert('Anda Harus Login dahulu, sebelum Masuk :)');
			document.location ='index.php';
		</script>
	<?php
	}else {
		?>
		<p>Login Sebagai : <?php echo $_SESSION['admin'] ?></p>
	<?php
	}
	?>
</div><br /><br />
<center>
	<h1>Admin Page | C. V. Kama Sejahtera</h1>
	<span style="font-size:20px;cursor:pointer"><a href="<?php echo $base_url ?>" target="blank" class="gotoweb">Go To Web &#187;</a></span>
	<br />
	<br />
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
	
	
<div id="myNav" class="overlay" style="overflow-y: auto">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index2.php?">Home</a>
    <a href="index2.php?page=jasa-reparasi-ac">Jasa Reparasi Alat-Alat Elektronik Konsumen (AC)</a>
    <a href="index2.php?page=perdagangan-bp-bangunan">Perdagangan Besar Bahan dan Peralatan Bangunan</a>
    <a href="index2.php?page=perdagangan-alattulis-pencetakan-penerbitan">Perdagangan Besar Alat Tulis dan Hasil Pencetakan dan Penerbitan</a>
    <a href="index2.php?page=pengalamankerja">Pengalaman Kerja</a>
    <a href="index2.php?page=workphoto">Work Photos</a>
    <a href="index2.php?page=visi">Visi</a>
    <a href="index2.php?page=misi">Misi</a>
    <a href="index2.php?page=testimonial">Testimonials</a>
    <a href="index2.php?page=slider">Slider</a>
    <a href="index2.php?page=admin">AdminName</a>
    <a href="index2.php?page=logout">Logout</a>
  </div>
</div>
	
	<br />
	<br />
	<div width="90%">
		<?php
				$s = isset($_GET['page']) ? $_GET['page'] : null;
				
					switch ($s) {
						//produk kami
						case 'jasa-reparasi-ac':
							include 'app/page/jasa_reparasi_ac.php';
							break;
						case 'perdagangan-bp-bangunan':
							include 'app/page/perdagangan_bp_bangunan.php';
							break;
						case 'perdagangan-alattulis-pencetakan-penerbitan':
							include 'app/page/perdagangan_alattulis_pencetakan_penerbitan.php';
							break;
							
						//Pengalaman Kerja
						case 'pengalamankerja':
							include 'app/page/pengalaman_kerja.php';
							break;
							//tambah
							case 'tambahpengalamankerja':
								include 'app/fungsi/pengalaman_kerja_tambah.php';
								break;
							//edit
							case 'editpengalamankerja':
								include 'app/fungsi/pengalaman_kerja_edit.php';
								break;
							//Hapus
							case 'hapuspengalamankerja':
								include 'app/fungsi/pengalaman_kerja_hapus.php';
								break;
						//Slider
						case 'slider':
							include 'app/page/slider.php';
							break;
							//tambah
							case 'tambahslider':
								include 'app/fungsi/tambah_slider.php';
								break;
							//edit
							case 'editslider':
								include 'app/fungsi/slider_edit.php';
								break;
							//hapus
							case 'hapusslider':
								include 'app/fungsi/slider_hapus.php';
								break;
								
						//Work Photos
						case 'workphoto':
							include 'app/page/work_photo.php';
							break;
							//tambah
							case 'tambahworkphoto':
								include 'app/fungsi/work_photo_tambah.php';
								break;
							//edit
							case 'editworkphoto':
								include 'app/fungsi/work_photo_edit.php';
								break;
							//hapus
							case 'hapusworkphoto':
								include 'app/fungsi/work_photo_hapus.php';
								break;
								
						//Visi Misi
						case 'visi':
							include 'app/page/visi.php';
							break;
						case 'misi':
							include 'app/page/misi.php';
							break;
							
						//Testimonials
						case 'testimonial':
							include 'app/page/testimonial.php';
							break;
							//tambah
							case 'tambahtestimonial':
								include 'app/fungsi/testimonial_tambah.php';
								break;
							//edit
							case 'edittestimonial':
								include 'app/fungsi/testimonial_edit.php';
								break;
							//hapus
							case 'hapustestimonial':
								include 'app/fungsi/testimonial_hapus.php';
								break;
						
						//Selesai
							case 'logout':
								include "app/fungsi/logout.php";
								break;

						//Admin
						case 'admin':
							include "app/page/admin.php";
							break;
							//tambah
							case 'tambahadmin':
								include "app/fungsi/admin_tambah.php";
								break;
							//hapus
							case 'hapusadmin':
								include "app/fungsi/admin_hapus.php";
								break;
								
						default:
							include "home.php";
							break;
						}
			?>
	</div>
</center>
<br /><br />
<script type="text/javascript" src="assets/dg.js"></script>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
</body>
</html>