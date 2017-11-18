<?php
// configs
include_once 'requires.php';
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
                <small><h4>Editar Perfil</h4></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="../template/dist/img/user2-160x160.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center"><?php echo $dataUser['nombres'] ?></h3>
                            <p class="text-muted text-center"><?php echo $dataUser['apellidos'] ?></p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Telefono</b> <a class="pull-right"><?php echo $dataUser['telefono'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right"><?php echo $dataUser['email'] ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#edit" data-toggle="tab">Editar Perfil</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="edit">
                                <form class="form-horizontal" onsubmit="return false">
                                    <div class="form-group">
                                        <label for="inputNombres" class="col-sm-2 control-label">Nombres</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control" id="tipoE" value="<?php echo $tipo ?>">
                                            <input type="hidden" class="form-control" id="idE" value="<?php echo $id ?>">
                                            <input type="text" class="form-control" id="nombresE" placeholder="<?php echo $dataUser['nombres'] ?>" value="<?php echo $dataUser['nombres'] ?>" maxlength="150" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputApellidos" class="col-sm-2 control-label">Apellidos</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="apellidosE" placeholder="<?php echo $dataUser['apellidos'] ?>" value="<?php echo $dataUser['apellidos'] ?>" maxlength="150" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="telefonoE" placeholder="<?php echo $dataUser['telefono'] ?>" value="<?php echo $dataUser['telefono'] ?>" required="" data-inputmask="'mask': ['999-9999' , '999-99999']" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="emailE" placeholder="<?php echo $dataUser['email'] ?>" value="<?php echo $dataUser['email'] ?>" maxlength="150" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCI" class="col-sm-2 control-label">CI</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="ciE" placeholder="<?=$dataUser["ciOid"]?>" value="<?=$dataUser["ciOid"]?>" required="" data-inputmask="\'mask\': [\'9999999\', \'99999999\']" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSexo" class="col-sm-2 control-label">Genero</label>
                                        <div class="col-sm-10">
                                            <select class="form-control m-b" id="generoE">
                                                <option value="<?=$dataUser["genero"]?>"><?=$dataUser["genero"]?></option>
                                                <option value="MASCULINO">Masculino</option>
                                                <option value="FEMENINO">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    if($tipo=="1")
                                    {
                                        echo '
                                        <div class="form-group">
                                            <label for="inputCurso" class="col-sm-2 control-label">Curso y Paralelo</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cursoE" placeholder="'.$dataUser["curso"].'" value="'.$dataUser["curso"].'" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputGestion" class="col-sm-2 control-label">Gestion</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="gestionE" placeholder="'.$dataUser["gestion"].'" value="'.$dataUser["gestion"].'" required="">
                                            </div>
                                        </div>
                                        ';
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="inputPass" class="col-sm-2 control-label">Contraseña</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="passE" placeholder="<?php echo $dataUser['password'] ?>" value="<?php echo $dataUser['password'] ?>" minlength="6" maxlength="10" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" id="btnEdit" class="btn btn-danger">Editar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

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
