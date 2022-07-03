<?= $this->session->flashdata('message'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>
<hr>

<div class="card mb-3 border-primary mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?= base_url('assets/images/avatars/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name']; ?></h5>
                <p class="card-text"><?= $user['email']; ?></p>
                <p class="card-text"><small class="text-muted">Member since, <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
        </div>
    </div>
</div>