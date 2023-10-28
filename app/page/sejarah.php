    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span8">
            <div class="inner-heading">
              <h2>Sejarah C. V. Kama Sejahtera</h2>
            </div>
          </div>
          <div class="span4">
            <ul class="breadcrumb">
              <li><a href="?"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="?page=tentangkami">Tentang Kami</a><i class="icon-angle-right"></i></li>
              <li class="active">Sejarah</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h4>Sejarah <strong>C. V. Kama Sejahtera</strong></h4>
            <p style="text-align: justify;">
              Langkah <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>, diawali dari Tahun 2015 sebagai sebuah perusahaan yang
              sebelumnya telah lama berkecimpung di dunia AC dengan nama Indo Sarana. Indo Sarana inilah
              yang menjadi cikal bakal terbentuknya <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>. Pada Bulan Februari 2015 
              tepatnya pada tanggal 3 (berdasarkan Akta Pendirian Perseroan Komanditer no. 01, 03 Februari
              2015) Kamijo Agus Setiawan yang saat ini selaku DIrektur Utama <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>
              melakukan peresmian berdirinya perusahaan <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font>. Bidang yang yamg
              digeluti <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font> selain di bidang AC adalah:
            </p>
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 30%;text-align: center;background-color: #ff3333;color: #fff">
                    Kegiatan Usaha
                  </th>
                  <th style="text-align: center;background-color: #ff3333;color: #fff">
                    Barang/Jasa Dagangan Utama
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="success">
                  <td>
                    9521
                  </td>
                  <td>
                    JASA REPARASI ALAT-ALAT ELEKTRONIK KONSUMEN (AC)
                  </td>
                </tr>
                <tr class="error">
                  <td>
                    4663
                  </td>
                  <td>
                    PERDAGANGAN BESAR BAHAN DAN PERLENGKAPAN BANGUNAN
                  </td>
                </tr>
                <tr class="warning">
                  <td>
                    4642
                  </td>
                  <td>
                    PERDAGANGAN BESAR ALAT TULIS DAN HASIL PENCETAKAN DAN PENERBITAN
                  </td>
                </tr>
              </tbody>
            </table>
            <br />
            <p style="text-align: justify;">
              <font color="#5C9CC7" face="colonna mt" size="5">C.V. Kama Sejahtera</font> pada tahun 2015-2018 mulai mengokohkan diri menjadi perusahaan
              yang lebih maju. Tujuannya agar tercapai perbaikan rasio keuangan, kinerja jasa, pertumbuhan 
              usaha, dan tingkat kesehatan perusahaan. Perusahaan difokuskan pada peningkatan kinerja 
              dengan menciptakan daya saing, pengembangan usaha baru, dan menjadi pilar bisnis di 
              masa depan.
            </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
              <?php
              $stat_s=mysqli_query($l,"SELECT * FROM work_photo WHERE sejarah_wp=2 ");
              while ($data_s=mysqli_fetch_array($stat_s)) {
              ?>
                <li>
                  <img src="<?php echo $data_s['full_wp'] ?>" alt="" />
                </li>
              <?php } ?>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
    </div>
    </section>