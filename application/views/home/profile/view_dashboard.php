<?php
if (trim($record['foto']) == '') {
  $foto_user = 'default.jpg';
} else {
  $foto_user = $record['foto'];
}
?>

<main class="main-wrapper">
  

<!-- ...:::Start User Event Section:::... -->
<div class="header-section">
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                <li class="list-item"><a href="javascript:window.history.go(-1);" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item">
                        <h2 class="title text-center">Akun</h2>
                    </li>
                    <li class="list-item">
                        <ul class="list-child">
                            <li class="list-item">
                                <a href="<?=base_url('keranjang');?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i
                                class="icon icon-carce-cart"></i></a>
                            </li>
                        </ul>
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

                <div class="profile-card-section section-gap-top-25">
                    <div class="profile-card-wrapper">
                        <div class="image">
                            <img class="img-fluid" src="<?= base_url('assets/images/user/') . $foto_user ?>" >
                            <a class="upload-image-label" id="btnModal" >
                                <i class="icon icon-carce-camera"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h2 class="setting-name"><?= $record['nama_lengkap'] ?></h2>
                            <span class="setting-email email"><?= $record['email'] ?></span>
                            <span class="id-num"><?= $record['no_telp'] ?></span>
                        </div>
                        <div class="profile-shape profile-shape-1"><img class="img-fluid" src="<?=base_url();?>/assets/template_mobile/images/profile-shape-1.svg" alt="" width="61" height="50"></div>
                        <div class="profile-shape profile-shape-2"><img class="img-fluid" src="<?=base_url();?>/assets/template_mobile/images/profile-shape-2.svg" alt="" width="48" height="59"></div>
                    </div>
                </div>

               <h3 style="margin-top:20px;margin-bottom:10px;margin-left:10px;">Alamat</h3>
               <?php if ($rows['alamat'] == '') { ?>
                <p class="text-justify" style="width:100%;background-color:#C35A5D;color:#FFFFFF;padding:20px;border-radius:20px;">Anda belum mengubah alamat. Silahkan ubah alamat Anda.</p>
                <?php } else { ?>
                <p style="width:100%;background-color:#337784;color:#FFFFFF;padding:20px;border-radius:20px;">
                  <?= $rows['alamat'] ?> , Kec. <?= $rows['kecamatan'] ?><?= $rows['nama_kota'] ?>, <?= $rows['kode_pos'] ?>
                </p>
              <?php } ?>

              <hr style="margin-top:10px;">

              <div style="margin-top:20px;padding:20px;background-color:#FFFFFF;border-radius:20px;margin-bottom:100px;">
                <a href="<?= base_url('members/edit_profile') ?>" >
                  <div style="display: flex;justify-content: space-between;">
                      <p style="font-size:14px;">Ubah Profile</p>
                      <i class="icon icon-carce-ios-arrow-forward" style="color:#182748;"></i>
                  </div>
                  <hr style="margin-top:10px;margin-bottom:20px;color:#D9D9D9;">
                </a>
                <a href="<?= base_url('members/edit_alamat') ?>" >
                  <div style="display: flex;justify-content: space-between;">
                      <p style="font-size:14px;">Ubah Alamat</p>
                      <i class="icon icon-carce-ios-arrow-forward" style="color:#182748;"></i>
                  </div>
                  <hr style="margin-top:10px;margin-bottom:20px;color:#D9D9D9;">
                </a>
                <a href="<?= base_url('members/riwayat_belanja') ?>" >
                  <div style="display: flex;justify-content: space-between;">
                      <p style="font-size:14px;">Riwayat Transaksi</p>
                      <i class="icon icon-carce-ios-arrow-forward" style="color:#182748;"></i>
                  </div>
                  <hr style="margin-top:10px;margin-bottom:20px;color:#D9D9D9;">
                </a>

                <a href="<?= base_url('members/password') ?>" >
                  <div style="display: flex;justify-content: space-between;">
                      <p style="font-size:14px;">Ganti Password</p>
                      <i class="icon icon-carce-ios-arrow-forward" style="color:#182748;"></i>
                  </div>
                  <hr style="margin-top:10px;margin-bottom:20px;color:#D9D9D9;">
                </a>

                <a href="javascript:void(0)" onclick="logout()" >
                  <div style="display: flex;justify-content: space-between;">
                      <p style="font-size:14px;">Keluar</p>
                      <i class="icon icon-carce-ios-arrow-forward" style="color:#182748;"></i>
                  </div>
                  <hr style="margin-top:10px;color:#D9D9D9;">
                </a>
                
                
              </div>

            </div>
        </div>
        <!-- ...:::End Contact Section:::... -->


        <div class="short-section">
            <div class="container">
                <div class="short-wrapper">
                <?php
                $attributes = array('class' => 'form', 'role' => 'form');
                echo form_open_multipart('members/foto', $attributes); ?>
                    <span class="title">Ganti Foto Profile</span>

                    <ul class="short-select-list">
                        <li class="list-item">
                            <label for="sort-1">Pilih Foto</label>
                            <input style='text-transform:lowercase;' type="file" class="custom-file-input" name="userfile" required>
                        </li>
                    </ul>

                    <div class="short-btn-group">
                        <button class="btn btn-cancel">Batal</button>
                        <button type="submit" name='submit' class="btn btn-apply">Perbarui</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!-- ...:::Start User Event Section:::... -->
        <div class="user-event-section">
            <!-- Start User Event Area -->
            <div class="col pos-relative">

                <div class="user-event-area">
                    <div class="user-event user-event--left">
                        <a area-label="event link icon" href="<?=base_url();?>" class="event-btn-link"><img src="<?=base_url();?>/assets/template_mobile/images/icons/ic_home.svg"></a>
                        <a area-label="wishlist icon" href="<?=base_url('artikel');?>" class="event-btn-link"><img src="<?=base_url();?>/assets/template_mobile/images/icons/ic_news.svg"></a>
                    </div>
                    <div class="user-event user-event--center">
                        <a area-label="cart icon" href="<?=base_url('produk')?>" class="event-btn-link"><img src="<?=base_url();?>/assets/template_mobile/images/icons/ic_cart.svg"></a>
                    </div>
                    <div class="user-event user-event--right">
                        <a area-label="order icon" href="<?=base_url('keranjang');?>" class="event-btn-link"><img src="<?=base_url();?>/assets/template_mobile/images/icons/ic_pesanan.svg"></a>
                        <a area-label="chat icon" href="<?=base_url('members/dashboard');?>" class="event-btn-link"><img src="<?=base_url();?>/assets/template_mobile/images/icons/ic_akun.svg"></a>
                    </div>
                </div>
            </div>
            <!-- End User Event Area -->
        </div>
        <!-- ...:::End User Event Section:::... -->

</main>

<script>
        document.querySelector('.btn-cancel').addEventListener('click', function() {
            document.querySelector('.short-section').style.display = 'none'
        })
</script>