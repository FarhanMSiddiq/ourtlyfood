
<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="javascript:window.history.go(-1);" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h4 class="title text-center">Lupa Password</h4></li>
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
                        <h1 class="title">Apakah Anda Lupa Password?</h1>
                        <p>Silahkan masukkan email anda , setelah itu silahkan cek email anda.</p>
                    </div>
                    <div align="center" style="margin-top:20px;margin-bottom:20px;"><img src="<?=base_url('assets/template_mobile/images/forgot_password.svg')?>" width="200"></div>
                    <form action="<?= base_url('auth/lupa_password') ?>" method="post">
                    <?= $this->session->flashdata('message') ?>
                        <ul class="default-form-list">
                            <li class="single-form-item">
                            <?= form_error('user_email', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">Email</label>
                                <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Masukan email Anda">
                                <span class="icon"><i class="icon icon-carce-user"></i></span>
                            </li>
                        </ul>
                
                    <button type="submit" style="margin-top:40px;background-color: #337784;border: none;color: white;border-radius:20px;width:100%;padding: 15px 32px;"z>Kirim</button>

                    </form>
                </div>

                
            </div>
        </div>
        <!-- ...:::End User Event Section:::... -->