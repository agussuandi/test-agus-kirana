<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Karyawan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Karyawan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Karyawan</h5>
                        <a href="<?=base_url('/karyawan/create')?>" class="btn btn-primary btn-sm mb-3">Create Karyawan</a>
                        <div class="table-responsive">
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (sizeof($karyawan) > 0) : ?>
                                        <?php foreach ($karyawan as $karyawan) : ?>
                                            <?php
                                                $user = \App\Models\Karyawan\KaryawanModel::getUser($karyawan['user_id']);
                                                $jabatan = \App\Models\Users\UsersModel::getRole($user['role_id']);
                                            ?>
                                            <tr>
                                                <td><?= $user['nik'] ?></td>
                                                <td><?= $user['username'] ?></td>
                                                <td><?= $karyawan['gender'] === 'L' ? 'Laki - Laki' : 'Perempuan' ?></td>
                                                <td><?= $jabatan?></td>
                                                <td>
                                                    <a href="<?= base_url("karyawan/{$karyawan['id']}") ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View Karyawan" data-bs-original-title="View Karyawan">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="<?= base_url("karyawan/edit/{$karyawan['id']}") ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Karyawan" data-bs-original-title="Edit Karyawan">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="4">No data found</td>
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