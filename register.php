<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  </head>
  <body  id="mimin" class="dashboard form-signin-wrapper">
    <div class="container">
    <!-- <?php
    /* handle error */
      if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?> -->

    <form class="form-signin" action="check-login.php" method="post">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Fre</h1>
                  <p class="atomic-mass">14.072110</p>
                  <p class="element-name">Register</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="nama" class="form-text" required>
                    <span class="bar"></span>
                    <label>Nama</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="kode" class="form-text" required>
                    <span class="bar"></span>
                    <label>Register Code</label>
                  </div>
                  <input type="submit" class="btn col-md-12" value="LOGIN"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="login.php">| SignIn</a>
                </div>
          </div>
        </form>

      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
  </body>
</html>