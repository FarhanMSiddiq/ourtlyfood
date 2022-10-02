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
                        <h2 class="title text-center">Detail</h2>
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


<?php
if (trim($row['gambar']) == '') {
    $foto_produk = 'no-image.png';
} else {
    $foto_produk = $row['gambar'];
}
$produk = $row['nama_produk'];

?>

<!-- ...:::Start Product Single Section:::... -->
<div class="product-single-section section-gap-top-30">
    <div class="container">
        <div class="product-gallery-image">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="product-gallery-single-item">
                            <div class="image">
                                <img class="img-fluid" width="276" height="172" src="<?= base_url() . "assets/images/produk/" . $foto_produk ?>" alt="">
                                <div class="image-shape image-shape-1"></div>
                                <div class="image-shape image-shape-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <div class="product-tag">
                <?php if ($row['diskon'] != '0') { ?>
                <span class="tag-discount">Potongan Harga Rp.<?= rupiah($row['diskon']); ?></span>
                <?php } ?>
                <a href="<?= base_url() . "assets/images/produk/" . $foto_produk ?>" aria-label="Wishlist" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>

    </div>

    <div class="container px-0">
        <div class="product-gallery-details">
            <span class="rating">
            <ul class="review-star">
            <?php
                            $idpro = $row['id_produk'];
                            $query = $this->db->query("SELECT * FROM tb_ulasan WHERE id_produk='$idpro'");
                            $bin  = $this->db->query("SELECT SUM(bintang) AS totalbintang FROM tb_ulasan WHERE id_produk='$idpro'")->row_array();
                            $jml_rev = $query->num_rows();

                            $jml_bintang = $bin['totalbintang'] / $jml_rev;

                            if ($jml_rev == 0) {
                                for ($y = 0; $y <  5; $y++) { ?>

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
                            <?php }else{ ?>
                                <li class="items fill">(Belum Ada Ulasan)</li>
                            <?php } ?>
            </ul>
            </span>
            <h1 class="title"><?= $row['nama_produk'] ?></h1>
            <p class="text">
            <?= $row['keterangan'] ?>
            </p>

            <form id="product-form" class="product__options">

            <input type="hidden" name="id_produk" value="<?= encrypt_url($row['id_produk']) ?>">
            <h4 style="margin-top:20px;">Stok: <span class="text-success" id="product-stock"><?= $row['stok'] ?></span></h4>

            <ul class="product-variable-lists">
                <li class="list-item">
                    <div class="left">Jumlah</div>
                    <div class="right" style="margin-left:20px;">
                        <div class="product-quantity">
                            <div class="num-block skin-2">
                                <div class="num-in">
                                    <span class="minus dis"></span>
                                    <label for="product-quantity" class="visually-hidden"></label>
                                    <input id="product-quantity" type="text" class="in-num" min="1" value="1" name="jumlah" readonly="">
                                    <span class="plus"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="price-n-cart">
                <?php if ($row['diskon'] == '0') { ?>
                    <span class="price"><?= "Rp " . number_format($row['harga_konsumen'],0,',','.'); ?></span>
                <?php } else { ?>
                    <div>
                    <sup><del style="color:red;">Rp.<?= rupiah($row['harga_konsumen']) ?></del></sup>
                    <span class="price">Rp.<?= rupiah($row['harga_konsumen'] - $row['diskon']) ?></span>
                    </div>
                <?php } ?>
               
            </div>

            <div class="price-n-cart">
                <a href="javascript:void(0)" class="btn cart" onclick="add2cart()"><span class="icon"><i class="fa fa-plus"></i></span>Pesanan</a>
            </div>

            </form><!-- .product__options / end -->
        </div>
    </div>
</div>
<!-- ...:::End Product Single Section:::... -->


<!-- ...:::Start Catagories - 1 Section:::... -->
<div class="catagories-section section-gap-top-50" style="margin-bottom:30px;">
            <div class="container">
                <div class="title-content">
                    <h2 class="title">Ulasan Pelanggan</h2>
                </div>
                <div class="product-wrapper">
                    <div class="product-wrapper-content--4">
                    <?php
                    $idpro = $row['id_produk'];
                    $this->db->join('tb_pengguna', 'tb_pengguna.id_pengguna = tb_ulasan.id_pembeli');
                    $this->db->join('tb_toko_produk', 'tb_toko_produk.id_produk = tb_ulasan.id_produk');
                    $query = $this->db->get_where('tb_ulasan', "tb_ulasan.id_produk='$idpro'");
                    if ($query->num_rows() >= 1) {
                        foreach ($query->result_array() as $rev) {
                            if (empty($rev['foto'])) {
                                $foto = 'default.jpg';
                            } else {
                                $foto = $rev['foto'];
                            } ?>
                        <!-- Start Product Single Item -->
                        <div class="single-product-item product-item--style-4">
                            <img width="60" height="60" class="img-fluid" src="<?= base_url('assets/images/user/' . $foto) ?>" alt="image">
                            <div class="content">
                                <div class="content--left">
                                    <span class="price"><?= $rev['username'] ?></span>
                                    <a href="single-product.html" class="title"><?= $rev['ulasan'] ?></a>
                                    <ul class="review-star">
                                                <?php
                                                    for ($x = 0; $x < $rev['bintang']; $x++) { ?>
                                                        <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                                                    <?php }
                                                    for ($x = 0; $x < 5 - $rev['bintang']; $x++) { ?>
                                                        <li class="items fill"><i class="icon icon-carce-star-full" style="color:gray;"></i></li>
                                                    <?php } ?>
                                    </ul>
                                  
                                    <p class="text-muted"><?= tgl_grafik($rev['tanggal_ulasan']) ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- ENd Product Single Item -->
                        <?php }
                        } else { ?>

                            <p>Belum ada ulasan, beli produk ini untuk memberi ulasan</p>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ...:::Start Catagories - 1 Section:::... -->

        <?php
        if (!empty($this->session->id_pengguna)) { ?>

            <?php
            $idpeng = $this->session->id_pengguna;
            $queryx = $this->db->query("SELECT * FROM tb_toko_penjualan a JOIN tb_toko_penjualandetail b ON a.id_penjualan=b.id_penjualan WHERE b.id_produk='$idpro' AND a.id_pembeli='$idpeng' AND a.proses='3'");
            if ($queryx->num_rows() >= 1) {

                $id = $this->session->id_pengguna;
                $this->db->where("id_pengguna='$id'");
                $peng = $this->db->get('tb_pengguna')->row_array();
                if (empty($peng['nama_lengkap'])) {
                    $nama = $peng['username'];
                } else {
                    $nama = $peng['nama_lengkap'];
                }

                if (empty($peng['foto'])) {
                    $foto = 'default.jpg';
                } else {
                    $foto = $peng['foto'];
                }
            ?>

            <form class="reviews-view__form" action="<?= base_url('produk/review/') ?>" method="POST">
                    <h3 class="reviews-view__header">Tulis Ulasan</h3>
                    <div class="row">
                        <div class="col-12 col-lg-9 col-xl-8">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="review-stars">Bintang</label>
                                    <select name='bintang' id="review-stars" class="form-control">
                                        <option value="5">5 Bintang</option>
                                        <option value="4">4 Bintang</option>
                                        <option value="3">3 Bintang</option>
                                        <option value="2">2 Bintang</option>
                                        <option value="1">1 Bintang</option>
                                    </select></div>
                                <div class="form-group col-md-4">
                                    <label for="review-author">Username</label>
                                    <input type="hidden" name="pembeli" value="<?= encrypt_url($id) ?>">
                                    <input type="hidden" name="produk" value="<?= encrypt_url($row['id_produk']) ?>">
                                    <input type="hidden" name="seo" value="<?= $row['produk_seo'] ?>">
                                    <input type="text" class="form-control" id="review-author" value="<?= $peng['username'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="review-email">Email</label>
                                    <input type="text" class="form-control" id="review-email" value="<?= $peng['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="review-text">Ulasan Anda</label>
                                <textarea name="ulasan" class="form-control" id="review-text" rows="6"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">Tulis Ulasan</button>
                            </div>
                        </div>
                    </div>
                </form>
        <?php }
        } ?>

</main>



<?php $temp_sales = $this->db->get_where('tb_toko_penjualantemp', array('session' => $this->session->idp, 'id_produk' => $idpro))->row_array();
if (!empty($temp_sales)) {
    $number_cart = $temp_sales['jumlah'];
} else {
    $number_cart = 0;
} ?>

<input type="hidden" id="number-cart" value="<?= $number_cart; ?>">

<script>
    function add2cart() {
    var stock = $("#product-stock").text();
    var quantity = $("#product-quantity").val();
    var data = $("#product-form").serialize();
    var number_cart = $("#number-cart").val();
    var total = parseInt(quantity) + parseInt(number_cart);
    var site_url  = "<?= base_url();?>"

    if (quantity == '' || quantity == 0) {
        alert("Jumlah Tidak Valid");
    } else if (total > parseInt(stock)) {
        alert("Stok Tidak Mencukupi");
    } else {
        $.ajax({
            type: "POST",
            data: data,
            url: site_url + "keranjang",
            success: function (r) {
                window.location = (site_url + "keranjang")
            }
        });
    }
}
</script>