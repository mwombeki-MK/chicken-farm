<?= $this->extend('base'); ?>

<?= $this->section('mainContentArea'); ?>

<div class="row">
    <div class="col-12">
        <h3>Edit permission</h3>
        <div class="table-responsive">
            <span>
                <a href="<?= base_url('view_permissions') ?>">View permission</a>
            </span>
            <form action="" method="post">
                <label for="">Name: </label>
                <input type="hidden" name="permission_id" value="<?= esc($permission['permission_id']) ?>" required readonly>
                <input type="text" name="name" required value="<?= esc($permission['name']) ?>">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>