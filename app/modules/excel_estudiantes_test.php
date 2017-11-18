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
        <td colspan="6"><CENTER><strong>REPORTE DE ESTUDIANTES</strong></CENTER></td>
    </tr>
    <tr>

        <td bgcolor="#adff2f"><strong>Nombres</strong></td>
        <td bgcolor="#adff2f"><strong>Apellidos</strong></td>
        <td bgcolor="#adff2f"><strong>Curso</strong></td>


        <td bgcolor="#adff2f"><strong>Gestion</strong></td>

        <td bgcolor="#adff2f"><strong>Interes</strong></td>
        <td bgcolor="#adff2f"><strong>Aptitud</strong></td>
    </tr>

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
</table>
</body>
</html>