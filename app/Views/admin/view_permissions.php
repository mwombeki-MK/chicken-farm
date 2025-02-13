<?= $this->extend('base'); ?>

<?= $this->section('mainContentArea'); ?>

<div class="row">
    <div class="col-12">
        <h3>Permissions List</h3>
        <div class="table-responsive">
            <span>
                <a href="<?= base_url('create_permission') ?>">Create permission</a>
            </span>
            <table class="table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <?php foreach ($permissions as $permission): ?>
                    <tr>
                        <td><?= $permission['name'] ?></td>
                        <td><?= $permission['description'] ?></td>
                        <td>
                            <a href="<?= base_url('edit_permission') . '/' . $permission['permission_id'] ?>">edit</a>
                            <a href="<?= base_url('delete_permission') . '/' . $permission['permission_id'] ?>">delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>