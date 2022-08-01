<?php include '../layout/header.php'; ?>

<!-- home banner  -->


<section class="forgot-section"></section>

<div class="bannerText text-black blurText">
    <div class="text-center">
        <h1 class="alghato">Forgot Password</h1>
        <p class="text-dark mb-0">An email has been sent to you with a verification code.</p>
        <p class="text-dark">Please enter it here.</p>
    </div>
    <form action="./forgot-passowrd-2.php" method="POST">
        <div class="form-controls mb-3 position-relative">
            <input type="email" class="form-input" placeholder="Enter Your Email*">
            <a href="#" class="text-theme-primary rcode">Resend Code</a>
        </div>
        <div class="form-controls mb-3">
            <button type="submit" class="bg-theme-primary form-input text-white">Continue</button>
        </div>
    </form>
    <p class="text-center mt-4"><a href="./forgot-passowrd.php" class="text-dark"><i class="bi bi-arrow-left pr-2"></i> Back to
            Login</a>
    </p>
</div>