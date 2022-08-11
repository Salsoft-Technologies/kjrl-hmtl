<?php include '../layout/header.php'; ?>

<!-- home banner  -->

<section class="h100vh d-flex flex-column justify-content-center login-admin">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 m-auto">
                <div class="bannerText text-dark">
                    <div class="logo-box mb-4 text-center">
                        <img src="../../assets/images/logo.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="alghato head-2">Admin Login</h2>
                        <p class="">Please Login to Continue</p>
                    </div>
                    <form action="">
                        <div class="form-controls">
                            <input type="email" class="form-input bg-white border" placeholder="Enter Your Email*">
                        </div>
                        <div class="form-controls">
                            <input type="password" class="form-input bg-white border" placeholder="Enter Your Password*">
                        </div>
                        <div class="form-controls py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input text-theme-primary" id="exampleCheck1">
                                    <label class="form-check-label text-dark" for="exampleCheck1">Remember Me</label>
                                </div>
                                <div class="forgotLink">
                                    <p class="mb-0"><a href="./forgot-passowrd.php" class="text-theme-primary">Forgot
                                            Password?</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-controls">
                            <button type="submit" class="bg-theme-primary form-input text-white">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>