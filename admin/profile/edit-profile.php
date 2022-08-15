<?php include '../layout/header-login.php'; ?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h1 class="alghato head-3"><a href="./proile-management.php" class="text-dark"><i
                                class="bi bi-chevron-left pr-2"></i>Edit Profile</a></h1>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-image position-relative">
                    <img src="../../assets/images/profile.png" alt="">
                    <label for="upload" class="editPhoto">
                       <i class="bi bi-camera-fill"></i>
                        <input type="file" id="upload" class="d-none">
                    </label>
                </div>
                <form action="" class="my-4 pl-4">
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <input type="text" value="Edward Anton"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <input type="email" value="Edward@sample.com"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border"
                                placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <input type="tel" value="0000-000-0000000"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border"
                                placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <select name="" id="" class="bg-transparent rounded-pill p-2 text-dark w-100 border">
                                <option value="">Select Country</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <select name="" id="" class="bg-transparent rounded-pill p-2 text-dark w-100 border">
                                <option value="">Select State</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <input type="text" value="Seattle"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <input type="number" value="98101"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border"
                                placeholder="Enter Postal/Zip Code">
                        </div>
                    </div>
                    <div class="d-flex mt-4 gap-15 flex-wrap">
                        <div class="edit">
                            <a class="sbuscriber bg-theme-primary text-white" data-toggle="modal" data-target="#sucess">Save Changes</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php 
include './popup.php';
include '../layout/footer-login.php';?>