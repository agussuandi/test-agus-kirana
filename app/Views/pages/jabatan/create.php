<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Jabatan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/jabatan')?>">Jabatan</a></li>
                <li class="breadcrumb-item active">Create Jabatan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <form action="<?= base_url("/jabatan") ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Jabatan</h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="role" name="role" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('/jabatan') ?>" class="btn btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>

<?= $this->endSection() ?>