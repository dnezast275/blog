<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
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
                    <form action="<?= base_url(); ?>/menu/savemenu" method="post">
                        <div class="form-group">
                            <label for="parent">Parent Menu</label>
                            <select name="parent" id="parent" class="form-control">
                                <option value="">Pilih :</option>
                                <?php foreach ($menulist as $m) : ?>
                                    <option value="<?= $m['menu']; ?>"><?= $m['menu_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="menu-name">Nama Menu</label>
                            <input type="text" name="menu-name" class="input-group form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>