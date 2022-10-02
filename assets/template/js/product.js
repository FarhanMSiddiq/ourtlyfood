function add2cart() {
    var stock = $("#product-stock").text();
    var quantity = $("#product-quantity").val();
    var data = $("#product-form").serialize();
    var number_cart = $("#number-cart").val();
    var total = parseInt(quantity) + parseInt(number_cart);

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