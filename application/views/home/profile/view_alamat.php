
<main class="main-wrapper">
  

  <!-- ...:::Start User Event Section:::... -->
  <div class="header-section">
      <div class="container">
          <!-- Start User Event Area -->
          <div class="header-area">
              <div class="header-top-area header-top-area--style-1">
                  <ul class="event-list">
                  <li class="list-item"><a href="<?=base_url('members/dashboard')?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                      <li class="list-item">
                          <h2 class="title text-center">Ubah Alamat</h2>
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

  <!-- ...:::Start Contact Section:::... -->
  <div class="contact-section section-gap-top-30">
            <div class="container">

                <!-- Start User Event Area -->
                <div class="login-wrapper">

                <form action="<?= base_url('members/edit_alamat') ?>" method="post" enctype="multipart/form-data">   
                <input type="hidden" name="id" value="<?= encrypt_url($row['id_alamat']) ?>">    
                <ul class="default-form-list">
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Alamat :</h4>
                            </li>
                            <li class="single-form-item">
                            <textarea name="alamat" class="form-control" rows="5" required style="width:100%;padding:10px;"><?= $row['alamat']; ?></textarea>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Kecamatan :</h4>
                            </li>
                            <li class="single-form-item">
                            <input class='form-control' type='text' name='kec' value="<?= $row['kecamatan']; ?>" style="width:100%;padding:10px;" required>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Kota / Kabupaten :</h4>
                            </li>
                            <li class="single-form-item">
                            <select style="width:100%;padding:10px;" name='kab' required>
                            <option value=''>- Pilih -</option>
                            <?php
                            foreach ($kota->result_array() as $rows) {
                              if ($row['id_kota'] == $rows['kota_id']) {
                                echo "<option value='$rows[kota_id]' selected>$rows[nama_kota]</option>";
                              } else {
                                echo "<option value='$rows[kota_id]'>$rows[nama_kota]</option>";
                              }
                            }
                            ?>
                          </select>
                            </li>
                            <li style="margin-bottom:5px;margin-left:5px;">
                              <h4>Kode Pos :</h4>
                            </li>
                            <li class="single-form-item">
                            <input style="width:100%;padding:10px;"  min="0" minlength="5" maxlength="7" type='number' name='kode_pos' value='<?= $row['kode_pos']; ?>' required>
                            </li>
                        </ul>
                        <button type="submit" name="submit" style="margin-top:20px;margin-bottom:20px;background-color: #337784;border: none;color: white;border-radius:20px;width:100%;padding: 15px 32px;">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- ...:::End Contact Section:::... -->

</main>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });
    </script>
