<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert')?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  <span>Category</span>
                  <a href="<?= base_url('category/create')?>" class="btn btn-sm btn-secondary">Tambah</a>
                  <div class="float-right">
                    <?= form_open(base_url('category/search'), ['method' => 'POST']) ?>
                    <!-- <form action=""> -->
                        <div class="input-group">
                            <input type="text" name="keyword" id="" class="form-control form-control-sm text-center" placeholder="Pencarian" value="<?= $this->session->userdata('keyword')?>">
                            <!-- <?= form_input('keyword',['class' => 'form-control', 'placeholder' => 'Pencarian']) ?> -->
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-search"></i>
                                </button>
                                <a href="<?= base_url('category/reset')?>" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-eraser"></i>
                                </a>
                            </div>
                        </div>
                        <?= form_close() ?>
                    <!-- </form> -->
                  </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($content as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->title?></td>
                                <td><?= $row->slug?></td>
                                <td>
                                <a href="<?= base_url("category/edit/$row->id")?>">
                                        <button class="btn btn-sm">
                                                <i class="fa fa-edit text-info"></i>
                                        </button>
                                    </a>

                                    <?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>
                                    <?= form_hidden('id', $row->id) ?>

                                    <button class="btn btn-sm" type="submit" onclick="return confirm('Are you Sure?')">
                                        <i class="fa fa-trash text-danger"></i>
                                    </button>
                                    <?= form_close() ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                    <?= $pagination ?>
                    </nav>
              
              </div>
        </div>
    </div>
</main>