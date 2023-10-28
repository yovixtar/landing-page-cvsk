<h1>Daftar Work Photo</h1>
<a href="index2.php?page=tambahworkphoto" style="float:left; margin-left: 20px;">Tambah Work Photo</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Foto</font></th>
		<th align="center"> <font size="4">Judul</font></th>
		<th align="center"> <font size="4">Caption</font></th>
		<th align="center"> <font size="4">Sejarah ?</font></th>
		<th align="center"> <font size="4">Hal. Depan ?</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM work_photo";
		$no=1;
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no ?></td>
		<td><img src="<?php echo $base_url . $d['full_wp'] ?>" style="width: 300px;"> </td>
		<td><?php echo $d['title_wp'] ?></td>
		<td><?php echo $d['caption_wp'] ?></td>
		<td><?php if($d['sejarah_wp'] == 1){echo "Tidak";}else{echo "Ya";} ?></td>
		<td><?php if($d['depan_wp'] == 1){echo "Ya";}else{echo "Tidak";} ?></td>

		<td>
			<a class="a-link" href="index2.php?page=editworkphoto&idx=<?php echo $d['id_wp']?>" >Update / </a>
			<a class="a-link" href="index2.php?page=hapusworkphoto&idx=<?php echo $d['id_wp']?>&full=<?php echo $d['l_full_wp']?>&tmb=<?php echo $d['l_tmb_wp']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>