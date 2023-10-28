<?php
$file_img=$_GET['full'];
if (!unlink($file_img)) {
  # Gagal
}else{
  $qku = "DELETE FROM work_photo where id_wp = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
  unlink($_GET['tmb']);
    
    ?>
    <script type="text/javascript">
      alert("Foto Berhasil Dihapus !");
      document.location = 'index2.php?page=workphoto'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Foto Gagal Dihapus !");
      document.location = 'index2.php?page=workphoto';
    </script>
<?php } }
 ?>
