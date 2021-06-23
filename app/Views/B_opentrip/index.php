<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h1 class="mt-4"><i class="fas fa-table"></i> CRUD Paket</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Crud Opentrip</li>
            </ol>
            <div class="card mb-4">
                 <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    OpenTrip Tabel
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus-square"></i> Tambah data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tujuan</th>
                                    <th>Tarif Trip</th>
                                    <th>Kuota Trip</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;
                                foreach ($opentrip as $datas) : ?>
                                    <tr>
                                        <td width="1%"><?= $no++; ?></td>
                                        <td><?= esc($datas['tujuan_opentrip']); ?></td>
                                        <td><?= esc($datas['tarif_opentrip']); ?></td>
                                        <td><?= esc($datas['kuota_opentrip']); ?></td>
                                        <td class="text-center" width="10%">
                                            <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#deleteModal<?= $datas['id_opentrip']; ?>">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <!-- Add modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('B_opentrip/add_data'); ?>
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Tujuan Trip</label>
                        <input type="text" name="tujuan_opentrip" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tarif Trip</label>
                        <input type="text" name="tarif_opentrip" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Kuota</label>
                        <input type="text" name="kuota_opentrip" id="" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($opentrip as $datas) : ?>
    <div class="modal fade" id="deleteModal<?= $datas['id_opentrip']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i> Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('b_opentrip/delete_data/'.$datas['id_opentrip']); ?>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $datas['id_opentrip']; ?>">
                    <p>Click the submit button to delete data (<?= $datas['tujuan_opentrip']; ?>)..!!!</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

<?= $this->endSection(); ?>