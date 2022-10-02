
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="javascript:window.history.go(-1);" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h2 class="title text-center">Register</h2></li>
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
                        <h1 class="title">Daftar Akun Baru</h1>
                        <p>Silahkan isi data dibawah ini dengan benar.</p>
                    </div>
                    <div align="center" style="margin-top:20px;margin-bottom:20px;"><img src="<?=base_url('assets/template_mobile/images/register.svg')?>" width="200"></div>
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('register') ?>" method="post">
                        <ul class="default-form-list">
                            <li class="single-form-item">
                            <?= form_error('email', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">Email</label>
                                <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Masukkan Email">
                                <span class="icon"><i class="icon icon-carce-mail"></i></span>
                            </li>
                            <li class="single-form-item">
                            <?= form_error('username', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">Username</label>
                                <input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>" placeholder="Masukkan Username">
                                <span class="icon"><i class="icon icon-carce-user"></i></span>
                            </li>
                            <li class="single-form-item">
                            <?= form_error('nama', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" placeholder="Masukkan Nama Lengkap">
                                <span class="icon"><i class="icon icon-carce-profile"></i></span>
                            </li>
                            <li>
                            <?= form_error('telp', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">No.Telp</label>
                                <input type="text" name="telp" class="form-control" value="<?= set_value('telp'); ?>" placeholder="Masukkan No.telp">
                                <span class="icon"><i class="icon icon-carce-phone"></i></span>
                            </li>
                            <li><?= form_error('password1', '<small style="color:red;">', '</small>'); ?></li>
                            <li class="single-form-item">
                                <label for="password1" class="visually-hidden">Password</label>
                                <input type="password" name="password1" class="form-control" placeholder="Masukkan Password">
                                <span class="icon"><i class="icon icon-carce-eye"></i></span>
                            </li>
                            <li><?= form_error('password2', '<small style="color:red;">', '</small>'); ?></li>
                            <li class="single-form-item">
                                <label for="password2" class="visually-hidden">Konfirmasi Password</label>
                                <input type="password" name="password2" class="form-control" placeholder="Masukkan Konfirmasi Password">
                                <span class="icon"><i class="icon icon-carce-eye"></i></span>
                            </li>
                            <li>
                            <?= form_error('kota', '<small style="color:red;">', '</small>'); ?>
                            </li>
                            <li class="single-form-item">
                                <label for="name" class="visually-hidden">kota</label>
                                <select name="kota" class="select2" style="width:100%;height:60px;">
                                    <option value="">Pilih Kota </option>
                                    <?php $qkota = $this->db->get('tb_kota');
                                    foreach ($qkota->result_array() as $kota) { ?>
                                        <option value="<?= $kota['kota_id'] ?>"><?= $kota['nama_kota'] ?></option>
                                    <?php } ?>
                                </select>
                            </li>
                        </ul>
                    <button type="submit" style="margin-top:40px;background-color: #337784;border: none;color: white;border-radius:20px;width:100%;padding: 15px 32px;"z>Daftar</button>

                    </form>
                </div>

                <div class="create-account-text text-center">Belum punya akun? <a href="<?= base_url('login') ?>" class="btn--color-radical-red">Daftar akun baru</a></div>
               
            </div>
        </div>
        <!-- ...:::End User Event Section:::... -->


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script>

    