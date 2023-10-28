<?php
$stat_g=mysqli_query($l,"SELECT * FROM pengalaman_kerja ORDER BY id_pk DESC LIMIT 1");
$data_g=mysqli_fetch_array($stat_g);
$grup_terakhir=$data_g['grup_pk']+1;

	if (isset($_POST['save'])) {
		if (isset($_POST['nama1'])) {
			$query = "INSERT INTO pengalaman_kerja SET nama_pk = '".$_POST['nama1']."', color_pk ='".$_POST['color']."',grup_pk=".$grup_terakhir." ";
			$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
		}
		if (isset($_POST['nama2'])) {
			$query2 = "INSERT INTO pengalaman_kerja SET nama_pk = '".$_POST['nama2']."', color_pk ='".$_POST['color']."',grup_pk=".$grup_terakhir." ";
			$stat2 = mysqli_query($l , $query2) or die(mysqli_error($l));
		}
		 
		if ($stat | $stat2) {
			?>
		<script type="text/javascript">
			alert("Pengalaman Berhasil di Tambah");
			document.location = 'index2.php?page=pengalamankerja'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal menambah Pengalaman ....");
			document.location = 'index2.php?page=tambahpengalamankerja'
		</script>
<?php
		}
	}

?>
<h1>Tambah Pengalaman</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>               
                    <input style="width: 100%" name="nama1" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Nama Perusahaan 1</b></label><br /><br />
                    <input style="width: 100%" name="nama2" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Nama Perusahaan 2</b></label><br /><br />
                    
                    <input style="width: 100%;height: 70px;padding: 0px" type="color" name="color" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Background Warna</b></label><br /><br />

                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Pengalaman" />
</form>