<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>
<hr>
<div class="row">
    <div class="col-lg-8">

        <form action="<?php echo base_url() . 'user/edit' ?>" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">

                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger"></small>'); ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/images/avatars/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>


        </form>



    </div>

</div>