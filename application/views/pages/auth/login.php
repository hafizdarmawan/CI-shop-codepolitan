<main role="main" class="container" style="margin-top:90px ;">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                  Login
                </div>
                <div class="card-body">
                    <?= form_open('login',['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <!-- <input type="email" name="email" id="email" class="form-control" required autofocus> -->
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <!-- <small class="form-text text-danger">E-mail harus diisi !</small> -->
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <!-- <input type="password" name="password" id="password" class="form-control" required> -->
                        <?= form_password('password','',['class' => 'form-control', 'required' => true, ]) ?>
                        <!-- <small class="form-text text-danger">Password harus diisi !</small> -->
                        <?= form_error('password') ?>
                    </div>
                    <button type="submit" class="btn btn-primary shadow">Login</button>
                <?= form_close() ?>
        </div>
    </div>
</main>