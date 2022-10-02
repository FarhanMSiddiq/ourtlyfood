<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="<?=base_url();?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h2 class="title text-center">Keranjang</h2></li>
                    <li class="list-item"></li>
                </ul>
            </div>
        </div>
        <!-- End User Event Area -->
    </div>
</div>
<!-- ...:::End User Event Section:::... -->


<?php
if ($record->num_rows() == '0') { ?>
  <div class='text-center' style="margin-top:50px;">
    <div align="center"><img src="<?= base_url('assets/template_mobile/images/cart.svg')?>"></div>
    <a class='load-more-btn' href='<?= base_url('produk') ?>' style="width:300px;">Klik disini Untuk mulai belanja.</a>
  </div>
<?php } else {
?>


 <!-- ...:::Start Cart Section:::... -->
 <div class="cart-section section-gap-top-30">
            <div class="container">
                <div class="cart-items-wrapper">
                    <ul class="cart-item-list">
                    <?php
                      $i = 1;
                      $qty_product = $record->num_rows();
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
                        } ?>
                        <!-- Start Single Cart Item -->
                        <li class="single-cart-item">
                            <div class="image">
                                <img width="90" height="90" src="<?= base_url('assets/images/produk/') . $foto_produk; ?>" alt="image">
                            </div>
                            <div class="content">
                                <a href="<?= base_url() . "keranjang/delete/" . encrypt_url($row['id_penjualan_detail']);  ?>">
                                <button class="delete-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 464c-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216 0 118.7-96.1 216-216 216zm94.8-285.3L281.5 256l69.3 69.3c4.7 4.7 4.7 12.3 0 17l-8.5 8.5c-4.7 4.7-12.3 4.7-17 0L256 281.5l-69.3 69.3c-4.7 4.7-12.3 4.7-17 0l-8.5-8.5c-4.7-4.7-4.7-12.3 0-17l69.3-69.3-69.3-69.3c-4.7-4.7-4.7-12.3 0-17l8.5-8.5c4.7-4.7 12.3-4.7 17 0l69.3 69.3 69.3-69.3c4.7-4.7 12.3-4.7 17 0l8.5 8.5c4.6 4.7 4.6 12.3 0 17z" />
                                    </svg>
                                </button>
                              </a>
                                <a href="<?= base_url('produk/detail/') . $row['produk_seo']; ?>" class="title"><?= $row['nama_produk'] ?></a>
                                <form action="<?= base_url('keranjang/update2/') . encrypt_url($row['id_penjualan_detail']); ?> ?>." method="POST">
                                <input name="id_penjualan_detail" type="hidden" value="<?= $row['id_penjualan_detail']; ?>">
                                <input type="hidden" id="stock_<?= $i ?>" value="<?= $row['stok'] ?>">
                                <div class="details">
                                    <div class="left">
                                        <span class="brand">Kategori</span>
                                        <span class="price">Rp.<?= rupiah($sub_total) ?></span>
                                    </div>
                                    <div class="right">
                                        <div class="product-quantity">
                                            <div class="num-block skin-2">
                                                <div class="num-in">
                                                <?php
                                                  if ($row['jumlah'] == 1) {
                                                    $display = 'none';
                                                  } else {
                                                    $display = 'block';
                                                  }
                                                  ?>
                                                    <a href="javascript:void(0)" <?= "style='display: " . $display . "'" ?> class="minus dis" id="minus_<?= $i ?>"></a>
                                                  
                                                    <label for="quan-1" class="visually-hidden"></label>
                                                    <input id="quantity_<?= $i ?>" name="jumlah" type="number" min="1" value="<?= $row['jumlah'] ?>" readonly="">
                                                    <a  href="javascript:void(0)" class="plus" id="plus_<?= $i ?>"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span id="save_<?= $i ?>" style="display: none"></span>
                                </form>
                            </div>
                        </li>
                        <!-- End Single Cart Item -->
                        <?php $i++; } ?>
                    </ul>

                    <?php
                    $total = $this->db->query("SELECT sum((a.harga_jual*a.jumlah)-(b.diskon*a.jumlah)) as total, sum(b.berat*a.jumlah) as total_berat FROM `tb_toko_penjualantemp` a JOIN tb_toko_produk b ON a.id_produk=b.id_produk where a.session='" . $this->session->idp . "'")->row_array();
                    ?>

                    <ul class="cart-info-list">
                        <li class="cart-info-single-list">
                            <ul class="cart-info-child">
                                <li class="item"><span class="text-left">Total</span> <span
										class="total-price">Rp.<?= rupiah($total['total']); ?></span>
                                   
                                </li>
                                <li class="item">
                                <a href="<?= base_url('keranjang/checkouts') ?>" class="load-more-btn"><span class="icon"><i class="icon icon-carce-check-circle"></i></span>Check out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ...:::End Cart Section:::... -->


<?php } ?>
<input type="hidden" id="qty_product" value="<?= $qty_product ?>">
<script src="<?= base_url('assets/template/js/cart.js') ?>"></script>