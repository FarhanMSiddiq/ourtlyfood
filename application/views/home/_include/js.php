
  <?php $this->model_main->kunjungan(); ?>

  <!-- ::::::::::::::All JS Files here :::::::::::::: -->
  <!-- Global Vendor -->
  <script src="<?= base_url('assets/template_mobile/') ?>js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="<?= base_url('assets/template_mobile/') ?>js/vendor/jquery-migrate-3.3.2.min.js"></script>

  <!--Plugins JS-->
  <script src="<?= base_url('assets/template_mobile/') ?>js/plugins/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/template_mobile/') ?>js/plugins/ion.rangeSlider.min.js"></script>

  <!-- Minify Version -->
  <!-- <script src="assets/js/vendor.min.js"></script>
  <script src="assets/js/plugins.min.js"></script> -->

  <!--Main JS (Common Activation Codes)-->
  <script src="<?= base_url('assets/template_mobile/') ?>js/main.js"></script>
  <!-- <script src="assets/js/main.min.js"></script> -->

  <script src="<?= base_url('assets/template/js/'); ?>sweetalert2.min.js"></script>
  <script>
    function logout() {
      let timerInterval;
      Swal.fire({
        title: 'Konfirmasi Keluar',
        text: "Apakah Anda ingin keluar dari Akun ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Keluar',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.value) {
          Swal.fire({
              title: 'Berhasil!',
              text: 'Logout berhasil',
              icon: 'success',
              showConfirmButton: false,
              timer: 1500,
            })
            .then(() => {
              window.location.href = site_url + '/auth/logout'
            })
        }
      })
    }
  </script>

  <script>
      function filterFunction(that, event) {
          let container, input, filter, li, input_val;
          container = $(that).closest(".searchable");
          input_val = container.find("input").val().toUpperCase();
          if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
              keyControl(event, container);
          } else {
              li = container.find("ul li");
              li.each(function(i, obj) {
                  if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                      $(this).show();
                  } else {
                      $(this).hide();
                  }
              });
              container.find("ul li").removeClass("selected");
              setTimeout(function() {
                  container.find("ul li:visible").first().addClass("selected");
              }, 100);
          }
      }

      function keyControl(e, container) {
          if (e.key == "ArrowDown") {
              if (container.find("ul li").hasClass("selected")) {
                  if (
                      container
                      .find("ul li:visible")
                      .index(container.find("ul li.selected")) +
                      1 <
                      container.find("ul li:visible").length
                  ) {
                      container
                          .find("ul li.selected")
                          .removeClass("selected")
                          .nextAll()
                          .not('[style*="display: none"]')
                          .first()
                          .addClass("selected");
                  }
              } else {
                  container.find("ul li:first-child").addClass("selected");
              }
          } else if (e.key == "ArrowUp") {
              if (
                  container.find("ul li:visible").index(container.find("ul li.selected")) >
                  0
              ) {
                  container
                      .find("ul li.selected")
                      .removeClass("selected")
                      .prevAll()
                      .not('[style*="display: none"]')
                      .first()
                      .addClass("selected");
              }
          } else if (e.key == "Enter") {
              container.find("input").val(container.find("ul li.selected").text()).blur();
              onSelect(container.find("ul li.selected").text());
          }
      }

      function onSelect(val) {}
      $(".searchable input").focus(function() {
          $(this).closest(".searchable").find("ul").show();
          $(this).closest(".searchable").find("ul li").show();
          $('.submit__btn').css({
              "display": "block"
          })
          $('.close__btn').css({
              "display": "block"
          })
          $('.search__btn').css({
              'display': "none"
          })
      });
      $(".searchable input").blur(function() {
          let that = this;
          setTimeout(function() {
              $(that).closest(".searchable").find("ul").hide();
              $('.search__btn').css({
                  'display': "block"
              })
              $('.submit__btn').css({
                  "display": "none"
              })
              $('.close__btn').css({
                  "display": "none"
              })
          }, 300);
      });
      $('.search__btn').on("click", function() {
          $(this).closest(".searchable").find("input").val($(this).text()).blur();
          onSelect($(this).text());
      });
      $(document).on("click", ".searchable ul li", function() {
          $(this).closest(".searchable").find("input").val($(this).text()).blur();
          onSelect($(this).text());
      });
      $(".searchable ul li").hover(function() {
          $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
          $(this).addClass("selected");
      });
      $('.close__btn').on('click', function() {
          $('.searchable').find("input").val($(this).text()).blur()
          $(this).css({
              "display": "none"
          })
      })
  </script>