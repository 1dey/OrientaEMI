<?php
require_once("../dompdf/dompdf_config.inc.php");
require_once 'requires.php';
$id=$_REQUEST['id'];
require_once 'Ctrl_Reportes.php';
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEST</title>
</head>
<body style="border: black 5px solid; height: 100%">
<div style="padding: 5%">
<div class="col-md-12">
    <table>
    <tr><td><img src="https://www.emi.edu.bo/images/logo500.png" class="pull-left" width="150" /> </td>
       <td><center><h4 align=top>Gabinete Psicólogico EMI UALP</h4></center></td>
    </tr>
   </table>
   </div>
    <div class="col-md-12" style="text-align: center">
            <h2 class="text-center" style="text-decoration:underline">RESULTADO DE INTERÉS Y APTITUD VOCACIONAL</h2>
    </div>
    <div class="col-md-12">
    <table>
    <tr>
   <td><h4>Nombre y Apellido: '.$a.' </h4> </td>
   <td>    </td>
   <td>    </td>
   <td>    </td></td></td></td>
   <td><h4>Género: '.$b.' </h4></td>
   </tr>
   </table>
   </div>
    <div class="col-md-12">
        <h3 >PERFIL DE LA PERSONA</h3>
        <h3 style="text-decoration:underline">Cuestionario de Interés Vocacional</h3>
        <p>Pretende ver la atención que se da a una actividad de carácter laboral, a la cual se le atribuye un valor y otorga la importancia que se da para la elección de una carrera.</p>
    </div>
    <div class="col-md-12">
        <table width="100%" border="1" cellspacing="3" cellpadding="3">
            <tr>
                <td><CENTER><strong>RESULTADO DEL CUESTIONARIO DE INTERÉS VOCACIONAL</strong></CENTER></td>
            </tr>
            <tr>
                <td>Interés por el área: '.$areaInteres.'</td>
            </tr>
            <tr>
                <td>'.$textInteres.'</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <div class="col-md-12">
        <table width="100%" border="1" cellspacing="3" cellpadding="3">
            <tr>
                <td><CENTER><strong>ÁREA</strong></CENTER></td>
                <td><CENTER><strong>INTERPRETACIÓN</strong></CENTER></td>
            </tr>
            <tr>
                <td>'.$areaInteres.'</td>
                <td>El resultado de la prueba de Cuestionario de Interés Vocacional muestra el interés por el área '.$areaInteres.' con un '.round(($resInteres[0]["porcentaje"]*100/30),2).'% indicador que muestra un '.$txtInteres.''.$adInteres.'</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<br>
    <div class="col-md-12">
    <table>
    <tr><td><img src="https://www.emi.edu.bo/images/logo500.png" class="pull-left" width="150" /> </td>
     <td><center><h4>Gabinete Psicólogico EMI UALP</h4></center></td>
    </tr>
   </table>
   </div>
    <div class="col-md-12">
        <h3 style="text-decoration:underline">Inventario de Aptitud Vocacional</h3>
        <p>Orientar al estudiante respecto a la capacidad del estudiante que tiene para realizar actividades específicas sin ninguna complicación, es decir, ejecutar una tarea de manera sencilla.</p>
    </div>
    <div class="col-md-12">
        <table width="100%" border="1" cellspacing="3" cellpadding="3">
            <tr>
                <td><CENTER><strong>RESULTADO DEL INVENTARIO DE APTITUD VOCACIONAL</strong></CENTER></td>
            </tr>
            <tr>
                <td>Aptitud por el área: '.$areaAptitud.'</td>
            </tr>
            <tr>
                <td>'.$textAptitud.'</td>
            </tr>
        </table>
    </div>
    <br><br>
    <div class="col-md-12">
        <table width="100%" border="1" cellspacing="3" cellpadding="3">
            <tr>
                <td><CENTER><strong>ÁREA</strong></CENTER></td>
                <td><CENTER><strong>INTERPRETACIÓN</strong></CENTER></td>
            </tr>
            <tr>
                <td>'.$areaAptitud.'</td>
                <td>El resultado de Inventario de Aptitud Vocacional muestra la aptitud en el área '.$areaAptitud.' con un '.round(($resAptitudes[0]["porcentaje"]*100/30),2).'%, indicador que muestra un '.$txtAptitud.''.$adAptitud.'</td>
            </tr>
        </table>
    </div>
    <div class="col-md-12">
        <p>De acuerdo al resultado obtenido se sugiere al estudiante la carrera de:</p>
        <ul>
            <li>'.$fuzzyShow[0]['carrera'].'</li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <div class="col-md-12" class="box-footer" style="text-align: center;padding-top: 10%">
        
        <p>Lic. Montserrat Portanda Torrejón</p>
        <h4>ENCARGADA GABINETE PSICOLÓGICO EMI UALP</h4>
    </div>
</div>
';

$codigoHTML.='
</body>';
$codigoHTML.='
</html>';


$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
//$dompdf->load_html($codigoHTML,'UTF-8');
$dompdf->load_html(utf8_decode($codigoHTML));
ini_set("memory_limit","128M");
$dompdf->set_paper('carta','portrait'); //Esta l�nea es para hacer la p�gina del PDF m�s grande
$dompdf->render();
$dompdf->stream("reporte_test.pdf");
?>