<main role="main" class="container" style="margin-top:80px;">
<?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  Formulir Registrasi
                </div>
                <div class="card-body">
                 <?= form_open('register', ['method' => 'POST']) ?>
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
                      <?= form_password('password', '' ,['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukan password']) ?>
                      <!-- <small class="form-text text-danger">Password harus diisi !</small> -->
                      <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <!-- <input type="password" name="password" id="password" class="form-control" required> -->
                      <?= form_password('password_confirmation', '' ,['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukan password yang sama']) ?>
                      <!-- <small class="form-text text-danger">Password harus sama !</small> -->
                      <?= form_error('password_confirmation') ?>
                    </div>
                  <button type="submit" class="btn btn-primary shadow">Register</button>
                <?php form_close() ?>
          </div>
      </div>
    </div>
</main>