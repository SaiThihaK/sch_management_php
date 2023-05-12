<?php $this->view("components/head") ?>
<?php $this->view("components/navbar") ?>
<div class="container-fluid w-100 h-100">
    <!-- Profile -->
    <div style="max-width:1000px;" class="p-2 shadow mx-auto mt-3 mt-md-5">
        <div class="row">
            <div class="col-12 col-md-4 ps-3">
                <img src="<?= ROOT ?>asset/images/profile.webp" class="img-fluid d-block w-100" style="border-radius:50%" />
                <p class="text-center mt-1 mt-md-3 fs-5 fs-md-2">Sai Thiha Kyaw</p>
            </div>
            <div class="col-12 col-md-8">
                <table class="table table-striped table-hover pt-2 pt-md-5">
                    <thead class="d-none">
                        <tr class="p-2">
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="p-3">First Name</th>
                            <th class="p-3">Sai Thiha</th>
                        </tr>
                        <tr>
                            <th class="p-3">Second Name</th>
                            <th class="p-3">Kyaw</th>
                        </tr>
                        <tr>
                            <th class="p-3">Gender</th>
                            <th class="p-3">Male</th>
                        </tr>
                        <tr>
                            <th class="p-3">Date Created</th>
                            <th class="p-3">24-12-2002</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Tab  -->
    <div style="max-width:1000px" class="ps-2 mx-auto mt-5">
        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="tab" role="button" aria-controls="pills-home" aria-selected="true"><i class="fas fa-file-lines fa-fw me-2"></i>Basic Info</a>
                <!-- <button class="nav-link active" >Home</button> -->
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-chalkboard-user fa-fw me-2"></i>Classes</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fas fa-list-check fa-fw me-2"></i>Tests</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Basic Info</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Classes</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Tests</div>
        </div>

    </div>