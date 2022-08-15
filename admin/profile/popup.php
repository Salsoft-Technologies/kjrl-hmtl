<!-- Modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordTitle"
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
                    <h1 class="alghato mb-3">Change Password</h1>
                    <p class="text-dark">Update Your Password Here</p>
                </div>
                <form action="">
                    <div class="form-controls mb-3 position-relative">
                        <input type="password" class="form-input bg-white border" placeholder="Current Password*">
                        <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
                    </div>
                    <div class="form-controls mb-3 position-relative">
                        <input type="password" class="form-input bg-white border" placeholder="Enter New Password*">
                        <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
                    </div>
                    <div class="form-controls mb-3 position-relative">
                        <input type="password" class="form-input bg-white border" placeholder="Confirm Password**">
                        <a href="#" class="text-theme-primary rcode"><i class="bi bi-eye-fill"></i></a>
                    </div>
                    <div class="form-controls mb-3">
                        <button type="button" class="bg-theme-primary form-input text-white" data-toggle="modal"
                            data-target="#sucess" data-dismiss="modal">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Successfull -->
<div class="modal fade" id="sucess" tabindex="-1" role="dialog" aria-labelledby="sucessTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 py-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="alghato mb-3">Successfull</h1>
                    <p class="text-dark">Your profile is Successfully Updated!</p>
                </div>
            </div>
            <div class="border-0 gap-15 justify-content-center mb-3 modal-footer pt-0">
                <button type="button" class="bg-theme-primary form-input text-white w-auto px-5"
                    data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>