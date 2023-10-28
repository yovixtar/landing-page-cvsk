<?php
    if (isset($_POST['save'])) {
        $query = "INSERT INTO testimonials SET nama_t='".$_POST['nama']."',isi_t='".$_POST['isi']."',asal_t='".$_POST['asal']."' ";
        $stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
        
        if ($stat) {
        $stat2 = mysqli_query($l , "SELECT * FROM testimonials where nama_t ='".$_POST['nama']."' ");
        $data2=mysqli_fetch_array($stat2);
        
          $ekstensi_diperbolehkan = array('png','jpg','PNG','JPG');
          $nama = $_FILES['foto']['name'];
          $x = explode('.', $nama);
          $ekstensi = strtolower(end($x));
          $ukuran = $_FILES['foto']['size'];
          $file_tmp = $_FILES['foto']['tmp_name'];  

          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10044070){      
              move_uploaded_file($file_tmp, '../img/dummies/'.$nama);
              $query2 = "UPDATE testimonials set foto_t = '".$nama."' where nama_t ='".$_POST['nama']."'";
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
            document.location = 'index2.php?page=testimonial'
        </script>
<?php
        } else {
?>
        <script type="text/javascript">
            alert("Gagal Menambah data ....");
            document.location = 'index2.php?page=tambahtestimonial'
        </script>
<?php
        }
    }

?>
<h1>Tambah Testimonial</h1>

<form method="POST" action="" enctype="multipart/form-data">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td>
                    <input style="width: 100%" type="text" name="nama" class="input-data" /><br />
                    <label style="font-size:20px"><b>Nama</b></label><br /><br />
                    
                    <input type="file" name="foto" class="input-data" style="width: 100%" title="*Nama Foto tanpa spasi !"><br />
                    <label style="font-size:20px"><b>Foto <font size="3" color="red">*Foto .jpg / .JPG</font></b></label><br /><br />

                    <input style="width: 100%" name="asal" type="text"  class="input-data"/><br />
                    <label style="font-size:20px"><b>Asal</b></label><br /><br />
                    
                    <textarea style="width: 100%; resize: none;border:4px solid #1a75ff;" name="isi" class="input-data" rows="8"></textarea> <br />
                    <label style="font-size:20px"><b>Isi Testimonial</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Testimonial" />
</form>