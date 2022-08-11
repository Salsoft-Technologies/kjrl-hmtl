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
                            <p class="text-dark">Type in your new Password.</p>
                        </div>
                        <form action="">
                            <div class="form-controls mb-3 position-relative">
                                <input type="password" class="form-input bg-white border" placeholder="Enter New Password*">
                                <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            <div class="form-controls mb-3 position-relative">
                                <input type="password" class="form-input bg-white border" placeholder="Enter New Password*">
                                <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
                            </div>
                            <div class="form-controls mb-3">
                                <button type="button" class="bg-theme-primary form-input text-white" data-toggle="modal"
                                    data-target="#exampleModalCenter">Update</button>
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

<?php 
include('./popup.php');
include('../layout/footer-login.php');
?>