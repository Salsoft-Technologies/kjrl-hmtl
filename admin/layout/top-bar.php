<header class="shadow py-3 rounded-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="authorBox">
                <div class="d-flex gap-15 align-items-center">
                    <div class="avatar">
                        <figure class="mb-0">
                            <img src="../../assets/images/test1.png" alt="">
                        </figure>
                    </div>
                    <div class="avatar-info position-relative">
                        <p class="mb-0">Mark Carson</p>
                        <p class="text-secondary mb-0">Admin</p>
                        <div class="dropleft show authorInfo">
                            <a class="dropdown-toggle border-0 bg-transparent text-dark" href="#" role="button"
                                id="authorInfo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu text-center top-position" aria-labelledby="authorInfo">
                                <a class="dropdown-item" href="#">Profile Management</a>
                                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logoutTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 py-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="alghato mb-3">Logout?</h1>
                    <p class="text-dark">Are you sure you want to logout?</p>
                </div>
            </div>
            <div class="border-0 gap-15 justify-content-center mb-3 modal-footer pt-0">
                <button type="button" class="bg-theme-primary form-input text-white w-auto px-5" data-dismiss="modal">Yes</button>
                <button type="button" class="form-input text-dark border w-auto px-5 bg-white" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>