<?php $this->view("components/head") ?>

<div class="row w-100 h-100 align-item-center wrapper justify-content-center" id="signin-box">
    <div class="col-md-8 col-12  my-3">
        <h1 class="text-center text-primary font-weight-bold">
            VICTORIA PRIVATE UNIVERSITY
        </h1>
        <div class="my-auto d-flex justify-content-center">
            <img src="<?php ROOT ?>asset/images/signup.png" style="width:40vw;height:40vh" />
        </div>
        <div class="card-group">
            <div class="card-rounded-left" style="flex-grow:1.4;">
                <h3 class="text-center text-primary font-weight-bold">
                    Sign up
                </h3>
                <hr class="my-4">
                <form action="#" method="post" class="px-3 w-100" id="signin-form">
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-user fa-lg"></i>
                        </span>
                        <input type="text" name="first_name" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="First Name">
                    </div>
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-user fa-lg"></i>
                        </span>
                        <input type="text" name="last_name" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="Last Name">
                    </div>
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-envelope fa-lg"></i>
                        </span>
                        <input type="text" name="email" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="E-mail">
                    </div>
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa-solid fa-mars-and-venus fa-lg"></i>
                        </span>
                        <select class="form-select form-select-lg rounded-0" id="floadingInputGroup1">
                            <option>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="non-binary">Non-binary</option>
                        </select>
                    </div>
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa-solid fa-ranking-star"></i>
                        </span>
                        <select class="form-select form-select-lg rounded-0" id="floadingInputGroup1" aria-placeholder="School Rank">
                            <option>Select School Rank</option>
                            <option value="male">Super Admin</option>
                            <option value="female">Admin</option>
                            <option value="non-binary">Student</option>
                        </select>
                    </div>

                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-key fa-lg"></i>
                        </span>
                        <input type="text" name="password" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="Password">
                    </div>
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-lock fa-lg"></i>
                        </span>
                        <input type="password" name="re_password" required class="form-control form-control-lg rounded-0" id="floatingInputGroup1" placeholder="Confirm Pasword">
                    </div>



                    <div class="form-group">
                        <button class="btn bg-primary form-control text-white btn-lg btn-block mb-3 myBtn" id="signin-btn">Sign in</button>
                    </div>

                    <div class="d-flex justify-content-center align-item-center">
                        <span class="text-secondary">Already have an account?</span>
                        <a href="#" id="to-signin"> &nbsp;Sign in</a>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign up box end -->
</div>