<?= $this->extend('base'); ?>

<?= $this->section('mainContentArea'); ?>

<div class="row">
    <div class="col-12">
        <h3>Users List</h3>
        <div class="table-responsive">
            <table class="table-bordered table-hover">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['status'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>