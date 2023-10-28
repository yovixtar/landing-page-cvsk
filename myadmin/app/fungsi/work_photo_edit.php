<?php
$stat_wp=mysqli_query($l,"SELECT * FROM work_photo where id_wp=".$_GET['idx']." ");
$data_wp=mysqli_fetch_array($stat_wp);

    if (isset($_POST['save'])) {
        $query = "UPDATE work_photo SET title_wp='".$_POST['title']."',sejarah_wp='".$_POST['sejarah']."',caption_wp='".$_POST['caption']."',depan_wp=".$_POST['depan']." WHERE id_wp=".$_GET['idx']." ";
        $stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
        
        if ($stat) {
            ?>
        <script type="text/javascript">
            alert("Data Berhasil di Edit");
            document.location = 'index2.php?page=workphoto'
        </script>
<?php
        } else {
?>
        <script type="text/javascript">
            alert("Gagal Mengedit data ....");
            document.location = 'index2.php?page=editworkphoto&idx=<?php echo $_GET['idx']; ?>'
        </script>
<?php
        }
    }

?>
<h1>Edit Work Photo</h1>

<form method="POST" action="" enctype="multipart/form-data">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>
                    <input style="width: 100%" type="text" name="title" class="input-data" value="<?php echo $data_wp['title_wp'] ?>" /><br />
                    <label style="font-size:20px"><b>Judul / Title Work <font size="3" color="red">*pastikan berbeda judulnya</font> </b></label><br /><br />

                    <select name="sejarah" class="input-data-ket">
                        <option value="1" <?php if($data_wp['sejarah_wp']==1){echo "Selected";} ?>>Tidak</option>
                        <option value="2" <?php if($data_wp['sejarah_wp']==2){echo "Selected";} ?>>Ya</option>
                    </select>
                    <br />
                    <label style="font-size:20px"><b>Masukan ke Page Sejarah ?</b></label><br /><br />
                    
                    <select name="depan" class="input-data-ket">
                        <option value="1" <?php if($data_wp['depan_wp']==1){echo "Selected";} ?>>Ya</option>
                        <option value="2" <?php if($data_wp['depan_wp']==2){echo "Selected";} ?>>Tidak</option>
                    </select>
                    <br />
                    <label style="font-size:20px"><b>Masukan ke Halaman Depan ?</b></label><br /><br />
                    
                    <textarea style="width: 100%; resize: none;border:4px solid #1a75ff;" name="caption" class="input-data" rows="8"><?php echo $data_wp['caption_wp'] ?></textarea> <br />
                    <label style="font-size:20px"><b>Caption</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Edit Work Photo" />
</form>