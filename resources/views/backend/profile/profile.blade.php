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
                            <button class="nav-link text-md-start active" id="btabs-vertical-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-profile" role="tab" aria-controls="btabs-vertical-profile" aria-selected="false">
                                <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i> Profile
                            </button>
                        </li>
                        <li class="nav-item d-md-flex flex-md-column">
                            <button class="nav-link text-md-start" id="btabs-vertical-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-settings" role="tab" aria-controls="btabs-vertical-settings" aria-selected="false">
                                <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i> Settings
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content col-md-8">

                        <div class="block-content tab-pane active" id="btabs-vertical-profile" role="tabpanel" aria-labelledby="btabs-vertical-profile-tab" tabindex="0">
                            <h4 class="fw-semibold text-center">Profile Content</h4>
                            <!-- User Profile -->
                            <div class="block block-rounded">

                                <div class="block-content">
                                    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                        <div class="block-content row justify-content-center">

                                            <div class="col-lg-9 col-xl-9">
                                                <div class="mb-4">
                                                    <label class="form-label" for="one-profile-edit-username">Username</label>
                                                    <input type="text" class="form-control" id="one-profile-edit-username" name="one-profile-edit-username" placeholder="Enter your username.." value="john.parker">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="one-profile-edit-name">Name</label>
                                                    <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" placeholder="Enter your name.." value="John Parker">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="one-profile-edit-email">Email Address</label>
                                                    <input type="email" class="form-control" id="one-profile-edit-email" name="one-profile-edit-email" placeholder="Enter your email.." value="john.parker@example.com">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Your Avatar</label>
                                                    <div class="mb-4">
                                                        <img class="img-avatar" src="{{asset('admin/assets/media/avatars/avatar13.jpg')}}" alt="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="one-profile-edit-avatar" class="form-label">Choose a new avatar</label>
                                                        <input class="form-control" type="file" id="one-profile-edit-avatar">
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
                            </div>
                            <!-- END User Profile -->

                        </div>
                        <div class="block-content tab-pane" id="btabs-vertical-settings" role="tabpanel" aria-labelledby="btabs-vertical-settings-tab" tabindex="0">
                            <h4 class="fw-semibold text-center">Change Password</h4>
                            <!-- Change Password -->
                            <div class="block block-rounded">

                                <div class="block-content">
                                    <form action="" method="POST" onsubmit="return false;">
                                        <div class="block-content row justify-content-center">

                                            <div class="col-lg-9 col-xl-9">
                                                <div class="mb-4">
                                                    <label class="form-label" for="one-profile-edit-password">Current Password</label>
                                                    <input type="password" class="form-control" id="one-profile-edit-password" name="one-profile-edit-password">
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <label class="form-label" for="one-profile-edit-password-new">New Password</label>
                                                        <input type="password" class="form-control" id="one-profile-edit-password-new" name="one-profile-edit-password-new">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <label class="form-label" for="one-profile-edit-password-new-confirm">Confirm New Password</label>
                                                        <input type="password" class="form-control" id="one-profile-edit-password-new-confirm" name="one-profile-edit-password-new-confirm">
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
@endsection
