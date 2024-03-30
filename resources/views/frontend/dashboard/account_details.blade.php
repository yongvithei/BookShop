@extends('frontend.index')
@section('main')
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--start page wrapper -->
<div >
			<div class="page-content">
				<!--start breadcrumb-->
                <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                    <div class="container">
                        <div class="page-breadcrumb d-flex align-items-center">
                            <p class="breadcrumb-title pe-3">{{ __('main.account_details') }}</p>
                            <div class="ms-auto">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('main.home') }}</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.account') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('main.account_details') }}</li>
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
						<h3 class="d-none">{{ __('main.account') }}</h3>
						<div class="card rounded-xl drop-shadow">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4 drop-shadow">
										@include('frontend.dashboard.sidebar')
									</div>
									<div class="col-lg-8">
										<div class="card shadow-none mb-0 border">
                                            @if (session('status') === 'saved')
                                                <div class="alert alert-success alert-dismissible text-center" role="alert">
                                                    <p class="mb-0">{{ __('main.update_successful') }}</p>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
											<div class="card-body">
                                                <form method="post" action="{{ route('user.profile.store') }}" class="row g-3" enctype="multipart/form-data">
                                                    @csrf
													<div class="col-md-6">
														<label class="form-label">{{ __('main.name') }}</label>
														<input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" class="form-control rounded-lg">
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </div>
													<div class="col-md-6">
														<label class="form-label">{{ __('main.username') }}</label>
														<input id="username" name="username" type="text" value="{{ old('username', $user->username) }}" required autofocus autocomplete="username" class="form-control rounded-lg" value="">
                                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                                    </div>
													<div class="col-12">
														<label class="form-label">{{ __('main.email_address') }}</label>
														<input id="email" name="email" type="text" value="{{ old('email', $user->email) }}" class="form-control rounded-lg" value="">
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">{{ __('main.display_image') }}</label>
                                                        <img id="showImage" src="{{ (!empty($user->photo)) ? url('uploads/user/'.$user->photo):url('uploads/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                                                        <label for="photo" class="form-label">{{ __('main.choose_image') }}</label>
                                                        <input type="file" name="photo" class="form-control"  id="image"/>
                                                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                                                    </div>
													<div class="col-12">
														<button type="submit" class="bg-dark text-white btn-ecomm rounded-lg">{{ __('main.save_changes') }}</button>
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
    <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
