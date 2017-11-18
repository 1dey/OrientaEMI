<?php
// configs
include_once 'requires.php';
include_once 'Ctrl_Test_Ingenieria.php';
include_once 'Ctrl_Historial_Prueba.php';
?>
<html>
<?php
// templates
include 'header_template.php';
?>
<body class="hold-transition skin-blue sidebar-mini">
<!-- content -->
<div class="wrapper">
    <?php include 'navbar_header_template.php'?>
    <?php include 'navbar_template.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php include 'page_title_template.php';?>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="clock" style="text-align: center; margin-left: 35%"></div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">

                            </div>
                            <div class="ibox-content">
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <a class="list-group-item active">
                                            <h4 class="list-group-item-heading"><strong>Detalles del Test</strong></h4>
                                            <p class="list-group-item-text"><h4>Cada pregunta acertada suma 2 puntos y cada pregunta errónea resta 1, si se queda en blanco ni suma ni resta.</h4></p>
                                            <p class="list-group-item-text"><h4>La nota final se presenta del uno al diez tras pulsar el boton.</h4></p>
                                            <p class="list-group-item-text"><h4>Pulse "Finalizar Test" para finalizar el ejercicio y ver el resultado del Test.</h4></p>
                                        </a>
                                    </div>
                                </div>
                                <form action="Ctrl_Test_Ingenieria.php" method="get" class="form-horizontal">
                                    <div id="preguntasIngenieria" class="form-group">
                                        <input type="hidden" value="" name="timer" id="timer" />
                                        <input type="hidden" value="2400" name="timerValue" id="timerValue" />
                                        <?php
                                            foreach($preg as $pr)
                                            {
                                                $resp=RespuestasIngenieria::query()->where('id_pregunta','=',$pr["id"])->get();
                                            echo '<div class="col-md-12 col-sm-12" style="border-bottom: groove">
                                                <div class="col-md-12 col-sm-12">
                                                    <h3 class="text-navy">Pregunta '.($pr["id"]-60).'</h3>
                                                    <h4 class="">'.$pr["pregunta"].'</h4>
                                                </div>
                                                <div class="col-md-12 col-sm-12" style="margin-left: 10%">
                                                    <div class="form-group">
';
                                                        foreach ($resp as $rs)
                                                        {
                                                            $name="ing".$pr["id"];
                                                            echo '    
                                                            
                                                            <div ><input type = "radio" name = "'.$name.'" class="minimal" value="'.$rs["solucion"].$pr["id"].'"> '.$rs["respuesta"].'</div >
                                                            ';
                                                        }


                                            echo '            
                                                    </div>
                                                </div>
                                            </div>
                                            </hr>';
                                            }
                                        ?>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary block full-width m-b col-md-12 col-sm-12">Finalizar Test</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="checkTest" id="checkTest" value="<?= $percenTxt ?>">
                <div class="modal modal-warning fade" id="modal-warning">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Advertencia</h4>
                            </div>
                            <div class="modal-body">
                                <p>En base al Test Psicotecnico se determino que usted no es apto para cualquier carrera de Ingenieria.</p>
                            </div>
                            <div class="modal-footer">
                                <a type="button" onclick="timer()" class="btn btn-outline pull-left" data-dismiss="modal">Repetir test</a>
                                <a type="button" href="historial_prueba.php" class="btn btn-outline">Ver resultados</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal modal-success fade" id="modal-success">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Felicidades</h4>
                            </div>
                            <div class="modal-body">
                                <p>Felicidades, en base al test psicotecnico, tu eres apto para cualquier carrera de Ingenieria, solo falta saber que carrera en especifico,
                                    para ello deberas realizar otro test, el cual calificara tu interes vocacional y comportamientos diarios que te gusten y/o disgusten.</p>
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
