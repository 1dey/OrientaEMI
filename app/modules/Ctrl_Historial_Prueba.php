<?php
/*
$pruebaInge=PruebasIngenieria::query()->where('id_estudiante','=',$dataUser['ciOid'])->get();
$pregContestadas=$pruebaInge->count();
$percenTxt="";
if($pregContestadas>0)
{
    $aciertos=PruebasIngenieria::query()->where('id_estudiante','=',$dataUser['ciOid'])
        ->where('respuesta','=','2')->get()->count();
    $fallos=PruebasIngenieria::query()->where('id_estudiante','=',$dataUser['ciOid'])
        ->where('respuesta','=','-1')->get()->count();
    $notaExamen=$pruebaInge->sum('respuesta');
    $percen=$aciertos*100/30;
    if($percen>=0 && $percen<=25)
    {
        $percenTxt="MALO";
    }
    elseif ($percen>25 && $percen<=50)
    {
        $percenTxt="NORMAL";
    }
    elseif ($percen>50 && $percen<=75)
    {
        $percenTxt="BUENO";
    }
    elseif ($percen>75 && $percen<=100)
    {
        $percenTxt="MUY BUENO";
    }
}
*/
if(isset($_REQUEST['id']))
{
    $pruebaOV=Pruebas::query()->where('id_estudiante','=',$_REQUEST['id'])->get();
    $pruebaAp=PruebasAptitud::query()->where('id_estudiante','=',$_REQUEST['id'])->get();
    $pregOV=($pruebaOV->count());
    $pregAp=($pruebaAp->count());

    $fuzzyShow=Fuzzy::query()->where('id_estudiante','=', $_REQUEST['id'])->get();
    $resInteres=Resultados::query()->where('id_estudiante','=', $_REQUEST['id'])->where('test','=','INTERESES')->get();
    $resAptitudes=Resultados::query()->where('id_estudiante','=', $_REQUEST['id'])->where('test','=','APTITUDES')->get();
    $resAptInt=Resultados::query()->where('id_estudiante','=', $_REQUEST['id'])->where('tipo','=','IYA')->get();
    $textAptInt=$resAptInt[0]['test'];
    if(($resAptitudes[0]['porcentaje']*100/30)>=0 && ($resAptitudes[0]['porcentaje']*100/30)<=25) {
        $textAptitud="Corresponde a la FALTA DE PRÁCTICA; en este rubro se encuentran todas las actividades que no ha experimentado, y por lo tanto desconoce si tiene la habilidad.";
    }
    elseif (($resAptitudes[0]['porcentaje']*100/30)>25 && ($resAptitudes[0]['porcentaje']*100/30)<=50){
        $textAptitud="Se refiere a sus APTITUDES COMUNES; según su apreciación, no tiene desarrollada esa habilidad, por lo tanto es necesario practicar más para dominarla. ";
    }
    elseif (($resAptitudes[0]['porcentaje']*100/30)>50 && ($resAptitudes[0]['porcentaje']*100/30)<=75){
        $textAptitud="Aquí se encuentran sus APTITUDES NORMALES; tiene desarrollada esa habilidad pero no lo suficiente para dominarla.";
    }
    elseif (($resAptitudes[0]['porcentaje']*100/30)>75 && ($resAptitudes[0]['porcentaje']*100/30)<=100){
        $textAptitud="En este rango están sus APTITUDES DESARROLLADAS, las cuales domina, según su apreciación.";
    }
}
else
{
    $pruebaOV=Pruebas::query()->where('id_estudiante','=',$dataUser['ciOid'])->get();
    $pruebaAp=PruebasAptitud::query()->where('id_estudiante','=',$dataUser['ciOid'])->get();
    $pregOV=($pruebaOV->count());
    $pregAp=($pruebaAp->count());

    $fuzzyShow=Fuzzy::query()->where('id_estudiante','=', $dataUser['ciOid'])->get();
    $resInteres=Resultados::query()->where('id_estudiante','=', $dataUser['ciOid'])->where('test','=','INTERESES')->get();
    $resAptitudes=Resultados::query()->where('id_estudiante','=', $dataUser['ciOid'])->where('test','=','APTITUDES')->get();
    $resAptInt=Resultados::query()->where('id_estudiante','=', $dataUser['ciOid'])->where('tipo','=','IYA')->get();
    $textAptInt=$resAptInt[0]['test'];
    if(($resAptitudes[0]['porcentaje']*100/30)>=0 && ($resAptitudes[0]['porcentaje']*100/30)<=25) {
        $textAptitud="Corresponde a la FALTA DE PRÁCTICA; en este rubro se encuentran todas las actividades que no has experimentado, y por lo tanto desconoces si tienes la habilidad.";
    }
    elseif (($resAptitudes[0]['porcentaje']*100/30)>25 && ($resAptitudes[0]['porcentaje']*100/30)<=50){
        $textAptitud="Se refiere a tus APTITUDES COMUNES; según tu apreciación, no tienes desarrollada esa habilidad, por lo tanto es necesario practicar más para dominarla. ";
    }
    elseif (($resAptitudes[0]['porcentaje']*100/30)>50 && ($resAptitudes[0]['porcentaje']*100/30)<=75){
        $textAptitud="Aquí se encuentran tus APTITUDES NORMALES; tienes desarrollada esa habilidad pero no lo suficiente para dominarla.";
    }
    elseif (($resAptitudes[0]['porcentaje']*100/30)>75 && ($resAptitudes[0]['porcentaje']*100/30)<=100){
        $textAptitud="Este rango están tus APTITUDES DESARROLLADAS, las cuales dominas, según tu apreciación.";
    }
}
?>