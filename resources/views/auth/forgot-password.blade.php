@extends('frontend.index')
@section('main')
    @section('title')
        Forget Password
    @endsection

    <!--start shop cart-->
    <section class="">
        <div class="container">
            <div class="mt-4 d-flex align-items-center justify-content-center">
                <div class="card forgot-box rounded-xl">
                    <div class="card-body">
                        <div class="p-4 rounded border mx-auto">
                            <div class="text-center">
                                <img src="{{asset('/frontend/assets/images/icons/forgot-password.png')}}" width="81" height="81" alt="" class="mx-auto" />
                            </div>
                            <h4 class="mt-5 font-weight-bold text-lg">{{ __('main.forgot_password?') }}</h4>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <label class="">{{ __('main.enter_emails') }}</label>
                                <div class="my-3">
                                    <input id="email" type="text" class="form-control form-control-lg rounded-lg"
                                           placeholder="{{ __('main.email_placeholder') }}"
                                           type="email" name="email" value="{{ old('email') }}" required autofocus />
                                    @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Session Status -->
                                @if(session('status'))
                                    <div class="my-2 text-green-700">{{ __('main.status_message') }}</div>
                                @endif

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn bg-gray-900 btn-lg text-white rounded-lg">
                                        {{ __('main.send_button') }}
                                    </button>
                                    <a href="{{ route('login') }}" class="btn btn-light btn-lg rounded-lg">
                                        <i class='bx bx-arrow-back me-1'></i>{{ __('main.back_to_login') }}
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end shop cart-->
@endsection
