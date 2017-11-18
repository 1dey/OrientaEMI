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
                <small><h4>Inventario de Aptitud Vocacional</h4></small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <div class="box box-solid box-info">
        <div class="box-header">
          <h3 class="box-title">Detalles del Test de Aptitud Vocacional</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <p>A continuación, te presentamos una lista de actividades comunes, de las cuales puedes contar con alguna experiencia personal. Ese ejercicio fue diseñado para que descubras tus aptitudes.</p>
          <p>Antes de elegir una respuesta, recuerda o imagina en qué consiste la respectiva actividad. </p>
        </div><!-- /.box-body -->
      

                                        <a class="list-group-item">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <button type="button" class="btn btn-danger m-r-sm">1</button>
                                                        Considero ser no apto
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning m-r-sm">2</button>
                                                        Considero ser muy poco apto
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-default m-r-sm">3</button>
                                                        Considero ser medianamente apto
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info m-r-sm">4</button>
                                                        Considero ser apto
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary m-r-sm">5</button>
                                                        Considero ser muy apto
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <p class="box-body">¿Qué tan apto te consideras para…?</p>
                                    </div>
                                </div>
                                </div>
                                <div class="box">
                  <!-- /.box-header -->
                             <div class="box-body">
                                <form action="Ctrl_Test_Aptitudes.php" method="get" class="form-horizontal">
                                    <div id="preguntasAptitudes" class="form-group">
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
                <input type="hidden" name="checkTest" id="checkTest" value="<?= $pregAp; ?>">
                <!-- /.modal -->
                <!-- /.<div class="modal modal-success fade" id="modal-success"> -->
                <div class="modal modal-info fade" id="modal-success">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Test Realizado</h4>
                            </div>
                            <div class="modal-body">
                                <p>Usted ya realizo el test, vea la ventana de resultados para revisar sus calificaciones o realice el siguiente Test de Cuestionario de Interes Vocacional.</p>
                            </div>
                            <div class="modal-footer">
                                <a type="button" href="comenzar_test.php" class="btn btn-outline pull-left">Ir al test</a>
                                <a type="button" href="historial_prueba.php" class="btn btn-outline">Ver resultados</a>
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
