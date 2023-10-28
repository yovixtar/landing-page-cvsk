<?php
  $qku = "DELETE FROM pengalaman_kerja where grup_pk = ".$_GET['grup']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Pengalaman Berhasil Dihapus !");
      document.location = 'index2.php?page=pengalamankerja'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Pengalaman Gagal Dihapus !");
      document.location = 'index2.php?page=pengalamankerja';
    </script>
<?php } ?>