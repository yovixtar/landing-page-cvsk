<section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
        <?php
        if (1+1==2) {
          $stat_sl_1=mysqli_query($l,"SELECT * FROM slider") OR DIE(mysqli_error($l));
          while ($data_sl_1=mysqli_fetch_array($stat_sl_1)) {
        ?>
          <!-- Slide image -->
          <img src="img/slides/nivo/<?php echo $data_sl_1['nama_img_sl'] ?>" alt="<?php echo $data_sl_1['alt_sl'] ?>" title="#caption-<?php echo $data_sl_1['id_sl'] ?>" />
        <?php
         }
        }
        ?>
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
        <?php
        if (1+1==2) {
          $stat_sl_1=mysqli_query($l,"SELECT * FROM slider") OR DIE(mysqli_error($l));
          while ($data_sl_1=mysqli_fetch_array($stat_sl_1)) {
        ?>
          <!-- Slide caption -->
          <div class="nivo-caption" id="caption-<?php echo $data_sl_1['id_sl'] ?>">
            <div>
              <h2><?php echo $data_sl_1['judul_sl'] ?></h2>
              <p>
                <?php echo $data_sl_1['caption_sl'] ?>
              </p>
            </div>
          </div>
        <?php
         }
        }
        ?>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Kami Telah Melayani <span class="highlight"><strong>Lebih Dari 100 Klien</strong></span> Bulan Ini !</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="?page=kontak#kontak">HUBUNGI KAMI SEGERA !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
      <?php
      include 'app/include/produk.php';
      ?>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row" id="workphoto">
          <div class="span12">
            <h4 class="heading">Beberapa Foto <strong>Pekerjaan</strong> Kami</h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                
                  <?php
                  $rowperpage = 4;

                  // counting total number of posts
                  $allcount_query = "SELECT count(*) as allcount FROM work_photo WHERE depan_wp=1";
                  $allcount_result = mysqli_query($l,$allcount_query);
                  $allcount_fetch = mysqli_fetch_array($allcount_result);
                  $allcount = $allcount_fetch['allcount'];
                  
                  $stat_works=mysqli_query($l,"SELECT * FROM work_photo WHERE depan_wp=1 ORDER BY id_wp asc limit 0,$rowperpage");
                  while ($data_works=mysqli_fetch_array($stat_works)) {
                    ?>
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design post" id="wp-<?php echo $data_works['id_wp'] ?>" data-id="id-<?php echo $data_works['id_wp'] ?>" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $data_works['title_wp'] ?>" href="<?php echo $data_works['full_wp'] ?>">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?php echo $data_works['tmb_wp']; ?>" alt="<?php echo $data_works['caption_wp'] ?>">
                  </li>
                  <!-- End Item Project -->
                  <?php
                  }
                  ?>
                  <br />
                </ul>
                <div class="span12" style="text-align: center;">
                <center>
                <button class="load-more btn btn-large btn-theme btn-rounded">Tampilkan Lebih banyak</button>
                <input type="hidden" id="row" value="0">
                <input type="hidden" id="all" value="<?php echo $allcount; ?>">
                </center>
                </div>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->

      </div>
    </section>