<?php
    if (isset($_POST['save'])) {
        $query = "INSERT INTO slider SET judul_sl='".$_POST['judul']."',caption_sl='".$_POST['caption']."',alt_sl='".$_POST['alt']."' ";
        $stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
        
        if ($stat) {
        $stat2 = mysqli_query($l , "SELECT * FROM slider where judul_sl ='".$_POST['judul']."' ");
        $data2=mysqli_fetch_array($stat2);
        
          $ekstensi_diperbolehkan = array('png','jpg','PNG','JPG');
          $nama = $_FILES['foto']['name'];
          $x = explode('.', $nama);
          $ekstensi = strtolower(end($x));
          $ukuran = $_FILES['foto']['size'];
          $file_tmp = $_FILES['foto']['tmp_name'];  

          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10044070){      
              move_uploaded_file($file_tmp, '../img/slides/nivo/'.$nama);
              $query2 = "UPDATE slider set nama_img_sl = '".$nama."' where judul_sl ='".$_POST['judul']."'";
              $stat2=mysqli_query($l, $query2) OR DIE(mysqli_error($l));
              if($stat2){
               ?>
               <?php
              }else{
                ?>
                <script type="text/javascript">alert('Gagal Upload Foto !')</script>
                <?php
              }
            }else{
              ?>
              <script type="text/javascript">alert('Ukuran Foto Terlalu Besar !')</script>
            <?php
            }
          }else{
            ?>
            <script type="text/javascript">alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN')</script>
            <?php ;
            
          };
            ?>
        <script type="text/javascript">
            alert("Data Berhasil di Tambahkan");
            document.location = 'index2.php?page=slider'
        </script>
<?php
        } else {
?>
        <script type="text/javascript">
            alert("Gagal Menambah data ....");
            document.location = 'index2.php?page=tambahslider'
        </script>
<?php
        }
    }

?>
<h1>Tambah Slider</h1>

<form method="POST" action="" enctype="multipart/form-data">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>
                    <input style="width: 100%" type="text" name="judul" class="input-data" value=" <strong></strong> " /><br />
                    <label style="font-size:20px"><b>Judul Foto <font size="3" color="red">*pastikan berbeda judulnya</font> </b></label><br /><br />

                    <input style="width: 100%" name="alt" type="text"  class="input-data"/><br />
                    <label style="font-size:20px"><b>Alt Foto Slide</b></label><br /><br />
                    
                    <textarea style="width: 100%; resize: none;" id="edittext" name="caption" class="input-data" rows="8"></textarea> <br />
                    <label style="font-size:20px"><b>Caption Foto Slide</b></label><br /><br />
                    
                    <input type="file" name="foto" class="input-data" style="width: 100%" title="*Nama Foto tanpa spasi !"><br />
                    <label style="font-size:20px"><b>Foto</b></label>
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Slider" />
</form>