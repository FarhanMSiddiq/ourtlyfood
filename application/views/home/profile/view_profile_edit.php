
<main class="main-wrapper">
  

  <!-- ...:::Start User Event Section:::... -->
  <div class="header-section">
      <div class="container">
          <!-- Start User Event Area -->
          <div class="header-area">
              <div class="header-top-area header-top-area--style-1">
                  <ul class="event-list">
                  <li class="list-item"><a href="<?=base_url('members/dashboard')?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                      <li class="list-item">
                          <h2 class="title text-center">Ubah Profile</h2>
                      </li>
                      <li class="list-item">
                          
                      </li>
                  </ul>
              </div>
          </div>
          <!-- End User Event Area -->
      </div>
  </div>
  <!-- ...:::End User Event Section:::... -->

  <!-- ...:::Start Contact Section:::... -->
  <div class="contact-section section-gap-top-30">
            <div class="container">

                <!-- Start User Event Area -->
                <div class="login-wrapper">

                <form action="<?= base_url('members/edit_profile') ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" placeholder="Email" type='email' name='c' value='<?= $row['email']; ?>' required readonly>  
                  <input type="hidden" name='aa' type='text' value='<?= $row['username'] ?>' required readonly placeholder="Username">        
                    <ul class="default-form-list">
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Nama Lengkap :</h4>
                            </li>
                            <li class="single-form-item">
                                <input type="text" name='b' value='<?= $row['nama_lengkap']; ?>' required placeholder="Masukkan Nama Lengkap">
                                <span class="icon"><i class="icon icon-carce-profile"></i></span>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Tanggal Lahir :</h4>
                            </li>
                            <li class="single-form-item">
                                <input type='date' name='e' value='<?= $row['tgl_lahir']; ?>' required placeholder="Masukkan Nama Lengkap">
                                <span class="icon"><i class="fa fa-calendar"></i></span>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Jenis Kelamin :</h4>
                            </li>
                            <li style="margin-bottom:20px;margin-left:5px;">
                            <?php
                            if ($row['jenis_kelamin'] == 'Laki-laki') { ?>

                              <div class="form-check-inline single-ship">
                                <input class="mr-2" type='radio' value='Laki-laki' name='d' checked> Laki-laki &nbsp;&nbsp;&nbsp;
                                <input class="mr-2 ml-5" type='radio' value='Perempuan' name='d'> Perempuan
                              </div>

                            <?php } else { ?>

                              <div class="form-check-inline single-ship">
                                <input type='radio' value='Laki-laki' name='d'> &nbsp; Laki-laki &nbsp;&nbsp;&nbsp;
                                <input class="ml-3" type='radio' value='Perempuan' name='d' checked> &nbsp; Perempuan
                              </div>

                            <?php }
                            ?>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>No. Telp :</h4>
                            </li>
                            <li class="single-form-item">
                                <input type="text" name='l' min="0" minlength="10" value='<?= $row['no_telp']; ?>' required placeholder="Masukkan No.Telp">
                                <span class="icon"><i class="icon icon-carce-phone"></i></span>
                            </li>

                        </ul>
                        <button type="submit" name="submit" style="margin-top:20px;margin-bottom:20px;background-color: #337784;border: none;color: white;border-radius:20px;width:100%;padding: 15px 32px;">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- ...:::End Contact Section:::... -->

</main>