@extends('frontend.index')
@section('main')

<!--start page wrapper -->
<div >
			<div class="page-content">
				<!--start breadcrumb-->
                <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                    <div class="container">
                        <div class="page-breadcrumb d-flex align-items-center">
                            <h3 class="breadcrumb-title pe-3">{{ __('main.password') }}</h3>
                            <div class="ms-auto">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('main.home') }}</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.account') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('main.password') }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<div class="container">
						<h3 class="d-none">Account</h3>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4">
										@include('frontend.dashboard.sidebar')
									</div>
									<div class="col-lg-8">
                                        @if (session('status') === 'password-updated')
                                            <div class="alert alert-success alert-dismissible text-center" role="alert">
                                                <p class="mb-0">Update successful</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif
										<div class="card shadow-none mb-0 border">
											<div class="card-body">
                                                <form method="post" class="row g-3" action="{{ route('password.update') }}">
                                                    @csrf
                                                    @method('put')

    <div class="col-12">
        <label for="current_password" class="form-label">@lang('main.current_password')</label>
        <input type="password" class="form-control" id="current_password" name="current_password">
        <span class="text-danger">{{ $errors->updatePassword->first('current_password') }}</span>
    </div>
    <div class="col-12">
        <label class="form-label" for="password">@lang('main.new_password')</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
        <span class="text-danger">{{ $errors->updatePassword->first('password') }}</span>
    </div>
    <div class="col-12">
        <label class="form-label" for="password_confirmation">@lang('main.confirm_new_password')</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        <span class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</span>
    </div>
    <div class="col-12">
        <button type="submit" class="bg-dark text-white btn-ecomm">@lang('main.save_changes')</button>
    </div>
</form>

											</div>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
					</div>
				</section>
				<!--end shop cart-->
			</div>
		</div>
		<!--end page wrapper -->

@endsection
