<?= $this->extend('base'); ?>

<?= $this->section('mainContentArea'); ?>

<div class="row">
    <div class="col-12">
        <h3>Create permission</h3>
        <div class="table-responsive">
            <span>
                <a href="<?= base_url('view_permissions') ?>">View permission</a>
            </span>
            <form action="" method="post">
                <label for="">Name: </label>
                <input type="text" name="name" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>