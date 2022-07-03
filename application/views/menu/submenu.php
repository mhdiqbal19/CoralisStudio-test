<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <?= $this->session->flashdata('message'); ?>
                <div class="table-responsive">
                    <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Submenu</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Url</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $sm['title']; ?></td>
                                    <td><?= $sm['menu']; ?></td>
                                    <td><?= $sm['url']; ?></td>
                                    <td><i data-feather="<?= $sm['icon'] ?>"></i></td>
                                    <td><?= $sm['is_active']; ?></td>
                                    <td>
                                        <a href=""><span class="badge bg-success">Edit</span></a>
                                        <a href=""><span class="badge bg-danger">Delete</span></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New Sub Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Menu title">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="menu_id" name="menu_id" aria-label="Floating label select example">
                            <option selected>Select menu</option>
                            <?php foreach ($menu as $mn) : ?>
                                <option value="<?= $mn['id']; ?>"><?= $mn['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="url" id="formGroupExampleInput" placeholder="Menu url">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="icon" id="formGroupExampleInput" placeholder="Menu icon">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
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