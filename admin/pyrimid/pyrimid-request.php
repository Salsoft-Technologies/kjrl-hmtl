<?php include '../layout/header-login.php';?>

<section class="vendorListItems py-5">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-md-8">
                <h1 class="alghato head-2">Pyramid Management</h1>
            </div>
            <div class="col-md-3 text-md-right">
                <p class="mb-0"><a href="#" class="text-theme-primary">Pyrmid Request <i
                            class="bi bi-chevron-right"></i></a></p>
            </div>
        </div>
        <!-- filter -->
        <div class="row justify-content-between align-items-start mb-4">
            <div class="col-md-5">
                <div class="d-flex align-items-center gap-15 mb-4">
                    <p class="mb-0 flex-shrink-0">Filter By:</p>
                    <input type="date" class="form-control rounded-pill">
                    -
                    <input type="date" class="form-control rounded-pill">
                </div>
                <div class="d-flex align-items-center gap-15">
                    <p class="mb-0 flex-shrink-0">Show:</p>
                    <select class="form-control rounded-pill w-25">
                        <option>Show: 50</option>
                    </select>
                    <p class="mb-0 flex-shrink-0">Entries</p>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-md-nowrap flex-wrap gap-15">
                <div class="d-flex align-items-center gap-15 mb-4">
                    <p class="mb-0 flex-shrink-0">Search</p>
                    <div class="form-controls position-relative">
                        <input type="text" class="form-control rounded-pill" placeholder="Search">
                        <a href="#" class="text-theme-primary rcode tops"><i class="bi bi-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Order Log -->

        <div class="row px-4">
            <div class="col-md-12">
                <div class="table-responsive orderLogs">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">full name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">subscription</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td>Free</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"
                                        class="border-0 bg-transparent"><i
                                            class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i
                                                class="bi bi-eye pr-2"></i> View</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>02</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td>Free</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"
                                        class="border-0 bg-transparent"><i
                                            class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i
                                                class="bi bi-eye pr-2"></i> View</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>03</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td>Free</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"
                                        class="border-0 bg-transparent"><i
                                            class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i
                                                class="bi bi-eye pr-2"></i> View</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>04</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td>Free</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"
                                        class="border-0 bg-transparent"><i
                                            class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i
                                                class="bi bi-eye pr-2"></i> View</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>05</th>
                                <td>001</td>
                                <td>mm/dd/yyyy</td>
                                <td>6</td>
                                <td>Free</td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"
                                        class="border-0 bg-transparent"><i
                                            class="bi bi-three-dots-vertical"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="./order-details.php"><i
                                                class="bi bi-eye pr-2"></i> View</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- pagination -->

        <div class="row justify-content-between align-items-center">
            <div class="col-md-4">
                <p class="mb-0">Showing 10 out of 40 records</p>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <nav class="paginationBtns shadow">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>


<?php include '../layout/footer-login.php';?>