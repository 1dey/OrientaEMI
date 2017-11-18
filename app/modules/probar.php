<?php
require_once '../../vendor/autoload.php';
require_once '../database/database.php';
require_once '../models/Usuarios.php';
require_once '../models/Preguntas.php';
require_once '../models/Estudiantes.php';

$carr=Estudiantes::query()->where('ci','!=','0')->get();
echo $carr;

//$login_usuario=Usuarios::query()->where('email','=','admin@admin.com')->where('password','=','superadmin')->get();

//echo $login_usuario[0]["email"];


//$login_usuario=Usuarios::query()->where('email','=','deysi@gmail.com')->where('password','=','12157')->get();
//echo $login_usuario;
//$usuarios=$database::table('usuarios')->where('id','=',2)->get();
//echo $usuarios[0]->nombre;

//$usuarios=Usuarios::query()->get();
//d($usuarios);
/*
Usuarios::forceCreate([
    'nombre'=>'prueba2',
    'email'=>'prue@gmail.com',
    'password'=>'prok'
]);
*/
/*
    $user=Usuarios::create([
        'nombre'=>'prueba2',
        'email'=>'prue@gmail.com',
        'password'=>'prok'
    ]);
*/
/*
  $database::schema()->create('usuarios',function ($table){
      $table->increments('id');
      $table->string('nombre')->unique();
      $table->string('email')->unique();
      $table->string('password')->unique();
      $table->timestamps();
  })
*/

?>