<?php
$stat_t=mysqli_query($l,"SELECT * FROM testimonials where id_t=".$_GET['idx']." ");
$data_t=mysqli_fetch_array($stat_t);

    if (isset($_POST['save'])) {
        $query = "UPDATE testimonials SET nama_t='".$_POST['nama']."',isi_t='".$_POST['isi']."',asal_t='".$_POST['asal']."' where id_t=".$_GET['idx']." ";
        $stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
        
        if ($stat) {
            ?>
        <script type="text/javascript">
            alert("Data Berhasil di Edit");
            document.location = 'index2.php?page=testimonial'
        </script>
<?php
        } else {
?>
        <script type="text/javascript">
            alert("Gagal Mengedit data ....");
            document.location = 'index2.php?page=edittestimonial&idx=<?php echo $_GET['idx']; ?>'
        </script>
<?php
        }
    }

?>
<h1>Edit Testimonial</h1>

<form method="POST" action="" enctype="multipart/form-data">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>
                    <input value="<?php echo $data_t['nama_t']; ?>" style="width: 100%" type="text" name="nama" class="input-data" /><br />
                    <label style="font-size:20px"><b>Nama</b></label><br /><br />
                    
                    <input value="<?php echo $data_t['asal_t']; ?>" style="width: 100%" name="asal" type="text"  class="input-data"/><br />
                    <label style="font-size:20px"><b>Asal</b></label><br /><br />
                    
                    <textarea style="width: 100%; resize: none;border:4px solid #1a75ff;" name="isi" class="input-data" rows="8"><?php echo $data_t['isi_t']; ?></textarea> <br />
                    <label style="font-size:20px"><b>Isi Testimonial</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Edit Testimonial" />
</form>