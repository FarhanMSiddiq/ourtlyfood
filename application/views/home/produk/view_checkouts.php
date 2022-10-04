<?php
        $total = $this->db->query("SELECT sum((a.harga_jual*a.jumlah)-(b.diskon*a.jumlah)) as total, sum(b.berat*a.jumlah) as total_berat FROM `tb_toko_penjualantemp` a JOIN tb_toko_produk b ON a.id_produk=b.id_produk where a.session='" . $this->session->idp . "'")->row_array();

        ?>
<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="<?=base_url('keranjang');?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h2 class="title text-center">Checkout</h2></li>
                    <li class="list-item"></li>
                </ul>
            </div>
        </div>
        <!-- End User Event Area -->
    </div>
</div>
<!-- ...:::End User Event Section:::... -->


<form action="" method="post">   
        <!-- ...:::Start Billing Info Section:::... -->
        <div class="billing-info section-gap-top-25">
            <div class="container px-0">
                <div class="billing-information-card">

                    <span class="billing-information-title">Alamat Pengiriman</span>
                    <ul class="shipping-method-lists">
                        <li class="shipping-method-list">
                            Nama :
                        </li>
                        <li class="shipping-method-list">
                            <input type="text" name='nama_pem' style="width:100%;padding:10px;margin-top:5px;margin-bottom:10px;" value="<?= $rows['nama_lengkap'] ?>" >
                        </li>
                        <li class="shipping-method-list">
                        Nomor telepon :
                        </li>
                        <li class="shipping-method-list">
                            <input type="text" name='telp_pem' style="width:100%;padding:10px;margin-top:5px;margin-bottom:10px;" value="<?= $rows['no_telp'] ?>" >
                        </li>
                        <li class="shipping-method-list">
                        Kota / Kabupaten :
                        </li>
                        <li class="shipping-method-list">
                                <select name="kota_pem" id='kota_pem' class='form-control' style="width:100%;padding:10px;margin-top:5px;margin-bottom:10px;">
                                    <option value="Pilih kota"></option>
                                    <?php $qkota = $this->db->get('tb_kota');
                                    foreach ($qkota->result_array() as $kota) {
                                        if ($kota['kota_id'] == $rows['kota_id']) {
                                    ?>
                                            <option value="<?= $kota['kota_id'] ?>" selected><?= $kota['nama_kota'] ?></option>

                                        <?php } else { ?>
                                            <option value="<?= $kota['kota_id'] ?>"><?= $kota['nama_kota'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                        </li>
                        <li class="shipping-method-list">
                        Kecamatan :
                        </li>
                        <li class="shipping-method-list">
                            <input type="text" name='kec_pem' style="width:100%;padding:10px;margin-top:5px;margin-bottom:10px;" value="<?= $rows['kecamatan'] ?>" >
                        </li>
                        <li class="shipping-method-list">
                            Alamat :
                        </li>
                        <li class="shipping-method-list">
                        <textarea name="alamat_pem" rows="5"  style="width:100%;padding:10px;margin-top:5px;margin-bottom:10px;" required><?= $rows['alamat'] ?></textarea>
                        </li>
                        <li class="shipping-method-list">
                        Kode Pos :
                        </li>
                        <li class="shipping-method-list">
                            <input type="text" name='pos_pem' style="width:100%;padding:10px;margin-top:5px;margin-bottom:10px;" value="<?= $rows['kode_pos'] ?>" >
                        </li>
                    </ul>

                    <span class="shipping-method-title">Pilih Pelayanan</span>
                    <ul class="shipping-method-lists">
                        <li class="shipping-method-list">
                            <input id="fastShipping" type="radio" name="service" checked="" value="makan_ditempat">
                            <label for="fastShipping">Makan Di Tempat</label>
                            <div class="check"></div>
                        </li>
                        <li class="shipping-method-list">
                            <input id="normalShipping" type="radio" name="service" value="cod">
                            <label for="normalShipping">COD (Makanan Dikirim Pembayaran Ditempat)</label>
                            <div class="check"></div>
                        </li>
                        <li class="shipping-method-list">
                            <input id="normalShipping" type="radio"  disable>
                            <label for="normalShipping"><del>Payment Gateway</del> <small>(Dalam Pengembangan)</small></label>
                            <div class="check"></div>
                        </li>
                    </ul>


                    <span class="billing-information-title">Detail Pesanan</span>
                    <ul class="billing-information-lists">
                        <?php
                        $no = 1;
                        $total_diskon = 0;
                        foreach ($record->result_array() as $row) {
                            $sub_total = (($row['harga_jual'] - $row['diskon']) * $row['jumlah']);
                            if ($row['diskon'] != '0') {
                                $diskon = "<del style='color:red'>" . rupiah($row['harga_jual']) . "</del>";
                            } else {
                                $diskon = "";
                            }
                            $diskon_total = $diskon_total + $row['diskon'] * $row['jumlah'];
                        ?>
                        <li class="billing-information-list"> <a href="<?= base_url('produk/detail/') . $row['produk_seo']; ?>"> <?= $row['nama_produk']; ?> &nbsp; &times;
                                    <?= $row['jumlah']; ?></a>
                            <span>Rp<?= rupiah($sub_total) ?></span>
                        </li>
                        <?php } ?>
                        <li class="billing-information-list"> <span> Biaya Aplikasi</span> <span>Rp3.000</span> </li>
                    </ul>

                    <input type="hidden" name="total" id="total" value="<?= $total['total']; ?>" />
                    <input type="hidden" name="diskonnilai" id="diskonnilai" value="<?= $diskon_total; ?>" />

                    <div class="payment-card">
                        <span class="total-price">Rp<span class="counter"><?= rupiah($total['total']+3000); ?></span></span>
                        <button class="btn-payment" type="submit" name="submit" >Pesan</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- ...:::End Billing Info Section:::... -->

</form>

