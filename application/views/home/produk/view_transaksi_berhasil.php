  <!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="<?=base_url('riwayat_belanja');?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"><h2 class="title text-center">Pesanan</h2></li>
                    <li class="list-item"></li>
                </ul>
            </div>
        </div>
        <!-- End User Event Area -->
    </div>
</div>
<!-- ...:::End User Event Section:::... -->

<div class='text-center' style="margin-top:50px;">
  <div class="container">
    <div align="center"><img src="<?= base_url('assets/template_mobile/images/sukses.svg')?>"></div>
    <h5 class="mb-5">Pesanan Berhasil Dibuat</h5>
      No Invoice anda : <b><?= $orders; ?></b><br>
      Total belanja anda <b class="text-danger">Rp<?= rupiah($total_bayar+3000); ?></b><br>
      <a target='_BLANK' class="load-more-btn" href="<?= base_url(); ?>produk/print_invoice/<?= $orders; ?>"><span class="glyphicon glyphicon-print"></span> Download Invoice</a>
    </div>
  </div>