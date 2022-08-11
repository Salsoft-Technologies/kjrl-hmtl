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
                    <div class="bannerText text-black">
                        <div class="text-center">
                            <h2 class="alghato head-2">Forgot Password</h2>
                            <p class="text-dark mb-0">An email has been sent to you with a verification code.</p>
                            <p class="text-dark">Please enter it here.</p>
                        </div>
                        <form action="./forgot-passowrd-2.php" method="POST">
                            <div class="form-controls mb-3 position-relative">
                                <input type="email" class="form-input bg-white border" placeholder="Enter Your Email*">
                                <a href="#" class="text-theme-primary rcode">Resend Code</a>
                            </div>
                            <div class="form-controls mb-3">
                                <button type="submit" class="bg-theme-primary form-input text-white">Continue</button>
                            </div>
                        </form>
                        <p class="text-center mt-4"><a href="./forgot-passowrd.php" class="text-dark"><i
                                    class="bi bi-arrow-left pr-2"></i> Back to
                                Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>