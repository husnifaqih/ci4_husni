<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron text-center">
    <h1>Portal Informasi Siswa</h1>
    <p>Assalamualaikum <b><?= session()->get('nama'); ?></b> di Portal Informasi Santri LKSA Bina Insan Mulia - SIBIM</p>
    <a href="<?= base_url('data-siswa') ?>" class="btn btn btn-primary">Data Siswa</a>
    <a href="<?= base_url('info-kegiatan') ?>" class="btn btn-dark">Info Kegiatan</a>
</div>

<?= $this->endSection(); ?>