<main role="main" class="container" style="margin-top:90px ;">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  <span>Tambah Product</span>
                </div>
                <div class="card-body">
                    <!-- <div class="form-group"> -->
                    <?= form_open_multipart($form_action,['method' => 'POST']) ?>
                        <?= isset($input->id) ? form_hidden('id',$input->id) : '' ?>
                    <div class="form-group">
                        <label for="">Product</label>
                        <?= form_input('title', $input->title, ['class' => 'form-control','id' => 'title', 'required' => true, 'autofocus' => true, 'onkeyup' => 'createSlug()']) ?>
                        <?= form_error('title') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <?= form_textarea(['name' => 'description', 'value' => $input->description,'class' => 'form-control','row' => 4, 'id' => 'description', 'required' => true]) ?>
                        <?= form_error('description') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <?= form_input(['name' => 'price','value' => $input->price, 'class' => 'form-control','id' => 'price', 'required' => true]) ?>
                        <?= form_error('price') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <?= form_dropdown('id_category', getDropdownList('category',['id', 'title']), $input->id_category,['class' => 'form-control']) ?>
                        <?= form_error('id_kategori') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Ada Stock</label> <br>
                        <div class="form-check form-check-inline">
                            <!-- <input type="radio" name="status" id="" value="1" class="form-check-input"> -->
                            <?= form_radio(['name' => 'is_available', 'value' => 1, 'checked' => $input->is_available == 1 ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label"> Tersedia</label>    
                        </div>
                        <div class="form-check form-check-inline">
                            <!-- <input type="radio" name="status" id="" value="0" class="form-check-input"> -->
                            <?= form_radio(['name' => 'is_available', 'value' => 0, 'checked' => $input->is_available == 0 ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label"> Kosong</label>    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Image Product</label><br>
                        <?= form_upload('image') ?>
                        <?php if($this->session->flashdata('image_error')): ?>
                            <small class="form-text text-danger">
                                <?= $this->session->flashdata('image_error')?>
                            </small>
                        <?php endif; ?>
                        <?php if($input->image): ?>
                            <img src="<?= base_url("/images/product/$input->image")?>" alt="" class="img-thumbnail" width="150">
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <?= form_input('slug', $input->slug, ['class' => 'form-control','id' => 'slug', 'required' => true, 'readonly' => true]) ?>
                        <!-- <input type="text" name="nama" id="slug" class="form-control" required readonly> -->
                        <!-- <small class="form-text text-danger">Slug harus diisi !</small> -->
                        <?= form_error('slug') ?>
                    </div>
                  <button type="submit" class="btn btn-primary shadow">Simpan</button>
              <!-- </div> -->
              <?= form_close() ?>
        </div>
    </div>
</main>