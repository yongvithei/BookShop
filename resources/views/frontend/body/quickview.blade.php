<!--start quick view product-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Modal -->
<div class="modal fade" id="QuickViewProduct">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
        <div class="modal-content rounded-0 border-0">
            <div class="modal-body">
                <button type="button" class="text-2xl btn-close float-end" data-bs-dismiss="modal"> <i
                        class='bx bx-x'></i></button>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="image-zoom-section">
                            <img src="" class="img-fluid"
                                alt="" id="pimage">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0" id="pname">Product Name</h3>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                <h5 class="mb-0 text-decoration-line-through text-light-3" id="dprice"></h5>
                                <h4 class="mb-0" id="pprice"></h4>
                            </div>
                            <div class="row row-cols-auto align-items-center mt-2" id="qtyPanel">
                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" class="form-control" min="0" max="999" value="1"
                                            id="quantityInput">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="decrementQuantity">−</button>
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="incrementQuantity">+</button>
                                    </div>
                                </div>
                            </div>

                            <label class="form-label text-red-600" id="pqty"></label>

                            <div class="product-rating d-flex align-items-center mt-0">
                                <div class="rates cursor-pointer font-13"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-light-4"></i>
                                </div>
                                <div class="ms-1">
                                    <p class="mb-0">(24 Ratings)</p>
                                </div>
                            </div>
                            <dl class="row mt-1">
                                <dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9" id="pcode"></dd>
                            </dl>
                            <div class="row mt-1">
                                <dt class="col-sm-3">Category</dt>
                                <dd class="col-sm-9" id="pcate"></dd>
                            </div>
                            <div class="row mt-1 mb-2">
                                <dt class="col-sm-3">SubCategory</dt>
                                <dd class="col-sm-9" id="psubcate"></dd>
                            </div>


                            <!--end row-->
                            <div class="d-flex gap-2 mt-3">
                                <a onclick="addToCart()" class="rounded-xl btn btn-dark btn-ecomm"> <i
                                        class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;"
                                    class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"><i
                                        class="bx bx-heart"></i>Add to Wishlist</a>
                            </div>
                            <div class="mt-3">
                                <h6>Discription :</h6>
                                <p class="mb-0" id="short"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<!--end quick view product-->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let pQty = 0;
    // Start product view with Modal 
    function productView(id) {
        // alert(id)
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/' + id,
            dataType: 'json',
            success: function (data) {
                pQty = parseInt(data.product.pro_qty);
                $('#quantityInput').val(1);
                // Rest of your code for updating other elements
                $('#pname').text(data.product.name || 'N/A');
                $('#pcode').text(data.product.id || 'N/A');
                $('#pprice').text('$' + (data.product.discount_price || data.product.price || 'N/A'));
                $('#pqty').text(data.product.qty || 'N/A');
                if (data.product.category) {
                    $('#pcate').text(data.product.category.name || 'N/A');
                } else {
                    $('#pcate').text('N/A');
                }
                if (data.product.subcategory) {
                    $('#psubcate').text(data.product.subcategory.sub_name || 'N/A');
                } else {
                    $('#psubcate').text('N/A');
                }
                $('#short').text(data.product.short_desc || 'Not Available');
                $('#pimage').attr('src', '/' + (data.product.thumbnail || 'default-image.jpg'));
                // Stock Availability
                if (data.product.pro_qty > 0) {
                    $('#pqty').text(data.product.pro_qty + ' Available');
                    $('#pqty').removeClass('text-red-600');
                } else {
                    $('#quantityInput').val(0);
                    $('#pqty').text('Stock Out');
                    $('#pqty').addClass('text-red-600');
                }
            }
        });
    }
    const incrementButton = document.getElementById('incrementQuantity');
    const decrementButton = document.getElementById('decrementQuantity');
    const quantityInput = document.getElementById('quantityInput');
    // Check if pQty is NaN
    if (isNaN(pQty)) {
        quantityInput.style.display = 'none'; // Hide the input
    }
    quantityInput.addEventListener('input', function () {
    // Remove any non-numeric characters
    quantityInput.value = quantityInput.value.replace(/\D/g, '');
    let currentValue = parseInt(quantityInput.value);
    // Limit the input to the maximum available quantity (pQty)
    if (currentValue > pQty || isNaN(pQty)) {
    currentValue = pQty;
    }
    // Update the input field value
    quantityInput.value = currentValue;
    });
    incrementButton.addEventListener('click', function () {
        const currentValue = parseInt(quantityInput.value);
        if (currentValue < pQty) {
            quantityInput.value = currentValue + 1;
        }
    });
    decrementButton.addEventListener('click', function () {
        const currentValue = parseInt(quantityInput.value);
        if (currentValue > 0) {
            quantityInput.value = currentValue - 1;
        }
    });
</script>
