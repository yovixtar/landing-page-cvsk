    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span8">
            <div class="inner-heading">
              <h2>PERDAGANGAN BESAR ALAT TULIS DAN HASIL PENCETAKAN DAN PENERBITAN</h2>
            </div>
          </div>
          <div class="span1 antara-inhd"></div>
          <div class="span3">
            <ul class="breadcrumb">
              <li><a href="?"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="?page=produkkami">Produk Kami</a><i class="icon-angle-right"></i></li>
              <li class="active">Perdagangan Alat Tulis & PP</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
        <div class="span12">
            <h4 style="text-align: center">Perdagangan Besar Alat Tulis dan Hasil Pencetakan dan Penerbitan</h4>
            <p style="text-align: justify;">
              <?php
              $stat_isi=mysqli_query($l,"SELECT * FROM perdagangan_at_pp") OR DIE(mysqli_error($l));
              $data_isi=mysqli_fetch_array($stat_isi);
              echo $data_isi['isi_at_pp'];
              ?>
            </p>
        </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="cta" style="margin-bottom: 10px;">
              <a class="btn btn-large btn-theme btn-rounded" href="?page=jasa-reparasi-ac">JASA REPARASI ALAT-ALAT ELEKTRONIK KONSUMEN (AC)</a>
            </div>
            <div class="cta" style="margin-bottom: 10px;">
              <a class="btn btn-large btn-theme btn-rounded" href="?page=perdagangan-bp-bangunan">PERDAGANGAN BESAR BAHAN DAN PERLENGKAPAN BANGUNAN</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    