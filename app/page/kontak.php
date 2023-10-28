<?php 

if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Tolong Masukan Email yang Benar.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'kamasejahtera@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan Web CV. KS dari '.$name;
            $htmlContent = '<h2>Pesan Dari Pengunjung Web CV. KS</h2>
                <h4>Nama </h4><p>'.$name.'</p>
                <h4>Email </h4><p>'.$email.'</p>
                <h4>Subject </h4><p>'.$subject.'</p>
                <h4>Isi Pesan </h4><p>'.$message.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                ?>
                <script type="text/javascript">
                  document.getElementById('sendmessage').style.display='Block';
                </script>
                <?php
            }else{
                ?>
                <script type="text/javascript">
                  document.getElementById('errormessage').style.display='Block';
                </script>
                <?php
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}
?>
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Hubungi Kami</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="?"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Kontak</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div id="google-map">
      <!----ganti Lokasi---->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6007355254565!2d106.76082821431395!3d-6.316062295428972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef332a5c2f89%3A0x1169005507833e8a!2sCV.+KAMA+SEJAHTERA!5e0!3m2!1sid!2sid!4v1528859312142" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="container">
        <div class="row">
          <div class="span12" style="margin-bottom: 10px;">
          <div id="kontak" style="background-color: #ff3333; color:#fff; padding: 20px;border-radius:5px;">
            <span onclick="document.getElementById('kontak').style.display='none';document.getElementById('btn-kontak').style.display='block'" class="close-btn">&times;</span>
            <h4 style="color:#fff;margin-bottom: 0;">Alamat Kami :</h4>
            <p>Tarumanegara No. 19 RT/RW 001/010 Pisangan, Ciputat Timur, Tangerang Selatan, Banten 15419</p>
            <h4 style="color:#fff;margin-bottom: 0;">Telphone Kami :</h4>
            <p>(021) 2274 - 1323 | <a href="https://api.whatsapp.com/send?phone=6282111629116" style="color:#fff"  target="blank">082111629116</a> ( WA )</p>
          </div>
          
          <a class="btn btn-large btn-theme btn-rounded" id="btn-kontak" style="display: none;" onclick="document.getElementById('kontak').style.display='block';document.getElementById('btn-kontak').style.display='none'">Alamat Kami</a>
          </div>
          <div class="span12" id="kirim-pesan">
            <h4>Ada Pertanyaan ? <strong>Hubungi Kami !</strong></h4>

            <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Berhasil Mengirim Pesan !</div>
              <div id="errormessage"><font color="red">Pesan Tidak Bisa dikirim</font></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Harap masukkan setidaknya 4 karakter" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email / No. HP" data-rule="email" data-msg="Tolong masukkan email yang benar" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Harap masukkan setidaknya 8 karakter untuk subjek" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Isi Pesan"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" name="submit" type="submit">Kirim Pesan</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <script src="maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> 
    <script>
    function myMap() {
      var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.12),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
      }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
    </script>