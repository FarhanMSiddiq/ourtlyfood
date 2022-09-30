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
                                <a href="cart.html" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i
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
                                    <h4 class="shop-filter-block__title">Price</h4>
                                    <div class="shop-filter-block__content">
                                        <div class="widget-price-range">
                                            <input type="text" id="price-range-slider">
                                        </div>
                                    </div>
                                </div>
                                <ul class="product-variable-lists">
                                    <li class="list-item">
                                        <div class="left">Size</div>
                                        <div class="right">
                                            <ul class="size-chart inner-child-item">
                                                <li>
                                                    <label for="samll">
                                                        <input type="radio" name="size" id="samll" checked="">
                                                        <span class="size-text">S</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="medium">
                                                        <input type="radio" name="size" id="medium">
                                                        <span class="size-text">M</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="large">
                                                        <input type="radio" name="size" id="large">
                                                        <span class="size-text">L</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="xlarge">
                                                        <input type="radio" name="size" id="xlarge">
                                                        <span class="size-text">XL</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="xxlarge">
                                                        <input type="radio" name="size" id="xxlarge">
                                                        <span class="size-text">XXL</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="left">Color</div>
                                        <div class="right">
                                            <ul class="color-chart inner-child-item">
                                                <li>
                                                    <label for="blue">
                                                        <input type="radio" name="color" id="blue">
                                                        <span class="color-box color-box--blue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="orange">
                                                        <input type="radio" name="color" id="orange" checked="">
                                                        <span class="color-box color-box--orange"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="violet">
                                                        <input type="radio" name="color" id="violet">
                                                        <span class="color-box color-box--violet"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="pink">
                                                        <input type="radio" name="color" id="pink">
                                                        <span class="color-box color-box--pink"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                                <div class="shop-filter-block">
                                    <h4 class="shop-filter-block__title">Brand</h4>
                                    <div class="shop-filter-block__content">
                                        <ul class="shop-filter-block__brand">
                                            <li><button>HasThemes</button></li>
                                            <li><button class="active">HasTech</button></li>
                                            <li><button>Bootxperts</button></li>
                                            <li><button>Codecarnival</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="shop-filter-block">
                                    <button class="apply-btn">APPLY</button>
                                    <button class="cancel-btn">CANCEL</button>
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
                            <div class="right">
                                <p><span class="icon"><i class="icon icon-carce-check-circle"></i></span> Completed</p>
                            </div>
                        </div>
                        <ul class="review-star">
                                        <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                                        <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                                        <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                                        <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                                        <li class="items fill"><i class="icon icon-carce-star-full"></i></li>
                        </ul>
                    </div>
                </li>
                <!-- End Single Cart Item -->
                <?php
                            }
                        }
                        ?>
            </ul>
            <button class="load-more-btn">load more</button>
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
                <a area-label="event link icon" href="index.html" class="event-btn-link"><i
                class="icon icon-carce-home"></i></a>
                <a area-label="wishlist icon" href="wishlist.html" class="event-btn-link"><i
                class="icon icon-carce-heart"></i></a>
            </div>
            <div class="user-event user-event--center">
                <a area-label="cart icon" href="cart.html" class="event-btn-link"><i
                class="icon icon-carce-cart"></i></a>
            </div>
            <div class="user-event user-event--right">
                <a area-label="order icon" href="order.html" class="event-btn-link"><i
                class="icon icon-carce-compare"></i></a>
                <a area-label="chat icon" href="chat.html" class="event-btn-link"><i
                class="icon icon-carce-bubbles2"></i></a>
            </div>
        </div>
    </div>
    <!-- End User Event Area -->
</div>
<!-- ...:::End User Event Section:::... -->

<footer class="footer-section"></footer>
</main>