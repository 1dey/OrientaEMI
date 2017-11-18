<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=reporte.xls");

include_once 'requires.php';
include_once 'Ctrl_Reportes.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ESTUDIANTES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="6"><CENTER><strong>REPORTE DE PSICOLOGOS</strong></CENTER></td>
    </tr>
    <tr>
        <td bgcolor="#adff2f"><strong>CI</strong></td>
        <td bgcolor="#adff2f"><strong>Nombres</strong></td>
        <td bgcolor="#adff2f"><strong>Apellidos</strong></td>
        <td bgcolor="#adff2f"><strong>Telefono</strong></td>
        <td bgcolor="#adff2f"><strong>Email</strong></td>
        <td bgcolor="#adff2f"><strong>Genero</strong></td>
    </tr>

    <?php
    foreach($psicologosRep as $est)
    {
        echo '<tr>
                                        <td>'.$est["ci"].'</td>
                                        <td>'.$est["nombres"].'</td>
                                        <td>'.$est["apellidos"].'</td>
                                        <td>'.$est["telefono"].'</td>
                                        <td>'.$est["email"].'</td>
                                        <td>'.$est["genero"].'</td>
                                      </tr>';
    }
    ?>
</table>
</body>
</html>