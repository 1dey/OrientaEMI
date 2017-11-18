<?php
// configs
include_once 'requires.php';
include_once 'Ctrl_Historial_Prueba.php';
?>
<html>
<?php
// templates
include 'header_template.php';
?>
<body class="hold-transition skin-yellow sidebar-mini">
<!-- content -->
<div class="wrapper">
    <?php include 'navbar_header_template.php'?>
    <?php include 'navbar_template.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
                <section class="content-header">
            <h1> 
                <small><h4>Cuestionario de Interés Vocacional</h4></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">

                            </div>
                            <div class="ibox-content">
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <div class="box box-solid box-warning">
                                        <div class="box-header">
                                         <h3 class="box-title">Detalles del Test de Cuestionario de Interes Vocacional</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                 <p>A continuación, encontraras preguntas relacionadas con ambientes o actividades ocupacionales. Al contestarlas, responde pensando en QUE TANTO TE GUSTAN, dejando de lado si eres competente o no en esos espacios o actividades. </p>
                                <p>Elige la opcion en base al número correspondiente a tu preferencia siguiendo las indicaciones de la tabla que tienes a continuación:</p>
                                </div><!-- /.box-body -->
                                </div>
                                <a class="list-group-item">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <button type="button" class="btn btn-danger m-r-sm">1</button>
                                                        Me disgusta totalmente
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning m-r-sm">2</button>
                                                        Me disgusta
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-default m-r-sm">3</button>
                                                        Me es indiferente
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info m-r-sm">4</button>
                                                        Me gusta
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary m-r-sm">5</button>
                                                        Me gusta mucho
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                    </div>
                                </div>
                                <div class="box">
                  <!-- /.box-header -->
                              <div class="box-body">
                                <form action="Ctrl_Test_Vocacional.php" method="get" class="form-horizontal">
                                    <div id="preguntas" class="form-group">
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary block full-width m-b col-md-12 col-sm-12">Finalizar Test</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="checkTest" id="checkTest" value="<?= $pregOV; ?>">
                <!-- /.modal -->
                <!-- /.<div class="modal modal-success fade" id="modal-success"> -->
                <div class="modal modal-warning fade" id="modal-success">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Test realizado</h4>
                            </div>
                            <div class="modal-body">
                                <p>Usted ya realizo el Test de Cuestionario de Interes Vocacional, vea la ventana de resultados para revisar sus calificaciones o realice el siguiente Test de Aptitud.</p>
                            </div>
                            <div class="modal-footer">
                                <a type="button" href="comenzar_test_aptitudes.php" class="btn btn-outline pull-left">Ir al Test</a>
                                <a type="button" href="historial_prueba.php" class="btn btn-outline">Ver Resultados</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
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
