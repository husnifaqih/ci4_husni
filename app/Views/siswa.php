<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->get('role') == 'admin') : ?>
    <div class="container">
        <div class="card my-3">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah Data</button>
                <?php
                if (!empty(session()->getFlashdata('success'))) { ?>

                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php } ?>

                <?php if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-info">
                        <?php echo session()->getFlashdata('info'); ?>
                    </div>
                <?php } ?>

                <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                    <div class="alert alert-warning">
                        <?php echo session()->getFlashdata('warning'); ?>
                    </div>
                <?php } ?>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($siswa as $row) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->nis; ?></td>
                            <td><?= $row->email; ?></td>
                            <td>
                                <a href="#" class="btn btn-success mr-2" data-toggle="modal" data-target="#showModal<?= $row->id; ?>">Show</a>
                                <a href="#" class="btn btn-warning  mr-2" data-toggle="modal" data-target="#editModal<?= $row->id; ?>">Edit</a>
                                <a href="#" class="btn btn-danger mr-2" data-toggle="modal" data-target="#deleteModal<?= $row->id; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Show Siswa-->
    <?php foreach ($siswa as $s) : ?>
        <form action="/SiswaController/update" method="post">
            <div class="modal fade" id="showModal<?= $s->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header card-header">
                            <h3 class="modal-title" id="exampleModalLabel">Profil Siswa</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row ml-2">
                                    <h4>Nama : <?= $s->nama ?></h4>
                                </div>
                                <div class="row ml-2">
                                    <h4>NIS : <?= $s->nis ?></h4>
                                </div>
                                <div class="row ml-2">
                                    <h4>Email : <?= $s->email ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
    <!-- End Modal Show Siswa-->

    <!-- Modal Add Siswa-->
    <form action="/SiswaController/save" method="POST">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...">
                        </div>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="form-control" name="nis" placeholder="Masukan NIS...">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Email...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Add Siswa-->

    <!-- Modal Edit Siswa-->
    <?php foreach ($siswa as $s) : ?>
        <form action="/SiswaController/update" method="post">
            <div class="modal fade" id="editModal<?= $s->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header card-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" class="form-control" name="id" value="<?= $s->id; ?>" placeholder="Masukkan Nama...">
                                <input type="text" class="form-control" name="nama" value="<?= $s->nama; ?>" placeholder="Masukkan Nama...">
                            </div>
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" class="form-control" name="nis" value="<?= $s->nis; ?>" placeholder="Masukan NIS...">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?= $s->email; ?>" placeholder="Masukan Email...">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="Siswa_id" class="Siswa_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
    <!-- End Modal Edit Siswa-->

    <!-- Modal Delete Siswa-->
    <?php foreach ($siswa as $s) : ?>
        <form action="/SiswaController/delete" method="post">
            <div class="modal fade" id="deleteModal<?= $s->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Yakin hapus data santri ini?</h>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" class="form-control" value="<?= $s->id; ?>">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
    <!-- End Modal Delete Siswa-->

<?php elseif (session()->get('role') == 'siswa') : ?>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Detail Siswa
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama : <?= $nama; ?></li>
                <li class="list-group-item">NIS : <?= $nis; ?> </li>
                <li class="list-group-item">Email : <?= $email; ?></li>
            </ul>
        </div>
    </div>

<?php else : ?>
    <div class="alert alert-warning" role="alert">
        <div class="p-3 mb-2 bg-warning text-dark">Khusus User Terdaftar, silahkan login terlebih dahulu</div>
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>