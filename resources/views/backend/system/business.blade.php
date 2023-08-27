@extends('admin.index')
@section('admin')
    <main id="main-container">
        <!-- Hero -->

        <div class="content content-boxed">
    <!-- Company Information -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Company Information</h3>
                </div>
                <div class="block-content">
                    <form action="" method="POST" onsubmit="return false;">
                        <div class="row push">
                            <div class="col-lg-4">
                                <p class="fs-sm text-muted">
                                    Your Company Information is shown to other users on the internet.
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <label class="form-label" for="one-profile-edit-company-name">Company Name (Optional)</label>
                                    <input type="text" class="form-control" id="one-profile-edit-company-name" name="one-profile-edit-company-name">
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label" for="one-profile-edit-firstname">Firstname</label>
                                        <input type="text" class="form-control" id="one-profile-edit-firstname" name="one-profile-edit-firstname">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="one-profile-edit-lastname">Lastname</label>
                                        <input type="text" class="form-control" id="one-profile-edit-lastname" name="one-profile-edit-lastname">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="one-profile-edit-street-1">Street Address 1</label>
                                    <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="one-profile-edit-street-2">Street Address 2</label>
                                    <input type="text" class="form-control" id="one-profile-edit-street-2" name="one-profile-edit-street-2">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="one-profile-edit-city">City</label>
                                    <input type="text" class="form-control" id="one-profile-edit-city" name="one-profile-edit-city">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="one-profile-edit-postal">Postal code</label>
                                    <input type="text" class="form-control" id="one-profile-edit-postal" name="one-profile-edit-postal">
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
        </div>
    </main>
    <!-- END Company Information -->
@endsection
