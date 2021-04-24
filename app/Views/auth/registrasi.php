<!--Template-->
<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container my-5 col-4">
  <div class="card">
    <div class="card-header">
      <h3 class="text-center">Form Registrasi</h3>
    </div>
    <div class="card-body">
      <!--flash message-->
      <div class="row">
        <div class="col">
          <?php if (session()->getFlashdata('sukses')) : ?>
            <div class="alert alert-success" role="alert">
              <p><?= session()->getFlashdata('sukses') ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col mx-auto">
          <form action="<?= base_url('registrasi/simpan') ?>" method="POST">
            <?= csrf_field() ?>
            <label>Nama</label>
            <input type="text" class="form-control <?php if ($validation->hasError('nama')) echo 'is-invalid' ?>" name="nama" value="<?= old('nama') ?>" required>
            <div class="invalid-feedback">
              <?= $validation->getError('nama') ?>
            </div>
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
            <label>Konfirmasi Password</label>
            <input type="password" class="form-control <?php if ($validation->hasError('konfirmasi_password')) echo 'is-invalid' ?>" name="konfirmasi_password" required>
            <div class="invalid-feedback">
              <?= $validation->getError('konfirmasi_password') ?>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Register">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>