<?php
require_once 'requires.php';
require_once ('../fuzzy_logic-master/fuzzy-logic-class.php');

$pruebaAptitud=Resultados::query()->where('id_estudiante','=',$dataUser['ciOid'])->where('test','=','APTITUDES')->get();
$pruebaInteres=Resultados::query()->where('id_estudiante','=',$dataUser['ciOid'])->where('test','=','INTERESES')->get();
$pregAptitud=$pruebaAptitud->count();
$pregInteres=$pruebaInteres->count();
if($pregAptitud>0 && $pregInteres>0)
{
    $x = new Fuzzy_Logic();
    $x->clearMembers();
    $x->SetInputNames(array('inter','apti'));
//Variables de entrada de TEST DE INTERES
    $x->addMember($x->getInputName(0),'fm',  0, 10, 25 ,LINFINITY); //menor
    $x->addMember($x->getInputName(0),'ic',  25, 37, 50 ,TRIANGLE); // menos
    $x->addMember($x->getInputName(0),'is'  , 50, 62, 75 ,TRIANGLE); // medio
    $x->addMember($x->getInputName(0),'ip'  , 75, 87, 100,RINFINITY); //alto
// vARIABLES DE ENTRADA DE TEST DE APTITUD
    $x->addMember($x->getInputName(1),'fp',  0, 10, 25 ,LINFINITY);
    $x->addMember($x->getInputName(1),'ac',  25, 37, 50 ,TRIANGLE);
    $x->addMember($x->getInputName(1),'an'  , 50, 62, 75 ,TRIANGLE);
    $x->addMember($x->getInputName(1),'ad'  , 75, 87, 100 ,RINFINITY);
//VARIABLES DE SALIDA DE LA EVALUACION CONJUNTA DE LOS TEST
    $x->SetOutputNames(array('area'));
    $x->addMember($x->getOutputName(0),'recomienda',0, 25 ,35 ,LINFINITY);
    $x->addMember($x->getOutputName(0),'aptitud',30, 45 ,65 ,TRAPEZOID);
    $x->addMember($x->getOutputName(0),'interes',60, 75 ,100 ,RINFINITY);

    /*SI LOS % MAS ALTOS CORRESPONDEN A UNA MISMA ÁREA SIGNIFICA QUE PUEDES CONSIDERAR EN PRIMER LUGAR ACTIVIDADES PROPIAS DE ESTA ÁREA EL CUAL SE LE RECOMENDARA UNA CARRERA DE INGENIERÍA DE LA EMI*/
    $x->clearRules();
    $x->addRule('IF inter.fm AND apti.fp THEN area.recomienda');
    $x->addRule('IF inter.ic AND apti.ac THEN area.recomienda');
    $x->addRule('IF inter.is AND apti.an THEN area.recomienda');
    $x->addRule('IF inter.ip AND apti.ad THEN area.recomienda');

    /*SI EL AREA DE INTERES Y APTITUD SE ENCUENTRAN MUY DISTANTES X EJ. INTERES1 SE OBTIENE 83% Y APTITUD 1 SE OBTIENE 33% SIGNIFICA QUE DEBES ESTUDIAR MAS PARA DESARROLLAR ESTA APTITUD*/
    $x->addRule('IF inter.ic AND apti.fp THEN area.aptitud');
    $x->addRule('IF inter.is AND apti.ac THEN area.aptitud');
    $x->addRule('IF inter.is AND apti.fp THEN area.aptitud');
    $x->addRule('IF inter.is AND apti.fp THEN area.aptitud');
    $x->addRule('IF inter.ip AND apti.an THEN area.aptitud');
    $x->addRule('IF inter.ip AND apti.ac THEN area.aptitud');
    $x->addRule('IF inter.ip AND apti.fp THEN area.aptitud');

    /*SI EL INTERES1 ES 25% Y APTITUD1 ES 75% SE CONSIDERA INVESTIGAR MAS SOBRE LAS ACTIVIDADES RELACIONADAS CON ESTA APTITUD, PUEDE QUE ENCUENTRES ALGUNA QUE SEA DE TU INTERÉS*/
    $x->addRule('IF inter.fm AND apti.ac THEN area.interes');
    $x->addRule('IF inter.fm AND apti.an THEN area.interes');
    $x->addRule('IF inter.ic AND apti.an THEN area.interes');
    $x->addRule('IF inter.fm AND apti.ad THEN area.interes');
    $x->addRule('IF inter.ic AND apti.ad THEN area.interes');
    $x->addRule('IF inter.is AND apti.ad THEN area.interes');

    $i_interes = $pruebaInteres[0]['porcentaje'];
    $i_aptitud = $pruebaAptitud[0]['porcentaje'];

    $x->setRealInput('inter',$i_interes);
    $x->setRealInput('apti',$i_aptitud);
    $ff=$x->processRule($x->getRule(0));
    $rules=$x->getRules();
    //d($gg);
    $str="";
    $prob=-1;
    foreach ($rules as $rule)
    {
        $ff=$x->processRule($rule);
        if($ff[1]>$prob)
        {
            $prob=$ff[1];
            $str=$ff[0];
        }
    }

    $decision="";

    if(str_contains($str,'recomienda'))
    {
        $decision="PUEDES CONSIDERAR EN PRIMER LUGAR ACTIVIDADES PROPIAS DEL ÁREA ELEGIDA POR EL TEST, SE LE RECOMIENDA UNA CARRERA DE INGENIERÍA DE LA EMI DE PREFERENCIA LA CARRERA ESCOGIDA POR EL TEST";
    }
    elseif(str_contains($str,'aptitud'))
    {
        $decision="LAS AREA DE INTERES Y APTITUD SE ENCUENTRAN MUY DISTANTES, SIGNIFICA QUE DEBES ESTUDIAR MAS PARA DESARROLLAR ESTA APTITUD";
    }
    elseif(str_contains($str,'interes'))
    {
        $decision="SE CONSIDERA INVESTIGAR MAS SOBRE LAS ACTIVIDADES RELACIONADAS CON TUS APTITUDES, PUEDE QUE ENCUENTRES ALGUNA QUE SEA DE TU INTERÉS";
    }

//    $fuzzy_arr = $x->calcFuzzy();
//    $probArea = $fuzzy_arr['area'];
/*
    if($probArea>50)
    {
        $carrera="INGENIERIA DE SISTEMAS";
    }
    else
    {
        $probCarrera=100-$probArea;
        $carrera="INGENIERIA DE TELEOOMUNICACIONES";
    }
*/

    $results=Resultados::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'tipo'=>'IYA',
        'porcentaje'=>intval($prob*100),
        'test'=>$decision
    ]);

}

?>