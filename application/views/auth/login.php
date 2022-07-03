    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <a href="#">CoralisStudio</a>
                        </div>
                        <div class="authent-text">
                            <p>Please Sign-in to your account.</p>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form method="post" action="<?= base_url('auth'); ?>">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('email'); ?></small>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <small class="text-danger"><?= form_error('password'); ?></small>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary m-b-xs">Sign In</button>
                            </div>
                        </form>
                        <div class="authent-reg">
                            <p>Forgot Password? <a href="<?= base_url('auth/forgotpassword'); ?>">Klick here!</a></p>
                            <p>Not registered? <a href="<?= base_url('auth/registration'); ?>">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>