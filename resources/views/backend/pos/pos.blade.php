@extends('backend.pos.index')
@section('pos')

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('admin/assets/js/plugins/select2/css/select2.min.css')}}">
<style>
.placeholder-text::placeholder {
  color: black;
}
</style>
@vite(['resources/js/components/Cart.jsx'])
<!-- Main Container -->
<main id="main-container">
    <!-- Navigation -->
    @include('backend.pos.body.nav')
    <!-- END Navigation -->
    <!-- Page Content -->
    <div class="content">
        <!-- Toggle Side Content -->
        <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->

        <div class="d-xl-none push">
            <div class="row g-sm">
                <div class="col-6">
                    <button type="button" class="btn btn-alt-secondary w-100" data-toggle="class-toggle"
                            data-target=".js-ecom-div-nav" data-class="d-none">
                        <i class="fa fa-fw fa-bars text-muted me-1"></i> {{ __('pos_p.selling_info') }}
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-alt-secondary w-100" data-toggle="class-toggle"
                            data-target=".js-ecom-div-cart" data-class="d-none">
                        <i class="fa fa-fw fa-shopping-cart text-muted me-1"></i> {{ __('pos_p.cart') }}
                    </button>
                </div>
            </div>
        </div>
        <!-- END Toggle Side Content -->



            <div id="cart"> </div>



    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>


<script src="{{asset('admin/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Page JS Helpers (Select2 plugin) -->
<script>
    One.helpersOnLoad(['jq-select2']);

    window.tr_p = <?php echo json_encode([
        'saveChanges' => __('pos_p.save_changes'),
        'close' => __('pos_p.close'),
        'note' => __('pos_p.note'),
        'customer' => __('pos_p.customer'),
        'online_bank' => __('pos_p.online_bank'),
        'cash' => __('pos_p.cash'),
        'payment_type' => __('pos_p.payment_type'),
        'KHR' => __('pos_p.khr'),
        'price' => __('pos_p.price'),
        'received_amount' => __('pos_p.received_amount'),
        'total_amount' => __('pos_p.total_amount'),
        'selling_info' => __('pos_p.selling_info'),
        'add_to_cart' => __('pos_p.add_to_cart'),
        'view' => __('pos_p.view'),
        'actions' => __('pos_p.actions'),
        'amount' => __('pos_p.amount'),
        'name' => __('pos_p.name'),
        'id' => __('pos_p.id'),
        'invoice' => __('pos_p.invoice'),
        'submit' => __('pos_p.submit'),
        'cancel' => __('pos_p.cancel'),
        'total' => __('pos_p.total'),
        'qty' => __('pos_p.qty'),
        'barcode' => __('pos_p.barcode'),
        'success' => __('pos_p.success'),
        // Add other translations as needed
    ]); ?>;

</script>
@endsection
