<?php
// configs
include_once 'requires.php';
include_once 'Ctrl_Reportes.php';
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
            <h1> OrientaEmi
                <small><h4>Informes y Reportes</h4></small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">

            <div class="box">
                  <!-- /.box-header -->
                <div class="box-body">
            <ul class="nav navbar-nav navbar-left">
                 <div class="text-right col-md-3">
                    <a type="button" class="btn btn-warning" href="pdf_estudiantes_test.php"><i class="fa fa-fw fa-download"></i>REPORTE EN PDF</a>
                </div>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <div class="text-right col-md-3">
                    <a type="button" class="btn btn-info" href="excel_estudiantes_test.php"><i class="fa fa-fw fa-download"></i>REPORTE EN EXCEL</a>
                </div>
            </ul>
        </div>
</div>

            <div class="box">
                  <!-- /.box-header -->
                <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
             <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Curso</th>
                    <th>Gestion</th>
                    <th>Interes</th>
                    <th>Aptitud</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($estudiantesRep as $est)
                {
                    $pruebaOV=Pruebas::query()->where('id_estudiante','=',$est["ci"])->get();
                    $pruebaAp=PruebasAptitud::query()->where('id_estudiante','=',$est["ci"])->get();
                    $pregOV=($pruebaOV->count());
                    $pregAp=($pruebaAp->count());

                    $fuzzyShow=Fuzzy::query()->where('id_estudiante','=', $est["ci"])->get();
                    $resInteres=Resultados::query()->where('id_estudiante','=', $est["ci"])->where('test','=','INTERESES')->get();
                    $resAptitudes=Resultados::query()->where('id_estudiante','=', $est["ci"])->where('test','=','APTITUDES')->get();
                    if(($resAptitudes[0]['porcentaje']*100/30)>=0 && ($resAptitudes[0]['porcentaje']*100/30)<=25) {
                        $txtAptitud="Falta de practica";
                    }
                    elseif (($resAptitudes[0]['porcentaje']*100/30)>25 && ($resAptitudes[0]['porcentaje']*100/30)<=50){
                        $txtAptitud="Aptitudes comunes";
                    }
                    elseif (($resAptitudes[0]['porcentaje']*100/30)>50 && ($resAptitudes[0]['porcentaje']*100/30)<=75){
                        $txtAptitud="Aptitudes normales";
                    }
                    elseif (($resAptitudes[0]['porcentaje']*100/30)>75 && ($resAptitudes[0]['porcentaje']*100/30)<=100){
                        $txtAptitud="Aptitudes desarrolladas";
                    }

                    $txtInteres="No realizo el test";
                    if($pregOV>0)
                    {
                        $txtInteres=$fuzzyShow[0]['carrera'];
                    }

                    if($pregAp==0)
                    {
                        $txtAptitud="No realizo el test";
                    }

                    echo '<tr>
                                        <td>'.$est["nombres"].'</td>
                                        <td>'.$est["apellidos"].'</td>
                                        <td>'.$est["curso_paralelo"].'</td>
                                        <td>'.$est["gestion"].'</td>
                                        <td>'.$txtInteres.'</td>
                                        <td>'.$txtAptitud.'</td>
                                      </tr>';
                }
                ?>
                </tbody>

            </table>

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
