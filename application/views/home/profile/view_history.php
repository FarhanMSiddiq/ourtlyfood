<!-- ...:::Start User Event Section:::... -->
<div class="header-section">
      <div class="container">
          <!-- Start User Event Area -->
          <div class="header-area">
              <div class="header-top-area header-top-area--style-1">
                  <ul class="event-list">
                  <li class="list-item"><a href="<?=base_url('members/dashboard')?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                      <li class="list-item">
                          <h2 class="title text-center">Riwayat Transaksi</h2>
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


  <!-- ...:::Start Cart Section:::... -->
  <div class="cart-section section-gap-top-30" style="margin-bottom:100px;">
            <div class="container">
                <div class="cart-items-wrapper">
                    <ul class="cart-item-list">
                    <?php
                    $no = 1;
                    foreach ($record as $row) {
                      $total = $this->db->query("SELECT a.kode_transaksi, a.kurir, a.service, a.proses, a.ongkir, sum((b.harga_jual*b.jumlah)-(c.diskon*b.jumlah)) as total, sum(c.berat*b.jumlah) as total_berat FROM `tb_toko_penjualan` a JOIN tb_toko_penjualandetail b ON a.id_penjualan=b.id_penjualan JOIN tb_toko_produk c ON b.id_produk=c.id_produk where a.kode_transaksi='$row[kode_transaksi]'")->row_array();
                      ?>
                        <!-- Start Single Cart Item -->
                        <li class="single-cart-item">
                            <div class="image">
                                <img width="90" height="90" src="<?= base_url('assets/template_mobile/images/order.png')?>" alt="">
                            </div>
                            <div class="content">
                                <a href="<?=base_url() . 'konfirmasi/tracking/'.$row['kode_transaksi']?>" class="title"><?=$row['kode_transaksi']?></a>
                                <div class="details">
                                    <div class="left">
                                        <span class="brand">Rp<?=rupiah($total['total'] + $total['ongkir']+3000)?></span>
                                        <span class="price"><?=cek_terakhir($row['waktu_transaksi'])?> lalu</span>
                                    </div>
                                    <div class="right">
                                        <?php
                                         if ($row['proses'] == '0') {
                                         echo '<a style="padding:10px;background:#B73E3E;color:#FFFFFF;border-radius:20px;">Pending</a>';
                                        } elseif ($row['proses'] == '1') {
                                          echo '<a style="padding:10px;background:#083AA9;color:#FFFFFF;border-radius:20px;">Konfirmasi</a>';
                                        } elseif ($row['proses'] == '2') {
                                          echo '<a style="padding:10px;background:#47B5FF;color:#FFFFFF;border-radius:20px;">Proses</a>';
                                        } elseif ($row['proses'] == '3') {
                                          echo '<a style="padding:10px;background:#47B5FF;color:#FFFFFF;border-radius:20px;">Dikirim</a>';
                                        }elseif ($row['proses'] == '4') {
                                          echo '<a style="padding:10px;background:#256D85;color:#FFFFFF;border-radius:20px;">Selesai</a>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Single Cart Item -->
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ...:::End Cart Section:::... -->



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