<body class="bg-gradient-primary">

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-9 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
              </div>
              <?= $this->session->flashdata('message'); ?>
              <form class="user" method="POST">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" value="<?= set_value('username') ?>" placeholder="Enter Username...">
                  <?php echo form_error('username','<div class="text-danger mt-1">','</div>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  <?php echo form_error('password','<div class="text-danger mt-1">','</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>