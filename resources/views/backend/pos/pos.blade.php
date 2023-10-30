@extends('backend.pos.index')
@section('pos')

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('admin/assets/js/plugins/select2/css/select2.min.css')}}">

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
                        <i class="fa fa-fw fa-bars text-muted me-1"></i> Selling info
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-alt-secondary w-100" data-toggle="class-toggle"
                        data-target=".js-ecom-div-cart" data-class="d-none">
                        <i class="fa fa-fw fa-shopping-cart text-muted me-1"></i> Cart
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

</script>
@endsection
