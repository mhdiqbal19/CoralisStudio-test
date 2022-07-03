<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <a href="#">Change Your Password for :</a>
                    </div>
                    <div class="authent-text">
                        <p><?= $this->session->userdata('reset_email'); ?></p>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('auth/changepassword'); ?>">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="Password1" name="password1" value="">
                                <label for="Password1">Password </label>
                            </div>
                        </div>
                        <small class="text-danger"><?= form_error('password1'); ?></small>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="Password2" name="password2" value="">
                                <label for="Password2">Repeat Password </label>
                            </div>
                        </div>
                        <small class="text-danger"><?= form_error('password2'); ?></small>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary m-b-xs">Change Password</button>
                        </div>
                        <div class="authent-reg">
                            <p>Back to login<a href="<?= base_url('auth'); ?>"> Click here!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>