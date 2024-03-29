<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>User</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/user')?>">User</a></li>
                <li class="breadcrumb-item active">Create User</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <form action="<?= base_url("/user") ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create User</h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="role" name="role" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('/user') ?>" class="btn btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>

<?= $this->endSection() ?>