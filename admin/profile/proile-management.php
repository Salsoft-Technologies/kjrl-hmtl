<?php include '../layout/header-login.php'; ?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h1 class="alghato head-3">Profile Management</h1>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-image">
                    <img src="../../assets/images/profile.png" alt="">
                </div>
                <form action="" class="my-4 pl-4">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">Full Name</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="Edward Anton" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">Email</label>
                        </div>
                        <div class="col-md-3">
                            <input type="email" value="Edward@sample.com" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">Phone Number</label>
                        </div>
                        <div class="col-md-3">
                            <input type="tel" value="0000-000-0000000" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">Country</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="US" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">State</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="Washington" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">City</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="Seattle" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="" class="text-secondary">Zip Code</label>
                        </div>
                        <div class="col-md-3">
                            <input type="number" value="98101" disabled
                                class="bg-transparent border-0 text-dark font-weight-bold">
                        </div>
                    </div>
                    <div class="d-flex mt-4 gap-15 flex-wrap">
                        <div class="edit">
                            <a class="sbuscriber bg-theme-primary text-white" href="./edit-profile.php">Edit Profile</a>
                        </div>
                        <div class="cPassword">
                            <a class="sbuscriber" data-toggle="modal" data-target="#changePassword">Change Password</a>
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