<h1>Daftar Slider</h1>
<a href="index2.php?page=tambahslider" style="float:left; margin-left: 20px;">Tambah Slider</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Foto</font></th>
		<th align="center"> <font size="4">Judul Slide</font></th>
		<th align="center"> <font size="4">Caption Slide</font></th>
		<th align="center"> <font size="4">Alt Slide</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM slider";
		$no=1;
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no ?></td>
		<td><img src="<?php echo $base_url .'img/slides/nivo/'. $d['nama_img_sl'] ?>" style="width: 300px;"> </td>
		<td><?php echo $d['judul_sl'] ?></td>
		<td><?php echo $d['caption_sl'] ?></td>
		<td><?php echo $d['alt_sl'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=editslider&idx=<?php echo $d['id_sl']?>" >Update / </a>
			<a class="a-link" href="index2.php?page=hapusslider&idx=<?php echo $d['id_sl']?>&img=<?php echo $d['nama_img_sl']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>