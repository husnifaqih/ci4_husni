<!--Template-->
<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container my-5 col-4">
  <div class="card">
    <div class="card-header">
      <h3 class="text-center">Login</h3>
    </div>
    <div class="card-body">
      <!--flash message-->
      <div class="row">
        <div class="col">
          <?php if (session()->getFlashdata('login_failed')) : ?>
            <div class="row">
              <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('login_failed'); ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col mx-auto">
          <form action="<?= base_url('login/proses-login') ?>" method="POST">
            <label>Email</label>
            <input type="text" class="form-control <?php if ($validation->hasError('email')) echo 'is-invalid' ?>" name="email" value="<?= old('email') ?>" required>
            <div class="invalid-feedback">
              <?= $validation->getError('email') ?>
            </div>
            <label>Password</label>
            <input type="password" class="form-control <?php if ($validation->hasError('password')) echo 'is-invalid' ?>" name="password" required>
            <div class="invalid-feedback">
              <?= $validation->getError('password') ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>