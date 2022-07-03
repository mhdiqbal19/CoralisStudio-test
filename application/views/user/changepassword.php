<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>
<hr>
<?= $this->session->flashdata('message'); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('user/changepassword'); ?>" method="post">
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" name="current_password" class="form-control" id="current_password">
                        <small class="text-danger"><?= form_error('current_password'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="new_password1" class="form-label">New Password</label>
                        <input type="password" name="new_password1" class="form-control" id="new_password1">
                        <small class="text-danger"><?= form_error('new_password1'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="new_password2" class="form-label">Repeat Password</label>
                        <input type="password" name="new_password2" class="form-control" id="new_password2">
                        <small class="text-danger"><?= form_error('new_password2'); ?></small>
                    </div><br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>