<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Aksi | Masuk</title>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/styles/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page" style="background-image: url('assets/images/bg31.png'); background-color: #00a65a;">

    <div class="login-box" style="background-color: white; border: 5px solid #ebebeb;">
      <div class="login-logo" style="color: #00a65a; margin-bottom: 0px;">
        <b>A K S I</b>
        <p style="font-size: 24px;">Aplikasi Koperasi</p>
        <p class="login-box-msg" style="font-size: 72px"><i class="fa fa-shield text-green"></i></p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
<!--<p class="login-box-msg">Sign in to start your session</p>-->
        <form action="" method="post" id="ff">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Nama Pengguna" name="user_name" id='user_name' required="" autofocus="">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Kata Sandi" name="password" id='password' required="">
          </div>
          <br>
          <button id="login_btn" type="submit" class="btn btn-success btn-block" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Memeriksa..."><i class="fa fa-sign-in"></i> Masuk</button>
        </form>

        <a href="#"><i class="fa fa-question-circle"></i> Lupa kata sandi</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </body>
  <script>
    $(document).ready(function() {

      $('#ff').submit(function(e) {
        e.preventDefault();
        console.log($(this).serialize());
        var btn = $('#login_btn');
        $.ajax({
          url: $(this).attr('action'),
          type: 'post',
          data: $(this).serialize(),
          dataType: 'json',
          beforeSend: function() {
            btn.button('loading');
          },
          success: function(data) {
            if (data.status == 'success') {
              window.location.href = '<?php echo base_url('dashboard'); ?>';
            } else {
              showPopOver('#'+data.field, data.message);
            }
          },
          complete: function() {
            btn.button('reset');
          }
        });
      });

    });

    function showPopOver(element, message) {
      if (element == '#user_name') {
        $('#password').popover('destroy');
      } else {
        $('#user_name').popover('destroy');
      }
      
      var options = {
        title : '<i class="fa fa-exclamation-circle"></i> Peringatan',
        content: message,
        placement: 'right',
        container: 'body',
        html : true,
        trigger : 'manual',
      };
      $(element).popover(options);
      $(element).popover('show');
    }
  </script>
</html>
