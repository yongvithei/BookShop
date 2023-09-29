@extends('admin.index')
@section('admin')
<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Setting
                        </li>
                    </ol>
                </nav>
            </div>

    </div>
    <!-- END Hero -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Content -->
    <!-- For advanced Tabs usage you can check out https://getbootstrap.com/docs/5.3/components/navs-tabs/ -->
    <div class="content">
        <!-- Vertical Block Tabs -->

        <div class="row">
            <div class="col-lg-12">
                <!-- Vertical Block Tabs Default Style -->
                <div class="block block-rounded row g-0">
                    <ul class="nav nav-tabs nav-tabs-block flex-md-column col-md-2" role="tablist">
                        <li class="nav-item d-md-flex flex-md-column">
                            <a class="nav-link text-md-start{{ request()->is('admin/profile') ? ' active' : '' }}" href="/admin/profile">
                                <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item d-md-flex flex-md-column">
                            <a class="nav-link text-md-start{{ request()->is('admin/profile/password') ? ' active' : '' }}" href="/admin/profile/password">
                                <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-8">
                        <div class="block-content tab-pane {{ request()->is('admin/profile') ? ' active' : '' }}" id="btabs-vertical-profile" role="tabpanel" aria-labelledby="btabs-vertical-profile-tab" tabindex="0">
                                <h4 class="fw-semibold text-center">Profile</h4>
                            <!-- User Profile -->
                            <div class="block block-rounded">
                            @if (session('status') === 'saved')
                            <div class="alert alert-success alert-dismissible text-center" role="alert">
                                <p class="mb-0">Update successful</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                                <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="block-content row justify-content-center">
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="mb-4">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="username" class="form-control" />
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input id="username" name="username" type="text" value="{{ old('username', $user->username) }}" required autofocus autocomplete="username" class="form-control" />
                                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="one-profile-edit-email">Email Address</label>
                                                    <input id="email" name="email" type="text" value="{{ old('email', $user->email) }}" required class="form-control" />
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Your Profile</label>
                                                    <div class="mb-4">
                                                    <img id="showImage" src="{{ (!empty($user->photo)) ? url('uploads/admin/'.$user->photo):url('uploads/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="photo" class="form-label">Choose a image</label>
                                                        <input type="file" name="photo" class="form-control"  id="image"/>
                                                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-alt-primary">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            <!-- END User Profile -->
                        </div>
                        <div class="block-content tab-pane{{ request()->is('admin/profile/password') ? ' active' : '' }}" id="btabs-vertical-settings" role="tabpanel" aria-labelledby="btabs-vertical-settings-tab" tabindex="0">
                            <h4 class="fw-semibold text-center">Change Password</h4>
                            <!-- Change Password -->
                            <div class="block block-rounded">
                                @if (session('status') === 'password-updated')
                                    <div class="alert alert-success alert-dismissible text-center" role="alert">
                                        <p class="mb-0">Update successful</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="block-content">
                                    <form method="post" action="{{ route('password.update') }}">
                                        @csrf
                                        @method('put')
                                        <div class="block-content row justify-content-center">
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="mb-4">
                                                    <label class="form-label" for="current_password">Current Password</label>
                                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                                    <span class="text-danger">{{ $errors->updatePassword->first('current_password') }}</span>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <label class="form-label" for="password">New Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
                                                        <span class="text-danger">{{ $errors->updatePassword->first('password') }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <label class="form-label" for="password_confirmation">Confirm New Password</label>
                                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                                        <span class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</span>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-alt-primary" value="Save Changes">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Change Password -->
                        </div>
                    </div>
                </div>
                <!-- END Vertical Block Tabs Default Style -->
            </div>


        </div>

    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

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
