<h1>Daftar Slider</h1>
<a href="index2.php?page=tambahpengalamankerja" style="float:left; margin-left: 20px;">Tambah Pengalaman Kerja</a><br /><br />
<div style="overflow-x: auto;">
<table class="table tb-pa w3-table w3-striped" style="">
        <thead>
          <tr>
            <th style="text-align: center;background-color: #ff3333;color: #fff" colspan="2">
              Pengalaman-Pengalaman Kerja
            </th>
            <th style="text-align: center;background-color: #009;color: #fff">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $stat_g_pk=mysqli_query($l,"SELECT * FROM pengalaman_kerja GROUP BY grup_pk");
        while ($data_g_pk=mysqli_fetch_array($stat_g_pk)) {
        ?>
          <tr style="background-color: <?php echo $data_g_pk['color_pk'] ?>">
          <?php
          if (isset($data_g_pk['grup_pk'])) {
            $stat_nama_pk=mysqli_query($l,"SELECT * FROm pengalaman_kerja WHERE grup_pk=".$data_g_pk['grup_pk']." ");
            while ($data_nama_pk=mysqli_fetch_array($stat_nama_pk)) {
          ?>
            <td style="">
              <?php echo $data_nama_pk['nama_pk'] ?>
            </td>
          <?php } } ?>
            <td>
			<a class="a-link" href="index2.php?page=editpengalamankerja&grup=<?php echo $data_g_pk['grup_pk']?>" >Update / </a>
			<a class="a-link" href="index2.php?page=hapuspengalamankerja&grup=<?php echo $data_g_pk['grup_pk']?>" >Hapus</a>
			</td>
          </tr>
          <?php } ?>
        </tbody>
         </table>
</div>