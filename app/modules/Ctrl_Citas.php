<?php
include_once 'requires.php';
$new_message=$_REQUEST['message'];
if(isset($new_message))
{
    $new_cita=Citas::create([
        'id_estudiante'=>$dataUser['ciOid'],
        'fecha_hora'=>date('Y-m-d H:i:s'),
        'asunto'=>$new_message,
        'estado'=>"NO_LEIDO"
    ]);
    header('Location: indexCitas.php');
}
if($tipo=="1")
{
    $get_messages=Citas::query()->where('id_estudiante','=',$dataUser['ciOid'])->where('estado','=','NO_LEIDO')->get();
    $get_citas=Citas::query()->where('id_estudiante','=',$dataUser['ciOid'])->where('estado','=','ACEPTADO')->get();
}
if($tipo=="0")
{
    $get_messages=Citas::query()->where('estado','=','NO_LEIDO')->get();
    $get_citas=Citas::query()->where('estado','=','ACEPTADO')->get();
}

$action=$_POST['action'];
$idm=$_POST['idm'];

switch ($action)
{
    case "accept":
        $msg=Citas::query()->where('id','=',$idm)->update([
            'estado'=>"ACEPTADO"
        ]);
        echo "ok";
        break;
    case "reject":
        $msg=Citas::query()->where('id','=',$idm)->update([
            'estado'=>"RECHAZADO"
        ]);
        echo "ok";
        break;
}

?>