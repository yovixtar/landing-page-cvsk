    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span8">
            <div class="inner-heading">
              <h2>Visi dan Misi</h2>
            </div>
          </div>
          <div class="span4">
            <ul class="breadcrumb">
              <li><a href="?"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="?page=tentangkami">Tentang Kami</a><i class="icon-angle-right"></i></li>
              <li class="active">Visi Misi</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
        <div class="span12">
            <h4 style="text-align: center">Visi</h4>
            <p style="text-align: justify;">
              <?php
              $stat_visi=mysqli_query($l,"SELECT * FROM visi") OR DIE(mysqli_error($l));
              $data_visi=mysqli_fetch_array($stat_visi);
              echo $data_visi['isi_visi'];
              ?>
            </p>
            <hr />
            <h4 style="text-align: center">Misi</h4>
            <p style="text-align: justify;">
              <?php
              $stat_misi=mysqli_query($l,"SELECT * FROM misi") OR DIE(mysqli_error($l));
              $data_misi=mysqli_fetch_array($stat_misi);
              echo $data_misi['isi_misi'];
              ?>
            </p>
        </div>
        </div>
      </div>
    </section>
    
    