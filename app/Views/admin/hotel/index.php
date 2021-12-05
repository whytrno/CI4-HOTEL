<?= $this->extend('admin/template/index') ?>
<?= $this->section('content') ?>
<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10">

                <div class="row">

                    <div class="col-xl-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">DASHBOARD</a></li>
                            <li class="breadcrumb-item active">HOTEL</li>
                        </ul>
                        <h1 class="page-header">
                            Data Hotel
                            <a href="<?= base_url('admin/hotel/add'); ?>" style="float: right" class="btn btn-theme">Tambah</a>
                        </h1>
                        <hr class="mb-4" />

                        <div id="datatable" class="mb-5">
                          <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Tipe</th>
                                                <th>Kota</th>
                                                <th>Alamat</th>
                                                <th>Harga</th>
                                                <th>Deskripsi</th>
                                                <th>Fasilitas</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $no=1; foreach($item as $u):?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $u['item_name'] ?></td>
                                                <td><?= $u['item_type'] ?></td>
                                                <td><?= $u['item_city'] ?></td>
                                                <td><?= $u['item_address'] ?></td>
                                                <td><?= $u['item_price'] ?></td>
                                                <td><?= $u['item_desc'] ?></td>
                                                <td><?= $u['item_facility'] ?></td>
                                                <td><a href="<?= base_url('admin/image/'.$u['item_id']) ?>" class="btn btn-primary">Lihat</a></td>
                                                <td>
                                                  <a href="<?= base_url('admin/hotel/edit/'.$u['item_id']) ?>" class="btn btn-info">Ubah</a>
                                                  <a href="<?= base_url('admin/hotel/delete/'.$u['item_id']) ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                          <?php $no++; endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
<?= $this->endSection() ?>