<?php
include_once 'requires.php';

if(isset($_REQUEST["test1"]))
{
    $res_TI=0;
    $res_MP=0;
    $res_DC=0;
    $res_CQI=0;
    $res_COM=0;
    $res_MA=0;
    $res_CP=0;
    $res_CA=0;
    $res_AR=0;
    $res_CT=0;
    for($key=1; $key<=60; $key++)
    {
        $index=$key;
        if(isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="1" || substr($_REQUEST["test$index"], 1)=="11" || substr($_REQUEST["test$index"], 1)=="21" || substr($_REQUEST["test$index"], 1)=="31" || substr($_REQUEST["test$index"], 1)=="41" || substr($_REQUEST["test$index"], 1)=="51"))
        {
            $resp=$_REQUEST["test$index"];
            $res_TI+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="2" || substr($_REQUEST["test$index"], 1)=="12" || substr($_REQUEST["test$index"], 1)=="22" || substr($_REQUEST["test$index"], 1)=="32" || substr($_REQUEST["test$index"], 1)=="42" || substr($_REQUEST["test$index"], 1)=="52"))
        {
            $resp=$_REQUEST["test$index"];
            $res_MP+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="3" || substr($_REQUEST["test$index"], 1)=="13" || substr($_REQUEST["test$index"], 1)=="23" || substr($_REQUEST["test$index"], 1)=="33" || substr($_REQUEST["test$index"], 1)=="43" || substr($_REQUEST["test$index"], 1)=="53"))
        {
            $resp=$_REQUEST["test$index"];
            $res_DC+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="4" || substr($_REQUEST["test$index"], 1)=="14" || substr($_REQUEST["test$index"], 1)=="24" || substr($_REQUEST["test$index"], 1)=="34" || substr($_REQUEST["test$index"], 1)=="44" || substr($_REQUEST["test$index"], 1)=="54"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CQI+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="5" || substr($_REQUEST["test$index"], 1)=="15" || substr($_REQUEST["test$index"], 1)=="25" || substr($_REQUEST["test$index"], 1)=="35" || substr($_REQUEST["test$index"], 1)=="45" || substr($_REQUEST["test$index"], 1)=="55"))
        {
            $resp=$_REQUEST["test$index"];
            $res_COM+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="6" || substr($_REQUEST["test$index"], 1)=="16" || substr($_REQUEST["test$index"], 1)=="26" || substr($_REQUEST["test$index"], 1)=="36" || substr($_REQUEST["test$index"], 1)=="46" || substr($_REQUEST["test$index"], 1)=="56"))
        {
            $resp=$_REQUEST["test$index"];
            $res_MA+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="7" || substr($_REQUEST["test$index"], 1)=="17" || substr($_REQUEST["test$index"], 1)=="27" || substr($_REQUEST["test$index"], 1)=="37" || substr($_REQUEST["test$index"], 1)=="47" || substr($_REQUEST["test$index"], 1)=="57"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CP+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="8" || substr($_REQUEST["test$index"], 1)=="18" || substr($_REQUEST["test$index"], 1)=="28" || substr($_REQUEST["test$index"], 1)=="38" || substr($_REQUEST["test$index"], 1)=="48" || substr($_REQUEST["test$index"], 1)=="58"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CA+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="9" || substr($_REQUEST["test$index"], 1)=="19" || substr($_REQUEST["test$index"], 1)=="29" || substr($_REQUEST["test$index"], 1)=="39" || substr($_REQUEST["test$index"], 1)=="49" || substr($_REQUEST["test$index"], 1)=="59"))
        {
            $resp=$_REQUEST["test$index"];
            $res_AR+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && (substr($_REQUEST["test$index"], 1)=="10" || substr($_REQUEST["test$index"], 1)=="20" || substr($_REQUEST["test$index"], 1)=="30" || substr($_REQUEST["test$index"], 1)=="40" || substr($_REQUEST["test$index"], 1)=="50" || substr($_REQUEST["test$index"], 1)=="60"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CT+=(int)$resp[0];
        }
    }
    $pruebasInge=Pruebas::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'res_TI'=>$res_TI,
        'res_MP'=>$res_MP,
        'res_DC'=>$res_DC,
        'res_CQI'=>$res_CQI,
        'res_COM'=>$res_COM,
        'res_MA'=>$res_MA,
        'res_CP'=>$res_CP,
        'res_CA'=>$res_CA,
        'res_AR'=>$res_AR,
        'res_CT'=>$res_CT
    ]);

    $pruebasOV=Pruebas::query()->where('id','!=','0')->get();
    $idPrueba=$pruebasOV->max('id');

    for($key=1; $key<=60; $key++)
    {
        $index=$key;
        if(isset($_REQUEST["test$index"]))
        {
            $resp=$_REQUEST["test$index"];

            $idpreg=substr($resp, 1);
            $respu=$resp[0];

            $respuestasOV=Respuestas::create([
                'id_prueba'=>$idPrueba,
                'id_pregunta'=>$idpreg,
                'valor'=>$respu,
                'test'=>'INTERESES'
            ]);
        }
    }

    $max=max($res_TI,$res_MP,$res_DC,$res_CQI,$res_COM,$res_MA,$res_CP,$res_CA,$res_AR,$res_CT);
    $probCarrera=100;
    $interes="";
    if($res_TI==$max)
    {
        $interes='ITI';
        include_once 'fuzzy_logic_testTI.php';
    }
    elseif($res_MP==$max)
    {
        $interes='IMP';
        include_once 'fuzzy_logic_testMP.php';
    }
    elseif($res_DC==$max)
    {
        $interes='IDC';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA CIVIL";
    }
    elseif($res_CQI==$max)
    {
        $interes='ICQI';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA QUIMICA";
    }
    elseif($res_COM==$max)
    {
        $interes='ICOM';
        include_once 'fuzzy_logic_testCOM.php';
    }
    elseif($res_MA==$max)
    {
        $interes='IMA';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA AMBIENTAL";
    }
    elseif($res_CP==$max)
    {
        $interes='ICP';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA PETROLERA";
    }
    elseif($res_CA==$max)
    {
        $interes='ICA';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA DE ALIMENTOS";
    }
    elseif($res_AR==$max)
    {
        $interes='IAR';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA INDUSTRIAL";
    }
    elseif($res_CT==$max)
    {
        $interes='ICT';
        $probCarrera=Math.floor($max*100/30);
        $carrera="INGENIERIA GEOGRAFICA";
    }

    $fuzzyOV=Fuzzy::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'carrera'=>$carrera,
        'valor'=>$probCarrera
    ]);

    $resInteres=Resultados::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'tipo'=>$interes,
        'porcentaje'=>$max,
        'test'=>'INTERESES'
    ]);

    include_once 'fuzzy_logic_Final.php';

    header('Location: comenzar_test_aptitudes.php');
}
?>