<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>Laporan</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Laporan</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laporan</h5>
                        <div class="table-responsive">
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Gender</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (sizeof($karyawan) > 0) : ?>
                                        <?php foreach ($karyawan as $karyawan) : ?>
                                            <?php
                                                $user = \App\Models\Karyawan\KaryawanModel::getUser($karyawan['user_id']);
                                                $jabatan = \App\Models\Karyawan\KaryawanModel::getJabatan($karyawan['jabatan_id']);
                                            ?>
                                            <tr>
                                                <td><?= $user['nik'] ?></td>
                                                <td><?= $user['username'] ?></td>
                                                <td><?= $jabatan?></td>
                                                <td><?= $karyawan['gender'] === 'L' ? 'Laki - Laki' : 'Perempuan' ?></td>
                                                <td><?= $user['role'] ?? '-'?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5">No data found</td>
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