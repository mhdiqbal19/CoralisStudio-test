<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert">', ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>              
                </div>'); ?>
                <?= $this->session->flashdata('message'); ?>
                <div class="table-responsive">
                    <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Role</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($role as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $r['role']; ?></td>
                                    <td>
                                        <?php echo anchor('admin/role_access/' . $r['id'], '<span class="badge bg-info">Access</span>'); ?>
                                        <?php echo anchor('admin/editrole/' . $r['id'], '<span class="badge bg-success">Edit</span>'); ?>
                                        <?php echo anchor('admin/delete/' . $r['id'], '<span class="badge bg-danger">Delete</span>'); ?>

                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="role" id="formGroupExampleInput" placeholder="Role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>