<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $submenu; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $parent; ?></a></li>
                        <li class="breadcrumb-item active"><?= $submenu; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (session()->getFlashdata('message')) : ?>
                        <?= session()->getFlashdata('message'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <a href="<?= base_url(); ?>/category/addnew" class="btn btn-primary">Tambah Kategori</a>
                </div>
                <div class="col-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari kategori..." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit" name="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Url</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                            <?php foreach ($category as $c) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $c['category_name']; ?></td>
                                    <td><?= $c['category_slug']; ?></td>
                                    <?php if ($c['active'] == 1) : ?>
                                        <td>Aktif</td>
                                    <?php else : ?>
                                        <td>Tidak Aktif</td>
                                    <?php endif; ?>
                                    <td>
                                        <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                        <a href="" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $pager->links('category', 'pagination'); ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>