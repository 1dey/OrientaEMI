<?php
    include_once 'requires.php';

    $preg=Preguntas::query()->where('tipo','=','ING')->get();
    if(isset($_REQUEST['timer']))
    {
        $delete=PruebasIngenieria::query()->where('id_estudiante','=',$dataUser['ciOid'])->get();
        foreach ($delete as $key => $del) {
            $del->delete();
        }

        for($key=1; $key<=30; $key++)
        {
            $index=$key+60;
            if(isset($_REQUEST["ing$index"]))
            {
                $resp=$_REQUEST["ing$index"];
                $timer=$_REQUEST['timer'];
                if(strcmp("-",$resp[0])!=0)
                {
                    $idpreg=substr($resp, 1);
                    $respu=$resp[0];
                }
                else
                {
                    $idpreg=substr($resp, 2);
                    $respu=$resp[0].$resp[1];
                }
                $pruebasInge=PruebasIngenieria::create([
                    'id_estudiante'=>$dataUser['ciOid'],
                    'id_pregunta'=>$idpreg,
                    'respuesta'=>$respu,
                    'tiempo'=>$timer
                ]);
            }
        }
        header('Location: comenzar_test_ingenieria.php');
    }
?>