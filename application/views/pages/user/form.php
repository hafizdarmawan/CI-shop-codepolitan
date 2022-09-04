<main role="main" class="container" style="margin-top:90px ;">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  <span>Tambah Pengguna</span>
                </div>
                <div class="card-body">
                    <!-- <div class="form-group"> -->
                    <?= form_open_multipart($form_action,['method' => 'POST']) ?>
                        <?= isset($input->id) ? form_hidden('id',$input->id) : '' ?>
                        <div class="form-group">
                        <label for="">Nama</label>
                        <!-- <input type="text" name="nama" id="nama" class="form-control" required autofocus> -->
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true ]) ?>
                        <!-- <small class="form-text text-danger">Nama harus diisi !</small> -->
                        <?= form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <!-- <input type="email" name="email" id="email" class="form-control" required> -->
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email,'class' => 'form-control', 'required' => true, 'placeholder' => 'Masukan Email aktif']) ?>
                        <!-- <small class="form-text text-danger">E-mail harus diisi !</small> -->
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <!-- <input type="password" name="password" id="password" class="form-control" required> -->
                      <?= form_password('password', '' ,['class' => 'form-control', 'placeholder' => 'Masukan password']) ?>
                      <!-- <small class="form-text text-danger">Password harus diisi !</small> -->
                      <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Role</label> <br>
                        <div class="form-check form-check-inline">
                            <!-- <input type="radio" name="status" id="" value="1" class="form-check-input"> -->
                            <?= form_radio(['name' => 'role', 'value' => 'admin', 'checked' => $input->role == 'admin' ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label"> Admin</label>    
                        </div>
                        <div class="form-check form-check-inline">
                            <!-- <input type="radio" name="status" id="" value="0" class="form-check-input"> -->
                            <?= form_radio(['name' => 'role', 'value' => 'member', 'checked' => $input->role == 'member' ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label"> Member</label>    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label> <br>
                        <div class="form-check form-check-inline">
                            <!-- <input type="radio" name="status" id="" value="1" class="form-check-input"> -->
                            <?= form_radio(['name' => 'is_active', 'value' => '1', 'checked' => $input->is_active == '1' ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label"> Aktif</label>    
                        </div>
                        <div class="form-check form-check-inline">
                            <!-- <input type="radio" name="status" id="" value="0" class="form-check-input"> -->
                            <?= form_radio(['name' => 'is_active', 'value' => '0', 'checked' => $input->is_active == '0' ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label"> Tidak Aktif</label>    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label><br>
                        <?= form_upload('image') ?>
                        <?php if($this->session->flashdata('image_error')): ?>
                            <small class="form-text text-danger">
                                <?= $this->session->flashdata('image_error')?>
                            </small>
                        <?php endif; ?>
                        <?php if(isset($input->image)): ?>
                            <img src="<?= base_url("/images/user/$input->image")?>" alt="" class="img-thumbnail" width="150">
                        <?php endif ?>
                    </div>
                  <button type="submit" class="btn btn-primary shadow">Simpan</button>
              <!-- </div> -->
              <?= form_close() ?>
        </div>
    </div>
</main>