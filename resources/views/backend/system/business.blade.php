@extends('admin.index')
@section('admin')
<style>
#imageContainer {
    width: 100px;
    height: 150px;
    overflow: hidden;
}

#imagePreview {
    width: 100%;
    height: 100%;
    background-image: url('{{asset('admin/assets/media/avatars/avatar13.jpg')}}');
    background-size: cover;
    background-position: center;
}

</style>
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
                            <input type="hidden" id="itemId" value="">
                            
                                <div class="mb-3">
                                <label class="form-label" for="name">Company Name</label>
                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                        <i class="fa fa-city"></i>
                                                        </span>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="support_phone">Support Phone</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="si si-earphones-alt"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="support_phone" name="support_phone">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class=" fa fa-inbox"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address ..."></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="information">Store Information</label>
                                    <textarea class="form-control" id="information" name="information" rows="3" placeholder="Address ..."></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="map">Map Link</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="far fa-map"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="map" name="map">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="facebook">Facebook Link</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fab fa-facebook"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="facebook" name="facebook">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="telegram">Telegram Link</label>
                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                            <i class="fab fa-telegram"></i>
                                                            </span>
                                        <input type="text" class="form-control" id="telegram" name="telegram">
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Logo</label>
                                <div class="mb-3">
                                    <div id="imageContainer" style="width: 100px; height: 150px; overflow: hidden;">
                                        <div id="imagePreview" src="assets/media/avatars/avatar13.jpg" alt=""></div>
                                    </div>
                                </div>

                                    <div class="mb-4">
                                        <label for="imageInput" class="form-label">Choose Image</label>
                                        <input class="form-control" type="file" id="imageInput" value="">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button id="saveButton" type="submit" class="btn btn-alt-primary">
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

    <script src="https://cdn.jsdelivr.net/npm/axios@1.5.0/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    //text string
    const nameInput = document.getElementById('name');
    const support_phoneInput = document.getElementById('support_phone');
    const emailInput = document.getElementById('email');
    const addressInput = document.getElementById('address');
    const facebookInput = document.getElementById('facebook');
    const telegramInput = document.getElementById('telegram');
    const informationInput = document.getElementById('information');
    const mapInput = document.getElementById('map');

    const itemIdInput = document.getElementById('itemId');
    const saveButton = document.getElementById('saveButton');
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');

    // Define formData in a higher scope
    const formData = new FormData();

    // Fetch data
    axios.get(`/info/web`)
        .then(function (response) {
            const data = response.data;
            if (data) {
                // Populate the form fields with the retrieved data
                nameInput.value = data.name;
                support_phoneInput.value = data.support_phone;
                emailInput.value = data.email;
                addressInput.value = data.address;
                facebookInput.value = data.facebook;
                telegramInput.value = data.telegram;
                informationInput.value = data.information;
                mapInput.value = data.map;

                // Set the item ID
                itemIdInput.value = data.id || ''; // Ensure itemIdInput is set even if it's null
                // Display the image in the preview div if an image URL is provided in the response
                // Display the image in the preview div if an image URL is provided in the response
                if (data.image) {
                    const img = document.createElement('img');
                    img.src = `/images/${data.image}`; // Use the correct path to the image
                    img.onload = function () {
                        const aspectRatio = img.width / img.height;
                        let newWidth, newHeight;

                        // Calculate the new dimensions to fit the container
                        if (aspectRatio >= 1) {
                            // Landscape or square image
                            newWidth = 150; // Set the desired width
                            newHeight = 150 / aspectRatio;
                        } else {
                            // Portrait image
                            newHeight = 150; // Set the desired height
                            newWidth = 150 * aspectRatio;
                        }

                        // Set the image dimensions
                        img.width = newWidth;
                        img.height = newHeight;

                        // Clear and append the resized image to the container
                        imagePreview.innerHTML = '';
                        imagePreview.appendChild(img);
                    };
                } else {
                    // Clear the image preview if no image URL is provided
                    imagePreview.innerHTML = '';
                }
            } else {
                console.error('Company data not found');
            }
        })
        .catch(function (error) {
            console.error(error);
        });

    // Function to update the image preview
    function updateImagePreview() {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.onload = function () {
                    const aspectRatio = img.width / img.height;
                    let newWidth, newHeight;

                    // Calculate the new dimensions to fit the container
                    if (aspectRatio >= 1) {
                        // Landscape or square image
                        newWidth = 150; // Set the desired width
                        newHeight = 150 / aspectRatio;
                    } else {
                        // Portrait image
                        newHeight = 150; // Set the desired height
                        newWidth = 150 * aspectRatio;
                    }

                    // Set the image dimensions
                    img.width = newWidth;
                    img.height = newHeight;

                    // Clear and append the resized image to the container
                    imagePreview.innerHTML = '';
                    imagePreview.appendChild(img);
                };
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.innerHTML = '';
        }
    }


    // Update the image preview when a file is selected
    imageInput.addEventListener('change', function() {
        updateImagePreview();
        const file = imageInput.files[0];

        if (file) {
            formData.append('image', file);
        }
    });

    saveButton.addEventListener('click', function() {
        const name = nameInput.value;
        const support_phone = support_phoneInput.value;
        const email = emailInput.value;
        const address = addressInput.value;
        const facebook = facebookInput.value;
        const telegram = telegramInput.value;
        const information = informationInput.value;
        const map = mapInput.value;
        const itemId = itemIdInput.value;

        // Append data to formData
        formData.append('name', name);
        formData.append('support_phone', support_phone);
        formData.append('email', email);
        formData.append('address', address);
        formData.append('facebook', facebook);
        formData.append('telegram', telegram);
        formData.append('information', information);
        formData.append('map', map);
        formData.append('id', itemId);

        axios.post('/sites', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function (response) {
            const item = response.data.item;
            const message = response.data.message;

            // Handle the success message, e.g., display it to the user
            alert(message);

        })
        .catch(function (error) {
            // Handle errors (e.g., display validation errors)
            console.error(error);
        });
    });
});

</script>
@endsection
