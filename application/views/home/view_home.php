<main class="main-wrapper" >

<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"></li>
                    <li class="list-item"> <h2 class="title text-center">Ourtly Food</h2></li>
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

 <!-- ...:::Start Search & Filter Section:::... -->
 <div class="search-n-filter-section section-gap-top-25">
            <div class="container">
                <!-- Start Search & Filter Area -->
                <div class="search-n-filter-area home-one">
                    <div class="search-box">

                        <div class="searchable select">
                            <input type="text" placeholder="Search..." onkeyup="filterFunction(this,event)">
                            <ul>
                                <li>mexico city</li>
                                <li>Bulgaria</li>
                                <li>san francisco</li>
                                <li>Egypt</li>
                                <li>texas</li>
                            </ul>
                            <button class="btn search__btn" aria-label="Search Icon" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.003" viewBox="0 0 12 12.003">
                                    <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M13.859,13.131,10.522,9.762a4.756,4.756,0,1,0-.722.731l3.316,3.347a.514.514,0,0,0,.725.019A.517.517,0,0,0,13.859,13.131Zm-7.075-2.6a3.756,3.756,0,1,1,2.656-1.1A3.732,3.732,0,0,1,6.784,10.534Z" transform="translate(-2 -1.997)" fill="#171717" />
                                </svg>
                            </button>

                            <button class="btn submit__btn" aria-label="Search Icon" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12">
                                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M19.354,11.481a.816.816,0,0,0-.006,1.15l3.8,3.806H8.682a.812.812,0,0,0,0,1.625H23.143l-3.8,3.806a.822.822,0,0,0,.006,1.15.81.81,0,0,0,1.144-.006l5.152-5.187h0a.912.912,0,0,0,.169-.256.775.775,0,0,0,.063-.312.814.814,0,0,0-.231-.569L20.492,11.5A.8.8,0,0,0,19.354,11.481Z" transform="translate(-7.875 -11.252)" fill="#aaa" />
                                </svg>
                            </button>

                            <button class="btn close__btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path id="Icon_metro-cancel" data-name="Icon metro-cancel" d="M6.857.643a6,6,0,1,0,6,6,6,6,0,0,0-6-6Zm0,10.875a4.875,4.875,0,1,1,4.875-4.875A4.875,4.875,0,0,1,6.857,11.518ZM8.732,3.643,6.857,5.518,4.982,3.643,3.857,4.768,5.732,6.643,3.857,8.518,4.982,9.643,6.857,7.768,8.732,9.643,9.857,8.518,7.982,6.643,9.857,4.768Z" transform="translate(-0.857 -0.643)" fill="#aaa" />
                                </svg>
                            </button>

                        </div>

                        <button id="filter-trigger" aria-label="Filter Icon" class="filter_btn btn--radius btn--radical-red btn--color-white btn--box-shadow btn--size-40-40 btn--center btn--font-size-22"><i
								class="icon icon-carce-filter"></i></button>
                    </div>
                </div>
                <!-- End Search & Filter Area -->

                <div class="shop-filter" id="shop-filter-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-filter-block mt-0">
                                    <h4 class="shop-filter-block__title">Harga (Rupiah)</h4>
                                    <div class="shop-filter-block__content">
                                        <div class="widget-price-range">
                                            <input type="text" id="price-range-slider">
                                        </div>
                                    </div>
                                </div>
                                <ul class="product-variable-lists">
                                <div class="shop-filter-block">
                                    <h4 class="shop-filter-block__title">Kategori</h4>
                                    <div class="shop-filter-block__content">
                                        <label><input type="checkbox" name="checkbox" value="value">&nbsp;&nbsp;Menu Sarapan</label><br>
                                        <label><input type="checkbox" name="checkbox" value="value">&nbsp;&nbsp;Menu Makan Siang</label><br>
                                        <label><input type="checkbox" name="checkbox" value="value">&nbsp;&nbsp;Menu Makan Malam</label><br>
                                    </div>
                                </div>
                                <div class="shop-filter-block">
                                    <button class="apply-btn">Apply Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ...:::End Search & Filter Section:::... -->

        <!-- ...:::Start Hero Slider Section:::... -->
        <div class="hero-section section-gap-top-25">
            <div class="container">
                <!-- Start Hero Area -->
                <div class="hero-area hero-area--style-1 hero-slider-active">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php
                            $slide = $this->db->query("SELECT * FROM tb_web_slide ORDER BY id_slide DESC");;
                            foreach ($slide->result_array() as $row) {
                            ?>
                            <div class="swiper-slide">
                                <div class="hero-singel-slide ">
                                    <div class="hero-bg">
                                        <img width="388" height="160" class="img-full" src="<?= base_url('assets/images/slider/') . $row['gambar_besar']; ?>" alt="image">
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End Hero Area -->
            </div>
        </div>
        <!-- ...:::End Hero Slider Section:::... -->

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

<?php include '_include/navigation.php'; ?>

<footer class="footer-section"></footer>
</main>