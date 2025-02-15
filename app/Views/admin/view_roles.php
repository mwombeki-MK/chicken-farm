<?= $this->extend('base'); ?>

<?= $this->section('mainContentArea'); ?>

<div class="row">
    <div class="col-12">
        <h3>Roles List</h3>
        <div class="table-responsive">
            <span>
                <a href="<?= base_url('create_permission') ?>">Create role</a>
            </span>
            <table class="table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <?php foreach ($roles as $role): ?>
                    <tr>
                        <td><?= $role['name'] ?></td>
                        <td><?= $role['description'] ?></td>
                        <td>
                            <a href="<?= base_url('edit_role') . '/' . $role['role_id'] ?>">edit</a>
                            <a href="<?= base_url('delete_role') . '/' . $role['role_id'] ?>">delete</a>
                            <a href="<?= base_url('assign_role_permission') . '/' . $role['role_id'] ?>">Assign permission</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>