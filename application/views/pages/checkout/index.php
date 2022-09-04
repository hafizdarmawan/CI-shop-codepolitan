<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-header">
            Formulir Alamat Pengiriman
          </div>
          <div class="card-body">
            <form action="<?= base_url('checkout/create')?>" method="POST">
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="" placeholder="Masukan nama penerima" autofocus>
                <?= form_error('name') ?>
                <!-- <small class="form-text text-danger">Nama harus diisi!</small> -->
              </div>
              <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="address" id="address" cols="30" rows="5" class="form-control"><?= $input->address?></textarea>
                <!-- <small class="form-text text-danger">Nama harus diisi!</small> -->
                <?= form_error('address') ?>
              </div>
              <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" name="phone" id="phone" value="" class="form-control" placeholder="+62">
                <!-- <small class="form-text text-danger">No Telepon harus diisi!</small> -->
                <?= form_error('phone') ?>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
            <div class="card shadow">
              <div class="card-header">
                Cart
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Harga</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($cart as $row): ?>
                  <tr>
                    <td><?= $row->title ?></td>
                    <td><?= $row->qty ?></td>
                    <td>Rp<?= number_format($row->price,0,',','.')?>,-</td>
                  </tr>
                  <tr>
                    <td colspan="2">Subtotal</td>
                    <td>Rp<?= number_format($row->subtotal,0,',','.')?>,-</td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="2">Total</th>
                    <th>Rp<?= number_format(array_sum(array_column($cart, 'subtotal')),0,',','.')?>,-</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
</main>