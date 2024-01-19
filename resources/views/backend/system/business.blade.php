@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
#imageContainer {
    width: 150px;
    height: 150px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ccc; /* Add a border for better visibility */
    background-color: #f8f8f8; /* Add a background color if needed */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
}

#imagePreview {
    width: 100%;
    height: 100%;
    background-image: url('{{asset('admin/assets/media/avatars/avatar13.jpg')}}');
    background-size: cover;
    background-position: center;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

    <main id="main-container">
        <!-- Hero -->

        <div class="content content-boxed">
    <!-- Company Information -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('backup.company_information') }}</h3>
                </div>
                <div class="block-content">
                    <form id="myForm" action="" method="POST" onsubmit="return false;">
                        <div class="row push">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    {{ __('backup.company_information_description') }}
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                            <input type="hidden" id="id" name="id" value="{{$item->id}}">


                                <div class="mb-3">
                                <label class="form-label" for="name">{{ __('backup.company_name') }}</label>
                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                        <i class="fa fa-city"></i>
                                                        </span>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}" placeholder="{{ __('backup.company_name_khmer') }}" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                        <i class="fa fa-city"></i>
                                                        </span>
                                        <input type="text" class="form-control" id="name_kh" name="name_kh" value="{{$item->name_kh}}" placeholder="{{ __('backup.company_name_khmer') }}" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="support_phone">{{ __('backup.support_phone') }}</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="si si-earphones-alt"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="support_phone" name="support_phone" value="{{$item->support_phone}}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">{{ __('backup.email') }}</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class=" fa fa-inbox"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="email" name="email" value="{{$item->email}}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address">{{ __('backup.address') }}</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="{{ __('backup.address_placeholder') }}">{{$item->address}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="address_kh" name="address_kh" rows="3" placeholder="{{ __('backup.address_khmer_placeholder') }}">{{$item->address_kh}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="information">{{ __('backup.information') }}</label>
                                    <textarea class="form-control" id="information" name="information" rows="3" placeholder="{{ __('backup.information_placeholder') }}">{{$item->information}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="information_kh" name="information_kh" rows="3" placeholder="{{ __('backup.information_khmer_placeholder') }}">{{$item->information_kh}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="map">{{ __('backup.map_link') }}</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="far fa-map"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="map" name="map" value={{$item->map}}>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="facebook">{{ __('backup.facebook_link') }}</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fab fa-facebook"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value={{$item->facebook}}>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="telegram">{{ __('backup.telegram_link') }}</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fab fa-telegram"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="telegram" name="telegram" value={{$item->telegram}}>
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label" for="exchange">{{ __('backup.exchange_rate') }} 1$</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fa fa-money-bill-transfer"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="exchange" name="exchange" value={{$item->exchange}}>
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">{{ __('backup.logo') }}</label>
                                <div class="mb-3">
                                <div id="imageContainer" style="overflow: hidden;">
                                    <img id="imagePreview" src="{{ asset('storage/' . $item->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="imageInput" class="form-label">{{ __('backup.choose_image') }}</label>
                                    <input class="form-control" type="file" id="imageInput" name="image" accept="image/">
                                </div>

                                <div class="mb-4">
                                    <button id="submitForm" type="button" class="btn btn-alt-primary">
                                        {{ __('backup.update') }}
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- END Company Information -->

        <!-- Page JS Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $(document).ready(function () {
        // Image preview before upload
            $('#imageInput').change(function () {
                readURL(this);
            });
        // Handle form submission
        $('#submitForm').on('click', function () {
            var formData = new FormData($('#myForm')[0]);
            $.ajax({
                type: 'POST',
                url: '{{ route('sitePush') }}',
                data: formData,
                dataType: 'json',
                processData: false,  // Important
                contentType: false,
                    success: function (response) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 6000
                    });

                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    });
                },
                error: function (error) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 6000
                    });

                    Toast.fire({
                        icon: 'error',
                        title: error.responseJSON.message
                    });
                }
            });
        });

    });
    // Function to read and display image preview
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imagePreview').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

</script>

@endsection
