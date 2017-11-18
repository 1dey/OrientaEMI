<?php
include_once 'requires.php';

if(isset($_REQUEST["test1"]))
{
    $res_EP=0;
    $res_MC=0;
    $res_PE=0;
    $res_VE=0;
    $res_V=0;
    $res_CB=0;
    $res_C=0;
    $res_CA=0;
    $res_A=0;
    $res_CI=0;
    for($key=1; $key<=60; $key++)
    {
        $index=$key;
        if(isset($_REQUEST["test$index"]) && ($key=="1" || $key=="11" || $key=="21" || $key=="31" || $key=="41" || $key=="51"))
        {
            $resp=$_REQUEST["test$index"];
            $res_EP+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="2" || $key=="12" || $key=="22" || $key=="32" || $key=="42" || $key=="52"))
        {
            $resp=$_REQUEST["test$index"];
            $res_MC+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="3" || $key=="13" || $key=="23" || $key=="33" || $key=="43" || $key=="53"))
        {
            $resp=$_REQUEST["test$index"];
            $res_PE+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="4" || $key=="14" || $key=="24" || $key=="34" || $key=="44" || $key=="54"))
        {
            $resp=$_REQUEST["test$index"];
            $res_VE+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="5" || $key=="15" || $key=="25" || $key=="35" || $key=="45" || $key=="55"))
        {
            $resp=$_REQUEST["test$index"];
            $res_V+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="6" || $key=="16" || $key=="26" || $key=="36" || $key=="46" || $key=="56"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CB+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="7" || $key=="17" || $key=="27" || $key=="37" || $key=="47" || $key=="57"))
        {
            $resp=$_REQUEST["test$index"];
            $res_C+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="8" || $key=="18" || $key=="28" || $key=="38" || $key=="48" || $key=="58"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CA+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="9" || $key=="19" || $key=="29" || $key=="39" || $key=="49" || $key=="59"))
        {
            $resp=$_REQUEST["test$index"];
            $res_A+=(int)$resp[0];
        }
        elseif (isset($_REQUEST["test$index"]) && ($key=="10" || $key=="20" || $key=="30" || $key=="40" || $key=="50" || $key=="60"))
        {
            $resp=$_REQUEST["test$index"];
            $res_CI+=(int)$resp[0];
        }
    }
    $pruebasInge=PruebasAptitud::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'res_EP'=>$res_EP,
        'res_MC'=>$res_MC,
        'res_PE'=>$res_PE,
        'res_VE'=>$res_VE,
        'res_V'=>$res_V,
        'res_CB'=>$res_CB,
        'res_C'=>$res_C,
        'res_CA'=>$res_CA,
        'res_A'=>$res_A,
        'res_CI'=>$res_CI
    ]);

    $pruebasOV=PruebasAptitud::query()->where('id','!=','0')->get();
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
                'test'=>'APTITUDES'
            ]);
        }
    }

    $max=max($res_EP,$res_MC,$res_PE,$res_VE,$res_V,$res_CB,$res_C,$res_CA,$res_A,$res_CI);

    $aptitud="";
    if($max==$res_EP) {
        $aptitud="EP";
    }
    elseif ($max==$res_MC) {
        $aptitud="MC";
    }
    elseif ($max==$res_PE) {
        $aptitud="PE";
    }
    elseif ($max==$res_VE) {
        $aptitud="VE";
    }
    elseif ($max==$res_V) {
        $aptitud="V";
    }
    elseif ($max==$res_CB) {
        $aptitud="CB";
    }
    elseif ($max==$res_C) {
        $aptitud="C";
    }
    elseif ($max==$res_CA) {
        $aptitud="CA";
    }
    elseif ($max==$res_A) {
        $aptitud="A";
    }
    elseif ($max==$res_CI) {
        $aptitud="CI";
    }

    $resAptitud=Resultados::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'tipo'=>$aptitud,
        'porcentaje'=>$max,
        'test'=>'APTITUDES'
    ]);

    include_once 'fuzzy_logic_Final.php';

    header('Location: comenzar_test.php');
}


?>