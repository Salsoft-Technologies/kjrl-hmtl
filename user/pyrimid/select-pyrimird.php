<?php include '../layout/header.php'; ?>

<!-- home banner  -->


<section class="forgot-section"></section>

<div class="bannerText text-black blurText">
    <div class="text-center">
        <h1 class="alghato">Select Levels</h1>
        <p class="text-dark">Set your Growth Plan Pyramid Name!</p>
    </div>
    <form action="">
        <div class="form-controls mb-3">
            <select class="form-input">
                <option value="">Select Levels</option>
                <option value="1">1</option>
                <option value="1">2</option>
            </select>
        </div>
        <div class="form-controls mb-3">
            <button type="button" class="bg-theme-primary form-input text-white">Proceed</button>
        </div>
    </form>
    <p class="text-center mt-4"><a href="./index.php" class="text-dark"><i class="bi bi-arrow-left pr-2"></i> Back</a>
    </p>
</div>
<?php 
include('../layout/footer-login.php');
?>