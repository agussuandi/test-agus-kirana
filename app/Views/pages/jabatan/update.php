<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Jabatan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/jabatan')?>">Jabatan</a></li>
                <li class="breadcrumb-item active">Edit Jabatan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <form action="<?= base_url("/jabatan/{$jabatan['id']}") ?>" method="POST">
            <input type="hidden" name="_method" value="PUT" />
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jabatan <?=$jabatan['name']?></h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Code Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$jabatan['code_jabatan']?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="role" name="role" value="<?=$jabatan['name']?>" />
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