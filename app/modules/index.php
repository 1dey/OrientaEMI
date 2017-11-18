<?php
// configs
include_once 'requires.php';
include_once 'Ctrl_Citas.php';
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
                <small><h4>Agregar Cita con Gabinete Psicologico de la EMI</h4></small>
            </h1>
        </section>
            <!-- Main content -->
            <section class="content container-fluid">

                <div class="col-md-6">
                    <!-- Chat box -->
                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title">Programacion de Citas</h3>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <!-- chat item -->
                            <?php
                            foreach ($get_messages as $message)
                            {
                                $idMessage=$message["id"];
                                $estM=Estudiantes::query()->where('ci','=',$message["id_estudiante"])->get();
                                echo '
                                <div class="item">
                                    <img src="../template/dist/img/user3-128x128.jpg" alt="user image" class="offline">
                                    <p class="message">
                                        <a href="#" class="name">
                                            '.$estM[0]["nombres"].' '.$estM[0]["apellidos"].'
                                        </a>
                                        '.$message["asunto"].'
                                    </p>
                                    ';
                                if($tipo==0)
                                {
                                    echo '
                                    <button type="button" primary="'.$idMessage.'" class="btn btn-success btn-xs pull-right" id="acceptDate">Aceptar</button>
                                    <button type="button" primary="'.$idMessage.'" class="btn btn-danger btn-xs pull-right" id="rejectDate">Rechazar</button>
                                    ';
                                }
                                echo '</div>';
                            }
                            ?>
                            <!-- /.item -->
                        </div>
                        <!-- /.chat -->
                        <?php
                        if($tipo==1)
                        {
                            echo '
                            <div class="box-footer">
                            <form action="Ctrl_Citas.php" method="post">
                                <div class="input-group">
                                    <input class="form-control" name="message" placeholder="Escribe tu mensaje">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            ';
                        }
                        ?>
                    </div>
                    <!-- /.box (chat box) -->
                </div>
                <div class="col-md-6">
                    <!-- /.tab-pane -->
                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title">Citas</h3>
                        </div>
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">

                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <?php
                            foreach ($get_citas as $cita)
                            {
                                if($tipo=="1")
                                {
                                    $tituloCita="Psicologia";
                                }
                                else
                                {
                                    $est=Estudiantes::query()->where('ci','=',$cita["id_estudiante"])->get();
                                    $tituloCita=$est[0]["nombres"].' '.$est[0]["apellidos"];
                                }
                                echo '
                                <li>
                                    <i class="fa fa-comments bg-yellow"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i>'.$cita["fecha_hora"].'</span>
                                        <h3 class="timeline-header">Cita con <a href="#">'.$tituloCita.'</a></h3>
                                        <div class="timeline-body">
                                            '.$cita["asunto"].'
                                        </div>
                                    </div>
                                </li>
                                ';
                            }
                            ?>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->
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
