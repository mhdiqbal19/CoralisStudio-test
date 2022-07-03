<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <a href="#">CoralisStudio</a>
                    </div>
                    <div class="authent-text">
                        <p>Enter your details to create your account</p>
                    </div>

                    <form method="post" action="<?= base_url('auth/registration'); ?>">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Fullname" value="<?= set_value('name'); ?>">
                                <label for="floatingInput">Fullname</label>
                            </div>
                        </div>
                        <small class="text-danger"><?= form_error('name'); ?></small>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="email" id="floatingInput1" placeholder="name@example.com" value="<?= set_value('email'); ?>">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <small class="text-danger"><?= form_error('email'); ?></small>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
                                <label for="password1">Password</label>
                            </div>
                        </div>
                        <small class="text-danger"><?= form_error('password1'); ?></small>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password">
                                <label for="password2">Confirm Password</label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary m-b-xs">Register</button>
                        </div>
                    </form>
                    <div class="authent-login">
                        <p>Already have an account? <a href="<?= base_url('auth'); ?>">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>