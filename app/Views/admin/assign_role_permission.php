<?= $this->extend('base'); ?>

<?= $this->section('mainContentArea'); ?>

<div class="row">
    <div class="col-12">
        <h3>Assign permission</h3>
        <form action="" method="post">
            <label for=""><?= $role['name'] ?></label> <br>

            <?php foreach ($permissions as $permission): ?>
                <input
                    type="checkbox"
                    name="permissions[]"
                    value="<?= $permission['permission_id'] ?>"
                    <?= in_array($permission['permission_id'], array_column($assignedPermissions, 'permissionID')) ? 'checked' : '' ?>> <?= $permission['name'] ?>
            <?php endforeach ?>

            <br><input type="submit" value="Submit">
        </form>
    </div>
</div>

<?= $this->endSection() ?>