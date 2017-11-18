<?php
// configs
include_once 'requires.php';

$ci=$_REQUEST['ci'];
?>
<html>
<?php
// templates
include 'header_template.php';
?>
<body class="hold-transition skin-red sidebar-mini">
<!-- content -->
<div class="wrapper">
    <?php include 'navbar_header_template.php'?>
    <?php include 'navbar_template.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small><h4>Editar Usuario</h4></small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="register-box-body" style="width: 50%; margin: auto">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nombresP" placeholder="Nombres" maxlength="150" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="apellidosP" placeholder="Apellidos" maxlength="150" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="ciP" placeholder="CI" required="" data-inputmask="'mask': ['9999999', '99999999']" data-mask>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="telefonoP" placeholder="Telefono" required="" data-inputmask="'mask': ['999-9999' , '999-99999']" data-mask>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="emailP" placeholder="Email" maxlength="150" required="">
                            </div>
                            <div class="form-group">
                                <select class="form-control m-b" id="generoP">
                                    <option value="MASCULINO">Masculino</option>
                                    <option value="FEMENINO">Femenino</option>
                                </select>
                            </div>
                            <button type="button" id="btnPsicologo" class="btn btn-primary block full-width m-b">Registrar</button>
                            <div class="text-center">
                                <span id="result"></span>
                            </div>
                        </form>
                    </div>
                    <!-- /.form-box -->
                </div>
                <!-- ./col -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'footer_template.php'?>
</div>
</body>
<?php
// templates
include 'scripts_template.php';

?>
</html>
