<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    Cart
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($content as $row): ?>
                            <tr>
                                <td>
                                    <p>
                                        <img src="<?= $row->image ? base_url("images/product/$row->image") : 'https://placehold.co/50x50' ?>" alt="" class="img-thumbnail" width="50">
                                        <strong> <?= $row->title ?> </strong>
                                    </p>
                                </td>
                                <td class="text-center">Rp<?= number_format($row->price,0,',','.')?>,-</td>
                                <td>
                                    <form action="<?= base_url('cart/edit/'.$row->id)?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                        <div class="input-group">
                                            <input type="number" name="qty" id="qty" value="<?= $row->qty ?>" class="form-control text-center">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-info">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">Rp<?= number_format($row->subtotal,0,',','.')?></td>
                                <td>
                                    <form action="<?= base_url('cart/delete/'.$row->id)?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                         <button class="btn btn-sm" type="submit" onclick="return confirm('Are you Sure?')">
                                            <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="3"><strong>Total:</strong></td>
                                <td class="text-center"><strong>Rp<?= number_format(array_sum(array_column($content, 'subtotal')),0,',','.')?>,-</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('/')?>" class="btn btn-warning text-white"><i class="fa fa-angle-left"></i> Kembali </a> 
                    <a href="<?= base_url('checkout')?>" class="btn btn-success float-right"> Pembayaran <i class="fa fa-angle-right"></i></a> 
                 </div>
            </div>
        </div>
    </div>
</main>