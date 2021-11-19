<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Register</h2>

            <?php if(isset($validation)):?>
            <div class="alert alert-warning">
                <?= $validation->listErrors() ?>
            </div>
            <?php endif;?>

            <form action="<?php echo base_url('signup'); ?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                <div class="form-group mb-3">
                    <input type="text" name="LastName" placeholder="LastName" value="<?= set_value('LastName') ?>" class="form-control" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="FirstName" placeholder="FirstName" value="<?= set_value('FirstName') ?>" class="form-control" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" autocomplete="off">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <?php echo anchor('/', 'Login', array('title'=>'Login')) ?></p>
            </form>
        </div>
    </div>
</div>