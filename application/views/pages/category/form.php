<main role="main" class="container" style="margin-top:90px;">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  <span>Formulir Kategori</span>
                </div>
                <div class="card-body">
                <?= form_open($form_action,['method' => 'POST']) ?>
                    <?= isset($input->id) ? form_hidden('id',$input->id) : '' ?>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <!-- <input type="text" class="form-control" name="title" id="title" required autofocus onkeyup="createSlug()"> -->
                        <?= form_input('title', $input->title, ['class' => 'form-control','id' => 'title', 'required' => true, 'autofocus' => true, 'onkeyup' => 'createSlug()']) ?>
                        <!-- <small class="form-text text-danger">Kategori harus diisi !</small> -->
                        <?= form_error('title') ?>
                    </div>
                    <div class="form-group">
                      <label for="">Slug</label>
                      <!-- <input type="text" name="slug" id="slug" class="form-control" required readonly> -->
                      <?= form_input('slug', $input->slug, ['class' => 'form-control','id' => 'slug', 'required' => true, 'readonly' => true]) ?>
                      <?= form_error('slug') ?>
                  </div>
                  <button type="submit" class="btn btn-primary shadow">Simpan</button>
                <?= form_close() ?>
        </div>
    </div>
</main>