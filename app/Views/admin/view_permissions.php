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
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['description'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>