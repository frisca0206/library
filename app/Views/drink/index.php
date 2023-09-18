<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div>
                <!-- /.container -->
            </div>
            <!-- /.container-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Drink</h3>
                                    <div class="d-flex justify-content-end mb-1">
                                        <a href="<?= url_to('drink-create') ?>" class="btn btn-success mb-2"
                                            id="btn_modal_create">Create</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="drink_table" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Buah</th>
                                                <th>Kategori Minuman</th>
                                                <th>Harga</th>
                                                <th width="150">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($drinks as $key => $drink) : ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $drink['nama_buah'] ?></td>
                                                <td><?= $drink['kategori_minuman'] ?></td>
                                                <td><?= $drink['harga'] ?></td>
                                                <td>
                                                    <a href="<?= url_to('drink-edit', $drink['id'])?>"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="<?= url_to('drink-delete', $drink['id'])?>"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->

        </div>



        <?= $this->endSection('content'); ?>