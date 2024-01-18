@extends('admin.index')

<meta name="_token" content="{{ csrf_token() }}">
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/dropzone/min/dropzone.min.css') }}">
@section('admin')
<style>
    .image-card {
        position: relative;
    }

    .image-card .btn-danger {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
        background-color: red;
        color: white;
        padding: 5px 10px;
    }

    .image-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 150%;
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


</style>


    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif

        <form name="productForm" id="productForm" action="" method="POST" onsubmit="return false;" enctype="multipart/form-data">

            <!-- Info -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('crud_p.info') }}</h3>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                                <div class="mb-2">
                                    <label class="form-label" for="name">{{ __('crud_p.name') }}</label>
                                    <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name">
                                    <p></p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="price">{{ __('crud_p.price') }}</label>
                                        <input value="{{ $product->price }}" type="text" class="form-control" id="price" name="price">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="price_dis">{{ __('crud_p.discount_price') }}</label>
                                        <input value="{{ $product->discount_price }}" type="text" class="form-control" id="price_dis" name="price_dis">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="pro_qty">{{ __('crud_p.stock') }}</label>
                                        <input value="{{ $product->pro_qty }}" type="text" class="form-control" id="pro_qty" name="pro_qty">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="pro_code">{{ __('crud_p.product_code') }}</label>
                                        <input value="{{ $product->pro_code }}" type="text" class="form-control" id="pro_code" name="pro_code">
                                        <p></p>
                                    </div>

                                </div>

                                <div class="mb-4">
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <label class="form-label" for="cate_Id">{{ __('crud_p.category') }}</label>
                                   <select class="js-select2 form-select" id="cate_Id" name="cate_Id" style="width: 100%;" data-placeholder="{{ $productView->cate_names }}">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>

                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="subcate_Id">{{ __('crud_p.subcategory') }}</label>
                                    <select class="js-select2 form-select" id="subcate_Id" name="subcate_Id" style="width: 100%;" data-placeholder="{{ $productView->sub_names }} ">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}>{{ $subcategory->sub_name }}</option>
                                        @endforeach
                                    </select>
                                    <p></p>
                                </div>
                            <div class="mb-4">
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                    <label class="form-label" for="part_id">{{ __('crud_p.partner_supplier') }}</label>
                                    <select class="js-select2 form-select" id="part_id" name="part_id" style="width: 100%;" data-placeholder="{{ $productView->partner_name }}">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($partners as $partner)
                                            <option value="{{ $partner->id }}" {{ $partner->id == $product->partner_id ? 'selected' : '' }}>{{ $partner->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.jqMaxlength()) -->
                                    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                                    <label class="form-label" for="short_desc">{{ __('crud_p.short_description') }}</label>
                                    <textarea class="js-maxlength form-control" id="short_desc" name="short_desc" rows="3" maxlength="250" data-always-show="true" data-placement="top">{{ $product->short_desc }}</textarea>
                                    <div class="form-text">
                                        250 {{ __('crud_p.character_max') }}
                                    </div>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                                    <label class="form-label">{{ __('crud_p.description') }}</label>
                                    <textarea value="{{ $product->long_desc }}" id="js-ckeditor" name="long_desc">{{ $product->long_desc }}</textarea>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">{{ __('crud_p.product_status') }}</label>
                                    <div class="space-x-2">
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="1" id="new" name="new" {{ $product->new == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="new">{{ __('crud_p.new_arrivals') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured" {{ $product->featured == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="featured">{{ __('crud_p.featured') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">{{ __('crud_p.published') }}?</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status" {{ $product->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status"></label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary btn-lg">{{ __('crud_p.create') }}</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Info -->

            <!-- Media -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('crud_p.media') }}</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <label for="thumbnail" class="form-label">{{ __('crud_p.thumbnail_label') }}</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                            <input type="hidden" name="old_img" value="{{ $product->thumbnail }}">
                            <div class="row justify-content-center mt-4">
                            @if($product->thumbnail)
                                <img id="preview-image" src="{{ asset($product->thumbnail) }}" style="width: 206px;" alt="">
                            @else
                                <img id="preview-image" src="{{ asset('/storage/images/default_product_table.webp') }}" style="width: 206px;" alt="Default Image">
                            @endif
                            </div>
                        </div>
                    </div>
                    <p></p>
                </div>
                <div class="block-content block-content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <label for="multi" class="form-label">{{ __('crud_p.multi_image_label') }}</label>
                            <div id="image" class="dropzone dz-clickable">
                                    <div class="dz-message needsclick">
                                        <br>{{ __('crud_p.multi_image_upload') }}<br><br>
                                        </div>
                                    </div>

                            </div>
                            </div>
                    <div class="row m-4" id="image-wrapper">
                        @if($productImages->isNotEmpty())
                            @foreach ($productImages as $productImage)
                                <div class="col-md-4 mb-3" id="product-image-row-{{ $productImage->id }}">
                                    <div class="card image-card">
                                        <a href="#" onclick="deleteImage({{ $productImage->id }});" class="btn btn-danger">{{ __('crud_p.delete_button') }}</a>
                                        <img src="{{ asset('uploads/products/small/'.$productImage->name) }}" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <input type="text" name="caption[]"  value="{{ $productImage->caption }}" class="form-control"/>
                                            <input type="hidden" name="image_id[]"  value="{{ $productImage->id }}" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                        </div>
                    </div>


            </form>
            <!-- END Media -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    <!-- jQuery (required for Select2 + Bootstrap Maxlength plugin) -->
    <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Page JS Helpers (Select2 + Bootstrap Maxlength + CKEditor plugins) -->
    <script>One.helpersOnLoad(['jq-select2', 'jq-maxlength', 'js-ckeditor']);</script>


    <script type="text/javascript">

                $(document).ready(function(){
                    $('select[name="cate_Id"]').on('change', function(){
                        var cate_Id = $(this).val();
                        if (cate_Id) {
                            $.ajax({
                                url: "{{ url('/subcategory/ajax') }}/"+cate_Id,
                                type: "GET",
                                dataType:"json",
                                success:function(data){
                                    $('select[name="subcate_Id"]').html('');
                                    var d =$('select[name="subcate_Id"]').empty();
                                    $.each(data, function(key, value){
                                        $('select[name="subcate_Id"]').append('<option value="'+ value.id + '">' + value.sub_name + '</option>');
                                    });
                                },
                            });
                        } else {
                            alert('danger');
                        }
                    });
                });


        var product_id = {{ $product->id }}
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
        uploadprogress: function(file, progress, bytesSent) {
            $("button[type=submit]").prop('disabled',true);
        },
        url:  "{{ route('product-images.store') }}",
        params: {product_id:product_id},
        maxFiles: 10,
        paramName: 'image',
        addRemoveLinks: true,
        acceptedFiles: "image/jpeg,image/png,image/gif",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }, success: function(file, response){
            var html = `<div class="col-md-4 mb-3" id="product-image-row-${response.image_id}">
                            <div class="card image-card">
                                <a href="#" onclick="deleteImage(${response.image_id});" class="btn btn-danger">{{ __('crud_p.delete_button') }}</a>
                                <div class="image-container">
                                    <img src="${response.imagePath}" alt="Book Cover" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <input type="text" name="caption[]"  value="" class="form-control" placeholder="{{ __('crud_p.caption_placeholder') }}">
                                    <input type="hidden" name="image_id[]" value="${response.image_id}">
                                </div>
                            </div>
                        </div>`;
                $("#image-wrapper").append(html);
                $("button[type=submit]").prop('disabled',false);
            this.removeFile(file);
        }
    });


    $("#productForm").submit(function(event){
        event.preventDefault();
        $("button[type=submit]").prop('disabled',true);
        CKEDITOR.instances['js-ckeditor'].updateElement();
        var formData = new FormData(this);
        $.ajax({
            url: "{{ route('pro.update',$product->id) }}",
            data: formData,
            method: 'post',
            dataType:'json',
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(response){
                $("button[type=submit]").prop('disabled',false);
                if(response.status == true) {
                    window.location.href="{{ route('pro.index') }}";
                } else {
                    var errors = response.errors;
                    if (errors.name) {
                        $("#name").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.name);
                    } else{
                        $("#name").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html("");
                    }
                    if (errors.price) {
                        $("#price").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.price);
                    } else{
                        $("#price").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html("");
                    }
                }
            }
        });
    });

    function preview() {
        $('#thumbnail').change(function () {
            var file = this.files[0];
            if (file) {
                var allowedExtensions = ['svg','jpg', 'jpeg', 'png', 'gif'];
                var fileExtension = file.name.split('.').pop().toLowerCase();
                if (allowedExtensions.indexOf(fileExtension) === -1) {
                    $('#thumbnail').val(''); // Clear the file input
                    $('#preview-image').attr('src', ''); // Clear the image source
                    alert('Please select a valid image file (svg, jpg, jpeg, png, gif).');
                } else {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview-image').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            } else {
                $('#preview-image').attr('src', '');
            }
        });
    }
    preview();

    function deleteImage(id){
        if (confirm("Are you sure you want to delete?")) {
            var URL = "{{ route('product-images.delete','ID') }}";
            newURL = URL.replace('ID',id)

            $("#product-image-row-"+id).remove();

            $.ajax({
                url: newURL,
                data: {},
                method: 'delete',
                dataType:'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(response){
                    window.location.href='{{ route("pro.edit",$product->id) }}';
                }
            });
        }
    }

</script>

@endsection
