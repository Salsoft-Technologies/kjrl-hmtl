<?php include '../layout/header-login.php';?>

<section class="vendorListItems py-5">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-md-8">
                <h1 class="alghato head-2"><a href="./pyrimid-request.php" class="text-dark"><i
                            class="bi bi-chevron-left pr-2"></i>Pyramid Requests</a></h1>
            </div>
        </div>
        <!-- filter -->
        <div class="row justify-content-between align-items-start mb-4">
            <div class="col-md-8">
                <div class="complete-payrimid">
                    <div class="pyramid__shape m-auto">
                        <div class="pyramid__steps flex-column activePyrimid">
                            <p class="my-2">Level 1</p>
                            <div class="d-flex gap-15">
                                <div class="salary">
                                    <p class="mb-0">Director of Engineer </p>
                                    <h3>$ 50,000</h3>
                                </div>&gt;
                            </div>
                        </div>
                        <div class="pyramid__steps flex-column activePyrimid">
                            <p class="my-2">Level 2</p>
                            <div class="d-flex gap-15">
                                <div class="salary">
                                    <p class="mb-0">Director of Engineer </p>
                                    <h3>$ 50,000</h3>
                                </div>
                                <div class="year">
                                    <p class="mb-0">Year</p>
                                    <h3>5-8</h3>
                                </div>
                            </div>
                        </div>
                        <div class="pyramid__steps flex-column activePyrimid">
                            <p class="my-2">Level 3</p>
                            <div class="d-flex gap-15">
                                <div class="salary">
                                    <p class="mb-0">Engineer Salary </p>
                                    <h3>$ 50,000</h3>
                                </div>
                                <div class="year">
                                    <p class="mb-0">Year</p>
                                    <h3>1-3</h3>
                                </div>
                                <div class="college">
                                    <p class="mb-0">Get College </p>
                                    <h3>Degree</h3>
                                </div>
                            </div>
                        </div>
                        <div class="pyramid__steps flex-column activePyrimid">
                            <p class="my-2">Level 4</p>
                            <div class="d-flex gap-15">
                                <div class="salary">
                                    <p class="mb-0">Engineer Salary </p>
                                    <h3>$ 50,000</h3>
                                </div>
                                <div class="year">
                                    <p class="mb-0">Year</p>
                                    <h3>1-3</h3>
                                </div>
                                <div class="college">
                                    <p class="mb-0">Get College </p>
                                    <h3>Degree</h3>
                                </div>
                            </div>
                        </div>
                        <div class="pyramid__steps flex-column activePyrimid">
                            <p class="my-2">Level 5</p>
                            <div class="d-flex gap-15">
                                <div class="salary">
                                    <p class="mb-0">Engineer Salary </p>
                                    <h3>$ 50,000</h3>
                                </div>
                                <div class="year">
                                    <p class="mb-0">Year</p>
                                    <h3>1-3</h3>
                                </div>
                                <div class="college">
                                    <p class="mb-0">Get College </p>
                                    <h3>Degree</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mt-5"><a class="sbuscriber bg-theme-primary text-white" href="">Post to User</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <form action="" class="my-4 pl-4">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input type="text"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border" placeholder="Enter Salary">
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="text"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border" placeholder="Enter Year">
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="text"
                                class="bg-transparent rounded-pill p-2 text-dark w-100 border" placeholder="Enter Degree">
                        </div>
                    </div>
                    <div class="d-flex gap-15 flex-wrap justify-content-end">
                        <div class="edit">
                            <a class="text-theme-primary" data-toggle="modal" data-target="#pyrimid">Save</a>
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