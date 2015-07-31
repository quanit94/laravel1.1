<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/bootstrap/css/bootstrap.min.css')!!}
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <!-- <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="{{asset('public/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <!-- <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/dist/css/skins/_all-skins.min.css')!!}
    <!-- iCheck -->
    <!-- <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/plugins/iCheck/flat/blue.css')!!}
    <!-- Morris chart -->
    <!-- <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/plugins/morris/morris.css')!!}
    <!-- jvectormap -->
    <!-- <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
    <!-- Date Picker -->
    <!-- <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/plugins/datepicker/datepicker3.css')!!}
    <!-- Daterange picker -->
    <!-- <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/plugins/daterangepicker/daterangepicker-bs3.css')!!}
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    {!! HTML::style('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
    <!-- header and navigation -->
      @include('template.header')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          @yield('content')
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    {!!HTML::script('public/plugins/jQuery/jQuery-2.1.4.min.js')!!}
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript">
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    @yield('other_js')
    <!-- Bootstrap 3.3.2 JS -->
    {!!HTML::script('public/bootstrap/js/bootstrap.min.js')!!}
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    {!!HTML::script('public/plugins/morris/morris.min.js')!!}
    <!-- Sparkline -->
    {!!HTML::script('public/plugins/sparkline/jquery.sparkline.min.js')!!}
    <!-- jvectormap -->
    {!!HTML::script('public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!HTML::script('public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    <!-- jQuery Knob Chart -->
    {!!HTML::script('public/plugins/knob/jquery.knob.js')!!}
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>

    {!!HTML::script('public/plugins/daterangepicker/daterangepicker.js')!!}
    <!-- datepicker -->
    {!!HTML::script('public/plugins/datepicker/bootstrap-datepicker.js')!!}
    <!-- Bootstrap WYSIHTML5 -->
    {!!HTML::script('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    <!-- Slimscroll -->
    {!!HTML::script('public/plugins/slimScroll/jquery.slimscroll.min.js')!!}
    <!-- FastClick -->
    {!!HTML::script('public/plugins/fastclick/fastclick.min.js')!!}
    <!-- AdminLTE App -->
    {!!HTML::script('public/dist/js/app.min.js')!!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!!HTML::script('public/dist/js/pages/dashboard.js')!!}
    <!-- AdminLTE for demo purposes -->
    {!!HTML::script('public/dist/js/demo.js')!!}


  </body>
</html>
