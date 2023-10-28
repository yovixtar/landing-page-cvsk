<?php
$stat_sl=mysqli_query($l,"SELECT * FROM slider where id_sl=".$_GET['idx']." ");
$data_sl=mysqli_fetch_array($stat_sl);

    if (isset($_POST['save'])) {
        $query = "UPDATE slider SET judul_sl='".$_POST['judul']."',caption_sl='".$_POST['caption']."',alt_sl='".$_POST['alt']."' WHERE id_sl=".$_GET['idx']." ";
        $stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
        
        if ($stat) {
            ?>
        <script type="text/javascript">
            alert("Data Berhasil di Edit");
            document.location = 'index2.php?page=slider'
        </script>
<?php
        } else {
?>
        <script type="text/javascript">
            alert("Gagal Mengedit data ....");
            document.location = 'index2.php?page=editslider&idx=<?php echo $_GET['idx']; ?>'
        </script>
<?php
        }
    }

?>
<h1>Edit Slider</h1>

<form method="POST" action="" enctype="multipart/form-data">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>
                    <input style="width: 100%" type="text" name="judul" class="input-data" value="<?php echo $data_sl['judul_sl'] ?>" /><br />
                    <label style="font-size:20px"><b>Judul Foto <font size="3" color="red">*pastikan berbeda judulnya</font> </b></label><br /><br />

                    <input style="width: 100%" name="alt" type="text"  class="input-data" value="<?php echo $data_sl['alt_sl'] ?>" /><br />
                    <label style="font-size:20px"><b>Alt Foto Slide</b></label><br /><br />
                    
                    <textarea style="width: 100%; resize: none;" id="edittext" name="caption" class="input-data" rows="8"><?php echo $data_sl['caption_sl'] ?></textarea> <br />
                    <label style="font-size:20px"><b>Caption Foto Slide</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Edit Slider" />
</form>