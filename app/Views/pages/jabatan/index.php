<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Jabatan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Jabatan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jabatan</h5>
                        <a href="<?=base_url('/jabatan/create')?>" class="btn btn-primary btn-sm mb-3">Create Jabatan</a>
                        <div class="table-responsive">
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Code Jabatan</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (sizeof($jabatan) > 0) : ?>
                                        <?php foreach ($jabatan as $jabatan) : ?>
                                            <tr>
                                                <td><?= $jabatan['code_jabatan'] ?></td>
                                                <td><?= $jabatan['name'] ?></td>
                                                <td>
                                                    <a href="<?= base_url("jabatan/{$jabatan['id']}") ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View Jabatan" data-bs-original-title="View Jabatan">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="<?= base_url("jabatan/edit/{$jabatan['id']}") ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Jabatan" data-bs-original-title="Edit Jabatan">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="2">No data found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>