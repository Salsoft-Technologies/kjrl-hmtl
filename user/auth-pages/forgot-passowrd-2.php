<?php include '../layout/header.php'; ?>

<!-- home banner  -->


<section class="forgot-section"></section>

<div class="bannerText text-black blurText">
    <div class="text-center">
        <h1 class="alghato">Forgot Password</h1>
        <p class="text-dark">Type in your new Password.</p>
    </div>
    <form action="">
        <div class="form-controls mb-3 position-relative">
            <input type="password" class="form-input" placeholder="Enter New Password*">
            <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
        </div>
        <div class="form-controls mb-3 position-relative">
            <input type="password" class="form-input" placeholder="Enter New Password*">
            <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
        </div>
        <div class="form-controls mb-3">
            <button type="button" class="bg-theme-primary form-input text-white" data-toggle="modal" data-target="#exampleModalCenter">Update</button>
        </div>
    </form>
    <p class="text-center mt-4"><a href="./forgot-passowrd.php" class="text-dark"><i class="bi bi-arrow-left pr-2"></i> Back to
            Login</a>
    </p>
</div>
<?php 
include('./popup.php');
include('../layout/footer-login.php');
?>