<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Karyawan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/karyawan')?>">Karyawan</a></li>
                <li class="breadcrumb-item active">Edit Karyawan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <form action="<?= base_url("/karyawan/{$user['id']}") ?>" method="POST">
            <input type="hidden" name="_method" value="PUT" />
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Karyawan <?=$user['username']?></h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$user['nik']?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$user['username']?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$jabatan?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?=$karyawan['gender'] === 'L' ? 'Laki - Laki' : 'Perempuan'?>" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('/karyawan') ?>" class="btn btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>

<?= $this->endSection() ?>