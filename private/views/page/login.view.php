<?php $this->view("components/head") ?>

<div class="row w-100 h-100 align-item-center wrapper justify-content-center" id="signin-box">
    <div class="col-md-8 col-12  my-3">
        <h1 class="text-center text-primary font-weight-bold">
            VICTORIA PRIVATE UNIVERSITY
        </h1>
        <div class="my-auto d-flex justify-content-center">
            <img src="<?php ROOT ?>asset/images/signin.png" style="width:40vw;height:40vh" />
        </div>
        <div class="card-group">
            <div class="card-rounded-left" style="flex-grow:1.4;">
                <h3 class="text-center text-primary font-weight-bold">
                    Login
                </h3>
                <hr class="my-4">
                <form action="#" method="post" class="px-3 w-100" id="signin-form">
                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-envelope fa-lg"></i>
                        </span>
                        <input type="text" name="email" type="email" required class="form-control form-control-lg rounded-0" placeholder="E-mail">
                    </div>

                    <div class="input-group mb-4 input-group-lg">
                        <span class="input-group-text rounded-0">
                            <i class="fa fa-key fa-lg"></i>
                        </span>
                        <input type="text" name="password" type="password" required class="form-control form-control-lg rounded-0" placeholder="Password">
                    </div>

                    <div class="form-group d-flex">
                        <div class="mb-4 form-check" style="flex-grow:1;">
                            <input type="checkbox" class="form-check-input" id="customCheck">
                            <label class="form-check-label" for="customCheck">Remember me</label>
                        </div>
                        <div class="mb-3 float-right forgot">
                            <a href="#" class="text-info" id="to-forgot-password">Forgot Password?</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn bg-primary form-control text-white btn-lg btn-block mb-3 myBtn" id="signin-btn">Sign in</button>
                    </div>

                    <div class="d-flex justify-content-center align-item-center">
                        <span class="text-secondary">Don't you have a account yet?</span>
                        <a href="<?= ROOT ?>signup" id="to-signup"> &nbsp;Sign up</a>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign in box end -->
</div>