<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GIPEF</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="vistas/img/plantilla/iconoindex.png">

    <!--=====================================
  PLUGINS DE CSS
  ======================================-->

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>

    <!-- DataTables -->
    <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

    <!-- InputMask -->
    <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

    <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/cabezote.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/menu.php";

    /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "PlanClase"||
         $_GET["ruta"] == "PlanCurricular"||
         $_GET["ruta"] == "salir"||
         $_GET["ruta"] == "perfil"||
         $_GET["ruta"] == "actividades"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }

  ?>


    <script src="vistas/js/plantilla.js"></script>
</body>

</html>