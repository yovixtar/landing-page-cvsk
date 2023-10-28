<?php
if (isset($_POST['save'])) {
	$ubah_isi=mysqli_query($l,"UPDATE perdagangan_at_pp SET isi_at_pp='".$_POST['isi']."' WHERE id_at_pp=1 ");
	if ($ubah_isi) {
			?>
			<script type="text/javascript">alert('Isi Berhasil Diubah !')
			document.location = "index2.php?page=perdagangan-alattulis-pencetakan-penerbitan"
			</script>
		<?php
		}	
}
?>
<h2>Ubah Isi Halaman Perdagangan Besar Alat Tulis dan Hasil Pencetakan dan Penerbitan</h2>
<br />
<form action="" method="POST">
	<div style="width: 90%">
	<input class="input-data" style="width: 100%" value='<font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>' readonly><br />
	<label>Copy Untuk menghasilkan " <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font> "</label>
	<br />
	<br />
	<?php
	$stat_isi=mysqli_query($l,"SELECT * FROM perdagangan_at_pp") OR DIE(mysqli_error($l));
	$data_isi=mysqli_fetch_array($stat_isi);
	?>
    <textarea style="width: 100%; resize: none;" id="edittext" name="isi" class="input-data" rows="30">
    	<?php
    	echo $data_isi['isi_at_pp'];
    	?>
    </textarea> <br />
	
<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Ubah Isi Halaman" />
	</div>
</form>
