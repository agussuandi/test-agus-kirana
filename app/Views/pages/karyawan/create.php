<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Karyawan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/karyawan')?>">Karyawan</a></li>
                <li class="breadcrumb-item active">Create Karyawan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <form action="<?= base_url("/karyawan") ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Karyawan</h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="user" name="user">
                                <option value="" disabled selected>Pilih User</option>
                                <?php foreach($users as $users) : ?>
                                    <option value="<?=$users['id']?>"><?=$users['username']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="gender" name="gender">
                                <option value="" disabled selected>Pilih Gender</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
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