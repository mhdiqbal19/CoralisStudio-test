<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>
<hr>
<div class="row">
    <div class="col-lg-8">

        <form action="<?php echo base_url() . 'admin/editrole' ?>" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="role" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <input type="text" name="role" class="form-control" id="role" value="<?= $role['role']; ?>">
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