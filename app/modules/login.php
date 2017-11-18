<?php
    // configs
 //include_once 'requires.php';
?>
<html>
<?php
    // templates
    include 'header_template.php';
?>
<body class="hold-transition login-page">
<!-- content -->
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Orienta</b>EMI</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Bienvenido a OV, sistema basado en logica difusa para la Orientacion Vocacional de los Estudiantes</p>
        <form method="post" onsubmit="return false">
            <div class="form-group has-feedback">
                <input type="email" id="email" class="form-control" placeholder="Email" required="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="pass" class="form-control" placeholder="Contraseña" minlength="6" maxlength="10" required="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" id="btn" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                </div>
                <!-- /.col -->
            </div>
            <div class="text-center">
                <span id="result"></span>
            </div>
        </form>
        <div class="text-center">
            <a href="register.php" class="text-center">Eres un Estudiante? Registrate!!!</a>
        </div>
        <p class="m-t text-center"> <small>Desarrollado por Deysi Chura &copy; 2017</small> </p>
    <div>
     <CENTER><img src="../template/dist/img/logo.png" width="72"><b>ESCUELA MILITAR DE INGENIERIA</b></CENTER>
    <!-- /.login-box-body -->
    </div>
    </div>
</div>
<!-- /.login-box -->

<?php
    // templates
    include 'scripts_template.php';
?>

</body>
</html>