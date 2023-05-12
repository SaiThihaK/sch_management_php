<?php $this->view("components/head") ?>
<?php $this->view("components/navbar") ?>
<div class="container-fluid w-100 h-100">
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
</div>