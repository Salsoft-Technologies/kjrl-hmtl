<?php include '../layout/header.php';?>

<!-- home banner  -->


<section class="pyrimid-section-shadow"></section>

<div class="bannerText text-black blurText bg-transparent w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <p class="text-left"><a href="./index.php" class="text-dark"><i class="bi bi-arrow-left pr-2"></i>
                        Back</a>
                </p>
                <div class="first-payrimid">
                    <div class="pyramid__shape">
                        <div class="pyramid__steps">
                            <p class="my-2">Level 1</p>
                        </div>
                        <div class="pyramid__steps">
                            <p class="mb-0">Level 2</p>
                        </div>
                        <div class="pyramid__steps">
                            <p class="mb-0">Level 3</p>
                        </div>
                        <div class="pyramid__steps">
                            <p class="mb-0">Level 4</p>
                        </div>
                        <div class="pyramid__steps flex-column">
                            <p class="my-2">Level 5</p>
                            <button class="develop bg-theme-primary border-0 text-white rounded-pill py-2 px-4 mt-2"
                                id="develop"><i class="bi bi-plus-circle px-2"></i> Develop 1st Level</button>
                        </div>
                    </div>
                </div>
                <div class="second-payrimid" style="display: none;">
                    <div class="pyramid__shape">
                        <div class="pyramid__steps">
                            <p class="my-2">Level 1</p>
                        </div>
                        <div class="pyramid__steps">
                            <p class="mb-0">Level 2</p>
                        </div>
                        <div class="pyramid__steps">
                            <p class="mb-0">Level 3</p>
                        </div>
                        <div class="pyramid__steps flex-column">
                            <p class="mb-0">Level 4</p>
                            <button class="develop bg-theme-primary border-0 text-white rounded-pill py-2 px-4 mt-2"
                                id="develop"><i class="bi bi-plus-circle px-2"></i> Develop 1st Level</button>
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
                </div>
                <div class="third-payrimid" style="display: none;">
                    <div class="pyramid__shape">
                        <div class="pyramid__steps">
                            <p class="my-2">Level 1</p>
                        </div>
                        <div class="pyramid__steps">
                            <p class="mb-0">Level 2</p>
                        </div>
                        <div class="pyramid__steps flex-column">
                            <p class="mb-0">Level 3</p>
                            <button class="develop bg-theme-primary border-0 text-white rounded-pill py-2 px-4 mt-2"
                                id="develop"><i class="bi bi-plus-circle px-2"></i> Develop 1st Level</button>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="parimid-greets text-left">
                    <h1 class="alghato head-3">This Is Your Pyramid!</h1>
                    <p class="text-black font-weight-normal">Kindly Fill accordingly start with <strong>Level 1</strong>
                        and Fill out every level step
                        by step.</p>
                    <div class="d-flex justify-content-end mt-5">
                        <a href="#" class="text-theme-primary">Need Help</a>
                    </div>
                </div>
                <div class="pyrimid-flow" style="display: none;">
                    <form action="./second-step.php" method="POST">
                        <div class="pyrimid-form">
                            <div class="step-bar">
                                <span class="activeBar"></span>
                            </div>
                            <div class="step-count">
                                <p class="mb-0"><span class="active-steps"></span> / <span class="total-steps"></span>
                                </p>
                            </div>
                            <div class="step-form active" id="1">
                                <div class="step-content">
                                    <h1 class="alghato head-3">Step 1 Your Goal</h1>
                                    <p class="text-black font-weight-normal">Kindly Set your goal</p>
                                </div>
                                <div class="form-group d-flex">
                                    <input type="text" placeholder="Set Your Goal"
                                        class="form-control rounded-pill border py-2 px-3 bg-transparent text-white"
                                        name="goal">
                                    <button class="bg-transparent border-0 text-white addFeild"><i
                                            class="bi bi-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="step-form" id="2">
                                <div class="step-content">
                                    <h1 class="alghato head-3">Step 2 Your Goal</h1>
                                    <p class="text-black font-weight-normal">Kindly Set your goal</p>
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="Minimum Years"
                                        class="form-control rounded-pill border py-2 px-3 bg-transparent text-white"
                                        name="goal">
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="Maximum Years"
                                        class="form-control rounded-pill border py-2 px-3 bg-transparent text-white"
                                        name="goal">
                                </div>
                            </div>
                            <div class="step-form" id="3">
                                <div class="step-content">
                                    <h1 class="alghato head-3">Step 3 Your Goal</h1>
                                    <p class="text-black font-weight-normal">Kindly Set your goal</p>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Set prerequisite"
                                        class="form-control rounded-pill border py-2 px-3 bg-transparent text-white"
                                        name="goal">
                                </div>
                            </div>

                            <div class="action-btn gap-15">
                                <button
                                    class="bg-light py-2 rounded-pill text-theme-primary border-0 proceedButton" type="button">Proceed</button>
                                <button type="submit"
                                    class="bg-light py-2 rounded-pill text-theme-primary border-0 submitButton"
                                    style="display: none" onclick="submitAction()">Submit</button>
                                <button
                                    class="bg-theme-primary py-2 rounded-pill text-light border cancelButton" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <div class="save-info d-flex justify-content-center mt-5">
                        <button
                            class="bg-theme-secondary py-2 rounded-pill text-theme-primary border-0 w-50 shadow">Save</button>
                    </div>
                </div>

                <!-- congratulations -->

                <div class="parimid-greets-congratulation text-left" style="display: none;">
                    <h1 class="alghato head-3">Congratulations!</h1>
                    <p class="text-black font-weight-normal"><strong>Level 1</strong> is Completed and You can Now
                        Develop 2nd Level accordingly
                        by step.</p>
                    <div class="d-flex justify-content-start mt-5">
                        <a href="#" class="text-theme-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../layout/footer-login.php';
?>