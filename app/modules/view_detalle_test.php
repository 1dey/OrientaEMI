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
                OrientaEmi
                <small><h4>Historial de la Prueba</h4></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#interes" data-toggle="tab">Test de Interés</a></li>
                            <li class=""><a href="#aptitud" data-toggle="tab">Test de Aptitud</a></li>
                            <li class=""><a href="#perfil" data-toggle="tab">Perfil de Interés y Aptitud</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="active tab-pane" id="interes">
                                <input type="hidden" id="res_TI" value="<?= round(($pruebaOV[0]["res_TI"]*100/30),2) ?>">
                                <input type="hidden" id="res_MP" value="<?= round(($pruebaOV[0]["res_MP"]*100/30),2) ?>">
                                <input type="hidden" id="res_DC" value="<?= round(($pruebaOV[0]["res_DC"]*100/30),2) ?>">
                                <input type="hidden" id="res_CQI" value="<?= round(($pruebaOV[0]["res_CQI"]*100/30),2) ?>">
                                <input type="hidden" id="res_COM" value="<?= round(($pruebaOV[0]["res_COM"]*100/30),2) ?>">
                                <input type="hidden" id="res_MA" value="<?= round(($pruebaOV[0]["res_MA"]*100/30),2) ?>">
                                <input type="hidden" id="res_CP" value="<?= round(($pruebaOV[0]["res_CP"]*100/30),2) ?>">
                                <input type="hidden" id="res_CA" value="<?= round(($pruebaOV[0]["res_CA"]*100/30),2) ?>">
                                <input type="hidden" id="res_AR" value="<?= round(($pruebaOV[0]["res_AR"]*100/30),2) ?>">
                                <input type="hidden" id="res_CT" value="<?= round(($pruebaOV[0]["res_CT"]*100/30),2) ?>">
                                <?php
                                if($pregOV>0)
                                {
                                    echo '
                                    <center><div class="box-header with-border">
              <h3 class="box-title">CUESTIONARIO DE INTERÉS VOCACIONAL </h3>
            </div> </center><p></p>
                                     <div class="box">
                                     <!-- /.box-header -->
                                        <div class="box-body">
                                        <div class="box-header with-border">
              <h3 class="box-title">TABLA DE RESULTADOS</h3>
            </div>
                                         <table id="" class="table table-bordered table-striped">
                                          <thead>
                                          <tr>
                                             <th>TI = Tecnología de Información</th>
                                             <th>MP = Mecánica y Procesos </th>
                                             <th>DC = Diseño y Construcción </th>
                                             <th>CQI = Ciencias Químicas e Industria</th>
                                             <th>COM = Comerciales</th>
                                          </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                             <td>'.round(($pruebaOV[0]["res_TI"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_MP"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_DC"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_CQI"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_COM"]*100/30),2).'</td>
                                           </tr>
                                         </tbody>
                                         <thead>
                                           <tr>
                                              <th>MA = Medioambiental</th>
                                              <th>CP = Científico Práctico </th>
                                              <th>CA = Ciencias Agronómicas</th>
                                              <th>AR = Administración de Recursos </th>
                                              <th>CT = Ciencia y Tecnología </th>
                            
                                           </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                            <td>'.round(($pruebaOV[0]["res_MA"]*100/30),2).'</td>
                                            <td>'.round(($pruebaOV[0]["res_CP"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_CA"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_AR"]*100/30),2).'</td>
                                             <td>'.round(($pruebaOV[0]["res_CT"]*100/30),2).'</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                     </div>
                                 <!-- /.box-body -->
                                 </div>
                                           <div class="box box-body">
                                            <div class="box-header with-border">
                                            <h3 class="box-title">GRÁFICO</h3>
                                            <div id="chartInteres" width="400" height="250"></div>
                                           </div>
                                           </div>
                                              <div class="small-box bg-green">
                                                <div class="inner">
                                                  <h3>'.round(($resInteres[0]['porcentaje']*100/30),2).'<sup style="font-size: 20px">%</sup></h3>
                                                  <p>La carrera acorde a su interés es '.$fuzzyShow[0]['carrera'].'</p>
                                                </div>
                                                <div class="icon">
                                                  <i class="ion ion-stats-bars"></i>
                                                </div>
                                              </div> 
                                         ';
                                }
                                ?>
                            </div>
                            <!-- /.tab-pane -->
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="aptitud">
                                <input type="hidden" id="res_EP" value="<?= round(($pruebaAp[0]["res_EP"]*100/30),2) ?>">
                                <input type="hidden" id="res_MC" value="<?= round(($pruebaAp[0]["res_MC"]*100/30),2) ?>">
                                <input type="hidden" id="res_PE" value="<?= round(($pruebaAp[0]["res_PE"]*100/30),2) ?>">
                                <input type="hidden" id="res_VE" value="<?= round(($pruebaAp[0]["res_VE"]*100/30),2) ?>">
                                <input type="hidden" id="res_V" value="<?= round(($pruebaAp[0]["res_V"]*100/30),2) ?>">
                                <input type="hidden" id="res_CB" value="<?= round(($pruebaAp[0]["res_CB"]*100/30),2) ?>">
                                <input type="hidden" id="res_C" value="<?= round(($pruebaAp[0]["res_C"]*100/30),2) ?>">
                                <input type="hidden" id="res_ACA" value="<?= round(($pruebaAp[0]["res_CA"]*100/30),2) ?>">
                                <input type="hidden" id="res_A" value="<?= round(($pruebaAp[0]["res_A"]*100/30),2) ?>">
                                <input type="hidden" id="res_CI" value="<?= round(($pruebaAp[0]["res_CI"]*100/30),2) ?>">
                                <?php
                                if($pregAp>0)
                                {
                                    echo '
                                    <center><div class="box-header with-border">
              <h3 class="box-title">INVENTARIO DE APTITUD VOCACIONAL</h3>
            </div> </center><p></p><p></p>
                                     <div class="box">
                                     <!-- /.box-header -->
                                        <div class="box-body">
                                        <div class="box-header with-border">
              <h3 class="box-title">TABLA DE RESULTADOS</h3>
            </div>
                                         <table id="" class="table table-bordered table-striped">
                                          <thead>
                                          <tr>
                                             <th>EP = Ejecutivo Persuasiva </th>
                                             <th>MC = Mecánico Constructiva  </th>
                                             <th>VE = Viso Espacial </th>
                                             <th>DM = Destreza Manual</th>
                                             <th>V = Ventas</th>
                                          </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                             <td>'.round(($pruebaAp[0]["res_EP"]*100/30),2).'</td>
                                             <td>'.round(($pruebaAp[0]["res_MC"]*100/30),2).'</td>
                                             <td>'.round(($pruebaAp[0]["res_PE"]*100/30),2).'</td>
                                              <td>'.round(($pruebaAp[0]["res_VE"]*100/30),2).'</td>
                                             <td>'.round(($pruebaAp[0]["res_V"]*100/30),2).'</td>
                                           </tr>
                                         </tbody>
                                         <thead>
                                           <tr>
                                              <th>CB = Ciencias Biológicas </th>
                                              <th>CT = Científico  </th>
                                              <th>CA = Ciencias Agronómicas</th>
                                              <th>A = Administrativo </th>
                                              <th>P = Práctico </th>
                            
                                           </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                            <td>'.round(($pruebaAp[0]["res_CB"]*100/30),2).'</td>
                                             <td>'.round(($pruebaAp[0]["res_C"]*100/30),2).'</td>
                                            <td>'.round(($pruebaAp[0]["res_CA"]*100/30),2).'</td>
                                             <td>'.round(($pruebaAp[0]["res_A"]*100/30),2).'</td>
                                            <td>'.round(($pruebaAp[0]["res_CI"]*100/30),2).'</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                     </div>
                                 <!-- /.box-body -->
                                 </div>
                                 <div class="box box-body">
                                            <div class="box-header with-border">
                                            <h3 class="box-title">GRÁFICO</h3>
            
                                            <div id="chartAptitud" width="400" height="250"></div>
                                            </div>
                                            </div>
                                              <div class="small-box bg-green">
                                                <div class="inner">
                                                  <h3>'.round(($resAptitudes[0]['porcentaje']*100/30),2).'<sup style="font-size: 20px">%</sup></h3>
                                                  <p>'.$textAptitud.'</p>
                                                </div>
                                                <div class="icon">
                                                  <i class="ion ion-stats-bars"></i>
                                                </div>
                                              </div>
                                         ';
                                }
                                ?>
                            </div>
                            <!-- /.tab-pane -->
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="perfil">
                              <center><div class="box-header with-border">
              <h3 class="box-title">RESULTADO DE CUESTIONARIO DE INTERÉS VOCACIONAL E INVENTARIO DE APTITUD VOCACIONAL</h3>
            </div> </center><p></p>
                               <div class="box box-body">
                                            <div class="box-header with-border">
                                            <h3 class="box-title">Test de Orientacion Vocacional</h3>
                                <div id="chartPerfil" width="400" height="250"></div>
</div>
</div>
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <h2>Perfil de Interes y Aptitud</h2>
                                            <p><?=$textAptInt?></p>
                                            <a type="button" class="btn btn-info pull-right" href="estudiantes_registrados.php">atrás</a>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                    </div>

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
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
