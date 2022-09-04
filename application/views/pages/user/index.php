<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  <span>Pengguna</span>
                  <a href="<?= base_url('user/create')?>" class="btn btn-sm btn-secondary">Tambah</a>
                  <div class="float-right">
                    <form action="">
                        <div class="input-group">
                            <input type="text" name="" id="" class="form-control form-control-sm text-center" placeholder="Pencarian">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-search"></i>
                                </button>
                                <a href="#" class="btn btn-secondary btn-sm">
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
                                <th scope="col">Pengguna</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($content as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <p>
                                        
                                        <img src="<?= $row->image ? base_url("images/user/$row->image") : "https://placehold.co/70x70" ?>" alt="" class="img-thumbnail" width="150">
                                    </p>
                                </td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->role == 'admin' ? 'Admin' : 'Member' ?></td>
                                <td><?= $row->is_active == 1 ? 'Aktif' : 'Non-aktif' ?></td>
                                <td>
                                    <a href="<?= base_url("user/edit/$row->id")?>">
                                        <button class="btn btn-sm">
                                                <i class="fa fa-edit text-info"></i>
                                        </button>
                                     </a>
                                     <form action="<?= base_url("user/delete/$row->id")?>" method="POST">
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