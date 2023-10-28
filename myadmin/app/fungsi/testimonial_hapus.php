<?php
$file_img='../img/dummies/'.$_GET['img'];
if (!unlink($file_img)) {
  # Gagal
}else{
  $qku = "DELETE FROM testimonials where id_t = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Testimonial Berhasil Dihapus !");
      document.location = 'index2.php?page=testimonial'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Testimonial Gagal Dihapus !");
      document.location = 'index2.php?page=testimonial';
    </script>
<?php } }
 ?>
