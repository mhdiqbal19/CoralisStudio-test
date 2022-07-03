<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <a href="#">Forgot Password ?</a>
                    </div>
                    <div class="authent-text">
                        <p>Please Sign-in to your email account.</p>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                                <label for="email">Email address</label>
                            </div>
                        </div>
                        <small class="text-danger"><?= form_error('email'); ?></small>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary m-b-xs">Reset Password</button>
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