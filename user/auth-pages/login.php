<?php include '../layout/header.php'; ?>

<!-- home banner  -->

<section class="theme-shape authBg d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 m-auto">
                <div class="bannerText text-white">
                    <div class="text-center">
                        <h1 class="alghato head-1">Sign In</h1>
                        <p class="">Please Login to Continue</p>
                    </div>
                    <form action="">
                        <div class="form-controls">
                            <input type="email" class="form-input" placeholder="Enter Your Email*">
                        </div>
                        <div class="form-controls">
                            <input type="password" class="form-input" placeholder="Enter Your Password*">
                        </div>
                        <div class="form-controls py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-white" for="exampleCheck1">Remember Me</label>
                                </div>
                                <div class="forgotLink">
                                    <p class="mb-0"><a href="./forgot-passowrd.php" class="text-white">Forgot Password?</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-controls">
                            <button type="submit" class="bg-theme-primary form-input text-white">Sign In</button>
                        </div>
                    </form>
                    <p class="text-center text-light mt-4">Don't Have an Account? <a href="./sign-up.php" class="text-white">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</section>