<?php
if (isset($_POST['save'])) {
	$stat_in=mysqli_query($l,"INSERT INTO work_photo SET title_wp='".$_POST['title']."',caption_wp='".$_POST['caption']."',sejarah_wp=".$_POST['sejarah'].",depan_wp=".$_POST['depan']." ");
	if ($stat_in) {
$fol_pre="../";
$fol_next="img/works/";
$folder = $fol_pre.$fol_next;
$upload_image = $_FILES['foto']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 570;
 
// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
$filedb = $fol_next . $upload_image;
move_uploaded_file($_FILES['foto']['tmp_name'], $filesave);
 
// menentukan nama image setelah dibuat
$re_com="tmb_" . uniqid(rand()) . ".jpg";
$resize_image = $folder . $re_com;
$resize_db = $fol_next . $re_com;
 
// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);
 
// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;
 
// menentukan width yang baru
$newwidth = $width / $k;
 
// menentukan height yang baru
$newheight = $height / $k;
 
// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);
 
// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
 
// menyimpan image yang baru
imagejpeg($thumb, $resize_image);
 
imagedestroy($thumb);
imagedestroy($source);

$stat_work=mysqli_query($l,"UPDATE work_photo SET l_full_wp='".$filesave."',full_wp='".$filedb."',l_tmb_wp='".$resize_image."',tmb_wp='".$resize_db."' WHERE title_wp='".$_POST['title']."' ");
if ($stat_work) {
	?>
<script type="text/javascript">
	alert('Berhasil Menambahkan Foto !');document.location='index2.php?page=workphoto'
</script>
	<?php
}else{
	?>
<script type="text/javascript">
	alert('Gagal Menambahkan Foto !');document.location='index2.php?page=tambahworkphoto'
</script>
	<?php
	}
}
}
?>

<h1>Tambah Work Photo</h1>

<form method="POST" action="" enctype="multipart/form-data">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>
                    <input style="width: 100%" type="text" name="title" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Judul / Title Work <font size="3" color="red">*pastikan berbeda judulnya</font> </b></label><br /><br />

					<select name="sejarah" class="input-data-ket">
						<option value="1">Tidak</option>
						<option value="2">Ya</option>
					</select>
                    <br />
                    <label style="font-size:20px"><b>Masukan ke Page Sejarah ?</b></label><br /><br />
                    
                    <select name="depan" class="input-data-ket">
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                    <br />
                    <label style="font-size:20px"><b>Masukan ke Halaman Depan ?</b></label><br /><br />
                    
                    <textarea style="width: 100%; resize: none;border:4px solid #1a75ff;" name="caption" class="input-data" rows="8"></textarea> <br />
                    <label style="font-size:20px"><b>Caption</b></label><br /><br />
                    
                    <input type="file" name="foto" class="input-data" style="width: 100%" title="*Nama Foto tanpa spasi !"><br />
                    <label style="font-size:20px"><b>Foto <font size="3" color="red">*Harus .jpg/.JPG</font></b></label>
                </td>
              </tr>
            </tbody>
</table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Work Photo" />
</form>