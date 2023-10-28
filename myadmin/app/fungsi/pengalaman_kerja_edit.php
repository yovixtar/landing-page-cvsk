<?php
	if (isset($_POST['save'])) {
		if (isset($_POST['nama1'])) {
			$query = "UPDATE pengalaman_kerja SET nama_pk = '".$_POST['nama1']."', color_pk ='".$_POST['color']."',grup_pk=".$_GET['grup']." WHERE id_pk=".$_POST['idx1']." ";
			$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
		}
		if (isset($_POST['nama2'])) {
			$query2 = "UPDATE pengalaman_kerja SET nama_pk = '".$_POST['nama2']."', color_pk ='".$_POST['color']."',grup_pk=".$_GET['grup']." WHERE id_pk=".$_POST['idx2']." ";
			$stat2 = mysqli_query($l , $query2) or die(mysqli_error($l));
		}
		 
		if ($stat | $stat2) {
			?>
		<script type="text/javascript">
			alert("Pengalaman Berhasil di Ubah");
			document.location = 'index2.php?page=pengalamankerja'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal Mengubah Pengalaman ....");
			document.location = 'index2.php?page=tambahpengalamankerja'
		</script>
<?php
		}
	}
?>
<h1>Edit Pengalaman</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td> 
                <?php
                $stat_value_nama=mysqli_query($l,"SELECT * FROM pengalaman_kerja WHERE grup_pk=".$_GET['grup']." ");
                $no=1;
                while ($data_value_nama=mysqli_fetch_array($stat_value_nama)) {
                ?>
                	<input style="width: 100%;display: none" name="idx<?php echo $no; ?>" class="input-data" value="<?php echo $data_value_nama['id_pk'] ?>" />
                    <input style="width: 100%" name="nama<?php echo $no; ?>" class="input-data" value="<?php echo $data_value_nama['nama_pk'] ?>" /><br />
                    <label style="font-size:20px"><b>Nama Perusahaan 1</b></label><br /><br />
                <?php $no++; } ?>
                <?php
                $stat_value_color=mysqli_query($l,"SELECT * FROM pengalaman_kerja WHERE grup_pk=".$_GET['grup']." GROUP BY grup_pk ");
                $data_value_color=mysqli_fetch_array($stat_value_color);
                ?>
                    <input style="width: 100%;height: 70px;padding: 0px" type="color" name="color" class="input-data" value="<?php echo $data_value_color['color_pk'] ?>" /><br />
                    <label style="font-size:20px"><b>Background Warna</b></label><br /><br />

                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Edit Pengalaman" />
</form>