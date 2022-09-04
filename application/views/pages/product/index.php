<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  <span>Data Product</span>
                  <a href="<?= base_url('product/create')?>" class="btn btn-sm btn-secondary">Tambah</a>
                  <div class="float-right">
                    <form action="<?= base_url('product/search')?>" method="POST">
                        <div class="input-group">
                            <input type="text" name="keyword" id="keyword" class="form-control form-control-sm text-center" placeholder="Pencarian" value="<?= $this->session->userdata('keyword')?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-search"></i>
                                </button>
                                <a href="<?= base_url('product/reset')?>" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-eraser"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stock</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($content as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <p>
                                        <img src="<?= $row->image ? base_url("images/product/$row->image") : $row->title ?>" alt="" class="img-thumbnail" width="200">
                                        <?= $row->product_title?>
                                    </p>
                                </td>
                                <td>
                                    <span class="badge badge-primary">
                                        <i class="fa fa-tags"></i>
                                        <?= $row->category_title?>
                                    </span>
                                </td>
                                <td>Rp <?= number_format($row->price,0,',','.') ?>,-</td>
                                <td><?= $row->is_available ? 'Tersedia' : 'Kosong' ?></td>
                                <td>
                                    <a href="<?= base_url("product/edit/$row->id")?>">
                                            <button class="btn btn-sm">
                                                <i class="fa fa-edit text-info"></i>
                                            </button>
                                    </a>
                                    <form action="<?= base_url("product/delete/$row->id")?>" method="POST">
                                    <input type="hidden" value="<?= $row->id?>" name="id"> 
                                        <button class="btn btn-sm" type="submit" onclick="return confirm('Are you Sure?')">
                                        <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                    <?= $pagination ?>
                    </nav>
              
              </div>
        </div>
    </div>
</main>