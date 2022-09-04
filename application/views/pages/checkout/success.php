<main role="main" class="container" style="margin-top:90px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    Checkout Berhasil
                </div>
                <div class="card-body">
                    <h5>Nomer Order: <?= $content->invoice?></h5>
                    <p>Terima Kasih, sudah belajar</p>
                    <p>Silahkan lakukan pembayaran unutk bisa kami proses selanjutnya dengan cara:</p>
                    <ol>
                        <li>Lakukan pembayaran ada rekening <strong>BCA 3209123123</strong> a/n PT.Hafizd</li>
                        <li>Sertakan keterangan dengan nomor order: <strong><?= $content->invoice?></strong></li>
                        <li>Total Pembayaran: <strong>Rp<?= number_format($content->total,0,',','.')?>,-</strong></li>
                    </ol>
                    <p>
                        Jika sudah, silahkan kirimkan bukti transfer di halaman konfirmasi atau bisa <a href="" class="btn btn-sm btn-primary">Klik disini</a>
                    </p>
                    <a href="<?= base_url('/')?>" class="btn btn-sm btn-warning text-white"><i class="fa fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>