<?php
    include_once 'requires.php';

    $action=$_POST['action'];

    switch ($action)
    {
        case "login":
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $result=login($email,$pass);
            echo $result;
            break;
        case "registerEstudiante":
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $ci=$_POST['ci'];
            $curso=$_POST['curso'];
            $gestion=$_POST['gestion'];
            $telefono=$_POST['telefono'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $genero=$_POST['genero'];
            $result=registerEstudiante(ucwords(strtolower($nombres)),ucwords(strtolower($apellidos)),$ci,$curso,$gestion,$telefono,$email,$pass,ucwords(strtolower($genero)));
            echo $result;
            break;
        case "registerPsicologo":
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $ci=$_POST['ci'];
            $telefono=$_POST['telefono'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $genero=$_POST['genero'];
            $result=registerPsicologo($nombres,$apellidos,$ci,$telefono,$email,$pass,$genero);
            echo $result;
            break;
        case "editUser":
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $ci=$_POST['ci'];
            $curso=$_POST['curso'];
            $gestion=$_POST['gestion'];
            $telefono=$_POST['telefono'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $genero=$_POST['genero'];
            $tipo=$_POST['tipo'];
            $id=$_POST['id'];
            $result=editUser($nombres,$apellidos,$ci,$curso,$gestion,$telefono,$email,$pass,$genero,$tipo,$id);
            echo $result;
            break;
        case "eliminar":
            $ci=$_POST['ci'];
            $result=remove($ci);
            echo $result;
            break;
    }

    function login($email,$pass)
    {
        $login_usuario=Usuarios::query()->where('email','=',$email)->where('password','=',$pass)->get();
        if($login_usuario[0]==null)
        {
            return "no";
        }
        else
        {
            //Inicio de variables de sesi�n
            if (!isset($_SESSION))
            {
                session_start();
            }
            $_SESSION['id'] = $login_usuario[0]["id"];
            $_SESSION['email'] = $login_usuario[0]["email"];
            $_SESSION['tipo'] = $login_usuario[0]["tipo"];
            return "ok";
        }
    }

    function remove($ci)
    {
        $persona=Personas::query()->where('ci','=',$ci)->get();
        Usuarios::query()->where('email','=',$persona[0]['email'])->delete();
        Personas::query()->where('ci','=',$ci)->delete();

        $check_usuario=Usuarios::query()->where('email','=',$persona[0]['email'])->get();
        $check_persona=Personas::query()->where('email','=',$persona[0]['email'])->get();
        if($check_usuario[0]==null && $check_persona[0]==null)
        {
            return "ok";
        }
        else
        {
            return "no";
        }
    }

    function registerEstudiante($nombres, $apellidos, $ci, $curso, $gestion, $telefono, $email, $pass, $genero)
    {
        $val_est=Personas::query()->where('ci','=',$ci)->get();
        $val_usu=Usuarios::query()->where('email','=',$email)->get();
        if($val_est[0]==null && $val_usu[0]==null)
        {
            $register_estudiante=Personas::create([
                'ci'=>$ci,
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'curso_paralelo'=>$curso,
                'gestion'=>$gestion,
                'telefono'=>$telefono,
                'email'=>$email,
                'password'=>$pass,
                'genero'=>$genero
            ]);

            $register_estudiante=Usuarios::create([
                'email'=>$email,
                'password'=>$pass,
                'fecha_creacion'=>date('Y-m-d H:i:s'),
                'tipo'=>1
            ]);

            return "ok";
        }
        return "no";
    }

    function registerPsicologo($nombres, $apellidos, $ci, $telefono, $email, $pass, $genero)
    {
        $val_est=Personas::query()->where('ci','=',$ci)->get();
        $val_usu=Usuarios::query()->where('email','=',$email)->get();
        if($val_est[0]==null && $val_usu[0]==null)
        {
            $register_usu=Personas::create([
                'ci'=>$ci,
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'curso_paralelo'=>'',
                'gestion'=>'',
                'telefono'=>$telefono,
                'email'=>$email,
                'password'=>$pass,
                'genero'=>$genero
            ]);

            $register_estudiante=Usuarios::create([
                'email'=>$email,
                'password'=>$pass,
                'fecha_creacion'=>date('Y-m-d H:i:s'),
                'tipo'=>0
            ]);

            return "ok";
        }
        return "no";
    }

    function editUser($nombres, $apellidos, $ci, $curso, $gestion, $telefono, $email, $pass, $genero, $tipo, $id)
    {
        if($tipo=="0")
        {
            $email_usu=Usuarios::query()->where('id','=',$id)->get();
            $past_email=$email_usu[0]["email"];
            $val_usu=Usuarios::query()->where('id','=',$id)->update([
                'email'=>$email,
                'password'=>$pass
            ]);
            $_SESSION['email'] = $email;

            $val_psi=Personas::query()->where('email','=',$past_email)->update([
                'ci'=>$ci,
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'telefono'=>$telefono,
                'email'=>$email,
                'password'=>$pass,
                'genero'=>$genero
            ]);

            $val_psi_ver=Personas::query()
                ->where('ci','=',$ci)
                ->where('nombres','=',$nombres)
                ->where('apellidos','=',$apellidos)
                ->where('telefono','=',$telefono)
                ->where('email','=',$email)
                ->where('password','=',$pass)
                ->where('genero','=',$genero)
                ->get();

            if($val_psi_ver[0]==null)
            {
                return "no";
            }
            else
            {
                return "ok";
            }
        }
        elseif ($tipo=="1")
        {
            $email_usu=Usuarios::query()->where('id','=',$id)->get();
            $past_email=$email_usu[0]["email"];
            $val_usu=Usuarios::query()->where('id','=',$id)->update([
                'email'=>$email,
                'password'=>$pass
            ]);

            $val_est=Personas::query()->where('email','=',$past_email)->update([
                'ci'=>$ci,
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'curso_paralelo'=>$curso,
                'gestion'=>$gestion,
                'telefono'=>$telefono,
                'email'=>$email,
                'password'=>$pass,
                'genero'=>$genero
            ]);

            $val_est_ver=Personas::query()->where('ci','=',$ci)
                                            ->where('nombres','=',$nombres)
                                            ->where('apellidos','=',$apellidos)
                                            ->where('curso_paralelo','=',$curso)
                                            ->where('gestion','=',$gestion)
                                            ->where('telefono','=',$telefono)
                                            ->where('email','=',$email)
                                            ->where('password','=',$pass)
                                            ->where('genero','=',$genero)
                                            ->get();

                if($val_est_ver[0]==null)
                {
                    return "no";
                }
                else
                {
                    return "ok";
                }
        }
    }
?>