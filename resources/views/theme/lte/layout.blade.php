<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UNEFA | Secretaría</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->       
        <link rel="stylesheet" href='{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}'>
        
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        
        <!-- Theme style -->
        <link rel="stylesheet" href='{{asset("assets/$theme/dist/css/adminlte.min.css")}}'>
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini layout-navbar-fixed control-sidebar-slide-open accent-primary" style="height: auto;">
    
    <!-- Site wrapper -->
        <div class="wrapper">

        <!--inicio heder-->
        @include("theme/$theme/header")
        <!--fin heder-->
        <!--inici aside-->
        @include("theme/$theme/aside")
        <!--fin aside-->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
  <!-- /.content-wrapper -->



        </div>
      <!--inici footer-->
      @include("theme/$theme/footer")
      <!--fin footer-->
        <!-- jQuery -->
        <script src='{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}'></script>
        <!-- Bootstrap 4 -->
        <script src='{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
        <!-- AdminLTE App -->
        <script src='{{asset("assets/$theme/dist/js/adminlte.min.js")}}'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='{{asset("assets/$theme/dist/js/demo.js")}}'></script>
    </body>
</html>
