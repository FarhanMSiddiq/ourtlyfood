

<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="<?=base_url();?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h2 class="title text-center">Produk</h2></li>
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

<!-- ...:::Start Cart Section:::... -->
<div class="cart-section section-gap-top-30">
    <div class="container">
        <div class="cart-items-wrapper">
            <ul class="cart-item-list">
                <?php
                        $no = 1;
                        foreach ($record->result_array() as $row) {
                            if (trim($row['gambar']) == '') {
                                $foto_produk = 'no-image.png';
                            } else {
                                $foto_produk = $row['gambar'];
                            }

                            $stok = $row['stok'];
                            if ($stok !== 0) { ?>
                <!-- Start Single Cart Item -->
                <li class="single-cart-item">
                    <div class="image">
                        <img width="90" height="90" src="<?= base_url('assets/images/produk/') . $foto_produk; ?>" alt="">
                    </div>
                    <div class="content">
                        <a href="<?= base_url('produk/detail/') . $row['produk_seo']; ?>" class="title"><h3><?= $row['nama_produk']; ?></h3></a>
                        <div class="details">
                            <div class="left">
                                <span class="brand">Nama Mitra</span>
                                <span class="price"><?= "Rp " . number_format($row['harga_konsumen'],0,',','.'); ?></span>
                            </div>
                        </div>
                        <ul class="review-star">
                                                            <?php
                                                            $idpro = $row['id_produk'];
                                                            $query = $this->db->query("SELECT * FROM tb_ulasan WHERE id_produk='$idpro'");
                                                            $bin  = $this->db->query("SELECT SUM(bintang) AS totalbintang FROM tb_ulasan WHERE id_produk='$idpro'")->row_array();
                                                            $jml_rev = $query->num_rows();

                                                            $jml_bintang = $bin['totalbintang'] / $jml_rev;

                                                            if ($jml_rev == 0) {
                                                                for ($y = 0; $y < 5; $y++) { ?>
                                                                     <li class="items fill"><i class="icon icon-carce-star-full" style="color:gray;"></i></li>
                                                                <?php }
                                                            } else {
                                                                for ($y = 0; $y <  $jml_bintang; $y++) { ?>
                                                                    <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                                                                <?php }
                                                                for ($y = 0; $y <  5 - $jml_bintang; $y++) { ?>
                                                                     <li class="items fill"><i class="icon icon-carce-star-full" style="color:gray;"></i></li>
                                                            <?php }
                                                            } ?>
                                                            <?php if ($jml_rev > 0) { ?>
                                                                <li class="items fill">(<?= $jml_rev ?> Ulasan)</li>
                                                            <?php } ?>
                                       
                        </ul>
                    </div>
                </li>
                <!-- End Single Cart Item -->
                <?php
                            }
                        }
                        ?>
            </ul>
            <div align="center" style="margin-top:20px;">
            <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<!-- ...:::End Cart Section:::... -->

</div>