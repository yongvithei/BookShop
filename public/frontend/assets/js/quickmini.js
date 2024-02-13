
    $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

    function addToCart() {
        let product_name = $('#pname').text();
        let id = $('#product_id').val();
        let quantity = $('#quantityInput').val();
        let price = parseFloat($('#pprice').text().replace('KHR', '')); // Extract and parse the price

        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {
                quantity: quantity,
                product_name: product_name,
                price: price // Include the product price
            },
            url: "/cart/data/store/" + id,
            success: function(data) {
                // console.log(data);
                miniCart();
                $('#closeModal').click();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                });
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        icon: 'success',
                        title: data.success
                    });
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: data.error
                    });
                }
            }
        });
    }

    function miniCart() {
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart',
            dataType: 'json',
            success: function (response) {
                // console.log(response)
                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
                $('#cartQty2').text(response.cartQty);
                var miniCart = "";

                $.each(response.carts, function (key, value) {
                    // Truncate the product name if it's too long
                    var truncatedName = value.name.length > 28 ? value.name.substring(0, 28) + '...' : value.name;

                    // Construct the full image URL based on your image data
                    var imageUrl = value.options.image ? '/' + value.options.image : '/storage/images/pro_img.jpg';

                    miniCart += '<div class="dropdown-item" href="javascript:;">' +
                        '<div class="d-flex align-items-center">' +
                        '<div class="flex-grow-1">' +
                        '<h6 class="cart-product-title" title="' + value.name + '">' + truncatedName + '</h6>' +
                        '<p class="cart-product-price">' + value.qty + ' X ' + value.price + ' ' + lang.khr + '</p>' +
                        '</div>' +
                        '<div class="position-relative">' +
                        '<div class="cart-product-cancel position-absolute">' +
                        '<button type="submit" id="' + value.rowId + '" onclick="miniCartRemove(this.id)">' +
                        '<i class="bx bx-x"></i>' +
                        '</button>' +
                        '</div>' +
                        '<div class="cart-product">' +
                        '<img src="' + imageUrl + '" class="" alt="product image">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                });

                $('#miniCart').html(miniCart);
            }
        });
    }
    miniCart();
    /// Mini Cart Remove Start
    function miniCartRemove(rowId) {
    $.ajax({
        type: 'GET',
        url: '/minicart/product/remove/' + rowId,
        dataType: 'json',
        success: function (data) {
            miniCart();
            // Start Message
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000
            });
            if ($.isEmptyObject(data.error)) {
                Toast.fire({
                    icon: 'success',
                    title: data.success
                });
            } else {
                Toast.fire({
                    icon: 'error',
                    title: data.error
                });
            }
            // End Message
        }
    });
}


    <!--  /// Start Wishlist Add -->

    function addToWishList(product_id) {
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "/addWishlist/" + product_id,
        success: function (data) {
            // Start Message
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000
            })
            if ($.isEmptyObject(data.error)) {
                // If the request is successful, you can add a link to the message
                const messageWithLink = `
                        <div>
                            <a href="/wishlist">Go to Wishlist</a>
                        </div>
                    `;
                Toast.fire({
                    icon: 'success',
                    title: data.success,
                    html: messageWithLink, // Use the html option to include the link
                });
            } else {
                const messageWithLink = `
                        <div>
                            <a href="/wishlist">Go to Wishlist</a>
                        </div>
                    `;
                Toast.fire({
                    icon: 'error',
                    title: data.error,
                    html: messageWithLink,
                });
            }
            //end message
        }
    });
}

