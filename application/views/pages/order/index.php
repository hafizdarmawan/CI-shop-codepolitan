<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
            <div class="card-header">
                  <span>Order</span>
                  <div class="float-right">
                    <?= form_open(base_url('order/search'), ['method' => 'POST']) ?>
                    <!-- <form action=""> -->
                        <div class="input-group">
                            <input type="text" name="keyword" id="" class="form-control form-control-sm text-center" placeholder="Pencarian" value="<?= $this->session->userdata('keyword')?>">
                            <!-- <?= form_input('keyword',['class' => 'form-control', 'placeholder' => 'Pencarian']) ?> -->
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-search"></i>
                                </button>
                                <a href="<?= base_url('order/reset')?>" class="btn btn-secondary btn-sm">
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
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($content as $row): ?>
                        <tr>
                            <td>
                                <a href="<?= base_url('order/detail/'.$row->id)?>">#<?= $row->invoice ?></a>
                            </td>
                            <td><?= str_replace('-','/',date('d-m-Y', strtotime($row->date)))?></td>
                            <td>Rp<?= number_format($row->total,0,',','.')?>,-</td>
                            <td>
                                <?php $this->load->view('layouts/_status',['status' => $row->status ]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

                    <nav aria-label="Page navigation example">
                        <?= $pagination?>
                    </nav>
              </div>
        </div>
    </div>
</main>