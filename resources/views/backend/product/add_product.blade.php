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
    <div id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="javascript:void(0)">{{ __('crud_p.products') }}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                {{ __('crud_p.add_product') }}
                            </li>
                        </ol>
                    </nav>
                </div>

        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content">
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
                                    <input type="text" class="form-control" id="name" name="name">
                                    <p></p>
                                </div>
                            <div class="mb-0">
                                <label class="form-label" for="pro_kh">{{ __('crud_p.nameKH') }}</label>
                                <input type="text" class="form-control" id="pro_kh" name="pro_kh">
                                <span id="name_error" class="text-danger" style="display: none;">{{ __('crud_p.field_required_each') }}</span>
                                <p></p>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6">
                                    <label class="form-label" for="price">{{ __('crud_p.price') }}</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                    <p></p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="price_dis">{{ __('crud_p.discount_price') }}</label>
                                    <input type="text" class="form-control" id="price_dis" name="price_dis">
                                    <p></p>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="pro_qty">{{ __('crud_p.stock') }}</label>
                                    <input type="text" class="form-control" id="pro_qty" name="pro_qty">
                                    <p></p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="pro_code">{{ __('crud_p.product_code') }}</label>
                                    <input type="text" class="form-control" id="pro_code" name="pro_code">
                                    <p></p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="cate_Id">{{ __('crud_p.category') }}</label>
                                <select class="js-select2 form-select" id="cate_Id" name="cate_Id" style="width: 100%;" data-placeholder="{{ __('crud_p.choose_one') }}">
                                    <option></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                            @if(session()->get('locale') == 'en')
                                                {{ $category->name ?: $category->cat_kh }}
                                            @else
                                                {{ $category->cat_kh ?: $category->name }}
                                            @endif</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="subcate_Id">{{ __('crud_p.subcategory') }}</label>
                                <select class="js-select2 form-select" id="subcate_Id" name="subcate_Id" style="width: 100%;" data-placeholder="{{ __('crud_p.choose_one') }}">
                                    <option></option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">@if(session()->get('locale') == 'en') {{ $subcategory->sub_name }} @else {{ $subcategory->sub_kh }} @endif</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="part_id">{{ __('crud_p.partner_supplier') }}</label>
                                <select class="js-select2 form-select" id="part_id" name="part_id" style="width: 100%;" data-placeholder="{{ __('crud_p.choose_one') }}">
                                    <option></option>
                                    @foreach($partners as $partner)
                                        <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="short_desc">{{ __('crud_p.short_description') }}</label>
                                <textarea class="js-maxlength form-control" id="short_desc" name="short_desc" rows="3" maxlength="250" data-always-show="true" data-placement="top"></textarea>
                                <p></p>
                                <div class="form-text">
                                    250 {{ __('crud_p.character_max') }}
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">{{ __('crud_p.description') }}</label>
                                <textarea id="js-ckeditor" name="long_desc"></textarea>
                                <p></p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-2 form-label">{{ __('crud_p.product_status') }}</label>
                                <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="1" id="new" name="new">
                                        <label class="form-check-label" for="new">{{ __('crud_p.new_arrivals') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured">
                                        <label class="form-check-label" for="featured">{{ __('crud_p.featured') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">{{ __('crud_p.published') }}</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" value="1" id="status" name="status" checked>
                                    <label class="form-check-label" for="status"></label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="btn btn-alt-primary">{{ __('crud_p.create') }}</button>
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
                            <div class="row justify-content-center mt-4">
                                <img id="preview-image" style="width: 206px;" alt="">
                            </div>
                        </div>
                    </div>
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
                        <!-- Additional content here -->
                    </div>
                </div>
            </div>


        </form>
            </div>
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

    <script src="{{ asset('admin/assets/js/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
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
                                success: function (data) {
                                    $('select[name="subcate_Id"]').html('');
                                    $.each(data, function (key, value) {
                                        var subcategoryName = '{{ session()->get('locale') == 'en' ? 'sub_name' : 'sub_kh' }}';
                                        var displayValue = value[subcategoryName] || (subcategoryName === 'sub_name' ? value.sub_kh : value.sub_name);
                                        $('select[name="subcate_Id"]').append('<option value="' + value.id + '">' + displayValue + '</option>');
                                    });
                                }

                            });
                        } else {
                            alert('danger');
                        }
                    });
                });
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
        uploadprogress: function(file, progress, bytesSent) {
            $("button[type=submit]").prop('disabled',true);
        },
        url:  "{{ route('temp-images.create') }}",
        maxFiles: 10,
        paramName: 'image',
        addRemoveLinks: true,
        acceptedFiles: "image/jpeg,image/png,image/gif",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }, success: function(file, response){
                var html = `<div class="col-md-4 mb-3" id="product-image-row-${response.image_id}">
                            <div class="card image-card">
                                <a href="#" onclick="deleteImage(${response.image_id});" class="btn btn-danger">Delete</a>
                                <div class="image-container">
                                    <img src="${response.imagePath}" alt="Book Cover" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <input type="text" name="caption[]"  value="" class="form-control" placeholder="Caption">
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
            var nameVal = $('#name').val().trim();
            var nameKhVal = $('#pro_kh').val().trim();
            if (nameVal === '' && nameKhVal === '') {
                $('#name_error').show();
                return;
            }
            $('#name_error').hide();
    $("button[type=submit]");
    CKEDITOR.instances['js-ckeditor'].updateElement();

    var formData = new FormData(this); // Create a FormData object from the form

    $.ajax({
        url: "{{ route('pro.store') }}",
        data: formData, // Use the FormData object
        method: 'post',
        dataType: 'json',
        processData: false, // Don't process the data
        contentType: false, // Don't set content type (let jQuery handle it)
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (response) {
            $("button[type=submit]").prop('disabled', false);

            if (response.status == true) {
                window.location.href = "{{ route('pro.index') }}";
            } else {
                    var errors = response.errors;
                errors.name ? $("#name").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.name) : $("#name").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.price ? $("#price").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.price) : $("#price").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.pro_kh ?
                    $("#pro_kh").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.pro_kh) : $("#pro_kh").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.pro_code ? $("#pro_code").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.pro_code) : $("#pro_code").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.price_dis ? $("#price_dis").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.price_dis) : $("#price_dis").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.pro_qty ? $("#pro_qty").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.pro_qty) : $("#pro_qty").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.short_desc ? $("#short_desc").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.pro_qty) : $("#short_desc").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html(""), errors.long_desc ? $("#long_desc").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.pro_qty) : $("#long_desc").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html("");                }
            }
        });
        })

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
                $("#product-image-row-"+id).remove();
            }
        }
</script>

@endsection
