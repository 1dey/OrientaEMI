<?php
include_once 'requires.php';

$action=$_POST['action'];

switch ($action)
{
    case "getPreguntas":
        $result=getPreguntas();
        echo $result;
        break;
    case "getPreguntasAptitudes":
        $result=getPreguntasAptitudes();
        echo $result;
        break;
}

function getPreguntas()
{
    $preg=Preguntas::query()->where('id','>','-1')->where('id','<=','60')->get();
    $contenido='';
    foreach($preg as $pr)
    {
        $contenido .= '<div class="col-md-12 col-sm-12" style="border-bottom: groove">
                            <div class="col-md-8 col-sm-8">
                                <h3 class="text-navy">Pregunta '.$pr["id"].'</h3>
                                <h4 class="">'.$pr["pregunta"].'</h4>
                            </div>
                            <div class="col-md-4 col-sm-4" style="padding-top: 5%; text-align: center">
                                <div class="form-group">
                                    <label>1 <input type="radio" name="test'.$pr["id"].'" value="1'.$pr["id"].'" class="minimal" checked></label>
                                    <label>2 <input type="radio" name="test'.$pr["id"].'" value="2'.$pr["id"].'" class="minimal"></label>
                                    <label>3 <input type="radio" name="test'.$pr["id"].'" value="3'.$pr["id"].'" class="minimal"></label>
                                    <label>4 <input type="radio" name="test'.$pr["id"].'" value="4'.$pr["id"].'" class="minimal"></label>
                                    <label>5 <input type="radio" name="test'.$pr["id"].'" value="5'.$pr["id"].'" class="minimal"></label>
                                </div>
                            </div>
                        </div>
                        </hr>';
    }
    return $contenido;
}

function getPreguntasAptitudes()
{
    $preg=Preguntas::query()->where('test','=','APTITUDES')->get();
    $contenido='';
    foreach($preg as $key=>$pr)
    {
        $contenido .= '<div class="col-md-12 col-sm-12" style="border-bottom: groove">
                            <div class="col-md-8 col-sm-8">
                                <h3 class="text-navy">Pregunta '.($key+1).'</h3>
                                <h4 class="">'.$pr["pregunta"].'</h4>
                            </div>
                            <div class="col-md-4 col-sm-4" style="padding-top: 5%; text-align: center">
                                <div class="form-group">
                                    <label>1 <input type="radio" name="test'.($key+1).'" value="1'.$pr["id"].'" class="minimal" checked></label>
                                    <label>2 <input type="radio" name="test'.($key+1).'" value="2'.$pr["id"].'" class="minimal"></label>
                                    <label>3 <input type="radio" name="test'.($key+1).'" value="3'.$pr["id"].'" class="minimal"></label>
                                    <label>4 <input type="radio" name="test'.($key+1).'" value="4'.$pr["id"].'" class="minimal"></label>
                                    <label>5 <input type="radio" name="test'.($key+1).'" value="5'.$pr["id"].'" class="minimal"></label>
                                </div>
                            </div>
                        </div>
                        </hr>';
    }
    return $contenido;
}

?>