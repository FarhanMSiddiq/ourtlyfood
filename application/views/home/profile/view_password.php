
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
                          <h2 class="title text-center">Ganti Password</h2>
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

                <form action="<?= base_url('members/password') ?>" method="post" enctype="multipart/form-data">   
                    <ul class="default-form-list">
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Password Baru :</h4>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;color:red;">
                            <?= form_error('pass1', '<small class="text-danger ml-1">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <input class='form-control' type='password' name='pass1' placeholder="Masukkan Password Baru">
                                <span class="icon"><i class="fa fa-lock"></i></span>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Konfirmasi Password Baru :</h4>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;color:red;">
                            <?= form_error('pass2', '<small class="text-danger ml-1">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                            <input class='form-control' type='password' name='pass2'  placeholder="Masukkan Konfirmasi Password Baru">
                                <span class="icon"><i class="fa fa-lock"></i></span>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Password Saat Ini :</h4>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;color:red;">
                            <?= form_error('pass', '<small class="text-danger ml-1">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                            <input class='form-control' type='password' name='pass'  placeholder="Masukkan Password Saat Ini">
                                <span class="icon"><i class="fa fa-lock"></i></span>
                            </li>
                           

                        </ul>
                        <button type="submit" name="submit" style="margin-top:20px;margin-bottom:20px;background-color: #337784;border: none;color: white;border-radius:20px;width:100%;padding: 15px 32px;">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- ...:::End Contact Section:::... -->

</main>