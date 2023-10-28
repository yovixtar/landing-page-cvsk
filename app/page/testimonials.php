<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Testimonial</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="?"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="?page=tentangkami">Tentang Kami</a><i class="icon-angle-right"></i></li>
              <li class="active">Testimonials</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row marginbot30">
          <div class="span12">
            <h4 class="heading"><strong>Klien</strong> Testimonial<span></span></h4>
            <div class="row">
            <?php
            $stat_testimonial=mysqli_query($l,"SELECT * FROM testimonials") OR DIE(mysqli_error($l));
            while ($data_testimonials=mysqli_fetch_array($stat_testimonial)) {
            ?>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> <?php echo $data_testimonials['isi_t'] ?>
                    </p>
                    <div class="author">
                      <img src="img/dummies/<?php echo $data_testimonials['foto_t'] ?>" style="width: 50px;height: 50px" class="img-circle bordered" alt="" />
                      <p class="name">
                        <?php echo $data_testimonials['nama_t'] ?>
                      </p>
                      <span class="info">Dari, <font color="#ff3333"><?php echo $data_testimonials['asal_t'] ?></font> </span>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>