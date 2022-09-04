<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layouts/_menu') ?>
        </div>
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">
                   Konfirmasi Order #<?= $order->invoice?>
                    <div class="float-right">
                        <span class="badge badge-pill badge-info"><?php $this->load->view('layouts/_status', ['status' => $order->status ])?></span>
                    </div>
                </div>
                <form action="<?= $form_action ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $order->id?>" name="id_order">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Kode Transaksi</label>
                            <input type="text" name="" id="" value="<?= $order->invoice ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Rekening</label>
                            <input type="text" name="account_name" id="account_name" class="form-control" value="<?= $input->account_name?>" required>
                            <?php form_error('account_name') ?>
                        </div>
                        <div class="form-group">
                            <label for="">No Rekening</label>
                            <input type="text" name="account_number" id="account_number" class="form-control" value="<?= $input->account_number?>" required>
                            <?php form_error('account_number') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Sebesar</label>
                            <input type="number" name="nominal" id="nominal" class="form-control" value="<?= $input->nominal?>" required>
                            <?php form_error('nominal') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="note" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Bukti Transfer</label> <br>
                            <input type="file" name="image" id="image">
                            <?php if($this->session->flashdata('image_error')): ?>
                            <small class="form-text text-danger">
                                <?= $this->session->flashdata('image_error')?>
                            </small>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary shadow">Konfirmasi Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>