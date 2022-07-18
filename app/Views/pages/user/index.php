<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="pagetitle">
        <h1>User</h1>
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <div class="table-responsive">
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Code User</th>
                                        <th>NIK</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (sizeof($users) > 0) : ?>
                                        <?php foreach ($users as $user) : ?>
                                            <tr>
                                                <td><?= $user['code_user'] ?></td>
                                                <td><?= $user['nik'] ?></td>
                                                <td><?= $user['username'] ?></td>
                                                <td><?= \App\Models\Users\UsersModel::getRole($user['role_id']) ?></td>
                                                <td>
                                                    <a href="<?= base_url("user/{$user['id']}") ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View User" data-bs-original-title="View User">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="<?= base_url("user/edit/{$user['id']}") ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit User" data-bs-original-title="Edit User">
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