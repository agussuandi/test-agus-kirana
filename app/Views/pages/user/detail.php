<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>User</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/user')?>">User</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <form action="<?= base_url("/user/{$user['id']}") ?>" method="POST">
            <input type="hidden" name="_method" value="DELETE" />
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User <?=$user['username']?></h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Code User</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$user['code_user']?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$user['nik']?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$user['username']?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$user['role']?>" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('/user') ?>" class="btn btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </section>

<?= $this->endSection() ?>