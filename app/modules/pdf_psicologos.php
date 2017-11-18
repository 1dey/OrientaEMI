<?php

require_once("../dompdf/dompdf_config.inc.php");
require_once 'requires.php';
require_once 'Ctrl_Reportes.php';

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSICOLOGOS</title>
</head>
<body style="border: black 5px solid; height: 100%">
<div style="padding: 5%">
    <div class="col-md-12">
        <img src="https://www.emi.edu.bo/images/logo500.png" class="pull-left" width="150" />
    </div>
    <div class="col-md-12" style="text-align: center">
            <h1 class="text-center" style="text-decoration:underline">Lista de psicologos</h1>
    </div>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6"><CENTER><strong>Lista de Psicologos</strong></CENTER></td>
      </tr>
      <tr bgcolor="#adff2f">
            <td bgcolor="#adff2f"><strong>CI</strong></td>
            <td bgcolor="#adff2f"><strong>Nombres</strong></td>
            <td bgcolor="#adff2f"><strong>Apellidos</strong></td>
            <td bgcolor="#adff2f"><strong>Telefono</strong></td>
            <td bgcolor="#adff2f"><strong>Email</strong></td>
            <td bgcolor="#adff2f"><strong>Genero</strong></td>
      </tr>';


        foreach($estudiantesRep as $est)
        {
            $codigoHTML.= '<tr>
                                            <td>'.$est["ci"].'</td>
                                            <td>'.$est["nombres"].'</td>
                                            <td>'.$est["apellidos"].'</td>
                                            <td>'.$est["telefono"].'</td>
                                            <td>'.$est["email"].'</td>
                                            <td>'.$est["genero"].'</td>
                                          </tr>';
        }


    $codigoHTML.='
    </table>
    <div class="col-md-12" style="text-align: center;padding-top: 10%">
        <hr>
        <p>Firma: Lic. '.$dataUser["nombres"].'</p>
        <p>'.$dataUser["apellidos"].'</p>
    </div>
</div
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
//$dompdf->load_html($codigoHTML);
$dompdf->load_html(utf8_decode($codigoHTML));
ini_set("memory_limit","128M");
$dompdf->set_paper('a4','portrait'); //Esta l�nea es para hacer la p�gina del PDF m�s grande
$dompdf->render();
$dompdf->stream("reporte.pdf");
?>