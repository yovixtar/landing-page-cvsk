    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span8">
            <div class="inner-heading">
              <h2>Kata Pengantar</h2>
            </div>
          </div>
          <div class="span4">
            <ul class="breadcrumb">
              <li><a href="?"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Tentang Kami</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
        <div class="span12">
            <h4 style="text-align: center">Kata Pengantar</h4>
            <p style="text-align: justify;">
              <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>
              Di tengah banyaknya pesaing dalam dunia usaha khususnya dalam bidang pemeliharaan AC 
              (Air Conditioner), kami <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font> yang bergerak di bidang Pengadaan Jasa 
              pemeliharaan AC mencoba tetap eksis dan bertahan untuk berkarya dalam pelayanan.
            </p>
            <p style="text-align: justify;">
              Dengan tujuan yang mulia serta idealisme yang tinggi, kami tetap konsisten dengan komitmen 
              awal pada saat mendirikan Perusahaan, Kami akan mencoba berkarya nyata dan memberikan
              serta menampung para ahli di berbagai bidang dalam mengerjakan proyek- proyek di lingkungan
              Pemerintah maupun Swasta yang akan diselesaikan dengan baik. Kepuasan Klien adalah tujuan 
              kami menjadi motto dalam pelaksanaan proyek – proyek nantinya.
            </p>
            <p style="text-align: justify;">
              Dalam memasuki era bebas, dimana tuntutan pemeliharaan peralatan semakin memerlukan 
              tenaga terampil dan cakap di bidangnya. Untuk itu dalam mengantisipasi hal ini  C.V. Kama 
              Sejahtera yang didukung oleh tenaga – tenaga muda professional yang mempunyai pengalaman 
              dan keahlian di bidang pemeliharaan AC dengan ditunjang peralatan yang memadai, berusaha 
              tampil bersama pelaku pemeliharaan peralatan lainnya untuk mengembangkan kemampuan dan 
              potensi yang dimilikinya demi terciptanya manajemen pemeliharaan yang maksimal.
              Berikut kami paparkan mengenai perusahaan kami dengan harapan dapat menjadi bahan 
              pertimbangan untuk menjalin kerjasama dengan kami.
            </p>
            <p style="text-align: justify;">
              <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>  saat ini mempunyai cukup banyak tenaga penunjang di luar tenaga ahli,
              yang terdiri dari tenaga administrasi, teknisi, dan pengawas pelaksanaan.
              Kami menyadari sebagai Perusahaan baru masih perlu banyak belajar, akan tetapi karena kami 
              didukung oleh personil-personil yang sebelumnya sudah banyak berkecimpung dibidang 
              pemeliharaan AC, maka kami berkeyakinan akan dapat memberikan hasil yang maksimal pada 
              setiap pekerjaan yang kami tangani.
            </p>
            <br />
            <br />
            <font>Hormat Kami,</font><br />
            <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>
            <br />
            <br />
            <br />
            <br />
            <font>Kamijo Agus Setiawan</font>
            <p>Direktur Utama</p>
            <br />
            <br />
            <br />
            <table class="table" style="">
              <thead>
                <tr>
                  <th style="text-align: center;background-color: #ff3333;color: #fff" colspan="2">
                    Pengalaman-Pengalaman Kerja
                  </th>
                </tr>
              </thead>
              <tbody style="overflow-y:auto; height: 170px;display: inline-block;width: 100%">
              <?php
              $stat_g_pk=mysqli_query($l,"SELECT * FROM pengalaman_kerja GROUP BY grup_pk");
              while ($data_g_pk=mysqli_fetch_array($stat_g_pk)) {
              ?>
                <tr style="background-color: <?php echo $data_g_pk['color_pk'] ?>;width: 100vw">
                <?php
                if (isset($data_g_pk['grup_pk'])) {
                  $stat_nama_pk=mysqli_query($l,"SELECT * FROm pengalaman_kerja WHERE grup_pk=".$data_g_pk['grup_pk']." ");
                  while ($data_nama_pk=mysqli_fetch_array($stat_nama_pk)) {
                ?>
                  <td style="width: 1000px">
                    <?php echo $data_nama_pk['nama_pk'] ?>
                  </td>
                <?php } } ?>
                </tr>
          <?php } ?>
              </tbody>
            </table>
        </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="cta floatright" style="margin-right: 10px;margin-bottom: 10px;">
                <a class="btn btn-large btn-theme btn-rounded" href="?page=testimonials">TESTIMONI </a>
            </div>
            <div class="cta floatright" style="margin-right: 10px;margin-bottom: 10px;">
              <a class="btn btn-large btn-theme btn-rounded" href="?page=visimisi">VISI & MISI</a>
            </div>
            <div class="cta floatright" style="margin-right: 10px;margin-bottom: 10px;">
              <a class="btn btn-large btn-theme btn-rounded" href="?page=sejarah">SEJARAH</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    