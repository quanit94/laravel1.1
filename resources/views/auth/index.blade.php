<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AikoAdmin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    {!!HTML::style('public/bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->
    <!-- <link href="" rel="stylesheet" type="text/css" /> -->
    {!!HTML::style('public/dist/css/AdminLTE.min.css')!!}
    <!-- iCheck -->
    <!-- <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" /> -->
    {!!HTML::style('public/plugins/iCheck/square/blue.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">

      <?php if(Session::has('flash_error')) { ?>
        <div class="alert alert-error">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo Session::get('flash_error'); ?>
        </div>
      <?php } ?>
      <div class="login-logo">
        <a href="#"><b>Aiko</b> Admin</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        {!! Form::open(array('url' => 'login', 'method' => 'post')) !!}

          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" />
            <!-- { !! Form::email('email', 'Email', ['class' -> 'form-control']) !! } -->
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <span class="report"></span>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" id="submit">Sign In</button>
            </div><!-- /.col -->
          </div>
        {!! Form::close() !!}
        <a href="forgetPassword.html">I forgot my password</a><br>
        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
  
    {!!HTML::script('public/plugins/jQuery/jQuery-2.1.4.min.js')!!}
    <!-- Bootstrap 3.3.2 JS -->

    {!!HTML::script('public/bootstrap/js/bootstrap.min.js')!!}
    <!-- iCheck -->

    {!!HTML::script('public/plugins/iCheck/icheck.min.js')!!}
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        $('#submit').on('click', function(){
            $('.report').text('');
            $email = $('#email').val();
            $pass  = $('#pass').val();
            if($email == ''){
              $('.report').text("You didn't enter email!");
              return false;
            }
            if($pass == ''){
              $('.report').text("You didn't enter password");
              return false;
            }
            return true;
        });
      });
    </script>
  </body>
</html>
