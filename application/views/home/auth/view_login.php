
<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="javascript:window.history.go(-1);" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h2 class="title text-center">Login</h2></li>
                    <li class="list-item"></li>
                </ul>
            </div>
        </div>
        <!-- End User Event Area -->
    </div>
</div>
<!-- ...:::End User Event Section:::... -->

<!-- ...:::Start Login Section:::... -->
<div class="login-section">
            <div class="container">
                <!-- Start User Event Area -->
                <div class="login-wrapper">
                    <div class="section-content">
                        <h1 class="title">Selamat Datang</h1>
                        <p>Masuk Dengan Akun Untuk Melakukan Transaksi.</p>
                    </div>
                    <div align="center" style="margin-top:20px;margin-bottom:20px;"><img src="<?=base_url('assets/template_mobile/images/login.svg')?>" width="200"></div>
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('login') ?>" method="post">
                        <ul class="default-form-list">
                            <li class="single-form-item">
                            <?= form_error('user_email', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">Email</label>
                                <input type="text" name="user_email" class="form-control" value="<?= set_value('user_email'); ?>" placeholder="Masukkan Email">
                                <span class="icon"><i class="icon icon-carce-user"></i></span>
                            </li>
                            <li><?= form_error('password', '<small style="color:red;">', '</small>'); ?></li>
                            <li class="single-form-item">
                                <label for="password" class="visually-hidden">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                <span class="icon"><i class="icon icon-carce-eye"></i></span>
                            </li>
                        </ul>
                
                    <a href="<?= base_url('auth/lupa_password') ?>" class="forgot-link">Forgot Password?</a>

                    <button type="submit" style="background-color: #337784;border: none;color: white;border-radius:20px;width:100%;padding: 15px 32px;"z>LogIn</button>

                    </form>
                </div>

                <div class="create-account-text text-center">Belum punya akun? <a href="<?= base_url('register') ?>" class="btn--color-radical-red">Daftar akun baru</a></div>
               
            </div>
        </div>
        <!-- ...:::End User Event Section:::... -->