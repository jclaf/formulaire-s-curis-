<form action="<?php echo base_url('signin'); ?>" method="post">
  <div class="d-flex justify-content-center p-2">
    <img src="<?= base_url('public/assets/img/image.png')?>" height="72px" width="90px">
  </div>
  <div class="form-group mb-3">
      <input type="email" name="email" placeholder="Email" value="<?= set_value('email')?>" class="form-control" autocomplete="off" >
  </div>

  <div class="form-group mb-3">
      <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" >
  </div>

  <div class="flex mt-7 justify-center w-full">
    <button type="reset" class="btn btn-secondary px-5 py-2 cursor-pointer text-white">
      Reset
    </button>
    <button type="submit" class="btn btn-success px-5 py-2 cursor-pointer text-white">
      Login
    </button>
  </div>
  <div class="container mx-auto p-4 flex justify-between">
    <div class="d-flex justify-content-center p-2">
      <span class="psw">No Account? <?php echo anchor('signup','Register', array('title'=>'Register'))?></span>
    </div>
  </div>
  <?php if (isset($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <?= $validation->listErrors() ?>
    </div>
  <?php endif; ?>
  <p class="text-muted d-flex justify-content-center">&copy; <?php echo date('Y'); ?></p>
</form>

