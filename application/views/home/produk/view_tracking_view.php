<?php
if ($total['proses'] == '0') {
  $proses = 'Pending';
} elseif ($total['proses'] == '1') {
  $proses = 'konfirmasi';
} elseif ($total['proses'] == '2') {
  $proses = 'Proses';
} elseif ($total['proses'] == '3') {
  $proses = 'Dikirim';
} elseif ($total['proses'] == '4') {
  $proses = 'Selesai';
}
?>
<!-- ...:::Start User Event Section:::... -->
<div class="header-section">
      <div class="container">
          <!-- Start User Event Area -->
          <div class="header-area">
              <div class="header-top-area header-top-area--style-1">
                  <ul class="event-list">
                  <li class="list-item"><a href="<?=base_url('members/riwayat_belanja')?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                      <li class="list-item">
                          <h2 class="title text-center">Rincian</h2>
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


  <!-- ...:::Start Billing Info Section:::... -->
  <div class="billing-info section-gap-top-25">
            <div class="container px-0">
                <div class="billing-information-card">

                    <span class="billing-information-title">Detail Pemesan</span>
                    <ul class="billing-information-lists">
                        <li class="billing-information-list"> <span> Nama</span>
                            <span><?= $rows['nama_lengkap']; ?></span>
                        </li>
                        <li class="billing-information-list"> <span> No. Telpon</span>
                            <span><?= $rows['no_telp']; ?></span>
                        </li>
                        <li class="billing-information-list"> <span> Alamat</span></li>
                        <li class="billing-information-list"><span><?= $rows['alamat'] ?> , Kecamatan <?= $rows['kecamatan']; ?> , <?= $rows['nama_kota']; ?> , <?= $rows['kode_pos']; ?></span></li>
                       
                    </ul>

                    <span class="shipping-method-title">Detail Pesanan</span>
                    <ul class="shipping-method-lists">
                    <?php
                        $no = 1;
                        $diskon_total = 0;
                        foreach ($record->result_array() as $row) {
                          $sub_total = (($row['harga_jual'] - $row['diskon']) * $row['jumlah']);
                          if ($row['diskon'] != '0') {
                            $diskon = "<del style='color:red'>" . rupiah($row['harga_jual']) . "</del>";
                          } else {
                            $diskon = "";
                          }
                          if (trim($row['gambar']) == '') {
                            $foto_produk = 'no-image.png';
                          } else {
                            $foto_produk = $row['gambar'];
                          }
                          $diskon_total = $diskon_total + $row['diskon'] * $row['jumlah'];
                        ?>
                    <li class="billing-information-list"> <span> <?= $row['nama_produk'] ?>&nbsp; &times;
                                    <?= $row['jumlah']; ?></span> <span>Rp<?= rupiah($sub_total) ?></span> </li>
                    <?php }?>
                    <li class="billing-information-list"><span><b>Biaya Aplikasi</b></span><span>Rp<?= rupiah(3000) ?></span></li>
                    </ul>

                    <a target='_BLANK' class="load-more-btn" href="<?= base_url(); ?>produk/print_invoice/<?= $orders; ?>" style="width:200px;margin-bottom:20px;"><center><i class="fa fa-print"></i> Download Invoice</center></a>

                    <div class="payment-card">
                        <span class="total-price">Total : <span class="counter">Rp<?= rupiah($total['total']+3000) ?></span></span>
                    </div>

                </div>

            </div>
        </div>
        <!-- ...:::End Billing Info Section:::... -->
        
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