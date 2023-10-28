<h1>Daftar Testimonial</h1>
<a href="index2.php?page=tambahtestimonial" style="float:left; margin-left: 20px;">Tambah Testimonial</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama</font></th>
		<th align="center"> <font size="4">Foto</font></th>
		<th align="center"> <font size="4">Isi Testimonial</font></th>
		<th align="center"> <font size="4">Asal</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM testimonials";
		$no=1;
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no ?></td>
		<td><?php echo $d['nama_t'] ?></td>
		<td><?php echo $d['foto_t'] ?></td>
		<td><?php echo $d['isi_t'] ?></td>
		<td><?php echo $d['asal_t'] ?></td>
		<td>
			<a class="a-link" href="index2.php?page=edittestimonial&idx=<?php echo $d['id_t']?>" >Update / </a>
			<a class="a-link" href="index2.php?page=hapustestimonial&idx=<?php echo $d['id_t']?>&img=<?php echo $d['foto_t']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>