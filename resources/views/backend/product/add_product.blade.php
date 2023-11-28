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
                                <a class="link-fx" href="javascript:void(0)">Products</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Add Product
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
                    <h3 class="block-title">Info</h3>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                                <div class="mb-2">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    <p></p>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6">
                                        <label class="form-label" for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="price_dis">Discount Price</label>
                                        <input type="text" class="form-control" id="price_dis" name="price_dis">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label class="form-label" for="pro_qty">Stock</label>
                                        <input type="text" class="form-control" id="pro_qty" name="pro_qty">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="pro_code">Product Code</label>
                                        <input type="text" class="form-control" id="pro_code" name="pro_code">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <label class="form-label" for="cate_Id">Category</label>
                                    <select class="js-select2 form-select" id="cate_Id" name="cate_Id" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="subcate_Id">Subcategory</label>
                                    <select class="js-select2 form-select" id="subcate_Id" name="subcate_Id" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->sub_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="part_id">Partner Or Supplier</label>
                                    <select class="js-select2 form-select" id="part_id" name="part_id" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($partners as $partner)
                                            <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.jqMaxlength()) -->
                                    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                                    <label class="form-label" for="short_desc">Short Description</label>
                                    <textarea class="js-maxlength form-control" id="short_desc" name="short_desc" rows="3" maxlength="250" data-always-show="true" data-placement="top"></textarea>
                                    <p></p>
                                    <div class="form-text">
                                        250 Character Max
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                                    <label class="form-label">Description</label>
                                    <textarea id="js-ckeditor" name="long_desc"></textarea>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 form-label">Product Status</label>
                                    <div class="space-x-2">
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="1" id="new" name="new">
                                        <label class="form-check-label" for="new">New Arrivals</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured">
                                        <label class="form-check-label" for="featured">Featured</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Published?</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status" checked>
                                        <label class="form-check-label" for="status"></label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">Create</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Info -->
            <!-- Media -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Media</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
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
                            <label for="multi" class="form-label">Multi Image</label>
                            <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needsclick">
                                    <br>Drop files here or click to upload.<br><br>
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
    $("button[type=submit]").prop('disabled', true);
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
                    if (errors.pro_code) {
                        $("#pro_code").addClass('is-invalid')
                            .siblings("p")
                            .addClass('invalid-feedback')
                            .html(errors.pro_code);
                    } else{
                        $("#pro_code").removeClass('is-invalid')
                            .siblings("p")
                            .removeClass('invalid-feedback')
                            .html("");
                    }
                if (errors.price_dis) {
                    $("#price_dis").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.price_dis);
                } else{
                    $("#price_dis").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html("");
                }

                if (errors.pro_qty) {
                    $("#pro_qty").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.pro_qty);
                } else{
                    $("#pro_qty").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html("");
                }
                if (errors.short_desc) {
                    $("#short_desc").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.pro_qty);
                } else{
                    $("#short_desc").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html("");
                }
                if (errors.long_desc) {
                    $("#long_desc").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.pro_qty);
                } else{
                    $("#long_desc").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html("");
                }

                }
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
