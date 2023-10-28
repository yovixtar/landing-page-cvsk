<?php
$file_img='../img/slides/nivo/'.$_GET['img'];
if (!unlink($file_img)) {
  # Gagal
}else{
  $qku = "DELETE FROM slider where id_sl = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Slider Berhasil Dihapus !");
      document.location = 'index2.php?page=slider'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Slider Gagal Dihapus !");
      document.location = 'index2.php?page=slider';
    </script>
<?php } }
 ?>
